<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: linear-gradient(135deg, #003459 0%, #007EA7 100%);">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <div class="logo-icon me-2">
                <i class="fas fa-swimming-pool" style="font-size: 2rem; color: #00A8E8;"></i>
            </div>
            <div>
                <h4 class="mb-0 fw-bold">AQUAPRO</h4>
                <small class="text-light opacity-75">POOL CONTRACTOR</small>
            </div>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="fas fa-home me-1"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        <i class="fas fa-building me-1"></i> About Us
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-concierge-bell me-1"></i> Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('services.construction') }}">Pool Construction</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.renovation') }}">Pool Renovation</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.maintenance') }}">Pool Maintenance</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}">
                        <i class="fas fa-images me-1"></i> Portfolio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                        <i class="fas fa-envelope me-1"></i> Contact
                    </a>
                </li>
                <li class="nav-item ms-lg-2">
                    <a href="{{ route('contact') }}" class="btn btn-warning btn-glow">
                        <i class="fas fa-phone-alt me-1"></i> Free Consultation
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>