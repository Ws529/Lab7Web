<?= $this->include('template/public_header'); ?>

<!-- Modern Contact Hero -->
<section class="contact-hero position-relative overflow-hidden">
    <div class="hero-gradient"></div>
    <div class="contact-shapes">
        <div class="contact-shape shape-1"></div>
        <div class="contact-shape shape-2"></div>
        <div class="contact-shape shape-3"></div>
        <div class="contact-shape shape-4"></div>
    </div>

    <div class="container">
        <div class="row align-items-center min-vh-80">
            <div class="col-lg-6">
                <div class="hero-content">
                    <div class="badge-modern mb-4">
                        <i class="bi bi-headset me-2"></i>
                        Hubungi Kami
                    </div>
                    <h1 class="hero-title mb-4">
                        Mari <span class="text-gradient">Terhubung</span>
                        <br>Bersama Kami
                    </h1>
                    <p class="hero-subtitle mb-5">
                        Kami siap mendengar pertanyaan, saran, dan masukan Anda.
                        Tim profesional kami akan merespons dengan cepat dan memberikan solusi terbaik.
                    </p>
                    <div class="hero-actions">
                        <a href="#contact-form" class="btn btn-modern-primary me-3">
                            <i class="bi bi-chat-dots me-2"></i>
                            Kirim Pesan
                        </a>
                        <a href="#contact-info" class="btn btn-modern-outline">
                            <i class="bi bi-telephone me-2"></i>
                            Info Kontak
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-visual">
                    <div class="contact-card">
                        <div class="contact-card-header">
                            <div class="contact-avatar">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Tim Customer Service</h5>
                                <span class="status-online">
                                    <i class="bi bi-circle-fill"></i>
                                    Online Sekarang
                                </span>
                            </div>
                        </div>
                        <div class="contact-card-body">
                            <div class="response-time">
                                <i class="bi bi-clock me-2"></i>
                                Biasanya merespons dalam 1 jam
                            </div>
                            <div class="contact-methods">
                                <div class="method-item">
                                    <i class="bi bi-envelope"></i>
                                    <span>Email Support</span>
                                </div>
                                <div class="method-item">
                                    <i class="bi bi-telephone"></i>
                                    <span>Phone Support</span>
                                </div>
                                <div class="method-item">
                                    <i class="bi bi-chat-dots"></i>
                                    <span>Live Chat</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section id="contact-info" class="contact-info-section py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-badge mb-3">
                <i class="bi bi-info-circle me-2"></i>
                Informasi Kontak
            </div>
            <h2 class="section-title">
                Berbagai Cara <span class="text-gradient">Menghubungi Kami</span>
            </h2>
            <p class="section-description">
                Pilih metode komunikasi yang paling nyaman untuk Anda
            </p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-6">
                <div class="contact-method-card">
                    <div class="method-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <h5>Alamat Kantor</h5>
                    <p>Jl. Teknologi Digital No. 123<br>Jakarta Selatan, 12345<br>Indonesia</p>
                    <a href="#" class="method-link">
                        <i class="bi bi-arrow-right me-2"></i>Lihat di Maps
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="contact-method-card">
                    <div class="method-icon">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <h5>Telepon</h5>
                    <p>+62 21 1234 5678<br>+62 21 8765 4321<br>Senin - Jumat: 09:00 - 17:00</p>
                    <a href="tel:+622112345678" class="method-link">
                        <i class="bi bi-arrow-right me-2"></i>Hubungi Sekarang
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="contact-method-card">
                    <div class="method-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <h5>Email</h5>
                    <p>info@portalberita.com<br>support@portalberita.com<br>Respons dalam 24 jam</p>
                    <a href="mailto:info@portalberita.com" class="method-link">
                        <i class="bi bi-arrow-right me-2"></i>Kirim Email
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="contact-method-card">
                    <div class="method-icon">
                        <i class="bi bi-chat-dots"></i>
                    </div>
                    <h5>Live Chat</h5>
                    <p>Chat langsung dengan tim kami<br>Tersedia 24/7<br>Respons instan</p>
                    <a href="#" class="method-link">
                        <i class="bi bi-arrow-right me-2"></i>Mulai Chat
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section id="contact-form" class="contact-form-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="contact-form-wrapper">
                    <div class="text-center mb-5">
                        <div class="section-badge mb-3">
                            <i class="bi bi-send me-2"></i>
                            Kirim Pesan
                        </div>
                        <h2 class="section-title">
                            Sampaikan <span class="text-gradient">Pesan Anda</span>
                        </h2>
                        <p class="section-description">
                            Isi formulir di bawah ini dan kami akan segera merespons pesan Anda
                        </p>
                    </div>

                    <div class="modern-form-card">
                        <form class="contact-form">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Nama Lengkap *</label>
                                        <input type="text" class="form-control modern-input" id="name" required>
                                        <div class="input-focus-line"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <input type="email" class="form-control modern-input" id="email" required>
                                        <div class="input-focus-line"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Nomor Telepon</label>
                                        <input type="tel" class="form-control modern-input" id="phone">
                                        <div class="input-focus-line"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject" class="form-label">Subjek *</label>
                                        <select class="form-control modern-input" id="subject" required>
                                            <option value="">Pilih Subjek</option>
                                            <option value="general">Pertanyaan Umum</option>
                                            <option value="support">Dukungan Teknis</option>
                                            <option value="partnership">Kerjasama</option>
                                            <option value="feedback">Saran & Masukan</option>
                                            <option value="other">Lainnya</option>
                                        </select>
                                        <div class="input-focus-line"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message" class="form-label">Pesan *</label>
                                        <textarea class="form-control modern-input" id="message" rows="6" required placeholder="Tulis pesan Anda di sini..."></textarea>
                                        <div class="input-focus-line"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" id="privacy" required>
                                        <label class="form-check-label" for="privacy">
                                            Saya setuju dengan <a href="#" class="text-primary">kebijakan privasi</a> dan <a href="#" class="text-primary">syarat & ketentuan</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-modern-primary btn-lg px-5">
                                        <i class="bi bi-send me-2"></i>
                                        Kirim Pesan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Social Media & FAQ Section -->
<section class="social-faq-section py-5 bg-light">
    <div class="container">
        <div class="row g-5">
            <!-- Social Media -->
            <div class="col-lg-6">
                <div class="social-media-card">
                    <div class="section-badge mb-4">
                        <i class="bi bi-share me-2"></i>
                        Media Sosial
                    </div>
                    <h3 class="mb-4">Ikuti Kami di Media Sosial</h3>
                    <p class="text-muted mb-4">
                        Dapatkan update terbaru, berita eksklusif, dan berinteraksi langsung dengan komunitas kami
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link facebook">
                            <i class="bi bi-facebook"></i>
                            <div class="social-info">
                                <span class="social-name">Facebook</span>
                                <span class="social-followers">125K Followers</span>
                            </div>
                        </a>
                        <a href="#" class="social-link twitter">
                            <i class="bi bi-twitter"></i>
                            <div class="social-info">
                                <span class="social-name">Twitter</span>
                                <span class="social-followers">89K Followers</span>
                            </div>
                        </a>
                        <a href="#" class="social-link instagram">
                            <i class="bi bi-instagram"></i>
                            <div class="social-info">
                                <span class="social-name">Instagram</span>
                                <span class="social-followers">156K Followers</span>
                            </div>
                        </a>
                        <a href="#" class="social-link linkedin">
                            <i class="bi bi-linkedin"></i>
                            <div class="social-info">
                                <span class="social-name">LinkedIn</span>
                                <span class="social-followers">45K Followers</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Quick FAQ -->
            <div class="col-lg-6">
                <div class="faq-card">
                    <div class="section-badge mb-4">
                        <i class="bi bi-question-circle me-2"></i>
                        FAQ
                    </div>
                    <h3 class="mb-4">Pertanyaan yang Sering Diajukan</h3>
                    <div class="faq-list">
                        <div class="faq-item">
                            <div class="faq-question">
                                <i class="bi bi-chevron-right"></i>
                                Bagaimana cara mengirim artikel?
                            </div>
                            <div class="faq-answer">
                                Anda dapat mengirim artikel melalui email ke redaksi@portalberita.com dengan format yang telah ditentukan.
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">
                                <i class="bi bi-chevron-right"></i>
                                Berapa lama respons email?
                            </div>
                            <div class="faq-answer">
                                Kami berusaha merespons setiap email dalam waktu maksimal 24 jam pada hari kerja.
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">
                                <i class="bi bi-chevron-right"></i>
                                Apakah ada layanan iklan?
                            </div>
                            <div class="faq-answer">
                                Ya, kami menyediakan berbagai paket iklan. Hubungi tim marketing kami untuk informasi lebih lanjut.
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('faqs'); ?>" class="btn btn-modern-outline mt-4">
                        <i class="bi bi-arrow-right me-2"></i>
                        Lihat Semua FAQ
                    </a>
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
                <h3 class="text-white mb-3">Masih Ada Pertanyaan?</h3>
                <p class="text-white-50 mb-0">Tim customer service kami siap membantu Anda 24/7</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="<?= base_url('/'); ?>" class="btn btn-light btn-lg me-3">
                    <i class="bi bi-house me-2"></i>Kembali ke Beranda
                </a>
                <a href="<?= base_url('about'); ?>" class="btn btn-outline-light btn-lg">
                    <i class="bi bi-info-circle me-2"></i>Tentang Kami
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Modern Contact CSS -->
<style>
:root {
    --primary-color: #2563eb;
    --secondary-color: #1e40af;
    --accent-color: #3b82f6;
    --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --gradient-secondary: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    --text-dark: #1f2937;
    --text-light: #6b7280;
    --bg-light: #f8fafc;
    --border-radius: 16px;
    --shadow-sm: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Contact Hero Section */
.contact-hero {
    min-height: 90vh;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    position: relative;
    display: flex;
    align-items: center;
}

.hero-gradient {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.9) 0%, rgba(118, 75, 162, 0.9) 100%);
}

.contact-shapes {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
    pointer-events: none;
}

.contact-shape {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    animation: float 6s ease-in-out infinite;
}

.contact-shape.shape-1 {
    width: 150px;
    height: 150px;
    top: 15%;
    left: 15%;
    animation-delay: 0s;
}

.contact-shape.shape-2 {
    width: 100px;
    height: 100px;
    top: 70%;
    right: 20%;
    animation-delay: 2s;
}

.contact-shape.shape-3 {
    width: 80px;
    height: 80px;
    bottom: 30%;
    left: 70%;
    animation-delay: 4s;
}

.contact-shape.shape-4 {
    width: 120px;
    height: 120px;
    top: 40%;
    right: 60%;
    animation-delay: 1s;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(5deg); }
}

.min-vh-80 {
    min-height: 80vh;
}

.badge-modern {
    display: inline-flex;
    align-items: center;
    padding: 8px 16px;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 500;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 800;
    line-height: 1.1;
    color: white;
    margin-bottom: 1.5rem;
}

.text-gradient {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.hero-subtitle {
    font-size: 1.25rem;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.6;
    max-width: 500px;
}

.btn-modern-primary {
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    border: none;
    color: white;
    padding: 12px 24px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    transition: var(--transition);
    box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
}

.btn-modern-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(59, 130, 246, 0.6);
    color: white;
}

.btn-modern-outline {
    background: transparent;
    border: 2px solid rgba(255, 255, 255, 0.3);
    color: white;
    padding: 10px 24px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    transition: var(--transition);
    backdrop-filter: blur(10px);
}

.btn-modern-outline:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.5);
    transform: translateY(-2px);
    color: white;
}

/* Contact Visual Card */
.contact-visual {
    position: relative;
}

.contact-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    border-radius: var(--border-radius);
    padding: 2rem;
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: var(--shadow-lg);
    color: white;
}

.contact-card-header {
    display: flex;
    align-items: center;
    margin-bottom: 1.5rem;
}

.contact-avatar {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
}

.contact-avatar i {
    font-size: 2rem;
    color: white;
}

.contact-info h5 {
    margin: 0 0 0.5rem 0;
    color: white;
    font-weight: 600;
}

.status-online {
    display: flex;
    align-items: center;
    font-size: 0.875rem;
    color: rgba(255, 255, 255, 0.8);
}

.status-online i {
    color: #10b981;
    margin-right: 0.5rem;
    font-size: 0.75rem;
}

.response-time {
    background: rgba(255, 255, 255, 0.1);
    padding: 1rem;
    border-radius: 12px;
    margin-bottom: 1.5rem;
    font-size: 0.875rem;
    color: rgba(255, 255, 255, 0.9);
}

.contact-methods {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.method-item {
    display: flex;
    align-items: center;
    padding: 0.75rem;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    transition: var(--transition);
}

.method-item:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateX(5px);
}

.method-item i {
    margin-right: 0.75rem;
    font-size: 1.25rem;
    color: #fbbf24;
}

/* Section Styles */
.section-badge {
    display: inline-flex;
    align-items: center;
    padding: 8px 16px;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    color: white;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 1rem;
}

.section-title {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 1rem;
    line-height: 1.2;
}

.section-description {
    font-size: 1.125rem;
    color: var(--text-light);
    line-height: 1.6;
    max-width: 600px;
    margin: 0 auto;
}

/* Contact Method Cards */
.contact-method-card {
    background: white;
    padding: 2rem;
    border-radius: var(--border-radius);
    text-align: center;
    transition: var(--transition);
    box-shadow: var(--shadow-sm);
    height: 100%;
    border: 1px solid rgba(0, 0, 0, 0.05);
    position: relative;
    overflow: hidden;
}

.contact-method-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
}

.contact-method-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-lg);
}

.method-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    transition: var(--transition);
}

.contact-method-card:hover .method-icon {
    transform: scale(1.1) rotate(5deg);
}

.method-icon i {
    font-size: 2rem;
    color: white;
}

.contact-method-card h5 {
    color: var(--text-dark);
    font-weight: 700;
    margin-bottom: 1rem;
}

.contact-method-card p {
    color: var(--text-light);
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.method-link {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    transition: var(--transition);
}

.method-link:hover {
    color: var(--secondary-color);
    transform: translateX(5px);
}

/* Modern Form */
.modern-form-card {
    background: white;
    padding: 3rem;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-lg);
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.form-group {
    position: relative;
    margin-bottom: 1.5rem;
}

.form-label {
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 0.5rem;
    display: block;
}

.modern-input {
    width: 100%;
    padding: 1rem;
    border: 2px solid #e5e7eb;
    border-radius: 12px;
    font-size: 1rem;
    transition: var(--transition);
    background: #f9fafb;
    position: relative;
}

.modern-input:focus {
    outline: none;
    border-color: var(--primary-color);
    background: white;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
}

.modern-input:hover {
    border-color: var(--primary-color);
    background: white;
}

.input-focus-line {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 2px;
    width: 0;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    transition: width 0.3s ease;
}

.modern-input:focus + .input-focus-line {
    width: 100%;
}

/* Social Media Section */
.social-media-card,
.faq-card {
    background: white;
    padding: 2.5rem;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-sm);
    height: 100%;
}

.social-links {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.social-link {
    display: flex;
    align-items: center;
    padding: 1rem;
    background: #f9fafb;
    border-radius: 12px;
    text-decoration: none;
    transition: var(--transition);
    border: 1px solid #e5e7eb;
}

.social-link:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-sm);
    background: white;
}

.social-link.facebook:hover { border-color: #1877f2; }
.social-link.twitter:hover { border-color: #1da1f2; }
.social-link.instagram:hover { border-color: #e4405f; }
.social-link.linkedin:hover { border-color: #0077b5; }

.social-link i {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    margin-right: 1rem;
    font-size: 1.5rem;
    color: white;
}

.social-link.facebook i { background: #1877f2; }
.social-link.twitter i { background: #1da1f2; }
.social-link.instagram i { background: #e4405f; }
.social-link.linkedin i { background: #0077b5; }

.social-info {
    display: flex;
    flex-direction: column;
}

.social-name {
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 0.25rem;
}

.social-followers {
    font-size: 0.875rem;
    color: var(--text-light);
}

/* FAQ Section */
.faq-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.faq-item {
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    overflow: hidden;
    transition: var(--transition);
}

.faq-item:hover {
    border-color: var(--primary-color);
    box-shadow: var(--shadow-sm);
}

.faq-question {
    padding: 1rem;
    background: #f9fafb;
    font-weight: 600;
    color: var(--text-dark);
    cursor: pointer;
    display: flex;
    align-items: center;
    transition: var(--transition);
}

.faq-question:hover {
    background: #f3f4f6;
}

.faq-question i {
    margin-right: 0.75rem;
    color: var(--primary-color);
    transition: var(--transition);
}

.faq-answer {
    padding: 1rem;
    color: var(--text-light);
    line-height: 1.6;
    background: white;
}

/* CTA Section */
.cta-section {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
}

.bg-gradient {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)) !important;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }

    .hero-subtitle {
        font-size: 1.125rem;
    }

    .section-title {
        font-size: 2rem;
    }

    .contact-shape {
        display: none;
    }

    .hero-actions {
        flex-direction: column;
        gap: 1rem;
    }

    .hero-actions .btn-modern-primary,
    .hero-actions .btn-modern-outline {
        width: 100%;
        justify-content: center;
    }

    .modern-form-card {
        padding: 2rem;
    }

    .social-media-card,
    .faq-card {
        padding: 2rem;
    }

    .contact-method-card {
        padding: 1.5rem;
    }
}

@media (max-width: 576px) {
    .hero-title {
        font-size: 2rem;
    }

    .section-title {
        font-size: 1.75rem;
    }

    .modern-form-card {
        padding: 1.5rem;
    }

    .contact-card {
        padding: 1.5rem;
    }
}
</style>

<!-- Modern Contact JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth page loading
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.6s ease';

    window.addEventListener('load', function() {
        document.body.style.opacity = '1';
    });

    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Add scroll animations to cards
    document.querySelectorAll('.contact-method-card, .social-link, .faq-item, .modern-form-card').forEach((el, index) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
        el.style.transitionDelay = (index * 0.1) + 's';
        observer.observe(el);
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Parallax effect for hero
    let ticking = false;

    function updateParallax() {
        const scrolled = window.pageYOffset;
        const heroSection = document.querySelector('.contact-hero');
        const shapes = document.querySelectorAll('.contact-shape');

        if (heroSection) {
            const rate = scrolled * 0.5;
            heroSection.style.transform = `translateY(${rate}px)`;
        }

        shapes.forEach((shape, index) => {
            const rate = scrolled * (0.2 + index * 0.1);
            shape.style.transform = `translateY(${rate}px) rotate(${rate * 0.1}deg)`;
        });

        ticking = false;
    }

    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
    }

    window.addEventListener('scroll', requestTick);

    // Form enhancements
    const formInputs = document.querySelectorAll('.modern-input');
    formInputs.forEach(input => {
        // Focus effects
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'scale(1.02)';
        });

        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'scale(1)';
        });

        // Real-time validation
        input.addEventListener('input', function() {
            if (this.type === 'email') {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (emailRegex.test(this.value)) {
                    this.style.borderColor = '#10b981';
                } else if (this.value.length > 0) {
                    this.style.borderColor = '#ef4444';
                }
            }
        });
    });

    // Contact form submission
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Mengirim...';
            submitBtn.disabled = true;

            // Simulate form submission
            setTimeout(() => {
                submitBtn.innerHTML = '<i class="bi bi-check-circle me-2"></i>Terkirim!';
                submitBtn.style.background = '#10b981';

                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    submitBtn.style.background = '';
                    contactForm.reset();
                }, 2000);
            }, 2000);
        });
    }

    // FAQ toggle functionality
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', function() {
            const answer = this.nextElementSibling;
            const icon = this.querySelector('i');

            if (answer.style.display === 'none' || !answer.style.display) {
                answer.style.display = 'block';
                icon.style.transform = 'rotate(90deg)';
                this.style.background = '#f3f4f6';
            } else {
                answer.style.display = 'none';
                icon.style.transform = 'rotate(0deg)';
                this.style.background = '#f9fafb';
            }
        });
    });

    // Initialize FAQ - hide all answers
    document.querySelectorAll('.faq-answer').forEach(answer => {
        answer.style.display = 'none';
    });

    // Add hover effects to buttons
    document.querySelectorAll('.btn-modern-primary, .btn-modern-outline').forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px) scale(1.05)';
        });

        btn.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Social link tracking (optional)
    document.querySelectorAll('.social-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const platform = this.classList[1]; // facebook, twitter, etc.
            console.log(`Social link clicked: ${platform}`);
            // Here you could add analytics tracking
        });
    });
});
</script>

<?= $this->include('template/public_footer'); ?>
