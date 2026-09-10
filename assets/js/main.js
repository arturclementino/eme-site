jQuery(document).ready(function($) {

    // ─── 0. Toggle Menu Mobile ───────────────────────────────────────────────
    $('.eme-mobile-toggle').on('click', function(e) {
        e.stopPropagation();
        $('.eme-main-nav').toggleClass('active');
        $(this).toggleClass('open');
        var expanded = $(this).hasClass('open');
        $(this).attr('aria-label', expanded ? 'Fechar Menu' : 'Abrir Menu');
    });

    // Fechar menu ao clicar em qualquer link de navegação
    $('.eme-main-nav a').on('click', function() {
        $('.eme-main-nav').removeClass('active');
        $('.eme-mobile-toggle').removeClass('open')
            .attr('aria-label', 'Abrir Menu');
    });

    // Fechar menu ao clicar fora dele
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.eme-main-header').length) {
            $('.eme-main-nav').removeClass('active');
            $('.eme-mobile-toggle').removeClass('open')
                .attr('aria-label', 'Abrir Menu');
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
    $('.eme-filter-btn[data-filter]').on('click', function() {
        var category = $(this).data('filter');
        $('.eme-filter-btn[data-filter]').removeClass('active');
        $(this).addClass('active');
        if (category === 'all') {
            $('.eme-aula-card').fadeIn(300);
        } else {
            $('.eme-aula-card').hide();
            $('.eme-aula-card[data-category="' + category + '"]').fadeIn(300);
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

});
