<?php
// Dil sistemini yükle
require_once 'lang.php';

// Config dosyasını yükle
require_once 'config.php';

// Page configuration
$pageTitle = t('process.title') . ' - ' . $config['site']['name'];
$pageDescription = t('process.subtitle');
$pageKeywords = 'treatment process, medical procedure, healthcare journey';

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

    /* Process Steps */
    .process-section {
        padding: 80px 0;
        background: var(--white);
    }

    .process-timeline {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 40px;
        margin-top: 60px;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }

    .process-step {
        background: var(--white);
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 5px 30px rgba(0, 0, 0, 0.08);
        position: relative;
        transition: var(--transition);
        border: 1px solid var(--gray-200);
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .process-step:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 50px rgba(0, 102, 255, 0.15);
        border-color: var(--primary-color);
    }

    .step-number {
        width: 70px;
        height: 70px;
        background: var(--gradient-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.875rem;
        font-weight: 800;
        color: var(--white);
        margin-bottom: 25px;
        box-shadow: 0 8px 30px rgba(0, 102, 255, 0.35);
        border: 4px solid var(--white);
        flex-shrink: 0;
    }

    .step-content h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: var(--dark-color);
        font-weight: 700;
    }

    .step-content p {
        color: var(--gray-600);
        line-height: 1.8;
        font-size: 1rem;
    }

    .step-content {
        width: 100%;
    }

    .step-empty {
        display: none;
    }

    /* Why Choose Us */
    .why-choose-section {
        background: var(--gray-100);
        padding: 80px 0;
    }

    .advantages-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-top: 50px;
    }

    .advantage-card {
        background: var(--white);
        padding: 40px 30px;
        border-radius: 20px;
        text-align: center;
        transition: var(--transition);
    }

    .advantage-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-xl);
    }

    .advantage-icon {
        width: 80px;
        height: 80px;
        background: var(--gradient-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 2rem;
        color: var(--white);
    }

    .advantage-card h3 {
        font-size: 1.25rem;
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
    @media (max-width: 1200px) {
        .process-timeline {
            gap: 30px;
        }

        .process-step {
            padding: 35px;
        }

        .step-number {
            width: 65px;
            height: 65px;
            font-size: 1.75rem;
        }
    }

    @media (max-width: 1024px) {
        .process-timeline {
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .process-step {
            padding: 30px;
        }

        .advantages-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .page-hero h1 {
            font-size: 2rem;
        }

        .process-section {
            padding: 60px 0;
        }

        .process-step {
            padding: 25px;
        }

        .step-number {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .step-content h3 {
            font-size: 1.25rem;
        }

        .step-content p {
            font-size: 0.9375rem;
        }

        .advantages-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .advantage-card {
            padding: 30px 20px;
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
                <span><?= t('process.title') ?></span>
            </nav>
            <h1><?= t('process.title') ?></h1>
            <p><?= t('process.subtitle') ?></p>
        </div>
    </div>
</section>

<!-- Process Timeline -->
<section class="process-section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><?= t('nav.process') ?></span>
            <h2 class="section-title"><?= t('process.title') ?> <span class="gradient-text"><?= t('common.steps') ?></span></h2>
        </div>

        <div class="process-timeline">
            <!-- Step 1 -->
            <div class="process-step">
                <div class="step-content">
                    <h3><?= t('process.step1_title') ?></h3>
                    <p><?= t('process.step1_desc') ?></p>
                </div>
                <div class="step-number">1</div>
                <div class="step-empty"></div>
            </div>

            <!-- Step 2 -->
            <div class="process-step">
                <div class="step-empty"></div>
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3><?= t('process.step2_title') ?></h3>
                    <p><?= t('process.step2_desc') ?></p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="process-step">
                <div class="step-content">
                    <h3><?= t('process.step3_title') ?></h3>
                    <p><?= t('process.step3_desc') ?></p>
                </div>
                <div class="step-number">3</div>
                <div class="step-empty"></div>
            </div>

            <!-- Step 4 -->
            <div class="process-step">
                <div class="step-empty"></div>
                <div class="step-number">4</div>
                <div class="step-content">
                    <h3><?= t('process.step4_title') ?></h3>
                    <p><?= t('process.step4_desc') ?></p>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="process-step">
                <div class="step-content">
                    <h3><?= t('process.step5_title') ?></h3>
                    <p><?= t('process.step5_desc') ?></p>
                </div>
                <div class="step-number">5</div>
                <div class="step-empty"></div>
            </div>

            <!-- Step 6 -->
            <div class="process-step">
                <div class="step-empty"></div>
                <div class="step-number">6</div>
                <div class="step-content">
                    <h3><?= t('process.step6_title') ?></h3>
                    <p><?= t('process.step6_desc') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="why-choose-section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><?= t('common.advantages') ?></span>
            <h2 class="section-title"><?= t('process.why_choose_title') ?></h2>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-icon">
                    <i class="fas fa-hospital"></i>
                </div>
                <h3><?= t('process.advantage1') ?></h3>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon">
                    <i class="fas fa-user-md"></i>
                </div>
                <h3><?= t('process.advantage2') ?></h3>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon">
                    <i class="fas fa-laptop-medical"></i>
                </div>
                <h3><?= t('process.advantage3') ?></h3>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon">
                    <i class="fas fa-box-open"></i>
                </div>
                <h3><?= t('process.advantage4') ?></h3>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon">
                    <i class="fas fa-plane-departure"></i>
                </div>
                <h3><?= t('process.advantage5') ?></h3>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon">
                    <i class="fas fa-language"></i>
                </div>
                <h3><?= t('process.advantage6') ?></h3>
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
