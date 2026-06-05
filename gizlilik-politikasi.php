<?php
// Dil sistemini yükle
require_once 'lang.php';

// Config dosyasını yükle
require_once 'config.php';

// Page configuration
$pageTitle = t('footer.privacy_policy') . ' - ' . $config['site']['name'];
$pageDescription = 'Privacy Policy and Data Protection';
$pageKeywords = 'privacy policy, data protection, GDPR';

// Include header
require_once 'includes/header.php';
?>

<style>
    .legal-page {
        padding: 80px 0;
        background: var(--white);
    }

    .legal-container {
        max-width: 900px;
        margin: 0 auto;
    }

    .legal-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .legal-header h1 {
        font-size: 2.5rem;
        margin-bottom: 15px;
    }

    .legal-header p {
        color: var(--gray-600);
    }

    .legal-content h2 {
        font-size: 1.75rem;
        margin: 40px 0 20px;
        color: var(--primary-color);
    }

    .legal-content h3 {
        font-size: 1.375rem;
        margin: 30px 0 15px;
    }

    .legal-content p {
        line-height: 1.8;
        color: var(--gray-700);
        margin-bottom: 20px;
    }

    .legal-content ul {
        margin: 20px 0;
        padding-left: 30px;
    }

    .legal-content li {
        margin-bottom: 10px;
        color: var(--gray-700);
    }
</style>

<section class="legal-page">
    <div class="container">
        <div class="legal-container">
            <div class="legal-header">
                <h1><?= t('footer.privacy_policy') ?></h1>
                <p><?= t('common.last_updated') ?>: <?= date('F d, Y') ?></p>
            </div>

            <div class="legal-content">
                <h2>1. <?= t('common.introduction') ?></h2>
                <p><?= $config['site']['name'] ?> <?= t('legal.privacy_intro') ?></p>

                <h2>2. <?= t('legal.information_we_collect') ?></h2>
                <p><?= t('legal.collect_description') ?></p>
                <ul>
                    <li><?= t('legal.personal_info') ?></li>
                    <li><?= t('legal.medical_info') ?></li>
                    <li><?= t('legal.contact_info') ?></li>
                    <li><?= t('legal.technical_info') ?></li>
                </ul>

                <h2>3. <?= t('legal.how_we_use') ?></h2>
                <p><?= t('legal.use_description') ?></p>

                <h2>4. <?= t('legal.data_security') ?></h2>
                <p><?= t('legal.security_description') ?></p>

                <h2>5. <?= t('legal.your_rights') ?></h2>
                <p><?= t('legal.rights_description') ?></p>

                <h2>6. <?= t('legal.contact_us') ?></h2>
                <p><?= t('legal.contact_description') ?></p>
                <p><strong><?= t('common.email') ?>:</strong> <?= $config['contact']['email'] ?></p>
                <p><strong><?= t('common.phone') ?>:</strong> <?= $config['contact']['phone_formatted'] ?></p>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
require_once 'includes/footer.php';
?>
