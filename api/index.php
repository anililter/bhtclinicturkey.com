<?php
/**
 * Vercel Serverless PHP Router
 * Routes requests to the correct PHP file in the root folder
 */

// Get the requested URI path
$uri = $_SERVER['REQUEST_URI'] ?? '/';
// Remove query string if any
$path = parse_url($uri, PHP_URL_PATH);

// Supported languages
$supportedLanguages = ['en', 'tr', 'de', 'fr', 'ar', 'fa'];

// Normalize path (remove leading/trailing slashes)
$cleanPath = trim($path, '/');

// Check for language prefix
$lang = null;
$parts = explode('/', $cleanPath);
if (!empty($parts[0]) && in_array($parts[0], $supportedLanguages)) {
    $lang = $parts[0];
    array_shift($parts); // Remove the language prefix from the path parts
    $cleanPath = implode('/', $parts);
}

// Redirects mapping (from .htaccess)
$redirects = [
    // Turkish Treatment URLs
    'tedavi/rinoplasti' => 'treatments/rhinoplasty',
    'tedavi/sac-ekimi' => 'treatments/hair-transplant',
    'tedavi/goz-lazeri' => 'treatments/eye-laser',
    'tedavi/dis-tedavisi' => 'treatments/dental',
    'tedavi/estetik' => 'treatments/aesthetic',
    'tedavi/obezite' => 'treatments/obesity',

    // English Treatment URLs
    'treatment/rhinoplasty' => 'treatments/rhinoplasty',
    'treatment/hair-transplant' => 'treatments/hair-transplant',
    'treatment/eye-laser' => 'treatments/eye-laser',
    'treatment/dental' => 'treatments/dental',
    'treatment/aesthetic' => 'treatments/aesthetic',
    'treatment/obesity' => 'treatments/obesity',

    // German Treatment URLs
    'behandlung/nasenkorrektur' => 'treatments/rhinoplasty',
    'behandlung/haartransplantation' => 'treatments/hair-transplant',
    'behandlung/augenlaser' => 'treatments/eye-laser',
    'behandlung/zahnbehandlung' => 'treatments/dental',
    'behandlung/aesthetische-chirurgie' => 'treatments/aesthetic',
    'behandlung/adipositas' => 'treatments/obesity',

    // French Treatment URLs
    'traitement/rhinoplastie' => 'treatments/rhinoplasty',
    'traitement/greffe-cheveux' => 'treatments/hair-transplant',
    'traitement/laser-oculaire' => 'treatments/eye-laser',
    'traitement/dentaire' => 'treatments/dental',
    'traitement/esthetique' => 'treatments/aesthetic',
    'traitement/obesite' => 'treatments/obesity',
];

// Check if current cleanPath needs redirection
if (isset($redirects[$cleanPath])) {
    $target = $redirects[$cleanPath];
    $redirectUrl = '/' . ($lang ? $lang . '/' : '') . $target;
    header("Location: " . $redirectUrl, true, 301);
    exit;
}

// Map cleanPath to the actual target PHP file in root folder
if (empty($cleanPath)) {
    $targetFile = 'index.php';
} else {
    // If it has a .php extension, use it, otherwise append .php
    if (pathinfo($cleanPath, PATHINFO_EXTENSION) === 'php') {
        $targetFile = $cleanPath;
    } else {
        $targetFile = $cleanPath . '.php';
    }
}

$absoluteTargetFile = dirname(__DIR__) . '/' . $targetFile;

if (file_exists($absoluteTargetFile) && is_file($absoluteTargetFile)) {
    // Change directory to the root directory so that relative paths in includes work correctly
    chdir(dirname(__DIR__));
    
    // Set server variables so PHP application behaves correctly
    $_SERVER['SCRIPT_FILENAME'] = $absoluteTargetFile;
    $_SERVER['SCRIPT_NAME'] = '/' . $targetFile;
    $_SERVER['PHP_SELF'] = '/' . $targetFile;
    
    // Load the file
    require $absoluteTargetFile;
} else {
    // Return 404 if file does not exist
    header("HTTP/1.1 404 Not Found");
    echo "<h1>404 Not Found</h1>";
    echo "<p>The requested page was not found on this server.</p>";
}
