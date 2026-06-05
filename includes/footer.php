<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <!-- Kolon 1: Logo, About Text, Social Links -->
            <div class="footer-col">
                <div class="footer-logo">
                    <?php if (!empty($config['site']['logo'])): ?>
                        <img style="width: 165px;" src="<?= $config['site']['logo'] ?>" alt="<?= $config['site']['name'] ?>" class="logo-img">
                    <?php else: ?>
                        <span class="logo-text"><?= $config['site']['name'] ?></span>
                        <span class="logo-sub"><?= $config['site']['slogan'] ?></span>
                    <?php endif; ?>
                </div>
                <p><?= t('footer.about_text') ?></p>
                <?php if (!empty(array_filter($config['social']))): ?>
                <div class="social-links">
                    <?php if (!empty($config['social']['facebook'])): ?>
                    <a href="<?= $config['social']['facebook'] ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($config['social']['instagram'])): ?>
                    <a href="<?= $config['social']['instagram'] ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($config['social']['twitter'])): ?>
                    <a href="<?= $config['social']['twitter'] ?>" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($config['social']['youtube'])): ?>
                    <a href="<?= $config['social']['youtube'] ?>" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($config['social']['linkedin'])): ?>
                    <a href="<?= $config['social']['linkedin'] ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($config['social']['tiktok'])): ?>
                    <a href="<?= $config['social']['tiktok'] ?>" target="_blank" rel="noopener noreferrer" aria-label="TikTok">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>

            <!-- Kolon 2: Tedaviler Listesi -->
            <div class="footer-col">
                <h3><?= t('footer.treatments') ?></h3>
                <ul class="footer-links">
                    <?php foreach (getActiveTreatments() as $treatment): ?>
                        <li>
                            <a href="<?= langUrl('/treatments/' . (isset($treatment['slug']) ? $treatment['slug'] : $treatment['key'])) ?>">
                                <?= isset(t('treatments')[$treatment['key']]) ? t('treatments')[$treatment['key']]['name'] : $treatment['name'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Kolon 3: Kurumsal Linkler -->
            <div class="footer-col">
                <h3><?= t('footer.corporate') ?></h3>
                <ul class="footer-links">
                    <li><a href="<?= langUrl('/hakkimizda') ?>"><?= t('footer.about_us') ?></a></li>
                     <!-- <li><a href="<?= langUrl('/doktorlarimiz') ?>"><?= t('footer.our_doctors') ?></a></li>
                    <li><a href="<?= langUrl('/blog') ?>"><?= t('footer.blog') ?></a></li> -->
                    <li><a href="<?= langUrl('/sss') ?>"><?= t('footer.faq_page') ?></a></li>
                    <li><a href="<?= langUrl('/iletisim') ?>"><?= t('nav.contact') ?></a></li>
                </ul>
            </div>

            <!-- Kolon 4: İletişim Bilgileri -->
            <div class="footer-col">
                <h3><?= t('footer.contact_info') ?></h3>
                <ul class="contact-info">
                    <?php if (!empty($config['contact']['phone'])): ?>
                    <li>
                        <i class="fas fa-phone"></i>
                        <a onclick="return gtag_report_conversion('tel:<?= str_replace(' ', '', $config['contact']['phone']) ?>')"
                           href="tel:<?= str_replace(' ', '', $config['contact']['phone']) ?>">
                            <?= $config['contact']['phone_formatted'] ?>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if (!empty($config['contact']['email'])): ?>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:<?= $config['contact']['email'] ?>"><?= $config['contact']['email'] ?></a>
                    </li>
                    <?php endif; ?>
                    <?php if (!empty($config['contact']['address'])): ?>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?= $config['contact']['address'] ?></span>
                    </li>
                    <?php endif; ?>
                    
                    <li>
                        <i class="fas fa-clock"></i>
                        <span><?= t('contact.phone_subtitle') ?></span>
                    </li>
                
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> <?= $config['site']['name'] ?>. <?= t('footer.all_rights') ?></p>
            <ul class="footer-bottom-links">
                <li><a href="<?= langUrl('/gizlilik-politikasi') ?>"><?= t('footer.privacy_policy') ?></a></li>
                <li><a href="<?= langUrl('/kvkk') ?>"><?= t('footer.gdpr') ?></a></li>
                <li><a href="<?= langUrl('/kullanim-sartlari') ?>"><?= t('footer.terms') ?></a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- Consultation Form Modal -->
<div class="modal" id="consultationModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3><?= t('form.title') ?></h3>
            <button class="modal-close" onclick="closeConsultationForm()" aria-label="<?= t('common.close') ?>">&times;</button>
        </div>
        <iframe
    src="https://api.breedcrm.com/form-embed?uuid=e870bd50-acfd-11f0-a548-b42e99481fd0"
    width="100%"
    height="430"
    frameborder="0">
</iframe>
    </div>
</div>

<!-- Scripts -->
<script src="/assets/js/main.js?v=7"></script>
<script src="/assets/js/structured-data.js"></script>

<!-- Form Handling Script -->
<script>
// Consultation form modal controls
function openConsultationForm() {
    document.getElementById('consultationModal').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeConsultationForm() {
    document.getElementById('consultationModal').classList.remove('active');
    document.body.style.overflow = '';
}

// Close modal when clicking outside
document.getElementById('consultationModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeConsultationForm();
    }
});

// Close modal with ESC key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeConsultationForm();
    }
});




</script>

</body>
</html>
