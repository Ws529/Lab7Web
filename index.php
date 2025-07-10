<?= $this->include('template/public_header'); ?>

<!-- Modern Hero Section -->
<section class="hero-modern-articles">
    <div class="hero-background">
        <div class="hero-gradient"></div>
        <div class="hero-pattern"></div>
    </div>

    <div class="container">
        <div class="row align-items-center min-vh-60">
            <div class="col-lg-8 mx-auto text-center">
                <div class="hero-content text-white">
                    <div class="hero-badge">
                        <span class="badge-icon">📚</span>
                        <span class="badge-text">Koleksi Artikel</span>
                    </div>

                    <h1 class="hero-title">
                        Jelajahi <span class="text-gradient-white">Artikel</span><br>
                        <span class="text-gradient-white">Terbaik</span>
                    </h1>

                    <p class="hero-description">
                        Temukan berita terkini, artikel mendalam, dan insight menarik
                        dari berbagai kategori yang telah dikurasi khusus untuk Anda.
                    </p>

                    <div class="hero-actions">
                        <a href="#articles" class="btn btn-white-modern">
                            <span>Mulai Membaca</span>
                            <i class="bi bi-arrow-down"></i>
                        </a>
                        <a href="<?= base_url('/'); ?>" class="btn btn-outline-white-modern">
                            <span>Kembali ke Home</span>
                            <i class="bi bi-house"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Filter & Search Section -->
<section class="filter-section">
    <div class="container">
        <div class="filter-card">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="filter-content">
                        <h3>Temukan Artikel</h3>
                        <p>Cari artikel berdasarkan kategori atau kata kunci</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="filter-controls">
                        <div class="search-box">
                            <input type="text" class="form-control" placeholder="Cari artikel..." id="searchInput">
                            <button class="search-btn">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                        <div class="category-filters">
                            <button class="filter-btn active" data-category="all">Semua</button>
                            <button class="filter-btn" data-category="teknologi">Teknologi</button>
                            <button class="filter-btn" data-category="olahraga">Olahraga</button>
                            <button class="filter-btn" data-category="politik">Politik</button>
                            <button class="filter-btn" data-category="politik">Hiburan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Articles Section -->
<section id="articles" class="articles-section-modern">
    <div class="container">
        <?php if($artikel): ?>
            <!-- Featured Article -->
            <?php $featured = array_shift($artikel); ?>
            <?php if($featured): ?>
                <div class="featured-article-modern">
                    <article class="featured-card-modern">
                        <div class="featured-image">
                            <?php if(!empty($featured['gambar'])): ?>
                                <img src="<?= base_url('/gambar/' . $featured['gambar']); ?>"
                                     alt="<?= esc($featured['judul']); ?>"
                                     loading="lazy">
                            <?php else: ?>
                                <div class="image-placeholder-featured">
                                    <i class="bi bi-newspaper"></i>
                                </div>
                            <?php endif; ?>
                            <div class="featured-badge">
                                <span>✨ Featured</span>
                            </div>
                        </div>

                        <div class="featured-content">
                            <?php if(!empty($featured['nama_kategori'])): ?>
                                <div class="article-category-featured">
                                    <?= esc($featured['nama_kategori']); ?>
                                </div>
                            <?php endif; ?>

                            <h2 class="featured-title">
                                <a href="<?= base_url('/artikel/' . ($featured['slug'] ?? 'artikel-' . $featured['id'])); ?>">
                                    <?= esc($featured['judul']); ?>
                                </a>
                            </h2>

                            <p class="featured-excerpt">
                                <?= esc(substr($featured['isi'], 0, 200)); ?>...
                            </p>

                            <div class="featured-meta">
                                <div class="meta-info">
                                    <span class="meta-date">
                                        <i class="bi bi-calendar3"></i>
                                        <?= date('d M Y', strtotime($featured['created_at'] ?? 'now')); ?>
                                    </span>
                                    <span class="meta-read">
                                        <i class="bi bi-clock"></i>
                                        <?= ceil(str_word_count($featured['isi']) / 200); ?> min read
                                    </span>
                                </div>

                                <a href="<?= base_url('/artikel/' . ($featured['slug'] ?? 'artikel-' . $featured['id'])); ?>"
                                   class="read-featured-btn">
                                    <span>Baca Artikel</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            <?php endif; ?>

            <!-- Articles Grid -->
            <?php if(!empty($artikel)): ?>
                <div class="articles-grid-modern">
                    <?php foreach($artikel as $index => $row): ?>
                        <article class="article-card-modern" data-aos="fade-up" data-aos-delay="<?= $index * 100; ?>">
                            <div class="article-image">
                                <?php if(!empty($row['gambar'])): ?>
                                    <img src="<?= base_url('/gambar/' . $row['gambar']); ?>"
                                         alt="<?= esc($row['judul']); ?>"
                                         loading="lazy">
                                <?php else: ?>
                                    <div class="image-placeholder">
                                        <i class="bi bi-image"></i>
                                    </div>
                                <?php endif; ?>

                                <?php if(!empty($row['nama_kategori'])): ?>
                                    <div class="article-category">
                                        <?= esc($row['nama_kategori']); ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="article-content">
                                <h3 class="article-title">
                                    <a href="<?= base_url('/artikel/' . ($row['slug'] ?? 'artikel-' . $row['id'])); ?>">
                                        <?= esc($row['judul']); ?>
                                    </a>
                                </h3>

                                <p class="article-excerpt">
                                    <?= esc(substr($row['isi'], 0, 120)); ?>...
                                </p>

                                <div class="article-meta">
                                    <div class="meta-info">
                                        <span class="meta-date">
                                            <i class="bi bi-clock"></i>
                                            <?= date('d M Y', strtotime($row['created_at'] ?? 'now')); ?>
                                        </span>
                                    </div>

                                    <a href="<?= base_url('/artikel/' . ($row['slug'] ?? 'artikel-' . $row['id'])); ?>"
                                       class="read-more-btn">
                                        <span>Baca</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        <?php else: ?>
            <!-- Empty State -->
            <div class="empty-state-modern">
                <div class="empty-icon">
                    <i class="bi bi-file-text"></i>
                </div>
                <h3>Belum Ada Artikel</h3>
                <p>Artikel sedang dalam proses penulisan. Silakan kembali lagi nanti.</p>
                <a href="<?= base_url('/'); ?>" class="btn btn-primary-modern">
                    <span>Kembali ke Home</span>
                    <i class="bi bi-house"></i>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Modern CSS Styles -->
<style>
/* CSS Variables */
:root {
    --primary-color: rgb(177, 59, 255);
    --primary-dark: #FFCC00;
    --secondary-color: #471396;
    --accent-color: #00FFDE;
    --success-color: #10b981;
    --text-dark: #1e293b;
    --text-light: #64748b;
    --bg-light: #f8fafc;
    --bg-white: #ffffff;
    --border-color: #e2e8f0;
    --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
    --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
    --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1);
    --radius-sm: 0.375rem;
    --radius-md: 0.5rem;
    --radius-lg: 0.75rem;
    --radius-xl: 1rem;
}

/* Global Styles */
body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    line-height: 1.6;
    color: var(--text-dark);
}

.min-vh-60 {
    min-height: 60vh;
}

.text-gradient-white {
    background: linear-gradient(135deg, #ffffff, #f1f5f9);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Hero Section */
.hero-modern-articles {
    position: relative;
    min-height: 60vh;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.hero-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: -1;
}

.hero-gradient {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, #1e40af 0%, #7c3aed 100%);
    opacity: 0.9;
}

.hero-pattern {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image:
        radial-gradient(circle at 25% 25%, rgba(255,255,255,0.1) 0%, transparent 50%),
        radial-gradient(circle at 75% 75%, rgba(255,255,255,0.1) 0%, transparent 50%);
    background-size: 100px 100px;
    animation: patternMove 20s linear infinite;
}

@keyframes patternMove {
    0% { transform: translate(0, 0); }
    100% { transform: translate(100px, 100px); }
}

.hero-content {
    z-index: 2;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    padding: 0.5rem 1rem;
    border-radius: var(--radius-xl);
    border: 1px solid rgba(255, 255, 255, 0.2);
    margin-bottom: 1.5rem;
    font-size: 0.875rem;
    font-weight: 500;
}

.badge-icon {
    font-size: 1.2rem;
}

.hero-title {
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 1.5rem;
}

.hero-description {
    font-size: 1.125rem;
    line-height: 1.7;
    margin-bottom: 2rem;
    opacity: 0.9;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.hero-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    justify-content: center;
}

/* Modern Buttons */
.btn-white-modern {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: var(--bg-white);
    color: var(--primary-color);
    padding: 0.875rem 1.5rem;
    border-radius: var(--radius-lg);
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    border: none;
    box-shadow: var(--shadow-lg);
}

.btn-white-modern:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-xl);
    color: var(--primary-dark);
}

.btn-outline-white-modern {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: transparent;
    color: white;
    padding: 0.875rem 1.5rem;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: var(--radius-lg);
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.btn-outline-white-modern:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.5);
    color: white;
    transform: translateY(-2px);
}

/* Filter Section */
.filter-section {
    padding: 2rem 0;
    background: var(--bg-light);
}

.filter-card {
    background: var(--bg-white);
    border-radius: var(--radius-xl);
    padding: 2rem;
    box-shadow: var(--shadow-md);
    border: 1px solid var(--border-color);
}

.filter-content h3 {
    color: var(--text-dark);
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.filter-content p {
    color: var(--text-light);
    margin-bottom: 0;
}

.filter-controls {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.search-box {
    position: relative;
    display: flex;
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-color);
}

.search-box .form-control {
    border: none;
    padding: 0.875rem 1rem;
    font-size: 1rem;
    flex: 1;
    outline: none;
}

.search-box .form-control:focus {
    box-shadow: none;
}

.search-btn {
    background: var(--primary-color);
    color: white;
    border: none;
    padding: 0.875rem 1rem;
    transition: all 0.3s ease;
}

.search-btn:hover {
    background: var(--primary-dark);
}

.category-filters {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.filter-btn {
    background: transparent;
    border: 2px solid var(--border-color);
    color: var(--text-light);
    padding: 0.5rem 1rem;
    border-radius: var(--radius-lg);
    font-size: 0.875rem;
    font-weight: 500;
    transition: all 0.3s ease;
    cursor: pointer;
}

.filter-btn:hover,
.filter-btn.active {
    background: var(--primary-color);
    border-color: var(--primary-color);
    color: white;
}

/* Articles Section */
.articles-section-modern {
    padding: 4rem 0;
    background: var(--bg-white);
}

/* Featured Article */
.featured-article-modern {
    margin-bottom: 4rem;
}

.featured-card-modern {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0;
    background: var(--bg-white);
    border-radius: var(--radius-xl);
    overflow: hidden;
    box-shadow: var(--shadow-lg);
    border: 1px solid var(--border-color);
    transition: all 0.3s ease;
}

.featured-card-modern:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

.featured-image {
    position: relative;
    height: 400px;
    overflow: hidden;
}

.featured-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.featured-card-modern:hover .featured-image img {
    transform: scale(1.05);
}

.image-placeholder-featured {
    width: 100%;
    height: 100%;
    background: var(--bg-light);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-light);
    font-size: 4rem;
}

.featured-badge {
    position: absolute;
    top: 1.5rem;
    left: 1.5rem;
    background: var(--accent-color);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: var(--radius-lg);
    font-size: 0.875rem;
    font-weight: 600;
}

.featured-content {
    padding: 2.5rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.article-category-featured {
    color: var(--primary-color);
    font-size: 0.875rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 1rem;
}

.featured-title {
    margin-bottom: 1rem;
}

.featured-title a {
    color: var(--text-dark);
    text-decoration: none;
    font-size: 2rem;
    font-weight: 800;
    line-height: 1.2;
    transition: color 0.3s ease;
}

.featured-title a:hover {
    color: var(--primary-color);
}

.featured-excerpt {
    color: var(--text-light);
    font-size: 1.125rem;
    line-height: 1.6;
    margin-bottom: 2rem;
}

.featured-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.meta-info {
    display: flex;
    gap: 1rem;
}

.meta-date,
.meta-read {
    display: flex;
    align-items: center;
    gap: 0.25rem;
    color: var(--text-light);
    font-size: 0.875rem;
}

.read-featured-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: var(--primary-color);
    color: white;
    padding: 0.875rem 1.5rem;
    border-radius: var(--radius-lg);
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.read-featured-btn:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
    color: white;
}

/* Articles Grid */
.articles-grid-modern {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

.article-card-modern {
    background: var(--bg-white);
    border-radius: var(--radius-xl);
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    transition: all 0.3s ease;
    border: 1px solid var(--border-color);
}

.article-card-modern:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

.article-image {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.article-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.article-card-modern:hover .article-image img {
    transform: scale(1.05);
}

.image-placeholder {
    width: 100%;
    height: 100%;
    background: var(--bg-light);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-light);
    font-size: 2rem;
}

.article-category {
    position: absolute;
    top: 1rem;
    left: 1rem;
    background: var(--primary-color);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: var(--radius-md);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.article-content {
    padding: 1.5rem;
}

.article-title {
    margin-bottom: 0.75rem;
}

.article-title a {
    color: var(--text-dark);
    text-decoration: none;
    font-size: 1.25rem;
    font-weight: 700;
    line-height: 1.3;
    transition: color 0.3s ease;
}

.article-title a:hover {
    color: var(--primary-color);
}

.article-excerpt {
    color: var(--text-light);
    line-height: 1.6;
    margin-bottom: 1rem;
}

.article-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.meta-date {
    display: flex;
    align-items: center;
    gap: 0.25rem;
    color: var(--text-light);
    font-size: 0.875rem;
}

.read-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
    font-size: 0.875rem;
    transition: all 0.3s ease;
}

.read-more-btn:hover {
    color: var(--primary-dark);
    transform: translateX(4px);
}

/* Empty State */
.empty-state-modern {
    text-align: center;
    padding: 4rem 2rem;
}

.empty-icon {
    font-size: 4rem;
    color: var(--text-light);
    margin-bottom: 1rem;
}

.empty-state-modern h3 {
    color: var(--text-dark);
    margin-bottom: 0.5rem;
}

.empty-state-modern p {
    color: var(--text-light);
    margin-bottom: 2rem;
}

.btn-primary-modern {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: var(--primary-color);
    color: white;
    padding: 0.875rem 1.5rem;
    border-radius: var(--radius-lg);
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    border: none;
}

.btn-primary-modern:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
    color: white;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-actions {
        flex-direction: column;
        align-items: stretch;
    }

    .btn-white-modern,
    .btn-outline-white-modern {
        justify-content: center;
    }

    .featured-card-modern {
        grid-template-columns: 1fr;
    }

    .featured-image {
        height: 250px;
    }

    .featured-content {
        padding: 1.5rem;
    }

    .featured-title a {
        font-size: 1.5rem;
    }

    .articles-grid-modern {
        grid-template-columns: 1fr;
    }

    .filter-controls {
        margin-top: 1.5rem;
    }

    .category-filters {
        justify-content: center;
    }

    .featured-meta {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
}

@media (max-width: 480px) {
    .filter-card {
        padding: 1rem;
    }

    .hero-title {
        font-size: 2rem;
    }

    .hero-description {
        font-size: 1rem;
    }
}
</style>

<!-- Modern JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth page load
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.5s ease';

    window.addEventListener('load', function() {
        document.body.style.opacity = '1';
    });

    // Search functionality
    const searchInput = document.getElementById('searchInput');
    const articleCards = document.querySelectorAll('.article-card-modern');

    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();

            articleCards.forEach(card => {
                const title = card.querySelector('.article-title a').textContent.toLowerCase();
                const excerpt = card.querySelector('.article-excerpt').textContent.toLowerCase();

                if (title.includes(searchTerm) || excerpt.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    }

    // Category filter functionality
    const filterBtns = document.querySelectorAll('.filter-btn');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');

            const category = this.getAttribute('data-category');

            articleCards.forEach(card => {
                const cardCategory = card.querySelector('.article-category');

                if (category === 'all') {
                    card.style.display = 'block';
                } else if (cardCategory && cardCategory.textContent.toLowerCase().includes(category.toLowerCase())) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
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

    // Simple parallax effect for hero
    let ticking = false;

    function updateParallax() {
        const scrolled = window.pageYOffset;
        const heroPattern = document.querySelector('.hero-pattern');

        if (heroPattern) {
            const rate = scrolled * 0.5;
            heroPattern.style.transform = `translateY(${rate}px)`;
        }

        ticking = false;
    }

    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
    });

    // Enhanced search with Enter key
    if (searchInput) {
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                // Focus on first visible article
                const firstVisible = document.querySelector('.article-card-modern[style*="display: block"], .article-card-modern:not([style*="display: none"])');
                if (firstVisible) {
                    firstVisible.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
        });
    }
});
</script>

<?= $this->include('template/public_footer'); ?>