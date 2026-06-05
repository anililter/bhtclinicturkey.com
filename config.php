<?php
/**
 * ====================================================
 * BHT Clinic Turkey - SAĞLIK TURİZMİ LANDING PAGE
 * Ana Konfigürasyon Dosyası
 * ====================================================
 *
 * Bu dosyayı düzenleyerek tüm site ayarlarını kontrol edebilirsiniz.
 */

// ====================================================
// FİRMA BİLGİLERİ
// ====================================================

$config = [
    'site' => [
        'name' => 'BHT Clinic Turkey',
        'slogan' => 'Sağlıklı Yaşam İçin Güvenilir Adresiniz',
        'logo' => '/assets/images/bht_original_logo.png',  // Logo dosya yolu
        'favicon' => '/assets/icons/favicon.ico',
        'language' => 'tr',
        'url' => 'https://bhtclinicturkey.com',
    ],

    // ====================================================
    // İLETİŞİM BİLGİLERİ
    // ====================================================
    'contact' => [
        'phone' => '+90 538 042 11 70',
        'phone_formatted' => '+90 538 042 11 70',
        'whatsapp' => '905380421170',  // Ülke kodu ile, başında + olmadan
        'email' => 'info@bhtclinicturkey.com',
        'address' => 'ATATÜRK MAH. AŞİNA SOK. NO:38/2 KÜÇÜKÇEKMECE ISTANBUL',
        'working_hours' => '7/24 Hasta Desteği',
        'maps_embed' => '', // Google Maps iframe embed kodu
    ],

    // ====================================================
    // SOSYAL MEDYA LİNKLERİ
    // ====================================================
    'social' => [
        'facebook' => 'https://www.facebook.com/profile.php?id=100091484198529',
        'instagram' => 'https://instagram.com/bhtclinicinternational',
        'twitter' => '',
        'youtube' => '',
        'linkedin' => '',
        'tiktok' => '',  // Boş bırakırsanız gösterilmez
    ],

    // ====================================================
    // RENK AYARLARI (CSS Variables)
    // ====================================================
    'colors' => [
        'primary' => '#e90c2b',      // Ana renk
        'secondary' => '#e90c2b',    // İkincil renk
        'success' => '#00C851',      // Başarı rengi
        'danger' => '#e90c2b',       // Hata/Uyarı rengi
        'warning' => '#FFBB33',      // Dikkat rengi
        'dark' => '#1A1A2E',         // Koyu renk
        'light' => '#F5F5F5',        // Açık renk
    ],

  
    // ====================================================
    // AKREDİTASYONLAR VE SERTİFİKALAR
    // ====================================================
    'certifications' => [
        [
            'key' => 'jci',
            'logo' => '/assets/images/certificates/jci.webp',
            'active' => true,
        ],
        [
            'key' => 'leed_gold',
            'logo' => '/assets/images/certificates/leed-gold.webp',
            'active' => true,
        ],
        [
            'key' => 'temos',
            'logo' => '/assets/images/certificates/temos.webp',
            'active' => true,
        ],
        [
            'key' => 'turquality',
            'logo' => '/assets/images/certificates/turquality.webp',
            'active' => true,
        ],
        [
            'key' => 'efqm',
            'logo' => '/assets/images/certificates/efqm.webp',
            'active' => true,
        ],
    ],

    // ====================================================
    // İSTATİSTİKLER (Hero Bölümü)
    // ====================================================
    'statistics' => [
        [
            'key' => 'happy_patients',
            'number' => '10000+',
            'icon' => 'fa-users',
            'active' => true,
        ],
        [
            'key' => 'success_rate',
            'number' => '98%',
            'icon' => 'fa-chart-line',
            'active' => true,
        ],
        [
            'key' => 'years_experience',
            'number' => '15+',
            'icon' => 'fa-award',
            'active' => true,
        ],
        [
            'key' => 'patient_support',
            'number' => '24/7',
            'icon' => 'fa-headset',
            'active' => true,
        ],
    ],

    // ====================================================
    // HİZMETLER / TEDAVİLER
    // ====================================================
    // Her tedavi için 'active' => true yaparak aktifleştirebilirsiniz

    'treatments' => [
        'obesity' => [
            'active' => true,
            'key' => 'obesity',
            'slug' => 'obesity',
            'icon' => 'fa-weight-scale',
        ],

        'rhinoplasty' => [
            'active' => true,
            'key' => 'rhinoplasty',
            'slug' => 'rhinoplasty',
            'icon' => 'fa-user-nurse',
        ],

        'hair_transplant' => [
            'active' => true,
            'key' => 'hair_transplant',
            'slug' => 'hair-transplant',
            'icon' => 'fa-scissors',
        ],

        'eye_laser' => [
            'active' => true,
            'key' => 'eye_laser',
            'slug' => 'eye-laser',
            'icon' => 'fa-eye',
      
        ],

        'dental' => [
            'active' => true,
            'key' => 'dental',
            'slug' => 'dental',
            'icon' => 'fa-tooth',
       
        ],

        'aesthetic' => [
            'active' => true,
            'key' => 'aesthetic',
            'slug' => 'aesthetic',
            'icon' => 'fa-spa'
          ],
    ],

    // ====================================================
    // FORM AYARLARI
    // ====================================================
    'form' => [
        'submit_url' => '/submit-form.php',  // Form gönderme URL'i
        'thank_you_page' => '/tesekkur',     // Form sonrası yönlendirme
        'notification_email' => 'bilgi@bhtclinicturkey.com',  // Form bildirim e-postası
        'enable_email_notification' => true,
        'enable_sms_notification' => false,
    ],

];

// ====================================================
// YARDIMCI FONKSİYONLAR
// ====================================================

/**
 * Aktif tedavileri getir
 */
function getActiveTreatments() {
    global $config;
    $active = [];
    foreach ($config['treatments'] as $key => $treatment) {
        if ($treatment['active']) {
            $treatment['key'] = $key;
            // Add name, short_desc and features from language file
            if (isset(t('treatments')[$key])) {
                $treatment['name'] = t('treatments')[$key]['name'] ?? '';
                $treatment['short_desc'] = t('treatments')[$key]['short_desc'] ?? '';
                $treatment['features'] = t('treatments')[$key]['features'] ?? [];
            }
            $active[] = $treatment;
        }
    }
    return $active;
}

/**
 * Belirli bir tedaviyi getir
 */
function getTreatment($key) {
    global $config;
    if (!isset($config['treatments'][$key])) {
        return null;
    }

    $treatment = $config['treatments'][$key];

    // Get SEO data from language file
    $treatment['seo_title'] = t('meta.' . $key . '_title') . ' | ' . $config['site']['name'];
    $treatment['seo_desc'] = t('meta.' . $key . '_description');
    $treatment['seo_keywords'] = t('meta.' . $key . '_keywords');

    return $treatment;
}

/**
 * Renk kodlarını CSS variable olarak oluştur
 */
function getCssVariables() {
    global $config;
    $primary = $config['colors']['primary'];
    $secondary = $config['colors']['secondary'];

    $css = ':root {';
    foreach ($config['colors'] as $name => $value) {
        $css .= "--{$name}-color: {$value};";
    }

    // Add gradients
    $css .= "--gradient-primary: linear-gradient(135deg, {$primary} 0%, {$secondary} 100%);";
    $css .= "--gradient-secondary: linear-gradient(135deg, {$secondary} 0%, {$primary} 100%);";

    $css .= '}';
    return $css;
}

/**
 * Aktif sertifikaları getir
 */
function getActiveCertifications() {
    global $config;
    $active = [];
    foreach ($config['certifications'] as $cert) {
        if ($cert['active']) {
            // Add name from language file
            $cert['name'] = t('certifications')[$cert['key']] ?? $cert['key'];
            $active[] = $cert;
        }
    }
    return $active;
}

/**
 * İstatistikleri getir
 */
function getActiveStatistics() {
    global $config;
    $active = [];
    foreach ($config['statistics'] as $stat) {
        if ($stat['active']) {
            // Add label from language file
            $stat['label'] = t('stats')[$stat['key']] ?? '';
            $active[] = $stat;
        }
    }
    return $active;
}

// ====================================================
// TESTIMONIALS - HASTA YORUMLARI
// ====================================================
function getTestimonials() {
    $lang = getCurrentLang();

    $testimonials = [
        [
            'author' => 'Sarah K.',
            'treatment' => [
                'tr' => 'Tüp Mide Hastası',
                'en' => 'Gastric Sleeve Patient',
                'ar' => 'مريض تكميم المعدة',
                'de' => 'Magenverkleinerung Patient',
                'fr' => 'Patient Sleeve Gastrique',
                'fa' => 'بیمار اسلیو معده'
            ],
            'text' => [
                'tr' => '6 ay önce tüp mide ameliyatı oldum. 45 kilo verdim ve hayatım tamamen değişti. BHT Clinic Turkey ekibi her aşamada yanımdaydı. Çok teşekkür ederim.',
                'en' => 'I had gastric sleeve surgery 6 months ago. I lost 45 kg and my life completely changed. BHT Clinic Turkey team was with me at every step. Thank you very much.',
                'ar' => 'أجريت عملية تكميم المعدة منذ 6 أشهر. فقدت 45 كجم وتغيرت حياتي تماماً. كان فريق BHT Clinic Turkey معي في كل خطوة. شكراً جزيلاً.',
                'de' => 'Ich hatte vor 6 Monaten eine Magenverkleinerung. Ich habe 45 kg verloren und mein Leben hat sich komplett verändert. Das BHT Clinic Turkey Team war bei jedem Schritt an meiner Seite. Vielen Dank.',
                'fr' => 'J\'ai eu une chirurgie de la sleeve gastrique il y a 6 mois. J\'ai perdu 45 kg et ma vie a complètement changé. L\'équipe BHT Clinic Turkey était avec moi à chaque étape. Merci beaucoup.',
                'fa' => '6 ماه پیش جراحی اسلیو معده انجام دادم. 45 کیلو کاهش وزن داشتم و زندگی‌ام کاملاً تغییر کرد. تیم BHT Clinic Turkey در تمام مراحل کنار من بود. از شما بسیار متشکرم.'
            ],
            'gender' => 'female',
            'image' => '/assets/images/kcustomer.jpg'
        ],
        [
            'author' => 'Michael T.',
            'treatment' => [
                'tr' => 'Gastrik Bypass Hastası',
                'en' => 'Gastric Bypass Patient',
                'ar' => 'مريض تحويل المسار',
                'de' => 'Magenbypass Patient',
                'fr' => 'Patient Bypass Gastrique',
                'fa' => 'بیمار بای پس معده'
            ],
            'text' => [
                'tr' => 'Gastrik bypass ameliyatı ile diyabetimden kurtuldum. 8 ayda 52 kilo vererek sağlığıma kavuştum. Profesyonel ekip ve harika bir deneyimdi.',
                'en' => 'I got rid of my diabetes with gastric bypass surgery. I lost 52 kg in 8 months and regained my health. Professional team and great experience.',
                'ar' => 'تخلصت من مرض السكري بعملية تحويل مسار المعدة. فقدت 52 كجم في 8 أشهر واستعدت صحتي. فريق محترف وتجربة رائعة.',
                'de' => 'Ich bin meinen Diabetes durch eine Magenbypass-Operation losgeworden. Ich habe in 8 Monaten 52 kg verloren und meine Gesundheit wiedererlangt. Professionelles Team und großartige Erfahrung.',
                'fr' => 'Je me suis débarrassé de mon diabète avec une chirurgie de bypass gastrique. J\'ai perdu 52 kg en 8 mois et retrouvé ma santé. Équipe professionnelle et excellente expérience.',
                'fa' => 'با جراحی بای پس معده از دیابت خلاص شدم. در 8 ماه 52 کیلو کاهش وزن داشتم و سلامتی‌ام را بازیافتم. تیم حرفه‌ای و تجربه‌ای عالی.'
            ],
            'gender' => 'male',
            'image' => '/assets/images/ecustomer.jpg'
        ],
        [
            'author' => 'Emma S.',
            'treatment' => [
                'tr' => 'Tüp Mide Hastası',
                'en' => 'Gastric Sleeve Patient',
                'ar' => 'مريض تكميم المعدة',
                'de' => 'Magenverkleinerung Patient',
                'fr' => 'Patient Sleeve Gastrique',
                'fa' => 'بیمار اسلیو معده'
            ],
            'text' => [
                'tr' => '130 kiloydum, şimdi 75 kiloyum. BHT Clinic Turkey sayesinde yeni bir hayatım var. Ameliyat sonrası destek programları muhteşem.',
                'en' => 'I was 130 kg, now I am 75 kg. Thanks to BHT Clinic Turkey, I have a new life. Post-surgery support programs are excellent.',
                'ar' => 'كنت 130 كجم، الآن أنا 75 كجم. بفضل BHT Clinic Turkey، لدي حياة جديدة. برامج الدعم بعد الجراحة ممتازة.',
                'de' => 'Ich war 130 kg, jetzt bin ich 75 kg. Dank BHT Clinic Turkey habe ich ein neues Leben. Die Programme nach der Operation sind ausgezeichnet.',
                'fr' => 'Je pesais 130 kg, maintenant je pèse 75 kg. Grâce à BHT Clinic Turkey, j\'ai une nouvelle vie. Les programmes de soutien post-opératoire sont excellents.',
                'fa' => '130 کیلو بودم، الان 75 کیلو هستم. به لطف BHT Clinic Turkey، زندگی جدیدی دارم. برنامه‌های پشتیبانی پس از جراحی عالی است.'
            ],
            'gender' => 'female',
            'image' => '/assets/images/kcustomer.jpg'
        ],
        [
            'author' => 'Anna M.',
            'treatment' => [
                'tr' => 'Rinoplasti Hastası',
                'en' => 'Rhinoplasty Patient',
                'ar' => 'مريض تجميل الأنف',
                'de' => 'Nasenkorrektur Patient',
                'fr' => 'Patient Rhinoplastie',
                'fa' => 'بیمار رینوپلاستی'
            ],
            'text' => [
                'tr' => 'Rinoplasti sonucu beklentilerimi aştı. Doğal ve güzel bir burun. İyileşme süreci çok rahat geçti. Tüm ekibe teşekkürler.',
                'en' => 'The rhinoplasty result exceeded my expectations. Natural and beautiful nose. The recovery process was very comfortable. Thank you to the entire team.',
                'ar' => 'نتيجة تجميل الأنف تجاوزت توقعاتي. أنف طبيعي وجميل. كانت عملية التعافي مريحة جداً. شكراً لكل الفريق.',
                'de' => 'Das Ergebnis der Nasenkorrektur hat meine Erwartungen übertroffen. Natürliche und schöne Nase. Der Heilungsprozess war sehr angenehm. Danke an das gesamte Team.',
                'fr' => 'Le résultat de la rhinoplastie a dépassé mes attentes. Nez naturel et beau. Le processus de récupération était très confortable. Merci à toute l\'équipe.',
                'fa' => 'نتیجه رینوپلاستی از انتظارات من فراتر رفت. بینی طبیعی و زیبا. روند بهبودی بسیار راحت بود. از تمام تیم متشکرم.'
            ],
            'gender' => 'female',
            'image' => '/assets/images/kcustomer.jpg'
        ],
        [
            'author' => 'David L.',
            'treatment' => [
                'tr' => 'Saç Ekimi Hastası',
                'en' => 'Hair Transplant Patient',
                'ar' => 'مريض زراعة الشعر',
                'de' => 'Haartransplantation Patient',
                'fr' => 'Patient Greffe de Cheveux',
                'fa' => 'بیمار کاشت مو'
            ],
            'text' => [
                'tr' => 'Saç ekimi ameliyatından sonra 10 yaş gençleştim. Doğal sonuçlar ve profesyonel hizmet. Çok memnunum.',
                'en' => 'After hair transplant surgery, I look 10 years younger. Natural results and professional service. I am very satisfied.',
                'ar' => 'بعد عملية زراعة الشعر، أبدو أصغر بـ 10 سنوات. نتائج طبيعية وخدمة احترافية. أنا راضٍ جداً.',
                'de' => 'Nach der Haartransplantation sehe ich 10 Jahre jünger aus. Natürliche Ergebnisse und professioneller Service. Ich bin sehr zufrieden.',
                'fr' => 'Après la greffe de cheveux, je parais 10 ans plus jeune. Résultats naturels et service professionnel. Je suis très satisfait.',
                'fa' => 'بعد از جراحی کاشت مو، 10 سال جوان‌تر به نظر می‌رسم. نتایج طبیعی و خدمات حرفه‌ای. بسیار راضی هستم.'
            ],
            'gender' => 'male',
            'image' => '/assets/images/ecustomer.jpg'
        ],
        [
            'author' => 'Lisa R.',
            'treatment' => [
                'tr' => 'Göz Lazer Hastası',
                'en' => 'Eye Laser Patient',
                'ar' => 'مريض ليزر العين',
                'de' => 'Augen-Laser Patient',
                'fr' => 'Patient Laser Oculaire',
                'fa' => 'بیمار لیزر چشم'
            ],
            'text' => [
                'tr' => 'Göz lazer ameliyatı ile gözlükten kurtuldum. Şu an mükemmel bir görüşüm var. İşlem ağrısızdı ve çok hızlıydı. Kesinlikle tavsiye ederim!',
                'en' => 'I got rid of my glasses with laser eye surgery. Perfect vision now. The procedure was painless and very fast. Highly recommended!',
                'ar' => 'تخلصت من نظارتي بعملية ليزر العين. رؤية مثالية الآن. كانت العملية غير مؤلمة وسريعة جداً. أوصي بها بشدة!',
                'de' => 'Ich bin meine Brille durch Laser-Augenoperation losgeworden. Jetzt perfekte Sicht. Der Eingriff war schmerzlos und sehr schnell. Sehr empfehlenswert!',
                'fr' => 'Je me suis débarrassé de mes lunettes avec la chirurgie laser des yeux. Vision parfaite maintenant. La procédure était indolore et très rapide. Hautement recommandé!',
                'fa' => 'با جراحی لیزر چشم از عینک خلاص شدم. الان بینایی عالی دارم. روند درمان بدون درد و بسیار سریع بود. به شدت توصیه می‌کنم!'
            ],
            'gender' => 'female',
            'image' => '/assets/images/kcustomer.jpg'
        ],
        [
            'author' => 'James P.',
            'treatment' => [
                'tr' => 'Diş Kaplama Hastası',
                'en' => 'Dental Veneers Patient',
                'ar' => 'مريض قشور الأسنان',
                'de' => 'Zahnveneers Patient',
                'fr' => 'Patient Facettes Dentaires',
                'fa' => 'بیمار لمینت دندان'
            ],
            'text' => [
                'tr' => 'Diş kaplamaları ile Hollywood gülüşüne kavuştum. Profesyonel diş hekimleri ve kaliteli malzemeler. Sonuçtan çok mutluyum.',
                'en' => 'Hollywood smile with dental veneers. Professional dentists and quality materials. I am very happy with the results.',
                'ar' => 'حصلت على ابتسامة هوليوود بقشور الأسنان. أطباء أسنان محترفون ومواد عالية الجودة. أنا سعيد جداً بالنتائج.',
                'de' => 'Hollywood-Lächeln mit Zahnveneers. Professionelle Zahnärzte und hochwertige Materialien. Ich bin sehr zufrieden mit den Ergebnissen.',
                'fr' => 'Sourire hollywoodien avec des facettes dentaires. Dentistes professionnels et matériaux de qualité. Je suis très heureux des résultats.',
                'fa' => 'با لمینت دندان به لبخند هالیوود رسیدم. دندانپزشکان حرفه‌ای و مواد با کیفیت. از نتایج بسیار خوشحالم.'
            ],
            'gender' => 'male',
            'image' => '/assets/images/ecustomer.jpg'
        ],
        [
            'author' => 'Maria G.',
            'treatment' => [
                'tr' => 'BBL Hastası',
                'en' => 'BBL Patient',
                'ar' => 'مريض BBL',
                'de' => 'BBL Patient',
                'fr' => 'Patient BBL',
                'fa' => 'بیمار BBL'
            ],
            'text' => [
                'tr' => 'Brazilian butt lift ile hayallerindeki vücuda kavuştum. Doğal ve güzel sonuçlar. Tüm süreç mükemmeldi.',
                'en' => 'Brazilian butt lift gave me the body of my dreams. Natural and beautiful results. The entire process was perfect.',
                'ar' => 'أعطاني رفع المؤخرة البرازيلي الجسم الذي أحلم به. نتائج طبيعية وجميلة. كانت العملية بأكملها مثالية.',
                'de' => 'Brazilian Butt Lift gab mir den Körper meiner Träume. Natürliche und schöne Ergebnisse. Der gesamte Prozess war perfekt.',
                'fr' => 'Le Brazilian butt lift m\'a donné le corps de mes rêves. Résultats naturels et beaux. Tout le processus était parfait.',
                'fa' => 'با BBL به بدن رویایی خود رسیدم. نتایج طبیعی و زیبا. کل فرآیند عالی بود.'
            ],
            'gender' => 'female',
            'image' => '/assets/images/kcustomer.jpg'
        ],
        [
            'author' => 'Sophie D.',
            'treatment' => [
                'tr' => 'Göğüs Büyütme Hastası',
                'en' => 'Breast Augmentation Patient',
                'ar' => 'مريض تكبير الثدي',
                'de' => 'Brustvergrößerung Patient',
                'fr' => 'Patient Augmentation Mammaire',
                'fa' => 'بیمار بزرگ‌سازی سینه'
            ],
            'text' => [
                'tr' => 'Göğüs büyütme ameliyatı hayatımı değiştirdi. Şimdi kendime çok daha güveniyorum. Uzman ekibe teşekkürler.',
                'en' => 'Breast augmentation surgery changed my life. I feel much more confident now. Thank you to the expert team.',
                'ar' => 'غيرت جراحة تكبير الثدي حياتي. أشعر بثقة أكبر الآن. شكراً لفريق الخبراء.',
                'de' => 'Die Brustvergrößerung hat mein Leben verändert. Ich fühle mich jetzt viel selbstbewusster. Danke an das Expertenteam.',
                'fr' => 'La chirurgie d\'augmentation mammaire a changé ma vie. Je me sens beaucoup plus confiante maintenant. Merci à l\'équipe d\'experts.',
                'fa' => 'جراحی بزرگ‌سازی سینه زندگی من را تغییر داد. الان خیلی بیشتر به خودم اعتماد دارم. از تیم متخصص متشکرم.'
            ],
            'gender' => 'female',
            'image' => '/assets/images/kcustomer.jpg'
        ]
    ];

    // Format testimonials with current language
    $formatted = [];
    foreach ($testimonials as $testimonial) {
        $formatted[] = [
            'author' => $testimonial['author'],
            'treatment' => $testimonial['treatment'][$lang] ?? $testimonial['treatment']['en'],
            'text' => $testimonial['text'][$lang] ?? $testimonial['text']['en'],
            'gender' => $testimonial['gender'],
            'image' => $testimonial['image']
        ];
    }

    return $formatted;
}

?>
