jQuery(document).ready(function($) {
    // 0. Toggle Menu Mobile
    $('.eme-mobile-toggle').click(function() {
        $('.eme-main-nav').toggleClass('active');
        $(this).toggleClass('open');
    });

    // 1. Scroll Suave para links internos
    $('a[href^="#"]').on('click', function(e) {
        var target = this.hash;
        if (target && $(target).length) {
            e.preventDefault();
            $('.eme-main-nav').removeClass('active');
            $('html, body').animate({
                scrollTop: $(target).offset().top - 80
            }, 800);
        }
    });

    // 2. Acordeão FAQ
    $('.eme-faq-question').click(function() {
        var $item = $(this).closest('.eme-faq-item');
        var $answer = $(this).next('.eme-faq-answer');
        
        $('.eme-faq-answer').not($answer).slideUp();
        $('.eme-faq-question').not(this).find('.eme-faq-icon').text('+');

        $answer.slideToggle();
        var icon = $(this).find('.eme-faq-icon');
        icon.text(icon.text() === '+' ? '-' : '+');
    });

    // 3. Filtro de Cursos / Modalidades
    $('.eme-filter-btn[data-filter]').click(function() {
        var category = $(this).attr('data-filter');
        $('.eme-filter-btn[data-filter]').removeClass('active');
        $(this).addClass('active');

        if (category === 'all') {
            $('.eme-aula-card').fadeIn();
        } else {
            $('.eme-aula-card').hide();
            $('.eme-aula-card[data-category="' + category + '"]').fadeIn();
        }
    });

    // 4. Filtro da Galeria
    $('.eme-filter-btn[data-gallery-filter]').click(function() {
        var cat = $(this).attr('data-gallery-filter');
        $('.eme-filter-btn[data-gallery-filter]').removeClass('active');
        $(this).addClass('active');

        if (cat === 'all') {
            $('.eme-gallery-card').fadeIn();
        } else {
            $('.eme-gallery-card').hide();
            $('.eme-gallery-card[data-gallery-cat="' + cat + '"]').fadeIn();
        }
    });

    // 5. Filtro do Blog
    $('.eme-filter-btn[data-blog-filter]').click(function() {
        var cat = $(this).attr('data-blog-filter');
        $('.eme-filter-btn[data-blog-filter]').removeClass('active');
        $(this).addClass('active');

        if (cat === 'all') {
            $('.eme-blog-card').fadeIn();
        } else {
            $('.eme-blog-card').hide();
            $('.eme-blog-card[data-blog-cat="' + cat + '"]').fadeIn();
        }
    });

    // 6. Expansor de Bio dos Professores ("Ler mais" / "Ler menos")
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
