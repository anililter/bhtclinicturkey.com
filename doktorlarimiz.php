<?php
// Dil sistemini yükle
require_once 'lang.php';

// Config dosyasını yükle
require_once 'config.php';

// Page configuration
$pageTitle = t('doctors.title') . ' - ' . $config['site']['name'];
$pageDescription = t('doctors.subtitle');
$pageKeywords = 'doctors, surgeons, medical team, expert doctors';

// Include header
require_once 'includes/header.php';

// Sample doctors data - This should come from a database in production
$doctors = [
    [
        'name' => 'Dr. John Smith',
        'title' => 'MD, FACS',
        'specialization' => t('treatments')['obesity']['name'] ?? 'Obesity Surgery',
        'image' => '/assets/images/doctor-1.jpg',
        'experience' => '15+ ' . t('common.years'),
    ],
    [
        'name' => 'Dr. Sarah Johnson',
        'title' => 'MD, PhD',
        'specialization' => t('treatments')['rhinoplasty']['name'] ?? 'Rhinoplasty',
        'image' => '/assets/images/doctor-2.jpg',
        'experience' => '12+ ' . t('common.years'),
    ],
    [
        'name' => 'Dr. Michael Brown',
        'title' => 'MD',
        'specialization' => t('treatments')['hair_transplant']['name'] ?? 'Hair Transplant',
        'image' => '/assets/images/doctor-3.jpg',
        'experience' => '10+ ' . t('common.years'),
    ],
    [
        'name' => 'Dr. Emily Davis',
        'title' => 'DDS, MS',
        'specialization' => t('treatments')['dental']['name'] ?? 'Dental',
        'image' => '/assets/images/doctor-4.jpg',
        'experience' => '8+ ' . t('common.years'),
    ],
];
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

    /* Doctors Section */
    .doctors-section {
        padding: 80px 0;
    }

    .doctors-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 40px;
        margin-top: 50px;
    }

    .doctor-card {
        background: var(--white);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--shadow-lg);
        transition: var(--transition);
    }

    .doctor-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-xl);
    }

    .doctor-image {
        position: relative;
        height: 350px;
        overflow: hidden;
    }

    .doctor-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .doctor-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: var(--gradient-primary);
        color: var(--white);
        padding: 8px 20px;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
    }

    .doctor-content {
        padding: 30px;
        text-align: center;
    }

    .doctor-content h3 {
        font-size: 1.5rem;
        margin-bottom: 5px;
    }

    .doctor-title {
        color: var(--primary-color);
        font-weight: 600;
        margin-bottom: 15px;
    }

    .doctor-specialization {
        color: var(--gray-600);
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid var(--gray-200);
    }

    .doctor-meta {
        display: flex;
        justify-content: center;
        gap: 20px;
        font-size: 0.875rem;
    }

    .doctor-meta-item {
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--gray-600);
    }

    .doctor-meta-item i {
        color: var(--primary-color);
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
        .doctors-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .page-hero h1 {
            font-size: 2rem;
        }

        .doctors-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <nav class="breadcrumb">
                <a href="/"><?= t('nav.home') ?></a>
                <i class="fas fa-chevron-right"></i>
                <span><?= t('doctors.title') ?></span>
            </nav>
            <h1><?= t('doctors.title') ?></h1>
            <p><?= t('doctors.subtitle') ?></p>
        </div>
    </div>
</section>

<!-- Doctors Section -->
<section class="doctors-section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><?= t('footer.our_doctors') ?></span>
            <h2 class="section-title"><?= t('about.team_title') ?></h2>
            <p class="section-desc"><?= t('about.team_subtitle') ?></p>
        </div>

        <div class="doctors-grid">
            <?php foreach ($doctors as $doctor): ?>
            <div class="doctor-card">
                <div class="doctor-image">
                    <img src="<?= $doctor['image'] ?>" alt="<?= $doctor['name'] ?>">
                    <div class="doctor-badge"><?= t('doctors.specialization') ?></div>
                </div>
                <div class="doctor-content">
                    <h3><?= $doctor['name'] ?></h3>
                    <div class="doctor-title"><?= $doctor['title'] ?></div>
                    <div class="doctor-specialization"><?= $doctor['specialization'] ?></div>
                    <div class="doctor-meta">
                        <div class="doctor-meta-item">
                            <i class="fas fa-graduation-cap"></i>
                            <span><?= $doctor['experience'] ?></span>
                        </div>
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
        <h2><?= t('cta.meet_doctors') ?></h2>
        <p><?= t('cta.book_consultation') ?></p>
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
