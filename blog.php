<?php
// Dil sistemini yükle
require_once 'lang.php';

// Config dosyasını yükle
require_once 'config.php';

// Page configuration
$pageTitle = t('blog.title') . ' - ' . $config['site']['name'];
$pageDescription = t('blog.subtitle');
$pageKeywords = 'blog, articles, health, medical, treatment';

// Include header
require_once 'includes/header.php';

// Sample blog posts - This should come from a database in production
$blogPosts = [
    [
        'id' => 1,
        'title' => 'Understanding Obesity Surgery: A Complete Guide',
        'excerpt' => 'Learn everything you need to know about obesity surgery procedures, recovery, and long-term success.',
        'image' => '/assets/images/blog-1.jpg',
        'date' => '2025-01-15',
        'category' => 'Obesity Surgery',
        'read_time' => '5',
    ],
    [
        'id' => 2,
        'title' => 'Rhinoplasty Recovery: What to Expect',
        'excerpt' => 'A comprehensive guide to rhinoplasty recovery, including timeline, tips, and common concerns.',
        'image' => '/assets/images/blog-2.jpg',
        'date' => '2025-01-10',
        'category' => 'Rhinoplasty',
        'read_time' => '4',
    ],
    [
        'id' => 3,
        'title' => 'Hair Transplant: FUE vs DHI Techniques',
        'excerpt' => 'Compare FUE and DHI hair transplant techniques to determine which one is right for you.',
        'image' => '/assets/images/blog-3.jpg',
        'date' => '2025-01-05',
        'category' => 'Hair Transplant',
        'read_time' => '6',
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

    /* Blog Section */
    .blog-section {
        padding: 80px 0;
    }

    .blog-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 40px;
        margin-top: 50px;
    }

    .blog-card {
        background: var(--white);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--shadow-lg);
        transition: var(--transition);
    }

    .blog-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-xl);
    }

    .blog-image {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .blog-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .blog-category {
        position: absolute;
        top: 20px;
        left: 20px;
        background: var(--gradient-primary);
        color: var(--white);
        padding: 6px 16px;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
    }

    .blog-content {
        padding: 30px;
    }

    .blog-meta {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 15px;
        font-size: 0.875rem;
        color: var(--gray-600);
    }

    .blog-meta-item {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .blog-meta-item i {
        color: var(--primary-color);
    }

    .blog-content h3 {
        font-size: 1.375rem;
        margin-bottom: 15px;
        line-height: 1.4;
    }

    .blog-content h3 a {
        color: var(--dark-color);
        transition: var(--transition);
    }

    .blog-content h3 a:hover {
        color: var(--primary-color);
    }

    .blog-excerpt {
        color: var(--gray-600);
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .blog-read-more {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--primary-color);
        font-weight: 600;
        transition: var(--transition);
    }

    .blog-read-more:hover {
        gap: 12px;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .blog-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .page-hero h1 {
            font-size: 2rem;
        }

        .blog-grid {
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
                <span><?= t('blog.title') ?></span>
            </nav>
            <h1><?= t('blog.title') ?></h1>
            <p><?= t('blog.subtitle') ?></p>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="blog-section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><?= t('footer.blog') ?></span>
            <h2 class="section-title"><?= t('blog.title') ?></h2>
        </div>

        <div class="blog-grid">
            <?php foreach ($blogPosts as $post): ?>
            <article class="blog-card">
                <div class="blog-image">
                    <img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>">
                    <div class="blog-category"><?= $post['category'] ?></div>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <div class="blog-meta-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span><?= date('M d, Y', strtotime($post['date'])) ?></span>
                        </div>
                        <div class="blog-meta-item">
                            <i class="fas fa-clock"></i>
                            <span><?= $post['read_time'] ?> <?= t('footer.minutes_read') ?></span>
                        </div>
                    </div>
                    <h3>
                        <a href="/blog-detail?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                    </h3>
                    <p class="blog-excerpt"><?= $post['excerpt'] ?></p>
                    <a href="/blog-detail?id=<?= $post['id'] ?>" class="blog-read-more">
                        <?= t('blog.read_more') ?>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
// Include footer
require_once 'includes/footer.php';
?>
