<?php
/**
 * Language Manager
 *
 * Kullanım: t('nav.home') veya t('form.submit')
 */

session_start();

// Desteklenen diller
$supportedLanguages = ['en', 'tr', 'de', 'fr', 'ar', 'fa'];
$defaultLanguage = 'en';

// Dil seçimi kontrolü
// 1. URL path'inden dil kodunu al (örn: /fr/treatments/obesity)
$requestUri = $_SERVER['REQUEST_URI'] ?? '';
$urlLang = null;
if (preg_match('#^/(' . implode('|', $supportedLanguages) . ')(/|$)#', $requestUri, $matches)) {
    $urlLang = $matches[1];
}

// 2. Query parameter'dan dil kodunu al (örn: ?lang=fr) - backward compatibility
$queryLang = $_GET['lang'] ?? null;

// Dil öncelik sırası: URL path > Query parameter > Session > Browser default
if ($urlLang && in_array($urlLang, $supportedLanguages)) {
    $_SESSION['language'] = $urlLang;
} elseif ($queryLang && in_array($queryLang, $supportedLanguages)) {
    $_SESSION['language'] = $queryLang;
} elseif (!isset($_SESSION['language'])) {
    // Tarayıcı dilini algıla
    $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '', 0, 2);
    $_SESSION['language'] = in_array($browserLang, $supportedLanguages) ? $browserLang : $defaultLanguage;
}

$currentLang = $_SESSION['language'];

// Dil dosyasını yükle
$langFile = __DIR__ . '/languages/' . $currentLang . '.php';
if (file_exists($langFile)) {
    require_once $langFile;
} else {
    require_once __DIR__ . '/languages/' . $defaultLanguage . '.php';
}

/**
 * Translation helper function
 * @param string $key Örnek: 'nav.home' veya 'form.submit'
 * @return string
 */
function t($key) {
    global $lang;
    $keys = explode('.', $key);
    $value = $lang;

    foreach ($keys as $k) {
        if (isset($value[$k])) {
            $value = $value[$k];
        } else {
            return $key; // Key bulunamazsa anahtarı döndür
        }
    }

    return $value;
}

/**
 * Get current language
 */
function getCurrentLang() {
    global $currentLang;
    return $currentLang;
}

/**
 * Get all supported languages
 */
function getSupportedLanguages() {
    return [
        'en' => ['name' => 'English', 'flag' => '🇬🇧'],
        'tr' => ['name' => 'Türkçe', 'flag' => '🇹🇷'],
        'de' => ['name' => 'Deutsch', 'flag' => '🇩🇪'],
        'fr' => ['name' => 'Français', 'flag' => '🇫🇷'],
        'ar' => ['name' => 'العربية', 'flag' => '🇸🇦', 'rtl' => true],
        'fa' => ['name' => 'فارسی', 'flag' => '🇮🇷', 'rtl' => true],
    ];
}

/**
 * Check if current language is RTL
 */
function isRTL() {
    global $currentLang;
    $langs = getSupportedLanguages();
    return isset($langs[$currentLang]['rtl']) && $langs[$currentLang]['rtl'];
}

/**
 * Generate language-prefixed URL
 * @param string $path Path without language prefix (e.g., '/treatments/obesity')
 * @param string|null $lang Language code (if null, uses current language)
 * @return string Full URL with language prefix
 */
function langUrl($path = '/', $lang = null) {
    global $currentLang, $defaultLanguage;

    // Use current language if not specified
    if ($lang === null) {
        $lang = $currentLang;
    }

    // Ensure path starts with /
    if (!empty($path) && $path[0] !== '/') {
        $path = '/' . $path;
    }

    // For root path
    if ($path === '/' || empty($path)) {
        return '/' . $lang;
    }

    // Return language-prefixed URL
    return '/' . $lang . $path;
}

/**
 * Get language switcher HTML
 */
function getLanguageSwitcher() {
    global $supportedLanguages;
    $current = getCurrentLang();
    $languages = getSupportedLanguages();
    $currentUrl = $_SERVER['REQUEST_URI'];

    // Remove query parameters and get clean path
    $urlParts = parse_url($currentUrl);
    $path = $urlParts['path'] ?? '/';
    $queryString = isset($urlParts['query']) ? '?' . $urlParts['query'] : '';

    // Remove language prefix from path if exists
    $cleanPath = preg_replace('#^/(' . implode('|', $supportedLanguages) . ')(/|$)#', '/', $path);

    // If clean path is empty or just /, set it to /
    if (empty($cleanPath) || $cleanPath === '//') {
        $cleanPath = '/';
    }

    $html = '<div class="language-switcher">';
    $html .= '<button class="lang-current" id="langBtn">';
    $html .= '<span class="flag">' . $languages[$current]['flag'] . '</span>';
    $html .= '<span class="lang-name">' . $languages[$current]['name'] . '</span>';
    $html .= '<i class="fas fa-chevron-down"></i>';
    $html .= '</button>';
    $html .= '<div class="lang-dropdown" id="langDropdown">';

    foreach ($languages as $code => $lang) {
        if ($code !== $current) {
            // Build new URL with language prefix
            if ($cleanPath === '/') {
                $newUrl = '/' . $code;
            } else {
                $newUrl = '/' . $code . $cleanPath;
            }

            $html .= '<a href="' . $newUrl . $queryString . '" class="lang-option">';
            $html .= '<span class="flag">' . $lang['flag'] . '</span>';
            $html .= '<span>' . $lang['name'] . '</span>';
            $html .= '</a>';
        }
    }

    $html .= '</div>';
    $html .= '</div>';

    return $html;
}
