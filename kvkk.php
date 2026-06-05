<?php
// Dil sistemini yükle
require_once 'lang.php';

// Config dosyasını yükle
require_once 'config.php';

// Page configuration
$pageTitle = t('footer.gdpr') . ' - ' . $config['site']['name'];
$pageDescription = 'KVKK / GDPR Compliance Information';
$pageKeywords = 'KVKK, GDPR, data protection, personal data';

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
                <h1><?= t('footer.gdpr') ?></h1>
                <p><?= t('common.last_updated') ?>: <?= date('F d, Y') ?></p>
            </div>

            <div class="legal-content">
                <h2>1. <?= t('legal.data_controller') ?></h2>
                <p><?= $config['site']['name'] ?> <?= t('legal.controller_description') ?></p>

                <h2>2. <?= t('legal.purpose_of_processing') ?></h2>
                <p><?= t('legal.purpose_description') ?></p>

                <h2>3. <?= t('legal.legal_basis') ?></h2>
                <p><?= t('legal.legal_basis_description') ?></p>

                <h2>4. <?= t('legal.data_retention') ?></h2>
                <p><?= t('legal.retention_description') ?></p>

                <h2>5. <?= t('legal.data_subject_rights') ?></h2>
                <ul>
                    <li><?= t('legal.right_to_access') ?></li>
                    <li><?= t('legal.right_to_rectification') ?></li>
                    <li><?= t('legal.right_to_erasure') ?></li>
                    <li><?= t('legal.right_to_restriction') ?></li>
                    <li><?= t('legal.right_to_portability') ?></li>
                    <li><?= t('legal.right_to_object') ?></li>
                </ul>

                <h2>6. <?= t('legal.contact_info') ?></h2>
                <p><strong><?= t('common.email') ?>:</strong> <?= $config['contact']['email'] ?></p>
                <p><strong><?= t('common.phone') ?>:</strong> <?= $config['contact']['phone_formatted'] ?></p>
                <p><strong><?= t('common.address') ?>:</strong> <?= $config['contact']['address'] ?></p>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
require_once 'includes/footer.php';
?>
