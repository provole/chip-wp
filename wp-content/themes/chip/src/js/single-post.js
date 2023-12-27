$(".expansion-btn").on("click", function () {
    classes = this.className;
    var divNumber = classes.slice(-1);
    var toGetId = "#div-" + divNumber;

    if (!$(toGetId).hasClass("expanded-div")) {
        $(".single-post__slide")
            .removeClass("compressed-div expanded-div")
            .addClass("compressed-div");
        $(toGetId).removeClass("compressed-div").addClass("expanded-div");
    }

    if( divNumber == 2 ){
        $('.menu-item').addClass('method-nav-color');
    } else {
        $('.menu-item').removeClass('method-nav-color');
    }

    if ($(".single-post__method").hasClass("expanded-div")) {
        $(".method-dividing-line").delay(450).fadeIn();
        $(".single-post__madness--abs-image").fadeOut(140);
    } else {
        $(".method-dividing-line").fadeOut();
        $(".single-post__madness--abs-image").delay(500).fadeIn(500);
    }

    $(".compressed-div .single-post__slide--inner").fadeOut(350);
    $(".expanded-div > .single-post__slide--inner").delay(450).fadeIn(350);
});

$(".compressed-div .single-post__slide--inner").fadeOut(1);
