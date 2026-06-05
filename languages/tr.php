<?php
/**
 * Turkish Language File - Complete Version (Türkçe Dil Dosyası)
 */

$lang = [
    // Navigation
    'nav' => [
        'home' => 'Ana Sayfa',
        'treatments' => 'Tedavilerimiz',
        'about' => 'Hakkımızda',
        'process' => 'Süreç',
        'faq' => 'S.S.S',
        'contact' => 'İletişim',
        'get_consultation' => 'Ücretsiz Danışın',
    ],

    // Hero Section
    'hero' => [
        'badge' => 'Türkiye\'nin Güvenilir Sağlık Turizmi Merkezi',
        'title' => 'Sağlıklı Yaşama <span class="gradient-text">Güvenle</span> Adım Atın',
        'description' => 'Uzman medikal ekibimiz ve JCI akrediteli hastanemizle hayatınızı değiştirin. Son teknoloji ile güvenli ve etkili tedaviler sunuyoruz.',
        'cta_primary' => 'Ücretsiz Konsültasyon',
        'cta_secondary' => 'Detaylı Bilgi',
        'call_now' => 'Hemen Ara',
        'support_247' => '7/24 Hasta Desteği',
        'scroll_down' => 'Aşağı Kaydır',
    ],

    // Statistics
    'stats' => [
        'happy_patients' => 'Mutlu Hasta',
        'success_rate' => 'Başarı Oranı',
        'years_experience' => 'Yıllık Deneyim',
        'patient_support' => 'Hasta Desteği',
    ],

    // Treatments Section
    'treatments_section' => [
        'badge' => 'Tedavilerimiz',
        'title' => 'Sağlık Turizmi <span class="gradient-text">Hizmetlerimiz</span>',
        'description' => 'Modern teknikler ve deneyimli medikal ekibimizle size en uygun tedavi yöntemini belirliyoruz',
        'more_info' => 'Detaylı Bilgi',
        'featured' => 'En Popüler',
        'learn_more' => 'Daha Fazla Bilgi',
    ],

    // Treatment Details (Dynamic from config)
    'treatments' => [
        'obesity' => [
            'name' => 'Obezite Cerrahisi',
            'short_desc' => 'Tüp mide, gastrik bypass ve gastrik balon ile kalıcı kilo kaybı',
            'hero_title' => 'Sağlıklı Yaşama <span class="gradient-text">Güvenle Adım Atın</span>',
            'hero_desc' => 'Obezite cerrahisi ile hayatınızı dönüştürün. Uzman ekibimiz ve JCI akrediteli hastanemizle güvenli tedavi.',
            'long_desc' => 'Uzman cerrahlarımız ve son teknoloji ekipmanlarımızla güvenli obezite cerrahisi. Laparoskopik yöntemle minimal invaziv tedavi.',
            'features' => [
                'Tüp Mide Ameliyatı',
                'Gastrik Bypass',
                'Gastrik Balon',
                'Ömür Boyu Destek',
            ],
        ],
        'rhinoplasty' => [
            'name' => 'Rinoplasti (Burun Estetiği)',
            'short_desc' => 'Estetik ve fonksiyonel burun ameliyatı ile doğal görünüm',
            'hero_title' => 'Doğal Görünümlü <span class="gradient-text">Burun Estetiği</span>',
            'hero_desc' => 'Türkiye\'de uzman rinoplasti cerrahisi ile hayalinizdeki burun şekline kavuşun',
            'long_desc' => 'Rinoplasti (burun estetiği), burnun şeklini düzeltmek, yeniden boyutlandırmak veya fonksiyonel sorunları gidermek için yapılan cerrahi bir işlemdir. Uzman cerrahlarımız, yüz hatlarınızla uyumlu doğal sonuçlar elde eder.',
            'features' => [
                'Açık ve Kapalı Rinoplasti Teknikleri',
                'Fonksiyonel ve Estetik Düzeltme',
                '3D Simülasyon ve Planlama',
                'Piezo Ultrasonik Teknoloji',
                'Doğal ve Kalıcı Sonuçlar',
            ],
        ],
        'hair_transplant' => [
            'name' => 'Saç Ekimi',
            'short_desc' => 'FUE ve DHI tekniği ile doğal saç ekimi',
            'hero_title' => 'Doğal Saçlarınıza <span class="gradient-text">Yeniden Kavuşun</span>',
            'hero_desc' => 'Gelişmiş saç ekimi teknikleri ile doğal ve kalıcı sonuçlar elde edin',
            'long_desc' => 'Saç ekimi, donör bölgeden alınan sağlıklı saç köklerinin saç dökülmesi yaşanan bölgelere aktarılması işlemidir. Uzman ekibimiz FUE ve DHI teknikleri ile doğal görünümlü sonuçlar elde eder.',
            'features' => [
                'FUE (Follicular Unit Extraction)',
                'DHI (Direct Hair Implantation)',
                'Safir FUE Tekniği',
                'Ağrısız Sedasyon Seçeneği',
                'Ömür Boyu Garanti',
            ],
        ],
        'eye_laser' => [
            'name' => 'Göz Lazer Tedavisi',
            'short_desc' => 'LASIK, PRK ve Smart Surface ile gözlüksüz yaşam',
            'hero_title' => 'Gözlüksüz <span class="gradient-text">Net Görüş</span>',
            'hero_desc' => 'Türkiye\'de gelişmiş lazer göz ameliyatı ile mükemmel görüşe kavuşun',
            'long_desc' => 'Lazer göz ameliyatı, miyopi, hipermetropi ve astigmat gibi görme kusurlarını düzelten modern bir tedavi yöntemidir. LASIK, PRK ve Smart Surface teknolojileri ile gözlüksüz yaşamı deneyimleyin.',
            'features' => [
                'LASIK Ameliyatı',
                'PRK (Photorefractive Keratectomy)',
                'Smart Surface Teknolojisi',
                'Femto LASIK',
                'Hızlı İyileşme ve Kalıcı Sonuçlar',
            ],
        ],
        'dental' => [
            'name' => 'Diş Tedavileri',
            'short_desc' => 'İmplant, kaplama ve estetik diş hekimliği',
            'hero_title' => 'Mükemmel Gülüş <span class="gradient-text">Mükemmel Yaşam</span>',
            'hero_desc' => 'Türkiye\'de gelişmiş diş tedavileri ile hayalinizdeki gülüşe kavuşun',
            'long_desc' => 'Diş kliniğimiz, dental implant, veneer, kuron ve estetik diş hekimliği dahil kapsamlı tedaviler sunmaktadır. Uzman diş hekimlerimiz ve son teknoloji ekipmanlarımızla mükemmel gülüşü deneyimleyin.',
            'features' => [
                'Dental İmplant',
                'Porselen Kaplama (Veneer)',
                'Zirkonyum Kuron',
                'Hollywood Smile',
                'Dijital Gülüş Tasarımı',
            ],
        ],
        'aesthetic' => [
            'name' => 'Estetik Cerrahi',
            'short_desc' => 'Yüz ve vücut estetiği ameliyatları',
            'hero_title' => 'Doğal Güzelliğinizi <span class="gradient-text">Geliştirin</span>',
            'hero_desc' => 'Türkiye\'de uzman estetik cerrahisi ile görünümünüzü değiştirin',
            'long_desc' => 'Estetik cerrahi, doğal güzelliğinizi geliştirmek için tasarlanmış geniş bir prosedür yelpazesini kapsar. Deneyimli plastik cerrahlarımız, yüz ve vücut estetiğinde en son teknikleri kullanarak doğal görünümlü sonuçlar sunar.',
            'features' => [
                'Yüz ve Boyun Germe',
                'Göğüs Büyütme ve Dikleştirme',
                'Liposuction ve Vücut Şekillendirme',
                'Karın Germe (Abdominoplasti)',
                'Brazilian Butt Lift (BBL)',
            ],
        ],
    ],

    // Why Us Section
    'why_us' => [
        'badge' => 'Neden BHT CLINIC Turkey?',
        'title' => 'Güvenilir Sağlık Turizmi İçin <span class="gradient-text">Doğru Adres</span>',
        'description' => 'JCI akrediteli hastanemiz, deneyimli medikal ekibimiz ve modern teknolojimizle her adımda yanınızdayız.',
        'cta_text' => 'Size özel tedavi planı için hemen iletişime geçin',
        'cta_button' => 'Ücretsiz Danışmanlık Al',
        'years_experience' => '15+ Yıl Deneyim',
        'features' => [
            'expert_team' => [
                'title' => 'Uzman Medikal Ekip',
                'description' => 'Alanında deneyimli, uluslararası sertifikalı uzman doktorlar',
            ],
            'jci_accredited' => [
                'title' => 'JCI Akrediteli Hastane',
                'description' => 'Uluslararası kalite standartlarında hizmet ve güvenlik',
            ],
            'modern_technology' => [
                'title' => 'Son Teknoloji Ekipman',
                'description' => 'Laparoskopik ve robotik cerrahi sistemleri ile minimal invaziv tedavi',
            ],
            'support_247' => [
                'title' => '7/24 Hasta Desteği',
                'description' => 'Tedavi öncesi ve sonrası kesintisiz destek hizmeti',
            ],
        ],
    ],

    // Process Section
    'process' => [
        'badge' => 'Süreç',
        'title' => 'Tedavi <span class="gradient-text">Süreci</span>',
        'description' => 'İlk görüşmeden sağlıklı yaşama her adımda yanınızdayız',
        'steps' => [
            'step1' => [
                'title' => 'İlk Değerlendirme',
                'description' => 'Uygunluk değerlendirmesi için detaylı muayene, kan tahlilleri ve vücut analizi',
            ],
            'step2' => [
                'title' => 'Tedavi Hazırlığı',
                'description' => 'Beslenme programı, psikolojik destek ve tedavi öncesi testler',
            ],
            'step3' => [
                'title' => 'Tedavi',
                'description' => 'Minimal invaziv tekniklerle modern ve güvenli tıbbi işlemler',
            ],
            'step4' => [
                'title' => 'Takip & Destek',
                'description' => 'Ömür boyu beslenme desteği ve düzenli kontroller',
            ],
        ],
    ],

    // Testimonials
    'testimonials' => [
        'badge' => 'Hasta Yorumları',
        'title' => 'Hayatları <span class="gradient-text">Değişenler</span>',
        'description' => 'Hastalarımızın deneyimleri hakkında ne söylediklerini okuyun',
    ],

    // FAQ Section
    'faq' => [
        'badge' => 'Sıkça Sorulan Sorular',
        'title' => 'Merak <span class="gradient-text">Edilenler</span>',
        'description' => 'Sağlık turizmi hakkında sıkça sorulan soruların cevaplarını bulun',
        'questions' => [
            'q1' => [
                'question' => 'Tedavi için uygun muyum?',
                'answer' => 'Uygunluk detaylı muayene ve testlerle belirlenir. Her hasta bireysel olarak değerlendirilir ve en uygun tedavi yöntemi önerilir.',
            ],
            'q2' => [
                'question' => 'Tedavi maliyetleri nedir?',
                'answer' => 'Tedavi maliyetleri, tedavi türüne ve hastanın durumuna göre değişir. Özel fiyat tekliflerimiz için bizimle iletişime geçin. Uluslararası sigorta kabul ediyoruz.',
            ],
            'q3' => [
                'question' => 'İyileşme süreci ne kadar sürer?',
                'answer' => 'İyileşme süresi tedavi türüne göre değişir. Genellikle 1 hafta içinde günlük aktivitelere, 2-3 hafta içinde işe dönebilirsiniz.',
            ],
            'q4' => [
                'question' => 'Uluslararası hastalar için hangi hizmetleri sağlıyorsunuz?',
                'answer' => 'Uluslararası hastalar için havaalanı transferi, otel konaklaması, tercüman hizmeti ve 7/24 hasta desteği sağlıyoruz.',
            ],
            'q5' => [
                'question' => 'Tedavileriniz güvenli mi?',
                'answer' => 'Tüm tedavilerimiz JCI akrediteli hastanemizde deneyimli uzmanlar tarafından gerçekleştirilir. Hasta güvenliği en önceliğimizdir.',
            ],
        ],
    ],

    // CTA Section
    'cta' => [
        'title' => 'Sağlıklı Yaşama Başlamak İçin <span class="gradient-text">İlk Adımı Atın</span>',
        'subtitle' => 'Uzman ekibimizle ücretsiz değerlendirme için hemen iletişime geçin',
        'description' => 'Uzman ekibimizle ücretsiz değerlendirme için hemen iletişime geçin',
        'apply_online' => 'Online Başvuru',
        'call_now' => 'Hemen Ara',
    ],

    // Footer
    'footer' => [
        'about_text' => 'Türkiye\'nin güvenilir sağlık turizmi merkezi. JCI akrediteli hastanemizde, uzman kadromuz ile hayatınızı değiştirecek adımda yanınızdayız.',
        'treatments' => 'Tedaviler',
        'corporate' => 'Kurumsal',
        'about_us' => 'Hakkımızda',
        'our_doctors' => 'Doktorlarımız',
        'blog' => 'Blog',
        'faq_page' => 'Sıkça Sorulan Sorular',
        'contact_info' => 'İletişim',
        'working_hours' => 'Çalışma Saatleri',
        'address' => 'Adres',
        'phone' => 'Telefon',
        'email' => 'E-posta',
        'social_media' => 'Sosyal Medya',
        'all_rights' => 'Tüm hakları saklıdır.',
        'privacy_policy' => 'Gizlilik Politikası',
        'gdpr' => 'KVKK',
        'terms' => 'Kullanım Şartları',
        'certificates' => 'Sertifikalar ve Akreditasyonlar',
    ],

    // Form
    'form' => [
        'title' => 'Ücretsiz Konsültasyon',
        'subtitle' => 'Formu doldurun, uzman ekibimiz sizinle iletişime geçsin',
        'name' => 'Adınız Soyadınız',
        'name_placeholder' => 'Adınız ve soyadınız',
        'phone' => 'Telefon Numaranız',
        'phone_placeholder' => 'Telefon numaranız',
        'email' => 'E-posta Adresiniz',
        'email_placeholder' => 'E-posta adresiniz',
        'weight' => 'Kilonuz (kg)',
        'weight_placeholder' => 'Kilonuz (kg)',
        'height' => 'Boyunuz (cm)',
        'height_placeholder' => 'Boyunuz (cm)',
        'treatment_type' => 'Tedavi Türü',
        'select_treatment' => 'Tedavi Türü Seçin',
        'undecided' => 'Kararsızım',
        'message' => 'Mesajınız (Opsiyonel)',
        'message_placeholder' => 'Endişeleriniz veya sorularınızı bize iletin',
        'consent' => 'KVKK metnini okudum ve kabul ediyorum.',
        'submit' => 'Formu Gönder',
        'sending' => 'Gönderiliyor...',
        'success_message' => 'Formunuz başarıyla gönderildi. En kısa sürede sizinle iletişime geçeceğiz.',
        'error_message' => 'Bir hata oluştu. Lütfen tekrar deneyin.',
        'required_field' => 'Bu alan zorunludur',
        'invalid_email' => 'Geçerli bir e-posta adresi girin',
        'invalid_phone' => 'Geçerli bir telefon numarası girin',
    ],

    // Common
    'common' => [
        'read_more' => 'Devamını Oku',
        'learn_more' => 'Daha Fazla Bilgi',
        'contact_us' => 'Bize Ulaşın',
        'get_quote' => 'Fiyat Teklifi Al',
        'close' => 'Kapat',
        'loading' => 'Yükleniyor...',
        'view_all' => 'Tümünü Gör',
        'download' => 'İndir',
        'share' => 'Paylaş',
        'print' => 'Yazdır',
        'search' => 'Ara',
        'filter' => 'Filtrele',
        'sort_by' => 'Sırala',
        'show_more' => 'Daha Fazla Göster',
        'show_less' => 'Daha Az Göster',
        'back' => 'Geri',
        'next' => 'İleri',
        'previous' => 'Önceki',
        'submit' => 'Gönder',
        'cancel' => 'İptal',
        'confirm' => 'Onayla',
        'yes' => 'Evet',
        'no' => 'Hayır',
        'ok' => 'Tamam',
    ],

    // Certifications
    'certifications' => [
        'title' => 'Sertifikalarımız ve Akreditasyonlarımız',
        'jci' => 'JCI Akreditasyonu',
        'leed_gold' => 'LEED Gold Sertifikası',
        'temos' => 'TEMOS Sertifikası',
        'turquality' => 'TURQUALITY',
        'efqm' => 'EFQM Sertifikası',
    ],

    // Contact Page
    'contact_page' => [
        'title' => 'Bize Ulaşın',
        'subtitle' => 'Herhangi bir sorunuz veya randevu talebi için bizimle iletişime geçin',
        'visit_us' => 'Bizi Ziyaret Edin',
        'call_us' => 'Bizi Arayın',
        'email_us' => 'E-posta Gönderin',
        'office_hours' => 'Çalışma Saatleri',
        'get_directions' => 'Yol Tarifi Al',
        'send_message' => 'Mesaj Gönder',
    ],

    // Thank You Page
    'thank_you' => [
        'title' => 'Teşekkürler!',
        'message' => 'Formunuz başarıyla gönderildi. Uzman ekibimiz en kısa sürede sizinle iletişime geçecek.',
        'what_next' => 'Sırada Ne Var?',
        'step1' => 'Uzman ekibimiz bilgilerinizi inceleyecek',
        'step2' => '24 saat içinde sizinle iletişime geçeceğiz',
        'step3' => 'Size özel tedavi planı oluşturacağız',
        'back_home' => 'Ana Sayfaya Dön',
        'browse_treatments' => 'Tedavilere Göz At',
        'immediate_contact' => 'Hemen iletişim için:',
    ],

    // Error Messages
    'errors' => [
        '404_title' => 'Sayfa Bulunamadı',
        '404_message' => 'Üzgünüz, aradığınız sayfa mevcut değil.',
        '500_title' => 'Sunucu Hatası',
        '500_message' => 'Bir şeyler yanlış gitti. Lütfen daha sonra tekrar deneyin.',
        'go_home' => 'Ana Sayfaya Git',
    ],

    // Meta Descriptions (for SEO)
    'meta' => [
        'home_title' => 'BHT CLINIC Turkey - Türkiye\'de Sağlık Turizmi',
        'home_description' => 'Türkiye\'nin önde gelen sağlık turizmi merkezi. Profesyonel ekip, JCI akrediteli hastane, uygun fiyatlar. Obezite cerrahisi, saç ekimi, rinoplasti ve daha fazlası.',
        'home_keywords' => 'sağlık turizmi, türkiye, medikal turizm, obezite cerrahisi, saç ekimi, rinoplasti, diş tedavisi',

        // Treatment SEO Meta
        'obesity_title' => 'Obezite Cerrahisi - Tüp Mide & Bypass',
        'obesity_description' => 'Türkiye\'de güvenli obezite cerrahisi. Tüp mide, bypass operasyonları. JCI akrediteli hastane, uzman ekip, uygun fiyatlar.',
        'obesity_keywords' => 'obezite cerrahisi, tüp mide, mide bypass, zayıflama ameliyatı, bariatrik cerrahi türkiye',

        'rhinoplasty_title' => 'Rinoplasti - Burun Estetiği',
        'rhinoplasty_description' => 'Türkiye\'de profesyonel rinoplasti. Estetik ve fonksiyonel burun cerrahisi, doğal sonuçlar, uygun fiyatlar.',
        'rhinoplasty_keywords' => 'rinoplasti, burun estetiği, burun ameliyatı, estetik burun, rinoplasti türkiye',

        'hair_transplant_title' => 'Saç Ekimi - FUE & DHI Tekniği',
        'hair_transplant_description' => 'Türkiye\'de profesyonel saç ekimi. FUE, DHI teknikleri, doğal sonuçlar, uygun fiyatlar, JCI akrediteli klinik.',
        'hair_transplant_keywords' => 'saç ekimi, fue saç ekimi, dhi saç ekimi, saç ekimi türkiye, saç restorasyonu',

        'eye_laser_title' => 'Göz Lazer Ameliyatı - LASIK & PRK',
        'eye_laser_description' => 'Türkiye\'de güvenli göz lazer ameliyatı. LASIK, PRK, Smart Surface. Gözlüksüz yaşam, uzman ekip, son teknoloji.',
        'eye_laser_keywords' => 'göz lazer ameliyatı, lasik, prk, göz ameliyatı, göz lazer türkiye',

        'dental_title' => 'Diş Tedavileri - İmplant & Lamina',
        'dental_description' => 'Türkiye\'de kaliteli diş tedavileri. Diş implantı, lamina, porselen kaplama. Hollywood gülüşü 5-7 günde.',
        'dental_keywords' => 'diş tedavisi, diş implantı, diş laminası, hollywood gülüşü, diş tedavisi türkiye',

        'aesthetic_title' => 'Estetik Ameliyatlar - Yüz & Vücut',
        'aesthetic_description' => 'Türkiye\'de profesyonel estetik ameliyatlar. Yüz germe, göğüs estetiği, liposuction, karın germe ve daha fazlası.',
        'aesthetic_keywords' => 'estetik ameliyat, yüz germe, göğüs estetiği, liposuction, vücut estetiği türkiye',
    ],

    // Treatment Detail Pages
    'treatment_detail' => [
        'what_is' => 'Nedir?',
        'how_performed' => 'Nasıl Yapılır?',
        'advantages' => 'Avantajları',
        'post_operation' => 'Ameliyat Sonrası Süreç',
        'quick_info' => 'Hızlı Bilgiler',
        'free_consultation' => 'Ücretsiz Konsültasyon',
        'free_consultation_desc' => 'Uzman ekibimizden kişiselleştirilmiş tedavi planı alın',
        'instant_result' => 'Anında Sonuç',
        'free_evaluation' => 'Ücretsiz Değerlendirme',
        'expert_opinion' => 'Uzman Görüşü',
        'faq_title' => 'Hakkında Sık Sorulan Sorular',
        'cta_title' => 'İlk Adımı Atın',
        'cta_desc' => 'Ücretsiz değerlendirme için uzman ekibimizle iletişime geçin',

        // Timeline
        'day_1_3' => '1-3 Gün',
        'week_1_2' => '1-2 Hafta',
        'month_1' => '1 Ay',
        'month_3_6' => '3-6 Ay',
        'hospital_stay' => 'Hastanede Kalış',
        'hospital_stay_desc' => 'Sıvı gıdalarla beslenme başlar, ağrı kontrolü sağlanır',
        'home_recovery' => 'Evde İyileşme',
        'home_recovery_desc' => 'Püre kıvamında gıdalar, günlük aktivitelere dönüş',
        'normal_food' => 'Normal Gıdalara Geçiş',
        'normal_food_desc' => 'Yumuşak katı gıdalar, işe dönüş',
        'rapid_weight_loss' => 'Hızlı Kilo Kaybı',
        'rapid_weight_loss_desc' => 'Normal beslenme düzeni, düzenli egzersiz',

        // Advantages
        'effective_weight_loss' => 'Etkili Kilo Kaybı',
        'weight_loss_desc' => 'Fazla kilonun %60-70\'i 12-18 ayda verilir',
        'health_improvement' => 'Sağlık Sorunlarında İyileşme',
        'health_improvement_desc' => 'Diyabet, hipertansiyon, uyku apnesi gibi hastalıklarda düzelme',
        'appetite_control' => 'İştah Kontrolü',
        'appetite_control_desc' => 'Açlık hormonu azaldığı için doğal iştah kontrolü',
        'fast_recovery' => 'Hızlı İyileşme',
        'fast_recovery_desc' => 'Laparoskopik yöntem sayesinde 2-3 günde taburcu',

        // Quick Info
        'operation_time' => 'Ameliyat Süresi',
        'operation_time_value' => '45-60 dakika',
        'hospital_duration' => 'Hastanede Kalış',
        'hospital_duration_value' => '2-3 gün',
        'return_work' => 'İşe Dönüş',
        'return_work_value' => '2-3 hafta',
        'weight_loss_amount' => 'Kilo Kaybı',
        'weight_loss_amount_value' => '%60-70 fazla kilo',
        'success_rate' => 'Başarı Oranı',
        'success_rate_value' => '%98',

        // FAQ
        'faq_q1' => 'Ameliyat geri döndürülebilir mi?',
        'faq_a1' => 'Hayır, bu kalıcı bir işlemdir. Midenin bir kısmı kalıcı olarak çıkarıldığı için eski haline getirilemez. Bu nedenle ameliyat kararı vermeden önce detaylı değerlendirme ve danışmanlık önemlidir.',
        'faq_q2' => 'Ameliyat sonrası vitamin kullanmak gerekir mi?',
        'faq_a2' => 'Evet, ameliyat sonrası yaşam boyu vitamin ve mineral takviyesi gerekir. Özellikle B12 vitamini, demir, kalsiyum ve D vitamini takviyeleri düzenli kullanılmalıdır. Doktorunuz size özel vitamin protokolü belirleyecektir.',
        'faq_q3' => 'Ameliyat sonrası hamile kalınabilir mi?',
        'faq_a3' => 'Ameliyat sonrası hamilelik mümkündür ancak hızlı kilo kaybı döneminde hamilelik önerilmez. Genellikle ameliyattan 12-18 ay sonra, kilo kaybı stabilize olduktan sonra hamilelik planlanabilir.',
        'faq_q4' => 'Ameliyat sonrası spor yapabilir miyim?',
        'faq_a4' => 'Ameliyattan 1 ay sonra hafif yürüyüşlerle başlayabilirsiniz. 6-8 hafta sonra doktor onayıyla normal spor aktivitelerine dönebilirsiniz. Düzenli egzersiz, kilo kaybını hızlandırır ve kas kaybını önler.',
    ],
];

// Rinoplasti özel
$lang['rhinoplasty'] = [
    'natural_results' => 'Doğal Sonuçlar',
    'natural_results_desc' => 'Yüz hatlarınızla uyumlu burun şekli elde edin',
    'improved_breathing' => 'Gelişmiş Solunum',
    'improved_breathing_desc' => 'Septum deviasyonu ve solunum problemlerinin düzeltilmesi',
    'advanced_technology' => 'İleri Teknoloji',
    'advanced_technology_desc' => 'Hassas kemik şekillendirme için piezo ultrasonik teknoloji',
    'permanent_results' => 'Kalıcı Sonuçlar',
    'permanent_results_desc' => 'Ömür boyu estetik ve fonksiyonel iyileşme',
    'hospital_discharge' => 'Hastane Taburcu',
    'hospital_discharge_desc' => 'Splint ve bandajlar uygulandı, ağrı yönetimi sağlandı',
    'splint_removal' => 'Splint Çıkarılması',
    'splint_removal_desc' => 'Burun splinti çıkarıldı, şişlik azalmaya başladı',
    'return_to_work' => 'İşe Dönüş',
    'return_to_work_desc' => 'Çoğu şişlik geçti, günlük aktivitelere dönülebilir',
    'final_result' => 'Nihai Sonuç',
    'final_result_desc' => 'Tüm şişlik geçti, nihai burun şekli görünür',
];

// Saç ekimi özel
$lang['hair_transplant'] = [
    'natural_hair_growth' => 'Doğal Saç Büyümesi',
    'natural_hair_growth_desc' => 'Kendi foliküllerinizden kalıcı, doğal görünümlü saç',
    'no_scarring' => 'İz Kalmaması',
    'no_scarring_desc' => 'FUE tekniği doğrusal iz bırakmaz, saç kazıtılabilir',
    'quick_recovery' => 'Hızlı İyileşme',
    'quick_recovery_desc' => '2-3 günde işe dönüş, minimal kesinti',
    'lifetime_results' => 'Ömür Boyu Sonuç',
    'lifetime_results_desc' => 'Nakledilen saç ömür boyu büyür, bakım gerekmez',
    'initial_recovery' => 'İlk İyileşme',
    'initial_recovery_desc' => 'Evde dinlenme, nazik saç yıkama, greftlere dokunmaktan kaçının',
    'return_to_normal' => 'Normale Dönüş',
    'return_to_normal_desc' => 'İşe dönüş, kabuklar düşer, hafif egzersize devam edilebilir',
    'shock_shedding' => 'Şok Dökülme',
    'shock_shedding_desc' => 'Nakledilen saç dökü lebilir (normal), yeni büyüme başlar',
    'full_growth' => 'Tam Saç Büyümesi',
    'full_growth_desc' => 'Tam saç büyümesi görünür, şekillendirilebilir ve kesilebilir',
    'final_result' => 'Nihai Sonuç',
    'final_result_desc' => 'Tam saç yoğunluğu sağlandı, doğal saç çizgisi tamamen görünür',
];

// Göz lazeri özel
$lang['eye_laser'] = [
    'perfect_vision' => 'Mükemmel Görüş',
    'perfect_vision_desc' => 'Çoğu hasta için 20/20 veya daha iyi görüş',
    'glasses_free' => 'Gözlüksüz Yaşam',
    'glasses_free_desc' => 'Artık gözlük veya lens bağımlılığı yok',
    'quick_procedure' => 'Hızlı İşlem',
    'quick_procedure_desc' => 'Göz başına 15-30 dakika, ağrısız tedavi',
    'fast_recovery' => 'Hızlı İyileşme',
    'fast_recovery_desc' => '24 saat içinde görüş iyileşmesi',
    'immediate_recovery' => 'Anında İyileşme',
    'immediate_recovery_desc' => 'Başlangıçta bulanık görüş, koruyucu kalkan kullanın, reçeteli damla',
    'vision_improvement' => 'Görüş İyileşmesi',
    'vision_improvement_desc' => 'Önemli iyileşme, çoğu aktiviteye devam edilebilir',
    'followup_check' => 'Takip Kontrolü',
    'followup_check_desc' => 'Doktor değerlendirmesi, görüş stabilize olmaya devam ediyor',
    'final_vision' => 'Nihai Görüş',
    'final_vision_desc' => 'Görüş tamamen stabilize, nihai sonuç elde edildi',
];

// Diş tedavileri özel
$lang['dental'] = [
    'hollywood_smile' => 'Hollywood Gülüşü',
    'hollywood_smile_desc' => 'Sadece 5-7 günde mükemmel beyaz gülüş',
    'affordable_prices' => 'Uygun Fiyatlar',
    'affordable_prices_desc' => 'Avrupa/ABD\'den %60-70 daha ucuz, aynı kalite',
    'expert_dentists' => 'Uzman Diş Hekimleri',
    'expert_dentists_desc' => 'Uluslararası eğitimli, 10+ yıl deneyimli uzmanlar',
    'lifetime_warranty' => 'Ömür Boyu Garanti',
    'lifetime_warranty_desc' => 'İmplant ve kuronlarda 15 yıla kadar garanti',
    'initial_consultation' => 'İlk Konsültasyon',
    'initial_consultation_desc' => '3D tarama, tedavi planı, gerekirse geçici dişler',
    'main_treatment' => 'Ana Tedavi',
    'main_treatment_desc' => 'İmplant yerleştirme veya veneer hazırlığı, ölçü alınması',
    'final_fitting' => 'Son Takma',
    'final_fitting_desc' => 'Kalıcı dişler takıldı, ısırık ayarı, cilalama',
    'followup' => 'Takip',
    'followup_desc' => 'İsteğe bağlı ücretsiz kontrol, tüm masraflar tarafımızdan',
];

// Estetik cerrahi özel
$lang['aesthetic'] = [
    'natural_results' => 'Doğal Sonuçlar',
    'natural_results_desc' => 'Tamamen doğal görünen ince iyileştirmeler',
    'expert_surgeons' => 'Uzman Cerrahlar',
    'expert_surgeons_desc' => '15+ yıl deneyimli, sertifikalı plastik cerrahlar',
    'safety_first' => 'Önce Güvenlik',
    'safety_first_desc' => 'JCI akredite hastane, en son teknoloji, sıkı protokoller',
    'customized_plans' => 'Kişiselleştirilmiş Planlar',
    'customized_plans_desc' => 'Eşsiz hedeflerinize göre kişiselleştirilmiş tedavi',
    'hospital_recovery' => 'Hastane İyileşmesi',
    'hospital_recovery_desc' => 'Ağrı yönetimi, gerekirse dren çıkarılması, ilk kontrol',
    'home_recovery' => 'Evde İyileşme',
    'home_recovery_desc' => 'Şişlik azalır, dikişler alınır, hafif aktivitelere izin verilir',
    'return_to_normal' => 'Normale Dönüş',
    'return_to_normal_desc' => 'Çoğu şişlik geçti, kademeli olarak işe ve spora dönülebilir',
    'final_results' => 'Nihai Sonuçlar',
    'final_results_desc' => 'Tüm şişlik çözüldü, izler soluyor, nihai şekil görünür',
];

// Zaman işaretleyicileri
$lang['timeline'] = [
    'day_1' => 'Gün 1',
    'day_1_3' => 'Gün 1-3',
    'day_1_2' => 'Gün 1-2',
    'day_3_5' => 'Gün 3-5',
    'day_6_7' => 'Gün 6-7',
    'day_7' => 'Gün 7',
    'week_1' => 'Hafta 1',
    'week_1_2' => 'Hafta 1-2',
    'week_2_3' => 'Hafta 2-3',
    'month_1' => '1 Ay',
    'month_1_2' => 'Ay 1-2',
    'month_2_3' => 'Ay 2-3',
    'month_3_6' => '3-6 Ay',
    'month_6' => '6 Ay',
    'month_6_12' => '6-12 Ay',
    'hours_24_48' => '24-48 Saat',
];

// Hızlı bilgi etiketleri
$lang['info'] = [
    'operation_time' => 'Operasyon Süresi',
    'treatment_time' => 'Tedavi Süresi',
    'hospital_stay' => 'Hastane Kalışı',
    'return_to_work' => 'İşe Dönüş',
    'full_recovery' => 'Tam İyileşme',
    'visible_results' => 'Görünür Sonuçlar',
    'vision_recovery' => 'Görüş İyileşmesi',
    'final_result' => 'Nihai Sonuç',
    'success_rate' => 'Başarı Oranı',
    'hours' => 'Saat',
    'minutes' => 'Dakika',
    'days' => 'Gün',
    'day' => 'Gün',
    'weeks' => 'Hafta',
    'week' => 'Hafta',
    'months' => 'Ay',
    'outpatient' => 'Ayakta Tedavi',
    'same_day' => 'Aynı Gün',
    'immediately' => 'Hemen',
    'return_to_normal' => 'Normal Hayata Dönüş',
];

// Rhinoplasty FAQs
$lang['rhinoplasty_faq'] = [
    'q1' => 'Rinoplasti sonrası görünür iz kalır mı?',
    'a1' => 'Kapalı rinoplasti tekniğinde tüm kesiler burun içinden yapılır, dışarıdan görünür iz kalmaz. Açık rinoplasti tekniğinde ise burun delikleri arasındaki columella bölgesinde oluşan küçük iz zamanla neredeyse görünmez hale gelir.',
    'q2' => 'Nihai sonucu ne zaman görebilirim?',
    'a2' => '7. günde atelin çıkarılmasından sonra önemli bir iyileşme görebilirsiniz, ancak nihai sonuçlar için ince şişliklerin tamamen geçmesi gereken 6-12 ay beklenir. Burun ucunun tam şeklini alması en uzun süreyi alır.',
    'q3' => 'Rinoplasti nefes alma sorunlarını düzeltebilir mi?',
    'a3' => 'Evet, fonksiyonel rinoplasti burun septum eğriliği, büyümüş konka ve kapak problemlerini düzeltebilir. Birçok hasta estetik ve fonksiyonel iyileştirmeleri tek ameliyatta birleştirir.',
    'q4' => 'Piezo rinoplasti nedir?',
    'a4' => 'Piezo ultrasonik rinoplasti, burun kemiklerini çevre yumuşak dokulara zarar vermeden hassas bir şekilde yeniden şekillendirmek için ultrasonik titreşimler kullanır. Bu daha az morarma, daha hızlı iyileşme ve daha kontrollü kemik şekillendirme sağlar.',
];

// Hair Transplant FAQs
$lang['hair_transplant_faq'] = [
    'q1' => 'FUE ve DHI arasındaki fark nedir?',
    'a1' => 'FUE, folikülleri tek tek çıkarır ve sonra ekir. DHI, özel Choi Kalem kullanarak aynı anda çıkarma ve ekim yapar, daha fazla hassasiyet ve greftlere daha az dokunma sağlar. DHI genellikle daha hızlı iyileşme sunar ancak FUE tek seansta daha fazla greft ekebilir.',
    'q2' => 'Kaç grefete ihtiyacım olacak?',
    'a2' => 'Bu, dökülme alanının büyüklüğüne ve istenen yoğunluğa bağlıdır. Orta düzeyde saç kaybı için tipik olarak 2000-4000 greft gerekir. Uzmanlarımız konsültasyon sırasında saç derisi analizi ile özel ihtiyaçlarınızı değerlendirecektir.',
    'q3' => 'Saç ekimi ağrılı mı?',
    'a3' => 'Lokal anestezi kullanılır, bu nedenle işlem sırasında ağrı hissetmezsiniz. Bazı hastalar ekstra konfor için sedasyon seçer. Ameliyattan sonra 2-3 gün hafif rahatsızlık olabilir, ağrı kesici ile kolayca yönetilir.',
    'q4' => 'Saç ekiminden sonra kafamı traş edebilir miyim?',
    'a4' => 'Evet! FUE tekniği ile doğrusal iz yoktur, sadece traşlı kafada bile görünmez küçük noktalar vardır. Saç tamamen çıktıktan sonra 6 ay sonra tamamen traş edebilir veya kısa kestirebilirsiniz.',
];

// Eye Laser FAQs
$lang['eye_laser_faq'] = [
    'q1' => 'Lazer göz ameliyatı için aday mıyım?',
    'a1' => 'İyi adaylar 18+ yaşında, 1+ yıldır stabil görüşe sahip ve hastalıksız sağlıklı gözlere sahip olmalıdır. Hamile veya emziriyor olmamalısınız. Göz hekimlerimiz uygunluğunuzu belirlemek için kapsamlı tarama testleri yapacaktır.',
    'q2' => 'LASIK ve PRK arasındaki fark nedir?',
    'a2' => 'LASIK kornea flebi oluşturur ve altını yeniden şekillendirir (1-2 gün iyileşme). PRK yüzey tabakasını çıkarır ve korneayı yeniden şekillendirir (3-5 gün iyileşme). PRK ince kornea veya aktif yaşam tarzı için daha iyidir, LASIK daha hızlı görsel iyileşme sunar.',
    'q3' => 'Lazer ameliyatından sonra gözlüğe ihtiyacım olacak mı?',
    'a3' => 'Hastaların çoğu 20/20 veya daha iyi görüş elde eder ve uzak mesafe için artık gözlüğe ihtiyaç duymaz. Ancak, 40 yaş üstü kişilerin doğal yaşlanma nedeniyle (presbiopi) hala okuma gözlüğüne ihtiyaçları olabilir. Gerekirse iyileştirme prosedürleri yapılabilir.',
    'q4' => 'Lazer göz ameliyatı kalıcı mı?',
    'a4' => 'Evet, kornea yeniden şekillendirme kalıcıdır. Ancak, 40 sonrası presbiopi (okuma görüşü) veya daha sonraki yaşlarda katarakt gibi doğal yaşa bağlı değişiklikler hala düzeltme gerektirebilir. Hastaların %95\'inden fazlası uzun vadede mükemmel görüş sürdürür.',
];

// Dental FAQs
$lang['dental_faq'] = [
    'q1' => 'Diş implantları ne kadar sürer?',
    'a1' => 'Uygun bakımla diş implantları 20-25 yıl veya hatta ömür boyu sürebilir. Titanyum implant direği çene kemiğinizle kalıcı olarak bütünleşir. Üstteki kron normal aşınma nedeniyle 15-20 yıl sonra değiştirilmesi gerekebilir.',
    'q2' => 'Veneer ve kron arasındaki fark nedir?',
    'a2' => 'Veneerler sadece dişlerin ön yüzünü kaplayan ince kabuklardır, daha fazla doğal diş yapısını korur. Kronlar tüm dişi kaplar, daha fazla koruma sağlar ancak daha fazla diş kesimi gerektirir. Veneerler kozmetik iyileştirmeler için idealdir, kronlar hasarlı dişler için.',
    'q3' => 'Porselen veneerler kompozitten daha mı iyi?',
    'a3' => 'Porselen veneerler daha dayanıklıdır (15-20 yıl vs 5-7 yıl), lekeye dayanıklıdır ve doğal görünümlüdür. Laboratuvar üretimi gerektirir ve daha pahalıdır. Kompozit veneerler tek seansta yapılabilir ve daha uygun fiyatlıdır ancak daha az dayanıklıdır.',
    'q4' => 'Gülüş tasarımı ne kadar sürer?',
    'a4' => 'Türkiye\'de tam Hollywood gülüş tasarımı genellikle 5-7 gün sürer. Bu konsültasyon, diş hazırlığı, geçici veneerler ve son yerleştirmeyi içerir. Verimli dönüşüm için birden fazla diş aynı anda tedavi edilebilir.',
];

// Aesthetic FAQs
$lang['aesthetic_faq'] = [
    'q1' => 'Estetik cerrahi için en iyi yaş nedir?',
    'a1' => 'Tek bir "en iyi" yaş yoktur - prosedüre ve bireysel ihtiyaçlara bağlıdır. Rinoplasti yüz büyümesi tamamlandığında 18 yaşından sonra yapılabilir. Yüz germe tipik olarak 40-50 sonrası yapılır. Konsültasyon yaşınız ne olursa olsun iyi bir aday olup olmadığınızı belirler.',
    'q2' => 'Estetik cerrahi sonuçları ne kadar sürer?',
    'a2' => 'Sonuçlar prosedüre göre değişir. Yüz germe 10-15 yıl, göğüs büyütme 10-20 yıl, liposuction kalıcı olarak yağ hücrelerini çıkarır. Yaşlanma doğal olarak devam eder, ancak ameliyat olmasaydınız olduğunuzdan her zaman daha genç görünürsünüz. Sağlıklı yaşam tarzı sonuçları uzatır.',
    'q3' => 'Görünür iz kalacak mı?',
    'a3' => 'Cerrahlarımız kesikleri doğal kıvrımlarda ve gizli alanlarda yerleştirir. İzler 6-12 ay içinde önemli ölçüde solar. Endoskopik cerrahi gibi modern teknikler iz oluşumunu en aza indirir. Uygun ameliyat sonrası bakım ve iz tedavileri iyileşmeyi daha da iyileştirir.',
    'q4' => 'Ameliyattan sonra ne zaman işe dönebilirim?',
    'a4' => 'İyileşme süresi değişir: Rinoplasti 1-2 hafta, Liposuction 3-7 gün, Yüz germe 2-3 hafta, Göğüs ameliyatı 1-2 hafta. Masabaşı işler genellikle fiziksel işlerden daha erken devam edilebilir. Her prosedür için detaylı iyileşme zaman çizelgeleri sağlıyoruz.',
];

// Obesity FAQs
$lang['obesity_faq'] = [
    'q1' => 'Obezite cerrahisi için kimler uygundur?',
    'a1' => 'Adaylar tipik olarak BMI 40+ veya obeziteye bağlı sağlık sorunları olan BMI 35+ (diyabet, hipertansiyon, uyku apnesi) olmalıdır. Diyet ve egzersizle başarısız olmuş olmalısınız. Kontrendikasyon olmayan 18-65 yaş. Ekibimiz her hastayı bireysel olarak değerlendirir.',
    'q2' => 'Ne kadar kilo vereceğim?',
    'a2' => 'Tüp mide hastaları tipik olarak 12-18 ayda fazla kilonun %60-70\'ini kaybeder. Gastrik bypass hastaları fazla kilonun %70-80\'ini kaybeder. Sonuçlar diyet değişikliklerine, egzersize ve tıbbi rehberliğe bağlılığınıza bağlıdır.',
    'q3' => 'Ameliyattan sonra vitamin almam gerekecek mi?',
    'a3' => 'Evet, ömür boyu vitamin ve mineral takviyesi esastır. Günlük multivitamin, kalsiyum, D vitamini, B12 vitamini ve demir almanız gerekecektir. Düzenli kan testleri seviyelerinizi izler. Diyetisyenlerimiz detaylı takviye protokolleri sağlar.',
    'q4' => 'Tüp mide ameliyatından sonra mide tekrar genişleyebilir mi?',
    'a4' => 'Sürekli olarak aşırı yerseniz mide zamanla biraz genişleyebilir. Ancak asla orijinal boyutuna geri dönmeyecektir. Porsiyon kılavuzlarını takip etmek ve yavaş yemek önemli genişlemeyi önler. Düzenli takipler sonuçları korumaya yardımcı olur.',
];

// Hakkımızda Sayfası
$lang['about'] = [
    'title' => 'Hakkımızda',
    'subtitle' => 'Sağlıklı Yaşam İçin Güvenilir Adresiniz',
    'intro_title' => 'Sağlıkta <span class="gradient-text">Yılların Deneyimi</span>',
    'intro_text_1' => '15 yılı aşkın sağlık turizmi deneyimi ile dünyanın dört bir yanından binlerce uluslararası hastaya hizmet veren güvenilir bir sağlık merkeziyiz.',
    'intro_text_2' => 'JCI akreditasyonu ve uluslararası kalite standartları ile çalışan hastanemiz, en son teknoloji ve uzman tıbbi kadrosuyla güvenli ve konforlu tedavi ortamları sunmaktadır.',
    'intro_text_3' => 'Cerrah, diyetisyen, psikolog ve hemşirelerden oluşan multidisipliner ekibimizle hastalarımıza 360 derece hizmet sunuyoruz.',
    'values_title' => '<span class="gradient-text">Değerlerimiz</span>',
    'value1_title' => 'Hasta Odaklılık',
    'value1_desc' => 'Her hastamız bizim için özeldir. Tedavi sürecinde fiziksel ve psikolojik ihtiyaçlarını önceleyerek, kişiye özel çözümler üretiriz.',
    'value2_title' => 'Güvenilirlik',
    'value2_desc' => 'JCI akreditasyonu ve uluslararası standartlarımızla, hastalarımıza güvenli bir tedavi ortamı sunuyoruz.',
    'value3_title' => 'İnovasyon',
    'value3_desc' => 'En güncel tedavi yöntemlerini ve teknolojileri takip ederek, hastalarımıza en iyi sonuçları sağlıyoruz.',
    'value4_title' => 'Ekip Çalışması',
    'value4_desc' => 'Cerrah, diyetisyen, psikolog ve hemşirelerden oluşan multidisipliner ekibimizle 360 derece hizmet sunuyoruz.',
    'value5_title' => 'Sürekli Gelişim',
    'value5_desc' => 'Ekibimiz düzenli eğitimlerle kendini geliştirerek, dünya standartlarında hizmet vermeye devam ediyor.',
    'value6_title' => 'Etik Değerler',
    'value6_desc' => 'Tıbbi etik ilkelerine bağlı kalarak, hastalarımızın haklarını ve mahremiyetini koruyoruz.',
    'mission_title' => '<span class="gradient-text">Misyonumuz</span>',
    'mission_text' => '"Sağlıkta Dünya Markası Olma" vizyonuyla, medikal altyapısı ve etik ilkeleri esas alarak, hasta ve çalışan güvenliğini uluslararası kalite standartlarında uygulamak. Obezite ve metabolik hastalıklarla mücadelede, hastalarımıza en güncel tedavi yöntemlerini sunarak, onların sağlıklı ve kaliteli bir yaşama kavuşmalarını sağlamak.',
    'vision_title' => '<span class="gradient-text">Vizyonumuz</span>',
    'vision_text' => '"Sağlık Artık Daha Değerli" felsefesiyle çıkılan bu yolda kaliteli hizmet anlayışından ödün vermeden, doğaya, çalışana ve hastaya verilen değeri her zaman ön planda tutarak sağlık bakım hizmetlerini sürdürmek. Türkiye\'de ve dünyada obezite cerrahisi alanında referans merkez olmak.',
    'team_title' => '<span class="gradient-text">Uzman</span> Kadromuz',
    'team_subtitle' => 'Alanında deneyimli, uluslararası sertifikalı uzman doktorlarımız',
];

// Süreç Sayfası
$lang['process'] = [
    // For process page (surec.php)
    'title' => 'Tedavi Süreci',
    'subtitle' => 'İlk görüşmeden tedavi sonrası desteğe adım adım rehber',
    'step1_title' => 'İlk Görüşme',
    'step1_desc' => 'WhatsApp, telefon veya görüntülü görüşme ile uzman ekibimizle ücretsiz danışma. Tıbbi değerlendirme ve tedavi planlaması.',
    'step2_title' => 'Tedavi Öncesi Değerlendirme',
    'step2_desc' => 'Gerekli testler ve muayeneler. Sağlık durumunuzun değerlendirilmesi. Ameliyat uygunluğunun belirlenmesi.',
    'step3_title' => 'Seyahat Planlaması',
    'step3_desc' => 'Uçak bileti düzenlemesi. Havaalanı transfer hizmeti. Otel konaklama desteği.',
    'step4_title' => 'Hastane Kabulü',
    'step4_desc' => 'Havaalanında karşılama. Otel veya hastaneye transfer. Son ameliyat öncesi kontroller.',
    'step5_title' => 'Ameliyat Günü',
    'step5_desc' => 'Uzman ekip tarafından ameliyat. Konforlu ameliyat sonrası konaklama. 7/24 sağlık desteği.',
    'step6_title' => 'Tedavi Sonrası Takip',
    'step6_desc' => 'Düzenli sağlık kontrolleri. Diyetisyen ve psikolog desteği. Ömür boyu takip hizmeti.',
    'why_choose_title' => 'Neden <span class="gradient-text">Bizi Seçmelisiniz?</span>',
    'advantage1' => 'JCI Akrediteli Hastane',
    'advantage2' => 'Uluslararası Sertifikalı Doktorlar',
    'advantage3' => 'Son Teknoloji Ekipman',
    'advantage4' => 'Her Şey Dahil Paketler',
    'advantage5' => 'Havaalanı VIP Transfer',
    'advantage6' => 'Çok Dilli Destek',

    // For homepage process section (includes/home.php)
    'badge' => 'Süreç',
    'description' => 'İlk görüşmeden sağlıklı yaşama kadar yanınızdayız',
    'steps' => [
        'step1' => [
            'title' => 'İlk Değerlendirme',
            'description' => 'Detaylı muayene, kan tahlilleri ve vücut analizi ile uygunluk değerlendirmesi',
        ],
        'step2' => [
            'title' => 'Tedavi Hazırlığı',
            'description' => 'Beslenme programı, psikolojik destek ve tedavi öncesi testler',
        ],
        'step3' => [
            'title' => 'Tedavi',
            'description' => 'Minimal invaziv tekniklerle modern ve güvenli tıbbi prosedürler',
        ],
        'step4' => [
            'title' => 'Takip ve Destek',
            'description' => 'Yaşam boyu beslenme desteği ve düzenli kontroller',
        ],
    ],
];

// SSS Sayfası
$lang['faq_page'] = [
    'title' => 'Sıkça Sorulan Sorular',
    'subtitle' => 'Tedavi süreçleri hakkında en çok merak edilen sorular ve cevapları',
    'general_title' => 'Genel Sorular',
    'treatment_title' => 'Tedavi Soruları',
    'travel_title' => 'Seyahat ve Konaklama',
    'cost_title' => 'Maliyet ve Ödeme',
];

// İletişim Sayfası
$lang['contact'] = [
    'title' => 'İletişim',
    'subtitle' => '7/24 hasta desteği ile obezite tedavisinde yanınızdayız',
    'info_title' => 'İletişim <span class="gradient-text">Bilgilerimiz</span>',
    'phone_title' => 'Telefon',
    'phone_subtitle' => '7/24 Hasta Desteği',
    'whatsapp_title' => 'WhatsApp',
    'whatsapp_subtitle' => 'Hızlı İletişim',
    'email_title' => 'E-posta',
    'email_subtitle' => 'Bilgi ve Randevu',
    'address_title' => 'Adres',
    'form_title' => 'Online <span class="gradient-text">Başvuru Formu</span>',
    'name_label' => 'Adınız Soyadınız',
    'phone_label' => 'Telefon Numaranız',
    'email_label' => 'E-posta Adresiniz',
    'weight_label' => 'Kilonuz (kg)',
    'height_label' => 'Boyunuz (cm)',
    'treatment_label' => 'İlgilendiğiniz Tedavi',
    'message_label' => 'Mesajınız',
    'consent_label' => 'KVKK metnini okudum, kişisel verilerimin işlenmesini kabul ediyorum.',
    'submit_btn' => 'Formu Gönder',
    'quick_contact_title' => 'Size Nasıl <span class="gradient-text">Yardımcı Olabiliriz?</span>',
    'online_appointment' => 'Online Randevu',
    'bmi_calculator' => 'BMI Hesaplama',
    'online_meeting' => 'Online Görüşme',
];

// Doktorlar Sayfası
$lang['doctors'] = [
    'title' => 'Doktorlarımız',
    'subtitle' => 'Alanında deneyimli, uluslararası sertifikalı uzman doktorlarımız',
    'specialization' => 'Uzmanlık Alanı',
    'experience' => 'Deneyim',
    'education' => 'Eğitim',
    'certifications' => 'Sertifikalar',
];

// Blog Sayfası
$lang['blog'] = [
    'title' => 'Blog',
    'subtitle' => 'Sağlık, beslenme ve tedavi süreçleri hakkında yazılar',
    'read_more' => 'Devamını Oku',
    'all_categories' => 'Tüm Kategoriler',
    'search_placeholder' => 'Yazı ara...',
];

// Footer ek
$lang['footer']['read_article'] = 'Yazıyı Oku';
$lang['footer']['minutes_read'] = 'dk okuma';
$lang['footer']['published_on'] = 'Yayınlanma Tarihi';
$lang['footer']['share_article'] = 'Bu Yazıyı Paylaş';

// Genel terimler
$lang['common']['last_updated'] = 'Son Güncelleme';
$lang['common']['introduction'] = 'Giriş';
$lang['common']['email'] = 'E-posta';
$lang['common']['phone'] = 'Telefon';
$lang['common']['address'] = 'Adres';
$lang['common']['years'] = 'yıl';
$lang['common']['steps'] = 'Adımlar';
$lang['common']['and'] = 've';
$lang['common']['advantages'] = 'Avantajlar';
$lang['common']['our_mission'] = 'Misyonumuz';
$lang['common']['our_vision'] = 'Vizyonumuz';
$lang['common']['accredited'] = 'Akrediteli';
$lang['common']['close'] = 'Kapat';

// CTA metinleri
$lang['cta']['title'] = '<span class="gradient-text" style="color: #ffffff;-webkit-text-fill-color: white;">Dönüşümünüze</span> Bugün Başlayın';
$lang['cta']['subtitle'] = 'Uzman ekibimizden ücretsiz danışmanlık alın';
$lang['cta']['still_have_questions'] = 'Hala Sorularınız mı Var?';
$lang['cta']['contact_us_subtitle'] = 'Uzman ekibimiz size yardımcı olmak için burada';
$lang['cta']['meet_doctors'] = '<span class="gradient-text">Uzman</span> Doktorlarımızla Tanışın';
$lang['cta']['book_consultation'] = 'Tıbbi ekibimizle ücretsiz danışma rezervasyonu yapın';
$lang['cta']['interested_treatment'] = 'Bu <span class="gradient-text">Tedavi</span> ile İlgileniyor musunuz?';
$lang['cta']['contact_experts'] = 'Detaylı bilgi için uzmanlarımızla iletişime geçin';

// Yasal sayfa çevirileri
$lang['legal']['privacy_intro'] = 'gizliliğinizi korumaya kararlıdır. Bu Gizlilik Politikası, kişisel bilgilerinizi nasıl topladığımızı, kullandığımızı ve koruduğumuzu açıklar.';
$lang['legal']['information_we_collect'] = 'Topladığımız Bilgiler';
$lang['legal']['collect_description'] = 'Doğrudan bize sağladığınız bilgileri topluyoruz, bunlar:';
$lang['legal']['personal_info'] = 'Kişisel bilgiler (ad, e-posta, telefon numarası)';
$lang['legal']['medical_info'] = 'Tıbbi bilgiler (boy, kilo, sağlık durumu)';
$lang['legal']['contact_info'] = 'İletişim tercihleri ve iletişim geçmişi';
$lang['legal']['technical_info'] = 'Teknik bilgiler (IP adresi, tarayıcı türü, çerezler)';
$lang['legal']['how_we_use'] = 'Bilgilerinizi Nasıl Kullanırız';
$lang['legal']['use_description'] = 'Topladığımız bilgileri hizmetlerimizi sağlamak, sürdürmek ve geliştirmek, sizinle iletişim kurmak ve güvenliğinizi sağlamak için kullanırız.';
$lang['legal']['data_security'] = 'Veri Güvenliği';
$lang['legal']['security_description'] = 'Kişisel verilerinizi yetkisiz erişime, değişikliğe veya yok etmeye karşı korumak için uygun teknik ve organizasyonel önlemler uyguluyoruz.';
$lang['legal']['your_rights'] = 'Haklarınız';
$lang['legal']['rights_description'] = 'Kişisel verilerinize erişme, düzeltme, silme veya işlemenin kısıtlanması hakkına sahipsiniz. Ayrıca işleme itiraz edebilir ve veri taşınabilirliği talep edebilirsiniz.';
$lang['legal']['contact_us'] = 'Bize Ulaşın';
$lang['legal']['contact_description'] = 'Bu Gizlilik Politikası hakkında sorularınız varsa, lütfen bizimle iletişime geçin:';
$lang['legal']['data_controller'] = 'Veri Sorumlusu';
$lang['legal']['controller_description'] = 'işlediğimiz kişisel veriler için veri sorumlusu olarak hareket eder.';
$lang['legal']['purpose_of_processing'] = 'İşleme Amacı';
$lang['legal']['purpose_description'] = 'Kişisel verilerinizi sağlık hizmetleri sağlama, randevu planlama, tedavi planlama ve hasta desteği amaçları için işliyoruz.';
$lang['legal']['legal_basis'] = 'İşleme Yasal Dayanağı';
$lang['legal']['legal_basis_description'] = 'Kişisel verileri rızanıza, sözleşme gerekliliğine, yasal yükümlülüklere ve meşru menfaatlere dayalı olarak işliyoruz.';
$lang['legal']['data_retention'] = 'Veri Saklama';
$lang['legal']['retention_description'] = 'Kişisel verilerinizi yalnızca toplandığı amaçları yerine getirmek ve yasal yükümlülüklere uymak için gerekli olduğu sürece saklıyoruz.';
$lang['legal']['data_subject_rights'] = 'Veri Sahibi Hakları';
$lang['legal']['right_to_access'] = 'Kişisel verilerinize erişim hakkı';
$lang['legal']['right_to_rectification'] = 'Hatalı verileri düzeltme hakkı';
$lang['legal']['right_to_erasure'] = 'Silme hakkı ("unutulma hakkı")';
$lang['legal']['right_to_restriction'] = 'İşlemenin kısıtlanması hakkı';
$lang['legal']['right_to_portability'] = 'Veri taşınabilirliği hakkı';
$lang['legal']['right_to_object'] = 'İşlemeye itiraz hakkı';
$lang['legal']['contact_info'] = 'İletişim Bilgileri';
$lang['legal']['acceptance'] = 'Şartların Kabulü';
$lang['legal']['acceptance_description'] = 'Bu web sitesine erişerek ve kullanarak, bu sözleşmenin hüküm ve koşullarına bağlı olmayı kabul edersiniz.';
$lang['legal']['use_of_website'] = 'Web Sitesi Kullanımı';
$lang['legal']['website_use_description'] = 'Web sitemizi yalnızca yasal amaçlar için kullanabilirsiniz. Web sitemize zarar veren veya kullanılabilirliğini engelleyen herhangi bir şekilde kullanmamalısınız.';
$lang['legal']['intellectual_property'] = 'Fikri Mülkiyet';
$lang['legal']['ip_description'] = 'Bu web sitesindeki metin, grafikler, logolar ve görseller dahil tüm içerik şirketin mülküdür ve telif hakkı yasalarıyla korunmaktadır.';
$lang['legal']['medical_disclaimer'] = 'Tıbbi Sorumluluk Reddi';
$lang['legal']['medical_disclaimer_text'] = 'Bu web sitesinde sağlanan bilgiler yalnızca bilgilendirme amaçlıdır ve tıbbi tavsiye teşkil etmez. Her zaman doktorunuzun veya nitelikli sağlık hizmeti sağlayıcınızın tavsiyesini alın.';
$lang['legal']['limitation_liability'] = 'Sorumluluk Sınırlaması';
$lang['legal']['liability_description'] = 'Hizmetlerimizin kullanımından veya kullanılamamasından kaynaklanan dolaylı, arızi, özel veya sonuç olarak ortaya çıkan zararlardan sorumlu olmayacağız.';
$lang['legal']['modifications'] = 'Şartlarda Değişiklikler';
$lang['legal']['modifications_description'] = 'Bu şartları her zaman değiştirme hakkını saklı tutarız. Değişiklikler web sitesinde yayınlandığı anda geçerli olacaktır.';
$lang['legal']['contact_information'] = 'İletişim Bilgileri';
$lang['legal']['questions_description'] = 'Bu Kullanım Şartları hakkında sorularınız varsa, lütfen bizimle iletişime geçin:';
