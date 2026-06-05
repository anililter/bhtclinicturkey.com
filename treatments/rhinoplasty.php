<?php
/**
 * Rhinoplasty Detail Page
 * Multi-Language Support
 */

// Load language and config
require_once '../lang.php';
require_once '../config.php';

// Get treatment data
$treatment = getTreatment('rhinoplasty');

if (!$treatment || !$treatment['active']) {
    header('Location: /');
    exit;
}

// SEO variables
$pageTitle = $treatment['seo_title'];
$pageDescription = $treatment['seo_desc'];
$pageKeywords = $treatment['seo_keywords'];

// Header
require_once '../includes/header.php';
?>

<!-- Page Specific Styles -->
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

    /* Surgery Details */
    .surgery-details {
        padding: 80px 0;
    }

    .surgery-wrapper {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 40px;
    }

    .content-block {
        margin-bottom: 40px;
    }

    .content-block h2 {
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .content-block h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: var(--dark-color);
    }

    .content-list {
        list-style: none;
        margin: 20px 0;
    }

    .content-list li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 12px;
        line-height: 1.8;
    }

    .content-list i {
        color: var(--success-color);
        margin-top: 5px;
        flex-shrink: 0;
    }

    /* Advantages Grid */
    .advantages-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
        margin-top: 25px;
    }

    .advantage-item {
        display: flex;
        gap: 15px;
        padding: 20px;
        background-color: var(--gray-100);
        border-radius: 10px;
    }

    .advantage-item i {
        font-size: 2rem;
        color: var(--primary-color);
        flex-shrink: 0;
    }

    .advantage-item h4 {
        font-size: 1.125rem;
        margin-bottom: 5px;
    }

    .advantage-item p {
        font-size: 0.875rem;
        color: var(--gray-600);
        margin: 0;
    }

    /* Timeline */
    .timeline {
        position: relative;
        padding-left: 40px;
        margin-top: 30px;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 15px;
        top: 0;
        bottom: 0;
        width: 2px;
        background-color: var(--gray-300);
    }

    .timeline-item {
        position: relative;
        margin-bottom: 30px;
        padding-left: 40px;
    }

    .timeline-marker {
        position: absolute;
        left: -65px;
        top: 0;
        width: 60px;
        height: 60px;
        background: var(--gradient-primary);
        color: var(--white);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.7rem;
        font-weight: 600;
        text-align: center;
        padding: 8px;
        line-height: 1.2;
    }

    .timeline-content h4 {
        font-size: 1.125rem;
        margin-bottom: 5px;
    }

    .timeline-content p {
        color: var(--gray-600);
        margin: 0;
    }

    /* Sidebar */
    .sidebar-card {
        background-color: var(--white);
        border: 1px solid var(--gray-200);
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 30px;
    }

    .sidebar-card h3 {
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    .info-list {
        list-style: none;
    }

    .info-list li {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 15px 0;
        border-bottom: 1px solid var(--gray-200);
    }

    .info-list li:last-child {
        border-bottom: none;
    }

    .info-list i {
        font-size: 1.25rem;
        color: var(--primary-color);
        width: 25px;
        text-align: center;
    }

    .info-list span {
        display: block;
        font-size: 0.875rem;
        color: var(--gray-600);
    }

    .info-list strong {
        display: block;
        font-size: 1.125rem;
        color: var(--dark-color);
    }

    /* CTA Card */
    .cta-card {
        background: var(--gradient-primary);
        color: var(--white);
        border: none;
    }

    .cta-card h3 {
        color: var(--white);
    }

    .cta-features {
        list-style: none;
        margin: 20px 0;
    }

    .cta-features li {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
    }

    .cta-features i {
        color: var(--white);
    }

    /* Related FAQ */
    .related-faq {
        padding: 80px 0;
        background-color: var(--gray-100);
    }

    .related-faq h2 {
        text-align: center;
        margin-bottom: 50px;
    }

    /* Page CTA */
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

    /* Responsive */
    @media (max-width: 1024px) {
        .surgery-wrapper {
            grid-template-columns: 1fr;
        }

        .surgery-sidebar {
            order: -1;
        }

        .advantages-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .page-hero h1 {
            font-size: 2rem;
        }

        .timeline {
            padding-left: 30px;
        }

        .timeline-marker {
            left: -30px;
            width: 40px;
            height: 40px;
            font-size: 0.625rem;
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
                <a href="<?= langUrl('/') ?>#tedaviler"><?= t('nav.treatments') ?></a>
                <i class="fas fa-chevron-right"></i>
                <span><?= t('treatments.rhinoplasty.name') ?></span>
            </nav>
            <h1><?= t('treatments.rhinoplasty.hero_title') ?></h1>
            <p><?= t('treatments.rhinoplasty.hero_desc') ?></p>
        </div>
    </div>
</section>

<!-- Surgery Details -->
<section class="surgery-details">
    <div class="container">
        <div class="surgery-wrapper">
            <div class="surgery-content">
                <div class="content-block">
                    <h2><?= t('treatment_detail.what_is') ?></h2>
                    <p><?= t('treatments.rhinoplasty.long_desc') ?></p>

                    <h3><?= t('treatment_detail.how_performed') ?></h3>
                    <ul class="content-list">
                        <?php foreach (t('treatments.rhinoplasty.features') as $feature): ?>
                        <li><i class="fas fa-check-circle"></i> <?= $feature ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="content-block">
                    <h3><?= t('treatment_detail.advantages') ?></h3>
                    <div class="advantages-grid">
                        <div class="advantage-item">
                            <i class="fas fa-user-check"></i>
                            <div>
                                <h4><?= t('rhinoplasty.natural_results') ?></h4>
                                <p><?= t('rhinoplasty.natural_results_desc') ?></p>
                            </div>
                        </div>
                        <div class="advantage-item">
                            <i class="fas fa-lungs"></i>
                            <div>
                                <h4><?= t('rhinoplasty.improved_breathing') ?></h4>
                                <p><?= t('rhinoplasty.improved_breathing_desc') ?></p>
                            </div>
                        </div>
                        <div class="advantage-item">
                            <i class="fas fa-microchip"></i>
                            <div>
                                <h4><?= t('rhinoplasty.advanced_technology') ?></h4>
                                <p><?= t('rhinoplasty.advanced_technology_desc') ?></p>
                            </div>
                        </div>
                        <div class="advantage-item">
                            <i class="fas fa-shield-alt"></i>
                            <div>
                                <h4><?= t('rhinoplasty.permanent_results') ?></h4>
                                <p><?= t('rhinoplasty.permanent_results_desc') ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-block">
                    <h3><?= t('treatment_detail.post_operation') ?></h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker"><?= t('timeline.day_1') ?></div>
                            <div class="timeline-content">
                                <h4><?= t('rhinoplasty.hospital_discharge') ?></h4>
                                <p><?= t('rhinoplasty.hospital_discharge_desc') ?></p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker"><?= t('timeline.day_7') ?></div>
                            <div class="timeline-content">
                                <h4><?= t('rhinoplasty.splint_removal') ?></h4>
                                <p><?= t('rhinoplasty.splint_removal_desc') ?></p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker"><?= t('timeline.week_2_3') ?></div>
                            <div class="timeline-content">
                                <h4><?= t('rhinoplasty.return_to_work') ?></h4>
                                <p><?= t('rhinoplasty.return_to_work_desc') ?></p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker"><?= t('timeline.month_6_12') ?></div>
                            <div class="timeline-content">
                                <h4><?= t('rhinoplasty.final_result') ?></h4>
                                <p><?= t('rhinoplasty.final_result_desc') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="surgery-sidebar">
                <div class="sidebar-card">
                    <h3><?= t('treatment_detail.quick_info') ?></h3>
                    <ul class="info-list">
                        <li>
                            <i class="fas fa-clock"></i>
                            <div>
                                <span><?= t('info.operation_time') ?></span>
                                <strong>2-3 <?= t('info.hours') ?></strong>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-bed"></i>
                            <div>
                                <span><?= t('info.hospital_stay') ?></span>
                                <strong>1 <?= t('info.day') ?></strong>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-calendar-check"></i>
                            <div>
                                <span><?= t('info.return_to_work') ?></span>
                                <strong>1 <?= t('info.week') ?></strong>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-chart-line"></i>
                            <div>
                                <span><?= t('info.full_recovery') ?></span>
                                <strong>6-12 <?= t('info.months') ?></strong>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-percentage"></i>
                            <div>
                                <span><?= t('info.success_rate') ?></span>
                                <strong>98%</strong>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-card cta-card">
                    <h3><?= t('treatment_detail.free_consultation') ?></h3>
                    <p><?= t('treatment_detail.free_consultation_desc') ?></p>
                    <ul class="cta-features">
                        <li><i class="fas fa-check"></i> <?= t('treatment_detail.instant_result') ?></li>
                        <li><i class="fas fa-check"></i> <?= t('treatment_detail.free_evaluation') ?></li>
                        <li><i class="fas fa-check"></i> <?= t('treatment_detail.expert_opinion') ?></li>
                    </ul>
                    <button class="btn btn-white btn-block" onclick="openConsultationForm()">
                        <i class="fas fa-calendar"></i>
                        <?= t('nav.get_consultation') ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related FAQ -->
<section class="related-faq">
    <div class="container">
        <h2><?= t('treatment_detail.faq_title') ?> <span class="gradient-text"><?= t('treatments.rhinoplasty.name') ?></span></h2>

        <div class="faq-wrapper">
            <?php
            $faqs = [
                ['q' => t('rhinoplasty_faq.q1'), 'a' => t('rhinoplasty_faq.a1')],
                ['q' => t('rhinoplasty_faq.q2'), 'a' => t('rhinoplasty_faq.a2')],
                ['q' => t('rhinoplasty_faq.q3'), 'a' => t('rhinoplasty_faq.a3')],
                ['q' => t('rhinoplasty_faq.q4'), 'a' => t('rhinoplasty_faq.a4')],
            ];

            foreach ($faqs as $faq):
            ?>
            <div class="faq-item">
                <button class="faq-question">
                    <span><?= $faq['q'] ?></span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p><?= $faq['a'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="page-cta">
    <div class="container">
        <div class="cta-wrapper" style="grid-template-columns: auto;">
            <div class="cta-content">
                <h2><?= t('treatment_detail.cta_title') ?> <span><?= t('treatments.rhinoplasty.name') ?></span></h2>
                <p><?= t('treatment_detail.cta_desc') ?></p>
                <div class="cta-buttons" style="justify-content: center;">
                    <button class="btn btn-white" onclick="openConsultationForm()">
                        <i class="fas fa-file-medical"></i>
                        <?= t('cta.apply_online') ?>
                    </button>
                    <a onclick="return gtag_report_conversion('tel:<?= str_replace(' ', '', $config['contact']['phone']) ?>')"
                       href="tel:<?= str_replace(' ', '', $config['contact']['phone']) ?>"
                       class="btn btn-outline">
                        <i class="fas fa-phone"></i>
                        <?= $config['contact']['phone_formatted'] ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
