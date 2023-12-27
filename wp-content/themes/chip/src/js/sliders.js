import "slick-carousel";

$(window).on("load", function () {
    $(".slider-block .slider-wrapper").slick({
        infinite: true,
        arrows: true,
        dots: true,
        prevArrow: $(".prev"),
        nextArrow: $(".next"),
    });

    $(".people-container").slick({
        infinite: true,
        arrows: false,
        dots: false,
        slidesToScroll: 1,
        slidesToShow: 6,
        autoplay: true,
        responsive: [
            {
                breakpoint: 879,
                settings: {
                    centerMode: true,
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 506,
                settings: {
                    slidesToShow: 3,
                },
            },
        ],
    });

    $(".thumbs div:first-child img").appendTo(".bottlesWrapper");
    $(".thumbs > div img").on("click", function () {
        var thmb = this;
        var src = this.src;
        $(thmb)
            .parent()
            .parent(".thumbs")
            .prev(".bottlesWrapper")
            .find("img")
            .fadeOut(400, function () {
                thmb.src = this.src;
                $(this).fadeIn(400)[0].src = src;
            });
    });
});
