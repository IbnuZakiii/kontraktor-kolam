@extends('layouts.app')

@section('title', 'About Us - AquaPro Pool Contractor')

@section('content')
<!-- Page Header -->
<section class="page-header d-flex align-items-center">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center text-white">
                <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInDown">About AquaPro</h1>
                <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                    Leading swimming pool contractor with 15+ years of excellence in design and construction
                </p>
                <div class="mt-4">
                    <a href="{{ route('contact') }}" class="btn btn-warning btn-lg me-2">
                        <i class="fas fa-calendar me-2"></i> Free Consultation
                    </a>
                    <a href="{{ route('portfolio') }}" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-images me-2"></i> View Portfolio
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .page-header {
        background: linear-gradient(rgba(0, 52, 89, 0.85), rgba(0, 52, 89, 0.9)), 
                    url('https://images.unsplash.com/photo-1531685250784-7569952593d2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover no-repeat !important;
        min-height: 500px; /* Atur tinggi sesuai kebutuhan */
    }
</style>
@endpush

    <!-- Company Story -->
    <section class="company-story py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="story-content">
                        <h6 class="text-uppercase text-aqua fw-bold">Our Story</h6>
                        <h2 class="fw-bold mb-4">Building Dreams Since 2008</h2>
                        <p class="lead mb-4">AquaPro started as a small family business with a passion for creating beautiful aquatic spaces. Today, we're a leading pool contractor renowned for quality and innovation.</p>
                        
                        <div class="mission-vision">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body p-4">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="bg-aqua text-white rounded-circle p-3 me-3">
                                                    <i class="fas fa-bullseye fa-lg"></i>
                                                </div>
                                                <h5 class="mb-0 fw-bold">Our Mission</h5>
                                            </div>
                                            <p class="mb-0">To create exceptional swimming environments that enhance lifestyles through innovative design, quality construction, and unparalleled service.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body p-4">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="bg-aqua text-white rounded-circle p-3 me-3">
                                                    <i class="fas fa-eye fa-lg"></i>
                                                </div>
                                                <h5 class="mb-0 fw-bold">Our Vision</h5>
                                            </div>
                                            <p class="mb-0">To be the most trusted and innovative pool contractor, setting industry standards for excellence and customer satisfaction.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="story-image position-relative">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             class="img-fluid rounded shadow-lg" alt="Our Team">
                        <div class="experience-overlay bg-warning text-dark p-4 rounded position-absolute" style="bottom: 20px; left: 20px; max-width: 300px;">
                            <h3 class="fw-bold mb-2">250+ Projects</h3>
                            <p class="mb-0">Successfully completed across residential and commercial properties</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="text-uppercase text-aqua fw-bold">Meet Our Experts</h6>
                <h2 class="display-5 fw-bold mb-3">Professional Team</h2>
                <p class="lead text-muted">Skilled professionals dedicated to quality and precision</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="team-card card border-0 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                             class="card-img-top" alt="Team Member">
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bold mb-1">John Peterson</h5>
                            <p class="text-aqua mb-3">Lead Pool Designer</p>
                            <p class="text-muted small">15 years experience in luxury pool design and architecture.</p>
                            <div class="social-icons">
                                <a href="#" class="text-muted me-3"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-muted"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="team-card card border-0 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                             class="card-img-top" alt="Team Member">
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bold mb-1">Sarah Johnson</h5>
                            <p class="text-aqua mb-3">Project Manager</p>
                            <p class="text-muted small">Certified PMP with expertise in construction management.</p>
                            <div class="social-icons">
                                <a href="#" class="text-muted me-3"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-muted"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="team-card card border-0 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                             class="card-img-top" alt="Team Member">
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bold mb-1">Michael Chen</h5>
                            <p class="text-aqua mb-3">Senior Engineer</p>
                            <p class="text-muted small">Structural engineer specialized in aquatic construction.</p>
                            <div class="social-icons">
                                <a href="#" class="text-muted me-3"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-muted"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications -->
    <section class="certifications py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="text-uppercase text-aqua fw-bold">Certifications</h6>
                <h2 class="fw-bold mb-3">Industry Recognitions</h2>
                <p class="text-muted">Committed to maintaining the highest industry standards</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                <div class="col-md-3 col-6 text-center">
                    <div class="cert-icon p-4 border rounded">
                        <i class="fas fa-shield-alt fa-3x text-aqua mb-3"></i>
                        <h6 class="fw-bold">ISO 9001 Certified</h6>
                    </div>
                </div>
                <div class="col-md-3 col-6 text-center">
                    <div class="cert-icon p-4 border rounded">
                        <i class="fas fa-award fa-3x text-aqua mb-3"></i>
                        <h6 class="fw-bold">APSP Member</h6>
                    </div>
                </div>
                <div class="col-md-3 col-6 text-center">
                    <div class="cert-icon p-4 border rounded">
                        <i class="fas fa-certificate fa-3x text-aqua mb-3"></i>
                        <h6 class="fw-bold">Safety Certified</h6>
                    </div>
                </div>
                <div class="col-md-3 col-6 text-center">
                    <div class="cert-icon p-4 border rounded">
                        <i class="fas fa-medal fa-3x text-aqua mb-3"></i>
                        <h6 class="fw-bold">Quality Excellence</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection