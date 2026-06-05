<?php
/**
 * Thank You Page - Consultation Form Success
 * Multi-Language Support
 */

// Dil sistemini yükle
require_once 'lang.php';

// Config dosyasını yükle
require_once 'config.php';

// Aktif dile göre URL yönlendirmesi
$requestUri = $_SERVER['REQUEST_URI'] ?? '';
$currentLang = $_SESSION['language'] ?? 'tr';

// Eğer URL'de dil prefix'i yoksa, aktif dile göre yönlendir
if (!preg_match('#^/(en|tr|de|fr|ar|fa)/#', $requestUri)) {
    $newUrl = langUrl('/thank-you');
    header('Location: ' . $newUrl, true, 302);
    exit;
}

// SEO değişkenleri
$pageTitle = t('thank_you.title') . ' - ' . $config['site']['name'];
$pageDescription = t('thank_you.message');
$pageKeywords = t('meta.home_keywords');

// Header'ı dahil et
require_once 'includes/header.php';
?>

<!-- Thank You Section -->
<section class="thank-you-section">
    <div class="container">
        <div class="thank-you-content">
            <!-- Success Icon -->
            <div class="success-icon">
                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="50" cy="50" r="50" fill="var(--primary-color)" fill-opacity="0.1"/>
                    <circle cx="50" cy="50" r="40" fill="var(--primary-color)"/>
                    <path d="M35 50L45 60L65 40" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>

            <!-- Thank You Message -->
            <h1 class="thank-you-title">
                <?= t('thank_you.title') ?>
            </h1>

            <p class="thank-you-message">
                <?= t('thank_you.message') ?>
            </p>

            <!-- What's Next Section -->
            <div class="whats-next">
                <h2><?= t('thank_you.what_next') ?></h2>

                <div class="next-steps">
                    <div class="step-card">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <div class="step-icon">
                                <i class="fas fa-file-medical"></i>
                            </div>
                            <p><?= t('thank_you.step1') ?></p>
                        </div>
                    </div>

                    <div class="step-card">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <div class="step-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <p><?= t('thank_you.step2') ?></p>
                        </div>
                    </div>

                    <div class="step-card">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <div class="step-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <p><?= t('thank_you.step3') ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="thank-you-actions">
                <a href="<?= langUrl('/') ?>" class="contact-btn phone-contact">
                    <i class="fas fa-home"></i>
                    <?= t('thank_you.back_home') ?>
                </a>

                <?php if (count(getActiveTreatments()) > 0): ?>
                <a href="<?= langUrl('/') ?>#tedaviler" class="contact-btn phone-contact">
                    <i class="fas fa-stethoscope"></i>
                    <?= t('thank_you.browse_treatments') ?>
                </a>
                <?php endif; ?>
            </div>

            <!-- Contact Options -->
            <div class="contact-options">
                <p class="contact-text">
                    <?= t('thank_you.immediate_contact') ?>
                </p>

                <div class="contact-buttons">
                    <a onclick="return gtag_report_conversion('tel:<?= str_replace(' ', '', $config['contact']['phone']) ?>')"
                       href="tel:<?= str_replace(' ', '', $config['contact']['phone']) ?>"
                       class="contact-btn phone-contact">
                        <i class="fas fa-phone"></i>
                        <span><?= $config['contact']['phone_formatted'] ?></span>
                    </a>

                    <a onclick="return gtag_report_conversion('https://wa.me/<?= $config['contact']['whatsapp'] ?>')"
                       href="https://wa.me/<?= $config['contact']['whatsapp'] ?>"
                       class="contact-btn whatsapp-contact"
                       target="_blank"
                       rel="noopener noreferrer">
                        <i class="fab fa-whatsapp"></i>
                        <span>WhatsApp</span>
                    </a>

                    <?php if (!empty($config['contact']['email'])): ?>
                    <a href="mailto:<?= $config['contact']['email'] ?>"
                       class="contact-btn email-contact">
                        <i class="fas fa-envelope"></i>
                        <span><?= $config['contact']['email'] ?></span>
                    </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Social Proof -->
            <div class="thank-you-stats">
                <?php foreach (getActiveStatistics() as $stat): ?>
                <div class="stat-item">
                    <i class="fas <?= $stat['icon'] ?>"></i>
                    <div class="stat-value"><?= $stat['value'] ?></div>
                    <div class="stat-label"><?= t('stats')[$stat['key']] ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Add Custom Styles for Thank You Page -->
<style>
.thank-you-section {
    min-height: calc(100vh - 80px);
    padding: 100px 0 80px;
    background: linear-gradient(135deg, var(--primary-light) 0%, var(--white) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
}

.thank-you-content {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

.success-icon {
    margin: 0 auto 30px;
    animation: scaleIn 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
}

@keyframes scaleIn {
    0% {
        transform: scale(0);
        opacity: 0;
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}

.thank-you-title {
    font-size: 3rem;
    font-weight: 800;
    color: var(--primary-color);
    margin-bottom: 20px;
    animation: fadeInUp 0.8s ease 0.2s both;
}

.thank-you-message {
    font-size: 1.25rem;
    color: var(--text-secondary);
    margin-bottom: 50px;
    line-height: 1.8;
    animation: fadeInUp 0.8s ease 0.3s both;
}

.whats-next {
    background: var(--white);
    border-radius: 20px;
    padding: 40px;
    margin-bottom: 40px;
    box-shadow: var(--shadow-md);
    animation: fadeInUp 0.8s ease 0.4s both;
}

.whats-next h2 {
    font-size: 1.75rem;
    color: var(--text-primary);
    margin-bottom: 30px;
}

.next-steps {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 30px;
}

.step-card {
    position: relative;
    padding: 25px;
    border-radius: 15px;
    background: var(--primary-light);
    border: 2px solid transparent;
    transition: all 0.3s ease;
}

.step-card:hover {
    border-color: var(--primary-color);
    transform: translateY(-5px);
}

.step-number {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 40px;
    height: 40px;
    background: var(--primary-color);
    color: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1.25rem;
    box-shadow: var(--shadow-md);
}

.step-content {
    margin-top: 20px;
}

.step-icon {
    font-size: 2rem;
    color: var(--primary-color);
    margin-bottom: 15px;
}

.step-card p {
    color: var(--text-secondary);
    line-height: 1.6;
}

.thank-you-actions {
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-bottom: 50px;
    animation: fadeInUp 0.8s ease 0.5s both;
}

.thank-you-actions .btn {
    padding: 15px 35px;
    font-size: 1.1rem;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.contact-options {
    background: var(--white);
    border-radius: 15px;
    padding: 30px;
    margin-bottom: 40px;
    animation: fadeInUp 0.8s ease 0.6s both;
}

.contact-text {
    font-size: 1.1rem;
    color: var(--text-secondary);
    margin-bottom: 20px;
}

.contact-buttons {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}

.contact-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 25px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.phone-contact {
    background: var(--primary-color);
    color: var(--white);
}

.phone-contact:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
}

.whatsapp-contact {
    background: #25D366;
    color: var(--white);
}

.whatsapp-contact:hover {
    background: #20ba5a;
    transform: translateY(-2px);
}

.email-contact {
    background: var(--secondary-color);
    color: var(--white);
}

.email-contact:hover {
    background: var(--secondary-dark);
    transform: translateY(-2px);
}

.thank-you-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 30px;
    padding: 30px;
    background: var(--white);
    border-radius: 15px;
    animation: fadeInUp 0.8s ease 0.7s both;
}

.stat-item {
    text-align: center;
}

.stat-item i {
    font-size: 2rem;
    color: var(--primary-color);
    margin-bottom: 10px;
}

.stat-value {
    font-size: 2rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 5px;
}

.stat-label {
    font-size: 0.9rem;
    color: var(--text-secondary);
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* RTL Support */
[dir="rtl"] .step-number {
    left: auto;
    right: 50%;
    transform: translateX(50%);
}

/* Responsive */
@media (max-width: 768px) {
    .thank-you-section {
        padding: 60px 0 40px;
    }

    .thank-you-title {
        font-size: 2rem;
    }

    .thank-you-message {
        font-size: 1.1rem;
    }

    .whats-next {
        padding: 25px;
    }

    .next-steps {
        grid-template-columns: 1fr;
    }

    .thank-you-actions {
        flex-direction: column;
        gap: 15px;
    }

    .thank-you-actions .btn {
        width: 100%;
        justify-content: center;
    }

    .contact-buttons {
        flex-direction: column;
    }

    .contact-btn {
        width: 100%;
        justify-content: center;
    }

    .thank-you-stats {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        padding: 20px;
    }
}

@media (max-width: 576px) {
    .success-icon svg {
        width: 80px;
        height: 80px;
    }

    .thank-you-title {
        font-size: 1.75rem;
    }

    .thank-you-stats {
        grid-template-columns: 1fr;
    }
}
</style>

<?php
// Footer'ı dahil et
require_once 'includes/footer.php';
?>
