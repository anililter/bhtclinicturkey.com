<!DOCTYPE html>
<html lang="<?= getCurrentLang() ?>" dir="<?= isRTL() ? 'rtl' : 'ltr' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <meta name="description" content="<?= $pageDescription ?>">
    <meta name="keywords" content="<?= $pageKeywords ?>">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?= $pageTitle ?>">
    <meta property="og:description" content="<?= $pageDescription ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $config['site']['url'] ?>">
    <meta property="og:image" content="<?= $config['site']['url'] ?>/assets/images/og-image.jpg">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $pageTitle ?>">
    <meta name="twitter:description" content="<?= $pageDescription ?>">
    <meta name="twitter:image" content="<?= $config['site']['url'] ?>/assets/images/og-image.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= $config['site']['favicon'] ?>">
    <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/style.css?v=2.4">
    <link rel="stylesheet" href="/assets/css/responsive.css?v=1.6">
    <?php if (isRTL()): ?>
    <link rel="stylesheet" href="/assets/css/rtl.css?v=3.1">
    <?php endif; ?>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?php if (isRTL()): ?>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&family=Tajawal:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?php endif; ?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Dynamic CSS Variables -->
    <style>
        <?= getCssVariables() ?>
        <?php if (isRTL()): ?>
        :root {
            --font-primary: 'Cairo', 'Inter', sans-serif;
        }
        <?php endif; ?>
    </style>

    <!-- Google Analytics & Tracking -->
    <?php //echo $config['gtag_code'] ?>
    <?php //echo $config['gtag_conversion_code'] ?>
    <?php //echo $config['facebook_pixel_code'] ?>

    <!-- Canonical URL -->
    <link rel="canonical" href="<?= $config['site']['url'] . $_SERVER['REQUEST_URI'] ?>">

    <!-- Alternate Language Links -->
    <?php
    $currentPath = preg_replace('#^/(en|tr|de|fr|ar|fa)(/|$)#', '/', $_SERVER['REQUEST_URI']);
    $currentPath = strtok($currentPath, '?'); // Remove query string
    foreach (getSupportedLanguages() as $code => $langInfo):
    ?>
    <link rel="alternate" hreflang="<?= $code ?>" href="<?= $config['site']['url'] . langUrl($currentPath, $code) ?>">
    <?php endforeach; ?>
    
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NB6BLTJD');</script>
<!-- End Google Tag Manager -->

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NB6BLTJD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <!-- WhatsApp Floating Button -->
    <a onclick="return gtag_report_conversion('https://wa.me/<?= $config['contact']['whatsapp'] ?>')"
       href="https://wa.me/<?= $config['contact']['whatsapp'] ?>"
       class="whatsapp-btn"
       target="_blank"
       rel="noopener noreferrer"
       aria-label="WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Header Navigation -->
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <div class="nav-wrapper">
                    <!-- Logo -->
                    <a href="<?= langUrl('/') ?>" class="logo">
                            <img style="width: 140px;" src="/assets/images/bht_original_logo.png" alt="<?= $config['site']['name'] ?>" class="logo-img">
                    </a>

                    <!-- Desktop Navigation -->
                    <div class="nav-menu" id="navMenu">
                        <ul class="nav-list">
                            <li><a href="<?= langUrl('/') ?>" class="nav-link active"><?= t('nav.home') ?></a></li>

                            <?php if (count(getActiveTreatments()) > 1): ?>
                            <li class="dropdown">
                                <a href="#" class="nav-link">
                                    <?= t('nav.treatments') ?>
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach (getActiveTreatments() as $treatment): ?>
                                        <li>
                                            <a href="<?= langUrl('/treatments/' . (isset($treatment['slug']) ? $treatment['slug'] : $treatment['key'])) ?>">
                                                <i class="fas <?= $treatment['icon'] ?>"></i>
                                                <?= isset(t('treatments')[$treatment['key']]) ? t('treatments')[$treatment['key']]['name'] : $treatment['name'] ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <?php endif; ?>

                            <li><a href="<?= langUrl('/hakkimizda') ?>" class="nav-link"><?= t('nav.about') ?></a></li>
                            <li><a href="<?= langUrl('/surec') ?>" class="nav-link"><?= t('nav.process') ?></a></li>
                            <li><a href="<?= langUrl('/sss') ?>" class="nav-link"><?= t('nav.faq') ?></a></li>
                            <li><a href="<?= langUrl('/iletisim') ?>" class="nav-link"><?= t('nav.contact') ?></a></li>
                        </ul>
                    </div>

                    <!-- CTA Actions -->
                    <div class="nav-actions">
                        <!-- Language Switcher -->
                        <?= getLanguageSwitcher() ?>

                        <a onclick="return gtag_report_conversion('tel:<?= str_replace(' ', '', $config['contact']['phone']) ?>')"
                           href="tel:<?= str_replace(' ', '', $config['contact']['phone']) ?>"
                           class="phone-btn">
                            <i class="fas fa-phone"></i>
                            <span><?= $config['contact']['phone_formatted'] ?></span>
                        </a>

                        <button class="cta-btn" onclick="openConsultationForm()">
                            <?= t('nav.get_consultation') ?>
                        </button>

                        <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
