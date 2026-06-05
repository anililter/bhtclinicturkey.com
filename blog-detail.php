<?php
// Dil sistemini yükle
require_once 'lang.php';

// Config dosyasını yükle
require_once 'config.php';

// Page configuration
$postId = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Sample blog post data - This should come from a database in production
$post = [
    'id' => $postId,
    'title' => 'Understanding Obesity Surgery: A Complete Guide',
    'content' => '<p>Obesity surgery, also known as bariatric surgery, has become an increasingly popular solution for individuals struggling with severe obesity. This comprehensive guide will walk you through everything you need to know about obesity surgery procedures.</p>

    <h2>What is Obesity Surgery?</h2>
    <p>Obesity surgery includes various surgical procedures performed on the stomach and/or intestines to help people lose weight by limiting how much food the stomach can hold or reducing the absorption of nutrients.</p>

    <h2>Types of Obesity Surgery</h2>
    <p>The most common types include:</p>
    <ul>
        <li><strong>Gastric Sleeve (Sleeve Gastrectomy):</strong> Removes about 80% of the stomach</li>
        <li><strong>Gastric Bypass:</strong> Creates a small pouch and reroutes the small intestine</li>
        <li><strong>Gastric Balloon:</strong> Non-surgical option using an inflatable balloon</li>
    </ul>

    <h2>Who is a Candidate?</h2>
    <p>You may be a candidate if you have a BMI of 40 or higher, or a BMI of 35-39.9 with obesity-related health conditions such as type 2 diabetes or high blood pressure.</p>

    <h2>Recovery and Results</h2>
    <p>Most patients can return to work within 2-4 weeks. Significant weight loss typically occurs within the first 12-18 months after surgery, with most patients losing 60-70% of their excess weight.</p>

    <h2>Long-term Success</h2>
    <p>Long-term success requires commitment to lifestyle changes, including a healthy diet, regular exercise, and ongoing medical follow-up.</p>',
    'image' => '/assets/images/blog-1.jpg',
    'date' => '2025-01-15',
    'category' => 'Obesity Surgery',
    'read_time' => '5',
    'author' => 'Dr. John Smith',
];

$pageTitle = $post['title'] . ' - ' . $config['site']['name'];
$pageDescription = 'Learn everything you need to know about obesity surgery procedures, recovery, and long-term success.';
$pageKeywords = 'obesity surgery, bariatric surgery, weight loss surgery';

// Include header
require_once 'includes/header.php';
?>

<style>
    /* Page Hero */
    .article-hero {
        background: var(--dark-color);
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    .article-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(0, 102, 255, 0.9) 0%, rgba(0, 201, 255, 0.9) 100%);
        z-index: 1;
    }

    .article-hero-content {
        position: relative;
        z-index: 2;
        color: var(--white);
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    .article-category {
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        padding: 8px 20px;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .article-hero h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: var(--white);
    }

    .article-meta {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 30px;
        font-size: 0.875rem;
        opacity: 0.9;
    }

    .article-meta-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    /* Article Content */
    .article-section {
        padding: 80px 0;
    }

    .article-container {
        max-width: 800px;
        margin: 0 auto;
    }

    .article-image {
        border-radius: 20px;
        overflow: hidden;
        margin-bottom: 50px;
        box-shadow: var(--shadow-xl);
    }

    .article-image img {
        width: 100%;
        height: auto;
    }

    .article-content {
        color: var(--gray-700);
        font-size: 1.125rem;
        line-height: 1.8;
    }

    .article-content h2 {
        font-size: 2rem;
        margin: 40px 0 20px;
        color: var(--dark-color);
    }

    .article-content h3 {
        font-size: 1.5rem;
        margin: 30px 0 15px;
        color: var(--dark-color);
    }

    .article-content p {
        margin-bottom: 20px;
    }

    .article-content ul,
    .article-content ol {
        margin: 20px 0;
        padding-left: 30px;
    }

    .article-content li {
        margin-bottom: 10px;
    }

    .article-content strong {
        color: var(--primary-color);
        font-weight: 600;
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
        .article-hero h1 {
            font-size: 2rem;
        }

        .article-content {
            font-size: 1rem;
        }

        .article-content h2 {
            font-size: 1.75rem;
        }
    }
</style>

<!-- Article Hero -->
<section class="article-hero">
    <div class="container">
        <div class="article-hero-content">
            <div class="article-category"><?= $post['category'] ?></div>
            <h1><?= $post['title'] ?></h1>
            <div class="article-meta">
                <div class="article-meta-item">
                    <i class="fas fa-user"></i>
                    <span><?= $post['author'] ?></span>
                </div>
                <div class="article-meta-item">
                    <i class="fas fa-calendar-alt"></i>
                    <span><?= date('M d, Y', strtotime($post['date'])) ?></span>
                </div>
                <div class="article-meta-item">
                    <i class="fas fa-clock"></i>
                    <span><?= $post['read_time'] ?> <?= t('footer.minutes_read') ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Article Content -->
<section class="article-section">
    <div class="container">
        <div class="article-container">
            <div class="article-image">
                <img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>">
            </div>

            <div class="article-content">
                <?= $post['content'] ?>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="page-cta">
    <div class="container">
        <h2><?= t('cta.interested_treatment') ?></h2>
        <p><?= t('cta.contact_experts') ?></p>
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
