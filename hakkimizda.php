<?php
// Dil sistemini yükle
require_once 'lang.php';

// Config dosyasını yükle
require_once 'config.php';

// Page configuration
$pageTitle = t('about.title') . ' - ' . $config['site']['name'];
$pageDescription = t('about.subtitle');
$pageKeywords = 'health tourism, medical tourism, JCI accredited hospital, healthcare services';

// Include header
require_once 'includes/header.php';
?>

<style>
    /* Page Hero */
    .page-hero {
        background: linear-gradient(135deg, var(--gray-100) 0%, var(--gray-200) 100%);
        padding: 40px 0 60px;
    }

    .breadcrumb {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
        font-size: 0.875rem;
    }

    .breadcrumb a {
        color: var(--gray-600);
        transition: var(--transition);
    }

    .breadcrumb a:hover {
        color: var(--primary-color);
    }

    .breadcrumb i {
        color: var(--gray-400);
        font-size: 0.75rem;
    }

    .page-hero h1 {
        font-size: 2.5rem;
        margin-bottom: 15px;
    }

    /* About Section */
    .about-section {
        padding: 80px 0 0 0;
    }

    .about-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
        margin-bottom: 80px;
    }

    .about-text h2 {
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .about-text p {
        font-size: 1.125rem;
        line-height: 1.8;
        color: var(--gray-600);
        margin-bottom: 20px;
    }

    .about-image {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--shadow-xl);
    }

    .about-image img {
        width: 100%;
        height: auto;
    }

    .about-badge {
        position: absolute;
        bottom: 30px;
        left: 30px;
        background-color: var(--white);
        padding: 20px 30px;
        border-radius: 15px;
        box-shadow: var(--shadow-lg);
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .about-badge i {
        font-size: 2rem;
        color: var(--primary-color);
    }

    .about-badge div h4 {
        font-size: 1.5rem;
        margin-bottom: 5px;
    }

    .about-badge div p {
        font-size: 0.875rem;
        color: var(--gray-600);
        margin: 0;
    }

    /* Values Section */
    .values-section {
        background-color: var(--gray-100);
        padding: 80px 0;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-top: 50px;
    }

    .value-card {
        background-color: var(--white);
        padding: 40px 30px;
        border-radius: 20px;
        text-align: center;
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .value-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: var(--gradient-primary);
        transform: scaleX(0);
        transition: var(--transition);
    }

    .value-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-xl);
    }

    .value-card:hover::before {
        transform: scaleX(1);
    }

    .value-icon {
        width: 80px;
        height: 80px;
        background: rgba(0, 102, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        font-size: 2rem;
        color: var(--primary-color);
    }

    .value-card h3 {
        font-size: 1.25rem;
        margin-bottom: 15px;
    }

    .value-card p {
        color: var(--gray-600);
        line-height: 1.6;
    }

    /* Mission Vision */
    .mission-vision {
        padding: 80px 0;
    }

    .mv-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        margin-top: 50px;
    }

    .mv-card {
        background: var(--gradient-primary);
        color: var(--white);
        padding: 50px;
        border-radius: 20px;
        position: relative;
        overflow: hidden;
    }

    .mv-card h3 {
        font-size: 2rem;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        color: var(--white);
    }

    .mv-card i {
        font-size: 2.5rem;
        opacity: 0.8;
    }

    .mv-card p {
        font-size: 1.125rem;
        line-height: 1.8;
        opacity: 0.95;
    }

    .mv-card::after {
        content: '';
        position: absolute;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        bottom: -100px;
        right: -100px;
    }

    /* CTA Section */
    .page-cta {
        background: var(--gradient-primary);
        padding: 80px 0;
        text-align: center;
    }

    .page-cta h2 {
        color: var(--white);
        margin-bottom: 20px;
    }

    .page-cta p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.25rem;
        margin-bottom: 30px;
    }

    .cta-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-white {
        background: var(--white);
        color: var(--primary-color);
    }

    .btn-white:hover {
        background: var(--gray-100);
        color: var(--primary-color);
    }

    .btn-outline {
        background: transparent;
        color: var(--white);
        border: 2px solid var(--white);
    }

    .btn-outline:hover {
        background: var(--white);
        color: var(--primary-color);
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .about-content {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .values-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .mv-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .page-hero h1 {
            font-size: 2rem;
        }

        .about-text h2 {
            font-size: 1.75rem;
        }

        .values-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <nav class="breadcrumb">
                <a href="<?= langUrl('/') ?>"><?= t('nav.home') ?></a>
                <i class="fas fa-chevron-right"></i>
                <span><?= t('about.title') ?></span>
            </nav>
            <h1><?= $config['site']['name'] ?> <span class="gradient-text"><?= t('about.subtitle') ?></span></h1>
            <p><?= t('about.subtitle') ?></p>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2><?= t('about.intro_title') ?></h2>
                <p><?= t('about.intro_text_1') ?></p>
                <p><?= t('about.intro_text_2') ?></p>
                <p><?= t('about.intro_text_3') ?></p>
            </div>

            <div class="about-image">
                <img src="/assets/images/hospital.webp" alt="<?= $config['site']['name'] ?>">
                <div class="about-badge">
                    <i class="fas fa-award"></i>
                    <div>
                        <h4>JCI</h4>
                        <p><?= t('common.accredited') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="values-section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><?= t('nav.about') ?></span>
            <h2 class="section-title"><?= t('about.values_title') ?></h2>
        </div>

        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h3><?= t('about.value1_title') ?></h3>
                <p><?= t('about.value1_desc') ?></p>
            </div>

            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3><?= t('about.value2_title') ?></h3>
                <p><?= t('about.value2_desc') ?></p>
            </div>

            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-microscope"></i>
                </div>
                <h3><?= t('about.value3_title') ?></h3>
                <p><?= t('about.value3_desc') ?></p>
            </div>

            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3><?= t('about.value4_title') ?></h3>
                <p><?= t('about.value4_desc') ?></p>
            </div>

            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3><?= t('about.value5_title') ?></h3>
                <p><?= t('about.value5_desc') ?></p>
            </div>

            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3><?= t('about.value6_title') ?></h3>
                <p><?= t('about.value6_desc') ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Mission Vision -->
<section class="mission-vision">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><?= t('common.our_mission') ?></span>
            <h2 class="section-title"><?= t('about.mission_title') ?> <?= t('common.and') ?> <?= t('about.vision_title') ?></h2>
        </div>

        <div class="mv-grid">
            <div class="mv-card">
                <h3><i class="fas fa-bullseye"></i> <?= t('common.our_mission') ?></h3>
                <p><?= t('about.mission_text') ?></p>
            </div>

            <div class="mv-card">
                <h3><i class="fas fa-eye"></i> <?= t('common.our_vision') ?></h3>
                <p><?= t('about.vision_text') ?></p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="page-cta">
    <div class="container">
        <h2><?= t('cta.title') ?></h2>
        <p><?= t('cta.subtitle') ?></p>
        <div class="cta-buttons">
            <button class="btn btn-white" onclick="openConsultationForm()">
                <i class="fas fa-comments"></i>
                <?= t('nav.get_consultation') ?>
            </button>
            <a onclick="return gtag_report_conversion('tel:<?= str_replace(' ', '', $config['contact']['phone']) ?>')"
               href="tel:<?= str_replace(' ', '', $config['contact']['phone']) ?>"
               class="btn btn-outline">
                <i class="fas fa-phone"></i>
                <?= $config['contact']['phone_formatted'] ?>
            </a>
        </div>
    </div>
</section>

<?php
// Include footer
require_once 'includes/footer.php';
?>
