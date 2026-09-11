jQuery(document).ready(function($) {

    // ─── 0. Toggle Menu Mobile ───────────────────────────────────────────────
    $('.eme-mobile-toggle').on('click', function(e) {
        e.stopPropagation();
        $('.eme-main-nav').toggleClass('active');
        $(this).toggleClass('open');
        var expanded = $(this).hasClass('open');
        $(this).attr('aria-label', expanded ? 'Fechar Menu' : 'Abrir Menu');
    });

    // Fechar menu ao clicar em links normais (exceto toggle de dropdown)
    $('.eme-main-nav a:not(.eme-dropdown-toggle)').on('click', function() {
        $('.eme-main-nav').removeClass('active');
        $('.eme-mobile-toggle').removeClass('open')
            .attr('aria-label', 'Abrir Menu');
        $('.eme-nav-dropdown').removeClass('open');
    });

    // Alternar submenu de Projetos no clique/touch
    $('.eme-dropdown-toggle').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        var $dropdown = $(this).closest('.eme-nav-dropdown');
        $dropdown.toggleClass('open');
    });

    // Fechar menu ao clicar fora dele
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.eme-main-header').length) {
            $('.eme-main-nav').removeClass('active');
            $('.eme-mobile-toggle').removeClass('open')
                .attr('aria-label', 'Abrir Menu');
            $('.eme-nav-dropdown').removeClass('open');
        }
    });

    // ─── 1. Header scroll-shrink ─────────────────────────────────────────────
    var $header = $('.eme-main-header');
    var $spacer = $('.eme-header-spacer');

    function handleHeaderScroll() {
        if ($(window).scrollTop() > 40) {
            $header.addClass('scrolled');
            $spacer.addClass('scrolled');
        } else {
            $header.removeClass('scrolled');
            $spacer.removeClass('scrolled');
        }
    }
    $(window).on('scroll', handleHeaderScroll);
    handleHeaderScroll(); // checar estado inicial

    // ─── 2. Marcar link ativo no menu ────────────────────────────────────────
    var currentPath = window.location.pathname.replace(/\/$/, '');
    $('.eme-nav-list a').each(function() {
        var linkPath = $(this).attr('href');
        try {
            linkPath = new URL(linkPath).pathname.replace(/\/$/, '');
        } catch(e) {}
        if (linkPath === currentPath || (currentPath === '' && linkPath === '')) {
            $(this).addClass('eme-nav-active');
        }
    });

    // ─── 3. Scroll suave para links internos (#ancora) ───────────────────────
    $('a[href^="#"]').on('click', function(e) {
        var target = this.hash;
        if (target && $(target).length) {
            e.preventDefault();
            var offset = $header.hasClass('scrolled') ? 64 : 80;
            $('html, body').animate({
                scrollTop: $(target).offset().top - offset
            }, 700, 'swing');
        }
    });

    // ─── 4. Acordeão FAQ ─────────────────────────────────────────────────────
    $('.eme-faq-question').on('click', function() {
        var $item    = $(this).closest('.eme-faq-item');
        var $answer  = $item.find('.eme-faq-answer');
        var isOpen   = $item.hasClass('active');

        // Fechar todos
        $('.eme-faq-item.active').not($item).each(function() {
            $(this).removeClass('active')
                .find('.eme-faq-answer').slideUp(280);
            $(this).find('.eme-faq-icon').text('+');
        });

        // Alternar atual
        if (isOpen) {
            $item.removeClass('active');
            $answer.slideUp(280);
            $(this).find('.eme-faq-icon').text('+');
        } else {
            $item.addClass('active');
            $answer.slideDown(280);
            $(this).find('.eme-faq-icon').text('-');
        }
    });

    // ─── 5. Filtro de Cursos / Modalidades ───────────────────────────────────
    $(document).on('click', '.eme-filter-btn[data-filter]', function() {
        var category = $(this).attr('data-filter');
        $('.eme-filter-btn[data-filter]').removeClass('active');
        $(this).addClass('active');
        if (category === 'all') {
            $('.eme-aula-card').stop(true, true).fadeIn(300);
        } else {
            $('.eme-aula-card').hide();
            $('.eme-aula-card[data-cat="' + category + '"], .eme-aula-card[data-category="' + category + '"]').stop(true, true).fadeIn(300);
        }
    });

    // ─── 6. Filtro da Galeria ─────────────────────────────────────────────────
    $('.eme-filter-btn[data-gallery-filter]').on('click', function() {
        var cat = $(this).data('gallery-filter');
        $('.eme-filter-btn[data-gallery-filter]').removeClass('active');
        $(this).addClass('active');
        if (cat === 'all') {
            $('.eme-gallery-card').fadeIn(300);
        } else {
            $('.eme-gallery-card').hide();
            $('.eme-gallery-card[data-gallery-cat="' + cat + '"]').fadeIn(300);
        }
    });

    // ─── 7. Filtro do Blog ────────────────────────────────────────────────────
    $('.eme-filter-btn[data-blog-filter]').on('click', function() {
        var cat = $(this).data('blog-filter');
        $('.eme-filter-btn[data-blog-filter]').removeClass('active');
        $(this).addClass('active');
        if (cat === 'all') {
            $('.eme-blog-card').fadeIn(300);
        } else {
            $('.eme-blog-card').hide();
            $('.eme-blog-card[data-blog-cat="' + cat + '"]').fadeIn(300);
        }
    });

    // ─── 8. Expansor de Bio dos Professores ──────────────────────────────────
    $(document).on('click', '.eme-bio-toggle-btn', function() {
        var $bio = $(this).siblings('.eme-prof-bio');
        if ($bio.hasClass('eme-bio-truncated')) {
            $bio.removeClass('eme-bio-truncated').addClass('eme-bio-expanded');
            $(this).text('Ler menos (-)').attr('aria-expanded', 'true');
        } else {
            $bio.removeClass('eme-bio-expanded').addClass('eme-bio-truncated');
            $(this).text('Ler mais (+)').attr('aria-expanded', 'false');
        }
    });

    // ─── 9. Scroll Reveal (IntersectionObserver) ─────────────────────────────
    if ('IntersectionObserver' in window) {
        var revealElements = document.querySelectorAll('.eme-section, .eme-hero-sub, .eme-diff-card, .eme-card-item, .eme-pillar-card, .eme-method-card, .eme-facility-card, .eme-gallery-card, .eme-event-card, .eme-testimonial-card, .eme-aula-card, .eme-prof-card, .eme-partner-card, .eme-faq-item, .eme-info-card, .eme-event-mini-card, .eme-prev-event-card, .eme-faq-help-box, .eme-home-about-text, .eme-home-about-img, .eme-pedagogia-box');

        revealElements.forEach(function(el) {
            el.classList.add('eme-reveal');
        });

        var revealObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('eme-revealed');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.08,
            rootMargin: '0px 0px -40px 0px'
        });

        revealElements.forEach(function(el) {
            revealObserver.observe(el);
        });
    }

    // ─── 10. Back-to-Top Button ──────────────────────────────────────────────
    var $backToTop = $('#eme-back-to-top');
    
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 500) {
            $backToTop.addClass('visible');
        } else {
            $backToTop.removeClass('visible');
        }
    });

    $backToTop.on('click', function() {
        $('html, body').animate({ scrollTop: 0 }, 600, 'swing');
    });

    // ─── 11. Universal Pop-up Modal LGPD (Home, Contato, Footer) ─────────────
    function openLgpdModal() {
        var $modal = $('#eme-modal-lgpd-global');
        if (!$modal.length) {
            $modal = $('#eme-modal-lgpd-home, #eme-modal-lgpd').first();
        }
        if ($modal.length) {
            $modal.addClass('active').attr('aria-hidden', 'false');
            $('body').css('overflow', 'hidden');
        }
    }

    function closeLgpdModal() {
        $('.eme-modal-overlay').removeClass('active').attr('aria-hidden', 'true');
        $('body').css('overflow', '');
    }

    // Open handlers
    $(document).on('click', '.eme-open-lgpd-modal, .eme-open-modal-btn, #eme-open-modal-home-btn, #eme-open-modal-btn, #eme-footer-lgpd-btn', function(e) {
        e.preventDefault();
        e.stopPropagation();
        openLgpdModal();
    });

    // Close handlers (Close button)
    $(document).on('click', '.eme-modal-close, .eme-modal-close-btn, #eme-close-modal-home-btn, #eme-close-modal-btn', function(e) {
        e.preventDefault();
        closeLgpdModal();
    });

    // Accept handler
    $(document).on('click', '.eme-modal-accept-btn, #eme-accept-modal-home-btn, #eme-accept-modal-btn', function(e) {
        e.preventDefault();
        closeLgpdModal();
        $('#eme-lgpd-check-home, #eme-lgpd-check, input[name="lgpd_agree"]').prop('checked', true).trigger('change');
    });

    // Backdrop click
    $(document).on('click', '.eme-modal-overlay', function(e) {
        if ($(e.target).hasClass('eme-modal-overlay')) {
            closeLgpdModal();
        }
    });

    // Keyboard ESC key to close
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape' && $('.eme-modal-overlay.active').length) {
            closeLgpdModal();
        }
    });

});


// ─── 11. Toast Notification System ───────────────────────────────────────────
window.emeToast = function(message, type) {
    type = type || 'success';
    var existing = document.querySelector('.eme-toast');
    if (existing) existing.remove();

    var toast = document.createElement('div');
    toast.className = 'eme-toast eme-toast-' + type;
    
    var icon = type === 'success' ? '✓' : type === 'error' ? '✕' : 'ℹ';
    toast.innerHTML = '<span class="eme-toast-icon">' + icon + '</span><span class="eme-toast-msg">' + message + '</span>';
    
    document.body.appendChild(toast);
    
    // Trigger animation
    requestAnimationFrame(function() {
        toast.classList.add('eme-toast-visible');
    });
    
    // Auto-dismiss after 5s
    setTimeout(function() {
        toast.classList.remove('eme-toast-visible');
        toast.classList.add('eme-toast-hiding');
        setTimeout(function() {
            if (toast.parentNode) toast.remove();
        }, 400);
    }, 5000);
};
