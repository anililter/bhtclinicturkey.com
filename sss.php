<?php
// Dil sistemini yükle
require_once 'lang.php';

// Config dosyasını yükle
require_once 'config.php';

// Page configuration
$pageTitle = t('faq_page.title') . ' - ' . $config['site']['name'];
$pageDescription = t('faq_page.subtitle');
$pageKeywords = 'FAQ, frequently asked questions, medical questions';

// Include header
require_once 'includes/header.php';

// Get all FAQs from different treatments
$allFaqs = [];

// Add FAQs from each treatment
foreach (['rhinoplasty', 'hair_transplant', 'eye_laser', 'dental', 'aesthetic', 'obesity'] as $treatment) {
    $treatmentFaqs = t($treatment . '_faq');
    if ($treatmentFaqs !== null && is_array($treatmentFaqs)) {
        $treatmentName = t('treatments')[$treatment]['name'] ?? $treatment;

        for ($i = 1; $i <= 4; $i++) {
            if (isset($treatmentFaqs['q' . $i])) {
                $allFaqs[] = [
                    'category' => $treatmentName,
                    'question' => $treatmentFaqs['q' . $i],
                    'answer' => $treatmentFaqs['a' . $i]
                ];
            }
        }
    }
}
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

    /* FAQ Section */
    .faq-section {
        padding: 80px 0;
    }

    .faq-container {
        max-width: 900px;
        margin: 0 auto;
    }

    .faq-item {
        background: var(--white);
        border-radius: 15px;
        margin-bottom: 20px;
        box-shadow: var(--shadow-md);
        overflow: hidden;
        transition: var(--transition);
    }

    .faq-item:hover {
        box-shadow: var(--shadow-lg);
    }

    .faq-question {
        padding: 25px 30px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        background: var(--white);
        transition: var(--transition);
    }

    .faq-question:hover {
        background: var(--gray-100);
    }

    .faq-question h3 {
        font-size: 1.125rem;
        margin: 0;
        color: var(--dark-color);
    }

    .faq-icon {
        width: 35px;
        height: 35px;
        background: var(--gradient-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--white);
        font-size: 1.25rem;
        flex-shrink: 0;
        transition: var(--transition);
    }

    .faq-item.active .faq-icon {
        transform: rotate(45deg);
    }

    .faq-answer {
        display: none !important;
        overflow: hidden;
    }

    .faq-answer-content {
        padding: 0 30px 25px;
        color: var(--gray-600);
        line-height: 1.8;
    }

    .faq-item.active .faq-answer {
        display: block !important;
        animation: fadeIn 0.3s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .faq-category {
        display: inline-block;
        background: rgba(0, 102, 255, 0.1);
        color: var(--primary-color);
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
        margin-bottom: 10px;
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
    @media (max-width: 768px) {
        .page-hero h1 {
            font-size: 2rem;
        }

        .faq-question {
            padding: 20px;
        }

        .faq-answer-content {
            padding: 0 20px 20px;
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
                <span><?= t('faq_page.title') ?></span>
            </nav>
            <h1><?= t('faq_page.title') ?></h1>
            <p><?= t('faq_page.subtitle') ?></p>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><?= t('nav.faq') ?></span>
            <h2 class="section-title"><?= t('faq_page.title') ?></h2>
        </div>

        <div class="faq-container">
            <?php foreach ($allFaqs as $index => $faq): ?>
            <div class="faq-item" data-index="<?= $index ?>">
                <div class="faq-question" style="cursor: pointer;">
                    <div>
                        <span class="faq-category"><?= $faq['category'] ?></span>
                        <h3><?= $faq['question'] ?></h3>
                    </div>
                    <div class="faq-icon">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p><?= $faq['answer'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="page-cta">
    <div class="container">
        <h2><?= t('cta.still_have_questions') ?></h2>
        <p><?= t('cta.contact_us_subtitle') ?></p>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach((question) => {
        question.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();

            const faqItem = this.closest('.faq-item');
            const isActive = faqItem.classList.contains('active');

            // Close all FAQ items
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
                const answer = item.querySelector('.faq-answer');
                if (answer) {
                    answer.style.display = 'none';
                }
            });

            // Open clicked item if it wasn't active
            if (!isActive) {
                faqItem.classList.add('active');

                const answer = faqItem.querySelector('.faq-answer');
                if (answer) {
                    answer.style.display = 'block';

                    setTimeout(function() {
                        answer.style.display = 'block';
                    }, 10);

                    setTimeout(function() {
                        answer.style.display = 'block';
                    }, 100);
                }
            }

            return false;
        }, true);
    });
});
</script>

<?php
// Include footer
require_once 'includes/footer.php';
?>
