<?php
// Dil sistemini yükle
require_once 'lang.php';

// Config dosyasını yükle
require_once 'config.php';

// Page configuration
$pageTitle = t('contact.title') . ' - ' . $config['site']['name'];
$pageDescription = t('contact.subtitle');
$pageKeywords = 'contact, phone, email, address, appointment';

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

    /* Contact Section */
    .contact-section {
        padding: 80px 0;
    }

    .contact-wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
    }

    /* Contact Info */
    .contact-info-section {
        background-color: var(--gray-100);
        padding: 50px;
        border-radius: 20px;
    }

    .contact-info-section h2 {
        font-size: 2rem;
        margin-bottom: 30px;
    }

    .contact-info-grid {
        display: grid;
        gap: 30px;
    }

    .contact-item {
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }

    .contact-icon {
        width: 60px;
        height: 60px;
        background: var(--gradient-primary);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: var(--white);
        flex-shrink: 0;
    }

    .contact-content h3 {
        font-size: 1.25rem;
        margin-bottom: 10px;
    }

    .contact-content p {
        color: var(--gray-600);
        margin-bottom: 5px;
    }

    .contact-content a {
        color: var(--primary-color);
        font-weight: 600;
    }

    /* Contact Form */
    .contact-form-section {
        background-color: var(--white);
        padding: 50px;
        border-radius: 20px;
        box-shadow: var(--shadow-lg);
    }

    .contact-form-section h2 {
        font-size: 2rem;
        margin-bottom: 30px;
    }

    .contact-form .form-group {
        margin-bottom: 25px;
    }

    .contact-form label {
        display: block;
        font-weight: 600;
        margin-bottom: 8px;
        color: var(--dark-color);
    }

    .contact-form input,
    .contact-form select,
    .contact-form textarea {
        width: 100%;
        padding: 15px 20px;
        border: 1px solid var(--gray-300);
        border-radius: 10px;
        font-size: 16px;
        font-family: var(--font-primary);
        transition: var(--transition);
    }

    .contact-form input:focus,
    .contact-form select:focus,
    .contact-form textarea:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(0, 102, 255, 0.1);
    }

    .contact-form textarea {
        resize: vertical;
        min-height: 120px;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    /* Map Section */
    .map-section {
        padding: 0;
        height: 500px;
        position: relative;
    }

    .map-section iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .contact-wrapper {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .page-hero h1 {
            font-size: 2rem;
        }

        .contact-info-section,
        .contact-form-section {
            padding: 30px;
        }

        .form-row {
            grid-template-columns: 1fr;
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
                <span><?= t('contact.title') ?></span>
            </nav>
            <h1><?= t('contact.title') ?></h1>
            <p><?= t('contact.subtitle') ?></p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-wrapper">
            <div class="contact-info-section">
                <h2><?= t('contact.info_title') ?></h2>

                <div class="contact-info-grid">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-content">
                            <h3><?= t('contact.phone_title') ?></h3>
                            <p><?= t('contact.phone_subtitle') ?></p>
                            <a onclick="return gtag_report_conversion('tel:<?= str_replace(' ', '', $config['contact']['phone']) ?>')"
                               href="tel:<?= str_replace(' ', '', $config['contact']['phone']) ?>">
                                <?= $config['contact']['phone_formatted'] ?>
                            </a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="contact-content">
                            <h3><?= t('contact.whatsapp_title') ?></h3>
                            <p><?= t('contact.whatsapp_subtitle') ?></p>
                            <a onclick="return gtag_report_conversion('https://wa.me/<?= $config['contact']['whatsapp'] ?>')"
                               href="https://wa.me/<?= $config['contact']['whatsapp'] ?>">
                                WhatsApp
                            </a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-content">
                            <h3><?= t('contact.email_title') ?></h3>
                            <p><?= t('contact.email_subtitle') ?></p>
                            <a href="mailto:<?= $config['contact']['email'] ?>">
                                <?= $config['contact']['email'] ?>
                            </a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-content">
                            <h3><?= t('contact.address_title') ?></h3>
                            <p><?= $config['contact']['address'] ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-section">
                <h2><?= t('contact.form_title') ?></h2>

                <iframe
    src="https://api.breedcrm.com/form-embed?uuid=e870bd50-acfd-11f0-a548-b42e99481fd0"
    width="100%"
    height="430"
    frameborder="0">
</iframe>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<?php if (!empty($config['contact']['maps_embed'])): ?>
<section class="map-section">
    <?= $config['contact']['maps_embed'] ?>
</section>
<?php endif; ?>

<script>
// Contact form submission
document.getElementById('mainContactForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const data = Object.fromEntries(formData);

    // Show loading state
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> <?= t('form.sending') ?>';
    submitBtn.disabled = true;

    try {
        // Send form data to server
        const response = await fetch('<?= $config['form']['submit_url'] ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data)
        });

        const result = await response.json();

        if (result.success) {
            // Reset form
            this.reset();

            // Google Ads Conversion Tracking
            if (typeof gtag_report_conversion === 'function') {
                gtag_report_conversion();
            }

            // Redirect to thank you page
            window.location.href = '<?= $config['form']['thank_you_page'] ?>';
        } else {
            // Show error message
            alert(result.message || '<?= t('form.error_message') ?>');
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }
    } catch (error) {
        console.error('Form submission error:', error);
        alert('<?= t('form.error_message') ?>');
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    }
});
</script>

<?php
// Include footer
require_once 'includes/footer.php';
?>
