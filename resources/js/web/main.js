$(document).ready(function() {
    // Smooth scroll
    $('a[href*="#"]').click(function(e) {
        if(this.hash !== '') {
            e.preventDefault();
            const hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 80
            }, 800);
        }
    });

    // Navbar active state
    $('.navbar-nav .nav-link').click(function() {
        $('.navbar-nav .nav-link').removeClass('active');
        $(this).addClass('active');
    });

    // Counter animation
    $('.counter').each(function() {
        const target = parseInt($(this).data('target'));
        let current = 0;
        const increment = target / 100;
        const timer = setInterval(() => {
            current += increment;
            if(current >= target) {
                current = target;
                clearInterval(timer);
            }
            $(this).text(Math.ceil(current));
        }, 20);
    });

    // Newsletter form with AJAX
    $('#newsletterForm').submit(function(e) {
        e.preventDefault();
        const email = $('#newsletterEmail').val();
        
        $.ajax({
            url: '/api/newsletter/subscribe',
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                email: email
            },
            success: function(response) {
                $('#newsletterModal').modal('show');
                $('#newsletterForm')[0].reset();
            },
            error: function() {
                alert('Gagal mendaftar newsletter');
            }
        });
    });

    // Lazy load images
    if('IntersectionObserver' in window) {
        const lazyImages = document.querySelectorAll('img[data-src]');
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    imageObserver.unobserve(img);
                }
            });
        });
        lazyImages.forEach(img => imageObserver.observe(img));
    }
});