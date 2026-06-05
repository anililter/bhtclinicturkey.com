<?php
/**
 * Form Submission Handler
 *
 * Bu dosya consultation form'dan gelen verileri işler
 * Email gönderir ve veritabanına kaydeder (opsiyonel)
 */

// Security headers
header('Content-Type: application/json');
header('X-Content-Type-Options: nosniff');

// Config ve dil sistemini yükle
require_once 'config.php';
require_once 'lang.php';

// CSRF Protection (opsiyonel - production'da aktif edin)
// session_start();
// if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
//     die(json_encode(['status' => 'error', 'message' => 'Invalid CSRF token']));
// }

// Sadece POST isteklerini kabul et
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die(json_encode(['status' => 'error', 'message' => 'Method not allowed']));
}

// Rate limiting (basit - production'da Redis/Memcached kullanın)
session_start();
$ip = $_SERVER['REMOTE_ADDR'];
$current_time = time();
$timeout = 60; // 60 saniye

if (isset($_SESSION['last_submit_time']) && ($current_time - $_SESSION['last_submit_time']) < $timeout) {
    http_response_code(429);
    die(json_encode([
        'status' => 'error',
        'message' => t('form.error_message') ?: 'Please wait before submitting again.'
    ]));
}

// Form verilerini al ve temizle
$data = [
    'name' => htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8'),
    'phone' => htmlspecialchars(trim($_POST['phone'] ?? ''), ENT_QUOTES, 'UTF-8'),
    'email' => filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL),
    'weight' => !empty($_POST['weight']) ? (int)$_POST['weight'] : null,
    'height' => !empty($_POST['height']) ? (int)$_POST['height'] : null,
    'treatment' => htmlspecialchars(trim($_POST['treatment'] ?? ''), ENT_QUOTES, 'UTF-8'),
    'message' => htmlspecialchars(trim($_POST['message'] ?? ''), ENT_QUOTES, 'UTF-8'),
    'bmi' => !empty($_POST['bmi']) ? (float)$_POST['bmi'] : null,
    'language' => getCurrentLang(),
    'ip_address' => $ip,
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? '',
    'submitted_at' => date('Y-m-d H:i:s'),
];

// Validation
$errors = [];

if (empty($data['name']) || strlen($data['name']) < 2) {
    $errors[] = 'Name is required (minimum 2 characters)';
}

if (empty($data['phone']) || strlen(preg_replace('/\D/', '', $data['phone'])) < 10) {
    $errors[] = 'Valid phone number is required (minimum 10 digits)';
}

if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Valid email address is required';
}

if (empty($data['treatment'])) {
    $errors[] = 'Treatment type is required';
}

// BMI hesaplama (weight ve height varsa)
if ($data['weight'] && $data['height']) {
    $height_m = $data['height'] / 100;
    $data['bmi'] = round($data['weight'] / ($height_m * $height_m), 1);
}

if (!empty($errors)) {
    http_response_code(400);
    die(json_encode([
        'status' => 'error',
        'message' => implode(', ', $errors)
    ]));
}

// Email gönderme fonksiyonu
function sendEmail($to, $subject, $message, $headers) {
    // PHPMailer kullanımı önerilir (production için)
    // Şimdilik basit mail() kullanıyoruz
    return mail($to, $subject, $message, $headers);
}

// Admin'e bildirim emaili
if ($config['form']['enable_email_notification']) {
    $to = $config['form']['notification_email'];
    $subject = "[{$config['site']['name']}] New Consultation Request - {$data['name']}";

    $message = "New consultation request received:\n\n";
    $message .= "Name: {$data['name']}\n";
    $message .= "Phone: {$data['phone']}\n";
    $message .= "Email: {$data['email']}\n";
    $message .= "Treatment: {$data['treatment']}\n";

    if ($data['weight']) {
        $message .= "Weight: {$data['weight']} kg\n";
    }

    if ($data['height']) {
        $message .= "Height: {$data['height']} cm\n";
    }

    if ($data['bmi']) {
        $message .= "BMI: {$data['bmi']}\n";
    }

    if ($data['message']) {
        $message .= "Message: {$data['message']}\n";
    }

    $message .= "\nLanguage: {$data['language']}\n";
    $message .= "IP: {$data['ip_address']}\n";
    $message .= "Date: {$data['submitted_at']}\n";

    $headers = "From: noreply@{$_SERVER['HTTP_HOST']}\r\n";
    $headers .= "Reply-To: {$data['email']}\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    sendEmail($to, $subject, $message, $headers);
}

// Kullanıcıya teşekkür emaili (opsiyonel)
// if (file_exists('email-templates/' . $data['language'] . '/thank-you.html')) {
//     $template = file_get_contents('email-templates/' . $data['language'] . '/thank-you.html');
//     $template = str_replace('{{name}}', $data['name'], $template);
//     // ... email gönder
// }

// Veritabanına kaydet (opsiyonel)
/*
try {
    $pdo = new PDO("mysql:host=localhost;dbname=hecturkey", "username", "password");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("
        INSERT INTO consultation_requests
        (name, phone, email, weight, height, treatment, message, bmi, language, ip_address, user_agent, created_at)
        VALUES
        (:name, :phone, :email, :weight, :height, :treatment, :message, :bmi, :language, :ip, :ua, NOW())
    ");

    $stmt->execute([
        ':name' => $data['name'],
        ':phone' => $data['phone'],
        ':email' => $data['email'],
        ':weight' => $data['weight'],
        ':height' => $data['height'],
        ':treatment' => $data['treatment'],
        ':message' => $data['message'],
        ':bmi' => $data['bmi'],
        ':language' => $data['language'],
        ':ip' => $data['ip_address'],
        ':ua' => $data['user_agent'],
    ]);

    $lead_id = $pdo->lastInsertId();
} catch (PDOException $e) {
    error_log("Database error: " . $e->getMessage());
    // Veritabanı hatası olsa bile form başarılı sayılsın (email gitti)
}
*/

// CRM entegrasyonu (opsiyonel)
/*
// Örnek: HubSpot, Salesforce, Zoho CRM vb.
$crm_data = [
    'firstname' => explode(' ', $data['name'])[0],
    'lastname' => explode(' ', $data['name'])[1] ?? '',
    'email' => $data['email'],
    'phone' => $data['phone'],
    'treatment_interest' => $data['treatment'],
    // ...
];

// CRM API çağrısı yap
*/

// Session'a kaydet (tekrar gönderim önleme için)
$_SESSION['last_submit_time'] = $current_time;
$_SESSION['last_form_data'] = $data;

// Başarılı response
echo json_encode([
    'status' => 'success',
    'message' => t('form.success_message') ?: 'Form submitted successfully!',
    'redirect' => $config['form']['thank_you_page'] ?: '/thank-you.php',
    'data' => [
        'name' => $data['name'],
        'email' => $data['email'],
    ]
]);

exit;
