    (function($)
{
    var slider = ('.clients-carousel');

    $(slider)
        .slick({
            slidesToShow: 4,
            dots: true,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 6000,
            responsive: [
                {
                    breakpoint: 990,
                    settings: {
                        slidesToShow: 3,
                        dots: true,
                        arrows: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        dots: true,
                        arrows: true
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1,
                        dots: true,
                        arrows: false
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 1,
                        dots: true,
                        arrows: false
                    }
                }
            ]
        });
})(jQuery);
