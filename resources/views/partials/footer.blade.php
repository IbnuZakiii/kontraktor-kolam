<footer class="bg-dark-blue text-white pt-5 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="footer-brand mb-3">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-swimming-pool fa-2x text-aqua me-3"></i>
                        <div>
                            <h4 class="fw-bold mb-0">AQUAPRO</h4>
                            <small class="text-light opacity-75">POOL CONTRACTOR</small>
                        </div>
                    </div>
                </div>
                <p class="text-light opacity-75">Creating exceptional swimming pool experiences with innovative design and superior craftsmanship since 2008.</p>
                <div class="social-icons mt-4">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin-in fa-lg"></i></a>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-4 mb-4">
                <h5 class="fw-bold mb-4">Services</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('services.construction') }}" class="text-light opacity-75 text-decoration-none">Pool Construction</a></li>
                    <li class="mb-2"><a href="{{ route('services.renovation') }}" class="text-light opacity-75 text-decoration-none">Pool Renovation</a></li>
                    <li class="mb-2"><a href="{{ route('services.maintenance') }}" class="text-light opacity-75 text-decoration-none">Pool Maintenance</a></li>
                    <li class="mb-2"><a href="{{ route('services.maintenance') }}" class="text-light opacity-75 text-decoration-none">Pool Repair</a></li>
                    <li class="mb-2"><a href="{{ route('services.construction') }}" class="text-light opacity-75 text-decoration-none">Custom Design</a></li>
                </ul>
            </div>
            
            <div class="col-lg-3 col-md-4 mb-4">
                <h5 class="fw-bold mb-4">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('home') }}" class="text-light opacity-75 text-decoration-none">Home</a></li>
                    <li class="mb-2"><a href="{{ route('about') }}" class="text-light opacity-75 text-decoration-none">About Us</a></li>
                    <li class="mb-2"><a href="{{ route('portfolio') }}" class="text-light opacity-75 text-decoration-none">Portfolio</a></li>
                    <li class="mb-2"><a href="{{ route('contact') }}" class="text-light opacity-75 text-decoration-none">Contact</a></li>
                    <li class="mb-2"><a href="#" class="text-light opacity-75 text-decoration-none">Privacy Policy</a></li>
                </ul>
            </div>
            
            <div class="col-lg-3 col-md-4 mb-4">
                <h5 class="fw-bold mb-4">Contact Info</h5>
                <ul class="list-unstyled">
                    <li class="mb-3 d-flex">
                        <i class="fas fa-map-marker-alt text-aqua me-3 mt-1"></i>
                        <span class="text-light opacity-75">123 Pool Street, Waterfront City, 10101</span>
                    </li>
                    <li class="mb-3 d-flex">
                        <i class="fas fa-phone text-aqua me-3 mt-1"></i>
                        <span class="text-light opacity-75">(021) 1234-5678</span>
                    </li>
                    <li class="mb-3 d-flex">
                        <i class="fas fa-envelope text-aqua me-3 mt-1"></i>
                        <span class="text-light opacity-75">info@aquapro-pool.com</span>
                    </li>
                    <li class="mb-3 d-flex">
                        <i class="fas fa-clock text-aqua me-3 mt-1"></i>
                        <span class="text-light opacity-75">Mon - Fri: 8:00 - 17:00</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <hr class="my-4" style="border-color: rgba(255,255,255,0.1);">
        
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0 text-light opacity-75">&copy; {{ date('Y') }} AquaPro Pool Contractor. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0 text-light opacity-75">Designed with <i class="fas fa-heart text-danger"></i> for pool enthusiasts</p>
            </div>
        </div>
    </div>
</footer>