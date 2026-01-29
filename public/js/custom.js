// Custom JavaScript for AquaPro Pool Contractor

$(document).ready(function() {
    // Navbar scroll effect
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    });

    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            const hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 70
            }, 800);
        }
    });

    // Gallery filter
    $('.gallery-filter button').on('click', function() {
        $('.gallery-filter button').removeClass('active');
        $(this).addClass('active');
        
        const filter = $(this).data('filter');
        if (filter === 'all') {
            $('.gallery-item').fadeIn(400);
        } else {
            $('.gallery-item').fadeOut(200);
            $(`.gallery-item[data-category="${filter}"]`).fadeIn(400);
        }
    });

    // Contact form validation
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        const formData = $(this).serialize();
        
        // Add loading state
        const submitBtn = $(this).find('button[type="submit"]');
        const originalText = submitBtn.html();
        submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Sending...');
        submitBtn.prop('disabled', true);
        
        // Simulate form submission
        setTimeout(() => {
            // Show success message
            $('#formMessage').removeClass('alert-danger d-none').addClass('alert-success')
                .html('<i class="fas fa-check-circle"></i> Thank you! Your message has been sent successfully.');
            
            // Reset form
            $(this)[0].reset();
            
            // Reset button
            submitBtn.html(originalText);
            submitBtn.prop('disabled', false);
        }, 1500);
    });

    // Animate elements on scroll
    function animateOnScroll() {
        $('.animate-on-scroll').each(function() {
            const elementTop = $(this).offset().top;
            const elementBottom = elementTop + $(this).outerHeight();
            const viewportTop = $(window).scrollTop();
            const viewportBottom = viewportTop + $(window).height();
            
            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('fade-in');
            }
        });
    }
    
    // Initial check
    animateOnScroll();
    
    // Check on scroll
    $(window).on('scroll', animateOnScroll);

    // Testimonial carousel
    $('.testimonial-carousel').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });

    // Initialize tooltips
    $('[data-bs-toggle="tooltip"]').tooltip();

    // Counter animation for stats
    $('.counter').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 2000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
});