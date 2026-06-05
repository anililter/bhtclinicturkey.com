/**
 * ====================================================
 * HEC TURKEY - STRUCTURED DATA (Schema.org)
 * SEO ve Google Rich Results için yapılandırılmış veri
 * ====================================================
 *
 * Google Search, Google Maps ve diğer arama motorları için
 * zengin sonuçlar (Rich Results) sağlar.
 *
 * İçerik:
 * - Organization Schema
 * - Medical Business Schema
 * - FAQ Schema
 * - Breadcrumb Schema
 * - Medical Procedure Schema
 * - Local Business Schema
 */

(function() {
    'use strict';

    // ====================================================
    // KONFİGÜRASYON
    // Bu değerler config.php'den dinamik olarak gelecek
    // ====================================================

    const CONFIG = {
        siteName: 'Hec Turkey',
        siteUrl: 'https://hecturkey.com',
        logo: 'https://hecturkey.com/assets/images/logo.png',
        phone: '+908501234567',
        email: 'info@hecturkey.com',
        address: {
            streetAddress: 'Nişantaşı, Teşvikiye Caddesi No:123',
            addressLocality: 'İstanbul',
            addressRegion: 'Şişli',
            postalCode: '34000',
            addressCountry: 'TR'
        },
        social: {
            facebook: 'https://facebook.com/hecturkey',
            instagram: 'https://instagram.com/hecturkey',
            twitter: 'https://twitter.com/hecturkey',
            youtube: 'https://youtube.com/@hecturkey',
            linkedin: 'https://linkedin.com/company/hecturkey'
        },
        languages: ['Turkish', 'English', 'German', 'French', 'Arabic', 'Russian']
    };

    // ====================================================
    // STRUCTURED DATA SCHEMAS
    // ====================================================

    /**
     * 1. ORGANIZATION SCHEMA
     * Firma bilgileri, sosyal medya, iletişim
     */
    const organizationSchema = {
        "@context": "https://schema.org",
        "@type": "MedicalOrganization",
        "@id": CONFIG.siteUrl + "/#organization",
        "name": CONFIG.siteName,
        "alternateName": CONFIG.siteName + " Sağlık Turizmi",
        "url": CONFIG.siteUrl,
        "logo": {
            "@type": "ImageObject",
            "url": CONFIG.logo,
            "width": 250,
            "height": 80
        },
        "description": "Türkiye'nin güvenilir sağlık turizmi merkezi. JCI akrediteli hastaneler, uzman doktorlar ve modern tedavi yöntemleri.",
        "contactPoint": [
            {
                "@type": "ContactPoint",
                "telephone": CONFIG.phone,
                "contactType": "customer service",
                "availableLanguage": CONFIG.languages,
                "areaServed": "Worldwide",
                "contactOption": "TollFree"
            },
            {
                "@type": "ContactPoint",
                "telephone": CONFIG.phone,
                "contactType": "sales",
                "availableLanguage": CONFIG.languages,
                "areaServed": "Worldwide"
            }
        ],
        "email": CONFIG.email,
        "address": {
            "@type": "PostalAddress",
            "streetAddress": CONFIG.address.streetAddress,
            "addressLocality": CONFIG.address.addressLocality,
            "addressRegion": CONFIG.address.addressRegion,
            "postalCode": CONFIG.address.postalCode,
            "addressCountry": CONFIG.address.addressCountry
        },
        "sameAs": [
            CONFIG.social.facebook,
            CONFIG.social.instagram,
            CONFIG.social.twitter,
            CONFIG.social.youtube,
            CONFIG.social.linkedin
        ],
        "medicalSpecialty": [
            "Bariatric Surgery",
            "Plastic Surgery",
            "Hair Transplantation",
            "Ophthalmology",
            "Dentistry"
        ]
    };

    /**
     * 2. LOCAL BUSINESS SCHEMA
     * Yerel işletme bilgileri - Google Maps için
     */
    const localBusinessSchema = {
        "@context": "https://schema.org",
        "@type": "MedicalClinic",
        "@id": CONFIG.siteUrl + "/#business",
        "name": CONFIG.siteName + " Sağlık Turizmi Merkezi",
        "image": [
            CONFIG.siteUrl + "/assets/images/clinic-1.jpg",
            CONFIG.siteUrl + "/assets/images/clinic-2.jpg",
            CONFIG.siteUrl + "/assets/images/clinic-3.jpg"
        ],
        "url": CONFIG.siteUrl,
        "telephone": CONFIG.phone,
        "email": CONFIG.email,
        "priceRange": "₺₺₺",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": CONFIG.address.streetAddress,
            "addressLocality": CONFIG.address.addressLocality,
            "addressRegion": CONFIG.address.addressRegion,
            "postalCode": CONFIG.address.postalCode,
            "addressCountry": CONFIG.address.addressCountry
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 41.0082,
            "longitude": 28.9784
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday"
            ],
            "opens": "00:00",
            "closes": "23:59"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "1247",
            "bestRating": "5",
            "worstRating": "1"
        }
    };

    /**
     * 3. MEDICAL PROCEDURES SCHEMA
     * Tedavi prosedürleri
     */
    const medicalProcedures = [
        {
            "@context": "https://schema.org",
            "@type": "MedicalProcedure",
            "name": "Tüp Mide Ameliyatı (Sleeve Gastrectomy)",
            "alternateName": ["Sleeve Gastrectomy", "Gastric Sleeve", "Mide Küçültme"],
            "description": "Laparoskopik yöntemle midenin %75-80'inin çıkarılması ile kalıcı kilo kaybı sağlayan obezite cerrahisi yöntemi.",
            "procedureType": "Surgical",
            "howPerformed": "Laparoskopik (kapalı) cerrahi yöntem",
            "preparation": "Ameliyat öncesi testler, diyet programı, psikolojik değerlendirme ve medikal check-up",
            "followup": "Ameliyat sonrası yaşam boyu takip, diyet desteği ve psikolojik destek",
            "bodyLocation": {
                "@type": "AnatomicalStructure",
                "name": "Mide"
            },
            "typicalTest": ["Kan testleri", "EKG", "Akciğer grafisi", "Endoskopi", "USG"],
            "outcome": "Fazla kilonun %60-70'inin 12-18 ay içinde kaybı"
        },
        {
            "@context": "https://schema.org",
            "@type": "MedicalProcedure",
            "name": "Gastrik Bypass",
            "alternateName": ["Roux-en-Y Gastric Bypass", "Mide By-Pass"],
            "description": "Mide küçültme ve ince bağırsak yeniden yönlendirmesi ile yapılan en etkili obezite cerrahisi yöntemi.",
            "procedureType": "Surgical",
            "howPerformed": "Laparoskopik cerrahi yöntem",
            "preparation": "Kapsamlı medikal değerlendirme, diyet programı ve psikolojik hazırlık",
            "followup": "Yaşam boyu takip, vitamin desteği ve beslenme danışmanlığı",
            "bodyLocation": ["Mide", "İnce bağırsak"],
            "outcome": "Fazla kilonun %70-80'inin kaybı ve eşlik eden hastalıklarda iyileşme"
        },
        {
            "@context": "https://schema.org",
            "@type": "MedicalProcedure",
            "name": "Rinoplasti (Burun Estetiği)",
            "alternateName": ["Rhinoplasty", "Nose Job", "Burun Ameliyatı"],
            "description": "Estetik ve fonksiyonel burun şekillendirme ameliyatı. Doğal görünümlü sonuçlar.",
            "procedureType": "Surgical",
            "howPerformed": "Açık veya kapalı teknik cerrahi",
            "preparation": "Medikal testler ve 3D simülasyon",
            "followup": "1 yıl kontrol ve takip",
            "bodyLocation": "Burun"
        },
        {
            "@context": "https://schema.org",
            "@type": "MedicalProcedure",
            "name": "Saç Ekimi (Hair Transplant)",
            "alternateName": ["Hair Transplantation", "FUE", "DHI"],
            "description": "FUE ve DHI tekniği ile doğal saç ekimi. Kalıcı sonuçlar.",
            "procedureType": "Surgical",
            "howPerformed": "FUE (Follicular Unit Extraction) veya DHI (Direct Hair Implantation)",
            "preparation": "Saç ve sakalın analizi, kan testleri",
            "followup": "12 ay takip ve kontrol",
            "bodyLocation": ["Saç derisi", "Sakal", "Kaş"]
        }
    ];

    /**
     * 4. FAQ SCHEMA
     * Sık sorulan sorular - Google'da direkt gösterilir
     */
    const faqSchema = {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "Obezite ameliyatı için uygun muyum?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Vücut kitle indeksiniz (BMI) 35'in üzerindeyse veya 30-35 arasında olup obeziteye bağlı hastalıklarınız varsa (diyabet, hipertansiyon, uyku apnesi vb.) ameliyat için uygun bir adaysınız. Ücretsiz konsültasyon ile durumunuzu değerlendirebiliriz."
                }
            },
            {
                "@type": "Question",
                "name": "Ameliyat sonrası ne kadar kilo verebilirim?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Tüp mide ameliyatında fazla kilonuzun %60-70'ini, gastrik bypass ameliyatında ise %70-80'ini 12-18 ay içinde kaybedebilirsiniz. Sonuçlar kişiden kişiye değişiklik gösterebilir."
                }
            },
            {
                "@type": "Question",
                "name": "Türkiye'de tedavi güvenli mi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Türkiye, JCI akrediteli hastaneleri, deneyimli uzman doktorları ve modern altyapısı ile sağlık turizminde dünya lideridir. Tüm işlemlerimiz uluslararası kalite standartlarında gerçekleştirilir."
                }
            },
            {
                "@type": "Question",
                "name": "Paket fiyatlar neleri kapsar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Paket fiyatlarımız ameliyat, hastane masrafları, ilaçlar, testler, otel konaklama, VIP transfer ve 7/24 hasta desteğini kapsar. Detaylı fiyat bilgisi için ücretsiz danışmanlık alabilirsiniz."
                }
            },
            {
                "@type": "Question",
                "name": "Saç ekimi kalıcı mı?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Evet, FUE ve DHI yöntemi ile yapılan saç ekimi kalıcıdır. Ekilen saçlar kendi saçlarınız gibi büyür, kesilir ve şekillendirilebilir. Sonuçlar 12 ay içinde tam olarak görülür."
                }
            },
            {
                "@type": "Question",
                "name": "Rinoplasti sonrası iyileşme süreci nasıl?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Rinoplasti sonrası 7-10 gün sosyal hayata dönüş mümkündür. Şişlik ve morluklar 2 hafta içinde azalır. Kesin sonuç 6-12 ay içinde şekillenir. Ameliyat sonrası detaylı bakım talimatları verilir."
                }
            },
            {
                "@type": "Question",
                "name": "Göz lazer ameliyatı acı verir mi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Göz lazer ameliyatı damla anestezi ile yapılır ve ağrısızdır. İşlem 10-15 dakika sürer. Ameliyat sonrası hafif batma ve sulanma olabilir, bu 24 saat içinde geçer."
                }
            },
            {
                "@type": "Question",
                "name": "Yurtdışından geliyorum, süreç nasıl işler?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Havaalanından itibaren tüm süreçte yanınızdayız. VIP transfer, tercüman eşliğinde konsültasyon, testler, ameliyat, otel konaklama ve tekrar havaalanına transfer hizmetimiz mevcuttur. Tüm süreç 3-7 gün arasında tamamlanır."
                }
            }
        ]
    };

    /**
     * 5. BREADCRUMB SCHEMA
     * Sayfa breadcrumb'ları
     */
    function getBreadcrumbSchema() {
        const path = window.location.pathname;
        const parts = path.split('/').filter(p => p);

        const items = [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Ana Sayfa",
                "item": CONFIG.siteUrl
            }
        ];

        let currentPath = CONFIG.siteUrl;
        parts.forEach((part, index) => {
            currentPath += '/' + part;
            items.push({
                "@type": "ListItem",
                "position": index + 2,
                "name": formatBreadcrumbName(part),
                "item": currentPath
            });
        });

        return {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": items
        };
    }

    /**
     * 6. WEBSITE SCHEMA
     * Genel site bilgileri
     */
    const websiteSchema = {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "@id": CONFIG.siteUrl + "/#website",
        "url": CONFIG.siteUrl,
        "name": CONFIG.siteName,
        "description": "Türkiye'de sağlık turizmi. Obezite cerrahisi, rinoplasti, saç ekimi, göz lazer, diş tedavisi ve estetik cerrahi. JCI akrediteli hastaneler.",
        "publisher": {
            "@id": CONFIG.siteUrl + "/#organization"
        },
        "potentialAction": {
            "@type": "SearchAction",
            "target": {
                "@type": "EntryPoint",
                "urlTemplate": CONFIG.siteUrl + "/ara?q={search_term_string}"
            },
            "query-input": "required name=search_term_string"
        },
        "inLanguage": ["tr-TR", "en-US", "de-DE", "fr-FR", "ar-SA"]
    };

    /**
     * 7. MEDICAL BUSINESS / HEALTH & BEAUTY BUSINESS
     */
    const healthBusinessSchema = {
        "@context": "https://schema.org",
        "@type": "HealthAndBeautyBusiness",
        "name": CONFIG.siteName,
        "url": CONFIG.siteUrl,
        "telephone": CONFIG.phone,
        "address": {
            "@type": "PostalAddress",
            "streetAddress": CONFIG.address.streetAddress,
            "addressLocality": CONFIG.address.addressLocality,
            "addressCountry": CONFIG.address.addressCountry
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Sağlık Turizmi Hizmetleri",
            "itemListElement": [
                {
                    "@type": "OfferCatalog",
                    "name": "Obezite Cerrahisi",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Tüp Mide Ameliyatı"
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Gastrik Bypass"
                            }
                        }
                    ]
                },
                {
                    "@type": "OfferCatalog",
                    "name": "Plastik Cerrahi",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Rinoplasti"
                            }
                        }
                    ]
                }
            ]
        }
    };

    // ====================================================
    // HELPER FUNCTIONS
    // ====================================================

    /**
     * Schema'yı sayfaya ekle
     */
    function insertSchema(schema, id) {
        const script = document.createElement('script');
        script.type = 'application/ld+json';
        script.id = id || 'structured-data-' + Date.now();
        script.textContent = JSON.stringify(schema);
        document.head.appendChild(script);
    }

    /**
     * Breadcrumb ismini formatla
     */
    function formatBreadcrumbName(slug) {
        const names = {
            'obezite': 'Obezite Cerrahisi',
            'rinoplasti': 'Rinoplasti',
            'sac-ekimi': 'Saç Ekimi',
            'goz-lazer': 'Göz Lazer Tedavisi',
            'dis-tedavisi': 'Diş Tedavileri',
            'estetik': 'Estetik Cerrahi',
            'hakkimizda': 'Hakkımızda',
            'iletisim': 'İletişim',
            'fiyatlar': 'Fiyatlar',
            'sss': 'Sık Sorulan Sorular'
        };

        return names[slug] || slug.charAt(0).toUpperCase() + slug.slice(1).replace(/-/g, ' ');
    }

    /**
     * Sayfa tipine göre uygun schema'ları ekle
     */
    function initializeStructuredData() {
        const path = window.location.pathname.toLowerCase();

        // Her sayfada: Organization, Website
        insertSchema(organizationSchema, 'schema-organization');
        insertSchema(websiteSchema, 'schema-website');

        // Ana sayfa
        if (path === '/' || path === '/index.php' || path === '/index.html' || path === '') {
            insertSchema(localBusinessSchema, 'schema-local-business');
            insertSchema(healthBusinessSchema, 'schema-health-business');
            insertSchema(faqSchema, 'schema-faq');

            // Dev log
            console.log('📋 Structured Data: Homepage schemas loaded');
        }

        // Tedavi sayfaları
        if (path.includes('obezite') || path.includes('obesity')) {
            insertSchema(medicalProcedures[0], 'schema-procedure-sleeve');
            insertSchema(medicalProcedures[1], 'schema-procedure-bypass');
            insertSchema(getBreadcrumbSchema(), 'schema-breadcrumb');
            console.log('📋 Structured Data: Obesity treatment schemas loaded');
        }

        if (path.includes('rinoplasti') || path.includes('rhinoplasty')) {
            insertSchema(medicalProcedures[2], 'schema-procedure-rhinoplasty');
            insertSchema(getBreadcrumbSchema(), 'schema-breadcrumb');
            console.log('📋 Structured Data: Rhinoplasty schemas loaded');
        }

        if (path.includes('sac-ekimi') || path.includes('hair')) {
            insertSchema(medicalProcedures[3], 'schema-procedure-hair');
            insertSchema(getBreadcrumbSchema(), 'schema-breadcrumb');
            console.log('📋 Structured Data: Hair transplant schemas loaded');
        }

        // FAQ sayfası
        if (path.includes('sss') || path.includes('faq')) {
            insertSchema(faqSchema, 'schema-faq');
            insertSchema(getBreadcrumbSchema(), 'schema-breadcrumb');
            console.log('📋 Structured Data: FAQ schemas loaded');
        }

        // Diğer sayfalar - Breadcrumb
        if (path !== '/' && path !== '') {
            insertSchema(getBreadcrumbSchema(), 'schema-breadcrumb');
        }

        // Dev log
        if (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') {
            console.log('%c📋 Structured Data Loaded', 'color: #0066FF; font-weight: bold;');
            console.log('Path:', path);
        }
    }

    // ====================================================
    // INITIALIZE
    // ====================================================

    // DOM yüklendiğinde çalıştır
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeStructuredData);
    } else {
        initializeStructuredData();
    }

    // ====================================================
    // EXPORT FOR EXTERNAL USE (Opsiyonel)
    // ====================================================

    window.HecTurkeyStructuredData = {
        insertSchema: insertSchema,
        schemas: {
            organization: organizationSchema,
            localBusiness: localBusinessSchema,
            medicalProcedures: medicalProcedures,
            faq: faqSchema,
            website: websiteSchema,
            healthBusiness: healthBusinessSchema
        },
        init: initializeStructuredData
    };

})();
