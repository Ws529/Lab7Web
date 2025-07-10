<?= $this->include('template/admin_header'); ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="fw-bold"><?= $title; ?></h3>
    <a href="<?= base_url('admin/artikel'); ?>" class="btn btn-secondary">Kembali</a>
</div>

<?php if (isset($validation)): ?>
    <div class="alert alert-danger">
        <?= $validation->listErrors(); ?>
    </div>
<?php endif; ?>

<div class="card">
    <div class="card-body">
        <form action="<?= base_url('admin/artikel/add'); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>

            <div class="mb-3">
                <label for="judul" class="form-label">Judul Artikel</label>
                <input type="text" class="form-control" id="judul" name="judul"
                       value="<?= old('judul'); ?>" required>
            </div>

            <div class="mb-3">
                <label for="isi" class="form-label">Isi Artikel</label>
                <textarea class="form-control" id="isi" name="isi" rows="8" required><?= old('isi'); ?></textarea>
            </div>

            <div class="mb-3">
                <label for="id_kategori" class="form-label">Kategori</label>
                <select class="form-select" id="id_kategori" name="id_kategori" required>
                    <option value="">-- Pilih Kategori --</option>
                    <?php foreach ($kategori as $k): ?>
                        <option value="<?= $k['id_kategori']; ?>" <?= old('id_kategori') == $k['id_kategori'] ? 'selected' : ''; ?>>
                            <?= esc($k['nama_kategori']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Upload Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
                <div class="form-text">Format JPG, PNG, GIF. Ukuran maksimal 2MB.</div>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?= base_url('admin/artikel'); ?>" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan Artikel</button>
            </div>
        </form>
    </div>
</div>

<!-- Modern CSS Styles -->
<style>
:root {
    --primary-color: #2563eb;
    --secondary-color: #64748b;
    --success-color: #10b981;
    --danger-color: #ef4444;
    --warning-color: #f59e0b;
    --info-color: #06b6d4;
    --light-color: #f8fafc;
    --dark-color: #1e293b;
    --border-color: #e2e8f0;
    --text-primary: #1e293b;
    --text-secondary: #64748b;
    --text-muted: #94a3b8;
    --border-radius: 12px;
    --border-radius-lg: 16px;
    --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Modern Page Header */
.modern-page-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 2rem 0;
    margin: -1.5rem -1.5rem 2rem -1.5rem;
    border-radius: 0 0 var(--border-radius-lg) var(--border-radius-lg);
    color: white;
}

.page-header-content {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1.5rem;
}

.page-breadcrumb .breadcrumb {
    background: rgba(255, 255, 255, 0.1);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    margin-bottom: 1rem;
    backdrop-filter: blur(10px);
}

.page-breadcrumb .breadcrumb-item a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    transition: var(--transition);
}

.page-breadcrumb .breadcrumb-item a:hover {
    color: white;
}

.page-breadcrumb .breadcrumb-item.active {
    color: rgba(255, 255, 255, 0.9);
}

.page-title {
    font-size: 2.5rem;
    font-weight: 800;
    margin: 0;
    display: flex;
    align-items: center;
}

.page-subtitle {
    margin: 0.5rem 0 0 0;
    opacity: 0.9;
    font-size: 1.1rem;
}

.btn-modern-secondary {
    background: rgba(255, 255, 255, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    transition: var(--transition);
    backdrop-filter: blur(10px);
}

.btn-modern-secondary:hover {
    background: rgba(255, 255, 255, 0.3);
    color: white;
    transform: translateY(-2px);
}

.btn-modern-primary {
    background: linear-gradient(135deg, var(--primary-color), #1d4ed8);
    border: none;
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    transition: var(--transition);
    box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
}

.btn-modern-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(37, 99, 235, 0.4);
    color: white;
}

.btn-modern-success {
    background: linear-gradient(135deg, var(--success-color), #059669);
    border: none;
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    transition: var(--transition);
    box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
}

.btn-modern-success:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
    color: white;
}

/* Modern Alert */
.modern-alert {
    display: flex;
    align-items: flex-start;
    padding: 1.5rem;
    border-radius: var(--border-radius);
    margin-bottom: 2rem;
    position: relative;
    border-left: 4px solid;
}

.modern-alert.alert-danger {
    background: #fef2f2;
    border-left-color: var(--danger-color);
    color: #991b1b;
}

.alert-icon {
    margin-right: 1rem;
    font-size: 1.5rem;
    color: var(--danger-color);
}

.alert-content {
    flex: 1;
}

.alert-title {
    font-weight: 700;
    margin: 0 0 0.5rem 0;
    font-size: 1.1rem;
}

.alert-message {
    margin: 0;
    line-height: 1.6;
}

.alert-close {
    background: none;
    border: none;
    color: var(--danger-color);
    font-size: 1.25rem;
    cursor: pointer;
    padding: 0;
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: var(--transition);
}

.alert-close:hover {
    background: rgba(239, 68, 68, 0.1);
}

/* Modern Form Container */
.modern-form-container {
    max-width: 1000px;
    margin: 0 auto;
}

/* Progress Bar */
.form-progress-bar {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 3rem;
    position: relative;
    padding: 2rem 0;
}

.progress-step {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    z-index: 2;
    background: white;
    padding: 1rem;
    border-radius: var(--border-radius);
    transition: var(--transition);
    cursor: pointer;
}

.progress-step:not(:last-child) {
    margin-right: 8rem;
}

.step-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: var(--light-color);
    border: 3px solid var(--border-color);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: var(--text-muted);
    transition: var(--transition);
    margin-bottom: 0.75rem;
}

.progress-step.active .step-icon {
    background: var(--primary-color);
    border-color: var(--primary-color);
    color: white;
    transform: scale(1.1);
}

.step-label {
    font-weight: 600;
    color: var(--text-muted);
    font-size: 0.875rem;
    text-align: center;
    transition: var(--transition);
}

.progress-step.active .step-label {
    color: var(--primary-color);
}

.progress-line {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--border-color);
    z-index: 1;
    transform: translateY(-50%);
}

.progress-line::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    background: var(--primary-color);
    width: var(--progress-width, 0%);
    transition: width 0.5s ease;
}

/* Form Steps */
.form-step {
    display: none;
}

.form-step.active {
    display: block;
    animation: fadeInUp 0.5s ease;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.step-card {
    background: white;
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-lg);
    overflow: hidden;
    border: 1px solid var(--border-color);
}

.step-header {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    padding: 2rem;
    border-bottom: 1px solid var(--border-color);
}

.step-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--text-primary);
    margin: 0 0 0.5rem 0;
    display: flex;
    align-items: center;
}

.step-description {
    color: var(--text-secondary);
    margin: 0;
    font-size: 1rem;
}

.step-content {
    padding: 2.5rem;
}

.step-actions {
    padding: 1.5rem 2.5rem;
    background: var(--light-color);
    border-top: 1px solid var(--border-color);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Modern Form Groups */
.modern-form-group {
    margin-bottom: 2rem;
}

.modern-label {
    display: flex;
    align-items: center;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 0.75rem;
    font-size: 1rem;
}

.required-indicator {
    color: var(--danger-color);
    margin-left: 0.25rem;
}

.input-wrapper {
    position: relative;
}

.modern-input {
    width: 100%;
    padding: 1rem 1.25rem;
    border: 2px solid var(--border-color);
    border-radius: var(--border-radius);
    font-size: 1rem;
    transition: var(--transition);
    background: white;
    color: var(--text-primary);
}

.modern-input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
}

.modern-input:hover {
    border-color: var(--primary-color);
}

.modern-input.is-invalid,
.modern-textarea.is-invalid,
.modern-select.is-invalid {
    border-color: var(--danger-color);
    box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
}

.modern-input.is-invalid:focus,
.modern-textarea.is-invalid:focus,
.modern-select.is-invalid:focus {
    border-color: var(--danger-color);
    box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.2);
}

.input-focus-line {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 2px;
    width: 0;
    background: var(--primary-color);
    transition: width 0.3s ease;
}

.modern-input:focus + .input-focus-line {
    width: 100%;
}

.character-counter {
    position: absolute;
    top: 1rem;
    right: 1rem;
    font-size: 0.875rem;
    color: var(--text-muted);
    background: white;
    padding: 0 0.5rem;
}

.input-help {
    margin-top: 0.5rem;
    font-size: 0.875rem;
    color: var(--text-muted);
    display: flex;
    align-items: center;
}

/* Modern Textarea */
.editor-wrapper {
    position: relative;
}

.editor-toolbar {
    display: flex;
    align-items: center;
    padding: 0.75rem;
    background: var(--light-color);
    border: 2px solid var(--border-color);
    border-bottom: none;
    border-radius: var(--border-radius) var(--border-radius) 0 0;
    gap: 0.5rem;
}

.toolbar-btn {
    background: none;
    border: none;
    padding: 0.5rem;
    border-radius: 6px;
    color: var(--text-secondary);
    cursor: pointer;
    transition: var(--transition);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
}

.toolbar-btn:hover {
    background: white;
    color: var(--primary-color);
}

.toolbar-separator {
    width: 1px;
    height: 24px;
    background: var(--border-color);
    margin: 0 0.5rem;
}

.modern-textarea {
    width: 100%;
    padding: 1.25rem;
    border: 2px solid var(--border-color);
    border-top: none;
    border-radius: 0 0 var(--border-radius) var(--border-radius);
    font-size: 1rem;
    line-height: 1.6;
    resize: vertical;
    min-height: 200px;
    font-family: inherit;
    transition: var(--transition);
}

.modern-textarea:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
}

.word-counter {
    position: absolute;
    bottom: 1rem;
    right: 1rem;
    font-size: 0.875rem;
    color: var(--text-muted);
    background: rgba(255, 255, 255, 0.9);
    padding: 0.25rem 0.5rem;
    border-radius: 6px;
    backdrop-filter: blur(5px);
}

/* Modern Select */
.select-wrapper {
    position: relative;
}

.modern-select {
    width: 100%;
    padding: 1rem 3rem 1rem 1.25rem;
    border: 2px solid var(--border-color);
    border-radius: var(--border-radius);
    font-size: 1rem;
    transition: var(--transition);
    background: white;
    color: var(--text-primary);
    appearance: none;
    cursor: pointer;
}

.modern-select:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
}

.modern-select:hover {
    border-color: var(--primary-color);
}

.select-icon {
    position: absolute;
    top: 50%;
    right: 1rem;
    transform: translateY(-50%);
    color: var(--text-muted);
    pointer-events: none;
    transition: var(--transition);
}

.modern-select:focus + .select-icon {
    color: var(--primary-color);
    transform: translateY(-50%) rotate(180deg);
}

/* Tips Card */
.tips-card {
    background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
    border: 1px solid #bae6fd;
    border-radius: var(--border-radius);
    padding: 1.5rem;
}

.tip-item {
    display: flex;
    align-items: center;
    margin-bottom: 0.75rem;
    font-size: 0.875rem;
    color: var(--text-secondary);
}

.tip-item:last-child {
    margin-bottom: 0;
}

.tip-item i {
    flex-shrink: 0;
}

/* File Upload */
.file-upload-wrapper {
    position: relative;
}

.file-upload-area {
    border: 2px dashed var(--border-color);
    border-radius: var(--border-radius);
    padding: 3rem 2rem;
    text-align: center;
    transition: var(--transition);
    cursor: pointer;
    background: var(--light-color);
    position: relative;
}

.file-upload-area:hover {
    border-color: var(--primary-color);
    background: rgba(37, 99, 235, 0.02);
}

.file-upload-area.dragover {
    border-color: var(--primary-color);
    background: rgba(37, 99, 235, 0.05);
    transform: scale(1.02);
}

.upload-icon {
    font-size: 3rem;
    color: var(--text-muted);
    margin-bottom: 1rem;
}

.upload-text h5 {
    color: var(--text-primary);
    margin-bottom: 0.5rem;
}

.upload-text p {
    color: var(--text-muted);
    margin: 0;
}

.upload-link {
    color: var(--primary-color);
    font-weight: 600;
    cursor: pointer;
}

.file-input {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    cursor: pointer;
}

.file-preview {
    display: flex;
    align-items: center;
    padding: 1rem;
    border: 2px solid var(--border-color);
    border-radius: var(--border-radius);
    background: white;
    margin-top: 1rem;
}

.preview-image {
    position: relative;
    margin-right: 1rem;
}

.preview-image img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 8px;
}

.remove-file {
    position: absolute;
    top: -8px;
    right: -8px;
    width: 24px;
    height: 24px;
    background: var(--danger-color);
    color: white;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.875rem;
    transition: var(--transition);
}

.remove-file:hover {
    background: #dc2626;
    transform: scale(1.1);
}

.file-info {
    flex: 1;
}

.file-name {
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 0.25rem;
}

.file-size {
    font-size: 0.875rem;
    color: var(--text-muted);
}

/* Review Section */
.review-section {
    margin-bottom: 2rem;
}

.review-card {
    background: var(--light-color);
    border-radius: var(--border-radius);
    padding: 2rem;
    border: 1px solid var(--border-color);
}

.review-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
}

.article-preview {
    background: white;
    border-radius: var(--border-radius);
    padding: 2rem;
    border: 1px solid var(--border-color);
}

.preview-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}

.preview-category {
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 1rem;
    background: var(--primary-color);
    color: white;
    border-radius: 50px;
    font-size: 0.875rem;
    font-weight: 600;
}

.preview-status {
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 1rem;
    background: var(--success-color);
    color: white;
    border-radius: 50px;
    font-size: 0.875rem;
    font-weight: 600;
}

.preview-title {
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 1rem;
    line-height: 1.3;
}

.preview-meta {
    display: flex;
    gap: 1rem;
    margin-bottom: 1.5rem;
    font-size: 0.875rem;
    color: var(--text-muted);
}

.preview-image-container {
    margin-bottom: 1.5rem;
}

.preview-image-container img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: var(--border-radius);
}

.preview-content {
    color: var(--text-secondary);
    line-height: 1.6;
    font-size: 1rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .modern-page-header {
        margin: -1rem -1rem 2rem -1rem;
        padding: 1.5rem 0;
    }

    .page-header-content {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
        padding: 0 1rem;
    }

    .page-title {
        font-size: 2rem;
    }

    .progress-step:not(:last-child) {
        margin-right: 4rem;
    }

    .step-content {
        padding: 1.5rem;
    }

    .step-actions {
        padding: 1rem 1.5rem;
        flex-direction: column;
        gap: 1rem;
    }

    .radio-group {
        flex-direction: column;
    }

    .file-upload-area {
        padding: 2rem 1rem;
    }

    .file-preview {
        flex-direction: column;
        text-align: center;
    }

    .preview-image {
        margin-right: 0;
        margin-bottom: 1rem;
    }
}

@media (max-width: 576px) {
    .progress-step:not(:last-child) {
        margin-right: 2rem;
    }

    .step-label {
        display: none;
    }

    .step-content {
        padding: 1rem;
    }

    .step-actions {
        padding: 1rem;
    }
}
</style>

<!-- Modern JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize form
    initializeForm();

    // Step navigation
    initializeStepNavigation();

    // Form enhancements
    initializeFormEnhancements();

    // File upload
    initializeFileUpload();

    // Preview functionality
    initializePreview();
});

function initializeForm() {
    const form = document.getElementById('articleForm');

    // Form submission
    form.addEventListener('submit', function(e) {
        // Validate all steps before submission
        let allValid = true;
        for (let i = 1; i <= 2; i++) {
            if (!validateStep(i)) {
                allValid = false;
                // Go to the first invalid step
                goToStep(i);
                break;
            }
        }

        if (!allValid) {
            e.preventDefault();
            return;
        }

        // Show loading state
        const submitBtn = form.querySelector('.btn-submit');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Menyimpan...';
        submitBtn.disabled = true;

        // Let the form submit normally to the server
        // The loading state will be visible until the page redirects
        showNotification('Menyimpan artikel...', 'info');
    });

    // Helper function to go to step (needed for validation)
    function goToStep(stepNumber) {
        const steps = document.querySelectorAll('.form-step');
        const progressSteps = document.querySelectorAll('.progress-step');

        // Hide all steps
        steps.forEach(step => step.classList.remove('active'));
        progressSteps.forEach(step => step.classList.remove('active'));

        // Show target step
        const targetStep = document.querySelector(`.form-step[data-step="${stepNumber}"]`);
        const targetProgressStep = document.querySelector(`.progress-step[data-step="${stepNumber}"]`);

        if (targetStep && targetProgressStep) {
            targetStep.classList.add('active');
            targetProgressStep.classList.add('active');
        }
    }
}

function initializeStepNavigation() {
    const steps = document.querySelectorAll('.form-step');
    const progressSteps = document.querySelectorAll('.progress-step');
    const progressLine = document.querySelector('.progress-line::after');
    let currentStep = 1;

    // Next buttons
    document.querySelectorAll('.btn-next').forEach(btn => {
        btn.addEventListener('click', function() {
            const nextStep = parseInt(this.dataset.next);
            if (validateStep(currentStep)) {
                goToStep(nextStep);
            }
        });
    });

    // Previous buttons
    document.querySelectorAll('.btn-prev').forEach(btn => {
        btn.addEventListener('click', function() {
            const prevStep = parseInt(this.dataset.prev);
            goToStep(prevStep);
        });
    });

    // Progress step clicks
    progressSteps.forEach((step, index) => {
        step.addEventListener('click', function() {
            const stepNumber = index + 1;
            if (stepNumber <= currentStep || validateStep(currentStep)) {
                goToStep(stepNumber);
            }
        });
    });

    function goToStep(stepNumber) {
        // Hide all steps
        steps.forEach(step => step.classList.remove('active'));
        progressSteps.forEach(step => step.classList.remove('active'));

        // Show target step
        const targetStep = document.querySelector(`[data-step="${stepNumber}"]`);
        const targetProgressStep = document.querySelector(`.progress-step[data-step="${stepNumber}"]`);

        if (targetStep && targetProgressStep) {
            targetStep.classList.add('active');
            targetProgressStep.classList.add('active');
            currentStep = stepNumber;

            // Update progress line
            updateProgressLine(stepNumber);

            // Update preview if on step 3
            if (stepNumber === 3) {
                updatePreview();
            }
        }
    }

    function updateProgressLine(stepNumber) {
        const progressLine = document.querySelector('.progress-line');
        if (progressLine) {
            const percentage = ((stepNumber - 1) / 2) * 100;
            progressLine.style.setProperty('--progress-width', percentage + '%');
        }
    }

    function validateStep(stepNumber) {
        const step = document.querySelector(`.form-step[data-step="${stepNumber}"]`);
        if (!step) return true;

        const requiredFields = step.querySelectorAll('[required]');
        let isValid = true;
        let errorMessages = [];

        requiredFields.forEach(field => {
            const fieldName = field.getAttribute('name') || field.getAttribute('id');

            if (field.type === 'file') {
                if (!field.files || field.files.length === 0) {
                    field.classList.add('is-invalid');
                    errorMessages.push('Gambar artikel wajib diupload');
                    isValid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            } else if (!field.value.trim()) {
                field.classList.add('is-invalid');

                // Custom error messages
                switch(fieldName) {
                    case 'judul':
                        errorMessages.push('Judul artikel wajib diisi');
                        break;
                    case 'isi':
                        errorMessages.push('Konten artikel wajib diisi');
                        break;
                    case 'id_kategori':
                        errorMessages.push('Kategori artikel wajib dipilih');
                        break;
                    default:
                        errorMessages.push(`Field ${fieldName} wajib diisi`);
                }
                isValid = false;
            } else {
                field.classList.remove('is-invalid');

                // Additional validation
                if (fieldName === 'judul' && field.value.length > 100) {
                    field.classList.add('is-invalid');
                    errorMessages.push('Judul artikel maksimal 100 karakter');
                    isValid = false;
                }

                if (fieldName === 'isi' && field.value.trim().split(/\s+/).length < 10) {
                    field.classList.add('is-invalid');
                    errorMessages.push('Konten artikel minimal 10 kata');
                    isValid = false;
                }
            }
        });

        if (!isValid) {
            const message = errorMessages.length > 1
                ? 'Terdapat beberapa kesalahan:\n• ' + errorMessages.join('\n• ')
                : errorMessages[0] || 'Mohon lengkapi semua field yang wajib diisi';
            showNotification(message, 'error');
        }

        return isValid;
    }
}

function initializeFormEnhancements() {
    // Character counter for title
    const titleInput = document.getElementById('judul');
    const charCounter = titleInput.parentElement.querySelector('.character-counter');

    if (titleInput && charCounter) {
        titleInput.addEventListener('input', function() {
            const currentCount = this.value.length;
            const maxCount = 100;
            charCounter.querySelector('.current-count').textContent = currentCount;

            if (currentCount > maxCount) {
                charCounter.style.color = 'var(--danger-color)';
                this.style.borderColor = 'var(--danger-color)';
            } else {
                charCounter.style.color = 'var(--text-muted)';
                this.style.borderColor = 'var(--border-color)';
            }
        });
    }

    // Word counter for content
    const contentTextarea = document.getElementById('isi');
    const wordCounter = contentTextarea.parentElement.querySelector('.word-counter');

    if (contentTextarea && wordCounter) {
        contentTextarea.addEventListener('input', function() {
            const words = this.value.trim().split(/\s+/).filter(word => word.length > 0);
            const wordCount = words.length;
            wordCounter.querySelector('.word-count').textContent = wordCount;

            if (wordCount < 100) {
                wordCounter.style.color = 'var(--warning-color)';
            } else {
                wordCounter.style.color = 'var(--success-color)';
            }
        });
    }

    // Toolbar functionality
    document.querySelectorAll('.toolbar-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const action = this.dataset.action;
            document.execCommand(action, false, null);
            contentTextarea.focus();
        });
    });

    // Input focus effects
    document.querySelectorAll('.modern-input, .modern-textarea, .modern-select').forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });

        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
        });
    });
}

function initializeFileUpload() {
    const fileInput = document.getElementById('gambar');
    const uploadArea = document.getElementById('fileUploadArea');
    const filePreview = document.getElementById('filePreview');

    if (!fileInput || !uploadArea || !filePreview) {
        console.error('File upload elements not found');
        return;
    }

    // Click to upload
    uploadArea.addEventListener('click', function(e) {
        e.preventDefault();
        fileInput.click();
    });

    // Prevent default drag behaviors
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        uploadArea.addEventListener(eventName, preventDefaults, false);
        document.body.addEventListener(eventName, preventDefaults, false);
    });

    // Highlight drop area when item is dragged over it
    ['dragenter', 'dragover'].forEach(eventName => {
        uploadArea.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        uploadArea.addEventListener(eventName, unhighlight, false);
    });

    // Handle dropped files
    uploadArea.addEventListener('drop', handleDrop, false);

    // File input change
    fileInput.addEventListener('change', function() {
        if (this.files && this.files.length > 0) {
            handleFileSelect(this.files[0]);
        }
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    function highlight(e) {
        uploadArea.classList.add('dragover');
    }

    function unhighlight(e) {
        uploadArea.classList.remove('dragover');
    }

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;

        if (files.length > 0) {
            // Update the file input
            fileInput.files = files;
            handleFileSelect(files[0]);
        }
    }

    function handleFileSelect(file) {
        // Validate file
        if (!file.type.startsWith('image/')) {
            showNotification('File harus berupa gambar (JPG, PNG, GIF)', 'error');
            return;
        }

        if (file.size > 2 * 1024 * 1024) { // 2MB
            showNotification('Ukuran file maksimal 2MB', 'error');
            return;
        }

        // Show preview
        const reader = new FileReader();
        reader.onload = function(e) {
            const previewImg = document.getElementById('previewImg');
            const fileName = document.getElementById('fileName');
            const fileSize = document.getElementById('fileSize');

            if (previewImg && fileName && fileSize) {
                previewImg.src = e.target.result;
                fileName.textContent = file.name;
                fileSize.textContent = formatFileSize(file.size);

                uploadArea.style.display = 'none';
                filePreview.style.display = 'flex';

                showNotification('File berhasil diupload', 'success');
            }
        };
        reader.readAsDataURL(file);
    }

    function formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    }
}

function removeFile() {
    const fileInput = document.getElementById('gambar');
    const uploadArea = document.getElementById('fileUploadArea');
    const filePreview = document.getElementById('filePreview');
    const previewImg = document.getElementById('previewImg');

    if (fileInput) fileInput.value = '';
    if (uploadArea) uploadArea.style.display = 'block';
    if (filePreview) filePreview.style.display = 'none';
    if (previewImg) previewImg.src = '';

    showNotification('File berhasil dihapus', 'info');
}

function initializePreview() {
    // Real-time preview updates will be handled in updatePreview()
}

function updatePreview() {
    const title = document.getElementById('judul').value || 'Judul artikel akan muncul di sini';
    const content = document.getElementById('isi').value || 'Konten artikel akan muncul di sini...';
    const categorySelect = document.getElementById('id_kategori');
    const categoryText = categorySelect.options[categorySelect.selectedIndex]?.text || 'Kategori akan muncul di sini';
    const previewImg = document.getElementById('previewImg');

    // Update preview elements
    document.getElementById('previewTitle').textContent = title;
    document.getElementById('previewContent').textContent = content.substring(0, 200) + (content.length > 200 ? '...' : '');
    document.getElementById('previewCategory').innerHTML = `<i class="bi bi-tag"></i> <span>${categoryText}</span>`;

    // Update preview image
    const previewImageContainer = document.getElementById('previewImageContainer');
    const previewArticleImage = document.getElementById('previewArticleImage');

    if (previewImg && previewImg.src && previewImg.src !== window.location.href) {
        previewArticleImage.src = previewImg.src;
        previewImageContainer.style.display = 'block';
    } else {
        previewImageContainer.style.display = 'none';
    }
}

function showNotification(message, type = 'info') {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <i class="bi bi-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-triangle' : 'info-circle'}"></i>
            <span>${message}</span>
        </div>
        <button class="notification-close" onclick="this.parentElement.remove()">
            <i class="bi bi-x"></i>
        </button>
    `;

    // Add to page
    document.body.appendChild(notification);

    // Auto remove after 5 seconds
    setTimeout(() => {
        if (notification.parentElement) {
            notification.remove();
        }
    }, 5000);
}

// Add notification styles
const notificationStyles = `
<style>
.notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background: white;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-lg);
    padding: 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    min-width: 300px;
    border-left: 4px solid;
    animation: slideInRight 0.3s ease;
}

.notification-success {
    border-left-color: var(--success-color);
}

.notification-error {
    border-left-color: var(--danger-color);
}

.notification-info {
    border-left-color: var(--info-color);
}

.notification-content {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.notification-content i {
    font-size: 1.25rem;
}

.notification-success .notification-content i {
    color: var(--success-color);
}

.notification-error .notification-content i {
    color: var(--danger-color);
}

.notification-info .notification-content i {
    color: var(--info-color);
}

.notification-close {
    background: none;
    border: none;
    color: var(--text-muted);
    cursor: pointer;
    padding: 0.25rem;
    border-radius: 4px;
    transition: var(--transition);
}

.notification-close:hover {
    background: var(--light-color);
    color: var(--text-primary);
}

@keyframes slideInRight {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}
</style>
`;

document.head.insertAdjacentHTML('beforeend', notificationStyles);
</script>

<?= $this->include('template/admin_footer'); ?>
