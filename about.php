<?= $this->include('template/public_header'); ?>

<!-- Modern Hero Section -->
<section class="modern-hero position-relative overflow-hidden">
    <div class="hero-gradient"></div>
    <div class="geometric-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>

    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6">
                <div class="hero-content">
                    <div class="badge-modern mb-4">
                        <i class="bi bi-building me-2"></i>
                        Tentang Perusahaan
                    </div>
                    <h1 class="hero-title mb-4">
                        Membangun Masa Depan
                        <span class="text-gradient">Digital Indonesia</span>
                    </h1>
                    <p class="hero-subtitle mb-5">
                        Kami adalah platform digital yang berkomitmen menyajikan informasi berkualitas tinggi dan terpercaya untuk memajukan literasi digital masyarakat Indonesia.
                    </p>
                    <div class="hero-actions">
                        <a href="#story" class="btn btn-modern-primary me-3">
                            <i class="bi bi-play-circle me-2"></i>
                            Cerita Kami
                        </a>
                        <a href="<?= base_url('contact'); ?>" class="btn btn-modern-outline">
                            <i class="bi bi-envelope me-2"></i>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-visual">
                    <div class="visual-card">
                        <div class="card-content">
                            <div class="stats-grid">
                                <div class="stat-item">
                                    <div class="stat-number">1M+</div>
                                    <div class="stat-label">Pembaca Aktif</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">500+</div>
                                    <div class="stat-label">Artikel Berkualitas</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">24/7</div>
                                    <div class="stat-label">Update Berita</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">5+</div>
                                    <div class="stat-label">Kategori Berita</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Story Section -->
<section id="story" class="story-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5">
                <div class="story-content">
                    <div class="section-badge mb-4">
                        <i class="bi bi-book me-2"></i>
                        Cerita Kami
                    </div>
                    <h2 class="section-title mb-4">
                        Perjalanan Menuju
                        <span class="text-gradient">Keunggulan Digital</span>
                    </h2>
                    <p class="section-description mb-4">
                        Dimulai dari visi sederhana untuk menyediakan informasi berkualitas,
                        kami telah berkembang menjadi platform berita digital terpercaya yang
                        melayani jutaan pembaca di seluruh Indonesia.
                    </p>
                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5>2020 - Awal Perjalanan</h5>
                            <p>Memulai sebagai blog sederhana dengan komitmen menyajikan berita berkualitas.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5>2022 - Ekspansi Platform</h5>
                            <p>Mengembangkan platform digital dengan fitur-fitur modern dan user-friendly.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5>2024 - Masa Depan</h5>
                            <p>Terus berinovasi untuk memberikan pengalaman terbaik bagi pembaca.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="vision-mission-cards">
                    <div class="vm-card vision-card">
                        <div class="vm-icon">
                            <i class="bi bi-eye"></i>
                        </div>
                        <h4>Visi Kami</h4>
                        <p>Menjadi portal berita digital terdepan yang menyajikan informasi berkualitas tinggi dan dapat dipercaya oleh seluruh masyarakat Indonesia.</p>
                    </div>
                    <div class="vm-card mission-card">
                        <div class="vm-icon">
                            <i class="bi bi-target"></i>
                        </div>
                        <h4>Misi Kami</h4>
                        <ul class="mission-list">
                            <li><i class="bi bi-check2"></i> Menyajikan berita akurat dan berimbang</li>
                            <li><i class="bi bi-check2"></i> Memberikan informasi terkini berkualitas</li>
                            <li><i class="bi bi-check2"></i> Mendukung literasi digital Indonesia</li>
                            <li><i class="bi bi-check2"></i> Menghubungkan berbagai kalangan masyarakat</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5 bg-gradient">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h3 class="text-white mb-3">Siap Bergabung dengan Jutaan Pembaca Lainnya?</h3>
                <p class="text-white-50 mb-0">Dapatkan informasi terkini dan berkualitas langsung di genggaman Anda</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="<?= base_url('artikel'); ?>" class="btn btn-light btn-lg me-3">
                    <i class="bi bi-newspaper me-2"></i>Baca Artikel
                </a>
                <a href="<?= base_url('contact'); ?>" class="btn btn-outline-light btn-lg">
                    <i class="bi bi-envelope me-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>

<?= $this->include('template/public_footer'); ?>
