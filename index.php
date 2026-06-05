<?php
/**
 * HEC TURKEY - Ana Sayfa
 * Multi-Language Support
 */

// Dil sistemini yükle
require_once 'lang.php';

// Config dosyasını yükle
require_once 'config.php';

// İlk aktif tedaviyi al
$activeTreatments = getActiveTreatments();
$currentTreatment = !empty($activeTreatments) ? $activeTreatments[0] : null;

// SEO değişkenleri - Anasayfa için genel sağlık turizmi bilgileri
$pageTitle = t('meta.home_title');
$pageDescription = t('meta.home_description');
$pageKeywords = t('meta.home_keywords');

// Komponentleri dahil et
require_once 'includes/header.php';
require_once 'includes/home.php';
require_once 'includes/footer.php';
?>
