

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-bg">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>

        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <span class="hero-badge"><?php echo t('hero.badge'); ?></span>
                    <h1 class="hero-title"><?php echo t('hero.title'); ?></h1>
                    <p class="hero-desc"><?php echo t('hero.description'); ?></p>
                    <div class="hero-btns">
                        <button class="btn btn-primary" onclick="openConsultationForm()">
                            <i class="fas fa-calendar-check"></i>
                            <?php echo t('hero.cta_primary'); ?>
                        </button>
                        <a href="#services" class="btn btn-secondary">
                            <i class="fas fa-info-circle"></i>
                            <?php echo t('hero.cta_secondary'); ?>
                        </a>
                    </div>

                    <div class="hero-stats">
                        <?php
                        $statistics = getActiveStatistics();
                        foreach ($statistics as $stat):
                        ?>
                        <div class="stat-item">
                            <span class="stat-number"><?php echo htmlspecialchars($stat['number']); ?></span>
                            <span class="stat-label"><?php echo htmlspecialchars($stat['label']); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="hero-image">
                    <img src="/assets/images/hospital.webp" alt="<?php echo t('hero.badge'); ?>">
                    <div class="hero-badge-float">
                        <i class="fas fa-shield-alt"></i>
                        <span><?php echo t('why_us.features.jci_accredited.title'); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-indicator">
            <div class="mouse">
                <div class="wheel"></div>
            </div>
            <span><?php echo t('hero.scroll_down'); ?></span>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-header">
                <span class="section-badge"><?php echo t('treatments_section.badge'); ?></span>
                <h2 class="section-title"><?php echo t('treatments_section.title'); ?></h2>
                <p class="section-desc"><?php echo t('treatments_section.description'); ?></p>
            </div>

            <div class="services-grid">
                <?php
                $treatments = getActiveTreatments();
                $count = 0;
                foreach ($treatments as $treatment):
                    $count++;
                    $isFeatured = ($count == 2); // Second treatment will be featured
                ?>
                <div class="service-card <?php echo $isFeatured ? 'featured' : ''; ?>">
                    <?php if ($isFeatured): ?>
                    <div class="badge"><?php echo t('treatments_section.featured'); ?></div>
                    <?php endif; ?>
                    <div class="service-icon">
                        <i class="fas <?php echo htmlspecialchars($treatment['icon']); ?>"></i>
                    </div>
                    <h3><?php echo htmlspecialchars($treatment['name']); ?></h3>
                    <p><?php echo htmlspecialchars($treatment['short_desc']); ?></p>
                    <ul class="service-features">
                        <?php foreach ($treatment['features'] as $feature): ?>
                        <li><i class="fas fa-check"></i> <?php echo htmlspecialchars($feature); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="<?= langUrl('/treatments/' . $treatment['slug']) ?>" class="service-link">
                        <?php echo t('treatments_section.learn_more'); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <?php
                    if ($count >= 6) break; // Show maximum 6 treatments
                endforeach;
                ?>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-us">
        <div class="container">
            <div class="why-us-wrapper">
                <div class="why-us-content">
                    <span class="section-badge"><?php echo t('why_us.badge'); ?></span>
                    <h2 class="section-title"><?php echo t('why_us.title'); ?></h2>

                    <div class="features-list">
                        <?php
                        $features = ['expert_team', 'jci_accredited', 'modern_technology', 'support_247'];
                        $icons = ['fa-user-md', 'fa-hospital', 'fa-microscope', 'fa-headset'];
                        for ($i = 0; $i < count($features); $i++):
                            $featureKey = $features[$i];
                        ?>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas <?php echo $icons[$i]; ?>"></i>
                            </div>
                            <div class="feature-content">
                                <h4><?php echo t("why_us.features.{$featureKey}.title"); ?></h4>
                                <p><?php echo t("why_us.features.{$featureKey}.description"); ?></p>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>

                    <div class="cta-box">
                        <p><?php echo t('why_us.cta_text'); ?></p>
                        <button class="btn btn-primary" onclick="openConsultationForm()">
                            <i class="fas fa-comments"></i>
                            <?php echo t('why_us.cta_button'); ?>
                        </button>
                    </div>
                </div>

                <div class="why-us-image">
                    <img src="/assets/images/ameliyathane.jpg">
                    <div class="image-stats">
                        <div class="stat-card">
                            <i class="fas fa-award"></i>
                            <span><?php echo t('why_us.years_experience'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process">
        <div class="container">
            <div class="section-header">
                <span class="section-badge"><?php echo t('process.badge'); ?></span>
                <h2 class="section-title"><?php echo t('process.title'); ?></h2>
                <p class="section-desc"><?php echo t('process.description'); ?></p>
            </div>

            <div class="process-timeline">
                <?php
                $steps = ['step1', 'step2', 'step3', 'step4'];
                for ($i = 0; $i < count($steps); $i++):
                    $stepKey = $steps[$i];
                    $stepNumber = str_pad($i + 1, 2, '0', STR_PAD_LEFT);
                ?>
                <div class="process-item">
                    <div class="process-number"><?php echo $stepNumber; ?></div>
                    <div class="process-content">
                        <h3><?php echo t("process.steps.{$stepKey}.title"); ?></h3>
                        <p><?php echo t("process.steps.{$stepKey}.description"); ?></p>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header">
                <span class="section-badge"><?php echo t('testimonials.badge'); ?></span>
                <h2 class="section-title"><?php echo t('testimonials.title'); ?></h2>
            </div>

            <div class="testimonials-slider">
                <?php
                $testimonials = getTestimonials();
                foreach ($testimonials as $testimonial):
                ?>
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text"><?php echo htmlspecialchars($testimonial['text']); ?></p>
                    <div class="testimonial-author">
                        <img src="<?php echo htmlspecialchars($testimonial['image']); ?>" alt="<?php echo htmlspecialchars($testimonial['author']); ?>">
                        <div>
                            <h4><?php echo htmlspecialchars($testimonial['author']); ?></h4>
                            <span><?php echo htmlspecialchars($testimonial['treatment']); ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
        <div class="container">
            <div class="section-header">
                <span class="section-badge"><?php echo t('faq.badge'); ?></span>
                <h2 class="section-title"><?php echo t('faq.title'); ?></h2>
            </div>

            <div class="faq-wrapper">
                <?php
                $questions = ['q1', 'q2', 'q3', 'q4', 'q5'];
                $firstActive = true;
                foreach ($questions as $qKey):
                ?>
                <div class="faq-item">
                    <button class="faq-question <?php echo $firstActive ? 'active' : ''; ?>">
                        <span><?php echo t("faq.questions.{$qKey}.question"); ?></span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer" <?php echo $firstActive ? 'style="display: block;"' : ''; ?>>
                        <p><?php echo t("faq.questions.{$qKey}.answer"); ?></p>
                    </div>
                </div>
                <?php
                    $firstActive = false;
                endforeach;
                ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-wrapper" style="grid-template-columns: auto;">
                <div class="cta-content" style="justify-content: center;display: grid;">
                    <h2><?php echo t('cta.title'); ?></h2>
                    <p><?php echo t('cta.description'); ?></p>
                    <div class="cta-buttons" style="justify-content: center;">
                        <button class="btn btn-white" onclick="openConsultationForm()">
                            <i class="fas fa-file-medical"></i>
                            <?php echo t('cta.apply_online'); ?>
                        </button>
                        <a onclick="return gtag_report_conversion('tel:<?php echo $config['contact']['phone']; ?>')"
                           href="tel:<?php echo $config['contact']['phone']; ?>"
                           class="btn btn-outline">
                            <i class="fas fa-phone"></i>
                            <?php echo t('cta.call_now'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="certifications">
        <div class="container">
            <div class="section-header">
                <h3><?php echo t('certifications.title'); ?></h3>
            </div>

            <div class="certifications-grid">
                <?php
                $certifications = getActiveCertifications();
                foreach ($certifications as $cert):
                ?>
                <div class="cert-item">
                    <img src="<?php echo htmlspecialchars($cert['logo']); ?>"
                         alt="<?php echo htmlspecialchars($cert['name']); ?>">
                    <span><?php echo htmlspecialchars($cert['name']); ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

