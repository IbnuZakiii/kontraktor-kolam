@extends('layouts.app')

@section('title', 'Professional Pool Contractor')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section position-relative overflow-hidden" id="hero-section">
        <div class="container-fluid p-0 m-0">
            <div class="row g-0">
                <div class="col-lg-6 d-flex align-items-center bg-dark-blue text-white p-5" style="min-height: 100vh;">
                    <div class="hero-content pt-5">
                        <h6 class="text-uppercase text-warning mb-3">Premium Pool Contractor</h6>
                        <h1 class="display-4 fw-bold mb-4">Creating Your Dream <span class="text-aqua">Swimming Pool</span></h1>
                        <p class="lead mb-4">Design, construction, renovation & maintenance of luxury swimming pools. Transform your backyard into an oasis.</p>
                        <div class="hero-buttons">
                            <a href="{{ route('portfolio') }}" class="btn btn-warning btn-lg me-3">
                                <i class="fas fa-play-circle me-2"></i> View Projects
                            </a>
                            <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">
                                Get Free Quote
                            </a>
                        </div>
                        <div class="hero-stats row mt-5 pt-4">
                            <div class="col-4">
                                <h3 class="fw-bold text-aqua">250+</h3>
                                <p class="small">Projects Completed</p>
                            </div>
                            <div class="col-4">
                                <h3 class="fw-bold text-aqua">15+</h3>
                                <p class="small">Years Experience</p>
                            </div>
                            <div class="col-4">
                                <h3 class="fw-bold text-aqua">98%</h3>
                                <p class="small">Client Satisfaction</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="hero-image w-100 h-100" style="min-height: 100vh;">
                        <img src="assets/img/kolam.jpg" 
                             class="img-fluid w-100 h-100 object-fit-cover" 
                             style="display: block;"
                             alt="Luxury Swimming Pool">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="services-section py-5 bg-light" style="margin-top: -1px;">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="text-uppercase text-aqua fw-bold">Our Services</h6>
                <h2 class="display-5 fw-bold mb-3">Professional Pool Solutions</h2>
                <p class="lead text-muted">Comprehensive services from design to maintenance</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="service-icon mb-4">
                                <div class="icon-wrapper bg-aqua-light rounded-circle p-3 d-inline-block">
                                    <i class="fas fa-hammer fa-2x text-aqua"></i>
                                </div>
                            </div>
                            <h4 class="card-title fw-bold">Pool Construction</h4>
                            <p class="card-text text-muted">Custom-designed swimming pools built with premium materials and advanced technology.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i> Custom Design</li>
                                <li><i class="fas fa-check text-success me-2"></i> Premium Materials</li>
                                <li><i class="fas fa-check text-success me-2"></i> Advanced Filtration</li>
                            </ul>
                            <a href="{{ route('services.construction') }}" class="btn btn-link text-aqua p-0">Learn More →</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="service-card card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="service-icon mb-4">
                                <div class="icon-wrapper bg-aqua-light rounded-circle p-3 d-inline-block">
                                    <i class="fas fa-tools fa-2x text-aqua"></i>
                                </div>
                            </div>
                            <h4 class="card-title fw-bold">Pool Renovation</h4>
                            <p class="card-text text-muted">Transform your old pool into a modern masterpiece with our renovation expertise.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i> Tile Replacement</li>
                                <li><i class="fas fa-check text-success me-2"></i> Equipment Upgrade</li>
                                <li><i class="fas fa-check text-success me-2"></i> Modern Features</li>
                            </ul>
                            <a href="{{ route('services.renovation') }}" class="btn btn-link text-aqua p-0">Learn More →</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="service-card card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="service-icon mb-4">
                                <div class="icon-wrapper bg-aqua-light rounded-circle p-3 d-inline-block">
                                    <i class="fas fa-clipboard-check fa-2x text-aqua"></i>
                                </div>
                            </div>
                            <h4 class="card-title fw-bold">Pool Maintenance</h4>
                            <p class="card-text text-muted">Regular maintenance services to keep your pool clean, safe, and ready for use.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i> Weekly Cleaning</li>
                                <li><i class="fas fa-check text-success me-2"></i> Chemical Balancing</li>
                                <li><i class="fas fa-check text-success me-2"></i> Equipment Check</li>
                            </ul>
                            <a href="{{ route('services.maintenance') }}" class="btn btn-link text-aqua p-0">Learn More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-us-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="section-header mb-4">
                        <h6 class="text-uppercase text-aqua fw-bold">Why Choose AquaPro</h6>
                        <h2 class="display-5 fw-bold mb-3">Excellence in Every Detail</h2>
                    </div>
                    
                    <div class="features-list">
                        <div class="feature-item d-flex mb-4">
                            <div class="feature-icon me-4">
                                <div class="rounded-circle bg-aqua text-white p-3">
                                    <i class="fas fa-award fa-lg"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="fw-bold">Certified Professionals</h5>
                                <p class="text-muted mb-0">Our team consists of certified pool builders with extensive training.</p>
                            </div>
                        </div>
                        
                        <div class="feature-item d-flex mb-4">
                            <div class="feature-icon me-4">
                                <div class="rounded-circle bg-aqua text-white p-3">
                                    <i class="fas fa-clock fa-lg"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="fw-bold">On-Time Completion</h5>
                                <p class="text-muted mb-0">We respect your time and complete projects within agreed deadlines.</p>
                            </div>
                        </div>
                        
                        <div class="feature-item d-flex mb-4">
                            <div class="feature-icon me-4">
                                <div class="rounded-circle bg-aqua text-white p-3">
                                    <i class="fas fa-shield-alt fa-lg"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="fw-bold">10-Year Warranty</h5>
                                <p class="text-muted mb-0">Comprehensive warranty on construction and equipment.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="image-frame position-relative">
                        <img src="https://images.unsplash.com/photo-1531685250784-7569952593d2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             class="img-fluid rounded shadow-lg" alt="Professional Pool Building">
                        <div class="experience-badge bg-warning text-dark rounded-pill p-3 position-absolute" style="bottom: 20px; right: 20px;">
                            <h3 class="mb-0 fw-bold">15+ Years</h3>
                            <p class="mb-0 small">Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="cta-section py-5 bg-dark-blue text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-3">Ready to Transform Your Space?</h2>
                    <p class="lead mb-0">Contact us today for a free consultation and quote on your dream pool project.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-5">
                        <i class="fas fa-calendar-check me-2"></i> Schedule Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* Reset untuk menghilangkan garis putih */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        overflow-x: hidden;
    }
    
    .bg-dark-blue {
        background-color: #003459;
    }
    .text-aqua {
        color: #00A8E8;
    }
    .bg-aqua {
        background-color: #00A8E8 !important;
    }
    .bg-aqua-light {
        background-color: rgba(0, 168, 232, 0.1);
    }
    .btn-glow {
        box-shadow: 0 4px 15px rgba(248, 180, 0, 0.3);
        transition: all 0.3s ease;
    }
    .btn-glow:hover {
        box-shadow: 0 6px 20px rgba(248, 180, 0, 0.4);
        transform: translateY(-2px);
    }
    .service-card {
        transition: transform 0.3s ease;
    }
    .service-card:hover {
        transform: translateY(-10px);
    }
    
    /* Fix untuk Hero Section */
    #hero-section {
        margin-top: 0 !important;
        padding-top: 0 !important;
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
    }
    
    /* Pastikan container-fluid tidak ada ruang kosong */
    .container-fluid.p-0 {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }
    
    /* Hapus gap antara row */
    .row.g-0 {
        --bs-gutter-x: 0;
        --bs-gutter-y: 0;
        margin-right: 0;
        margin-left: 0;
    }
    
    /* Pastikan gambar menutupi seluruh area */
    .hero-image img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    
    /* Hilangkan border pada elemen */
    img {
        border: 0;
        outline: none;
    }
    
    /* Tambahkan padding-top pada hero content untuk kompensasi navbar */
    .hero-content.pt-5 {
        padding-top: 5rem !important;
    }
    
    /* Fix untuk navbar fixed */
    .navbar.fixed-top {
        z-index: 1030;
    }
    
    /* Pastikan section berikutnya menempel */
    .services-section {
        position: relative;
        z-index: 2;
    }
    
    /* Fix untuk mencegah white space di atas saat scroll */
    html {
        scroll-padding-top: 0;
    }
    
    body {
        padding-top: 0;
    }
    
    /* Hapus white space yang mungkin disebabkan oleh default browser */
    :root {
        --navbar-height: 76px;
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Force remove any white space at the top
    function removeWhiteSpace() {
        const heroSection = document.getElementById('hero-section');
        if (heroSection) {
            // Reset semua margin dan padding yang tidak perlu
            heroSection.style.marginTop = '0';
            heroSection.style.paddingTop = '0';
            heroSection.style.borderTop = 'none';
            heroSection.style.outline = 'none';
            
            // Hapus white space dari parent elements
            let parent = heroSection.parentElement;
            while (parent && parent !== document.body) {
                parent.style.marginTop = '0';
                parent.style.paddingTop = '0';
                parent = parent.parentElement;
            }
        }
        
        // Hapus border dan outline dari semua images
        document.querySelectorAll('img').forEach(img => {
            img.style.border = 'none';
            img.style.outline = 'none';
        });
    }
    
    // Panggil fungsi saat halaman load dan resize
    removeWhiteSpace();
    window.addEventListener('resize', removeWhiteSpace);
    window.addEventListener('scroll', function() {
        // Saat scroll ke atas, pastikan tidak ada white space
        if (window.scrollY < 10) {
            removeWhiteSpace();
        }
    });
    
    // Force style pada load
    setTimeout(removeWhiteSpace, 100);
});
</script>
@endpush