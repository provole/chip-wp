var sliderActive = false;
var percent = 50;

var section1 = false;
var section2 = false;

const minPercent = 40;
const maxPercent = 60;

if ($(window).outerWidth() > 829) {
    setMouseLeave();

    setMouseEnter();

    setTimeout(() => {
        $(".home-banner .heading").animate({ opacity: 1 }, 800);
        setMouseMove();
    }, 500);
} else {
    //   setClickEvents();
    setTouchEvents();
}

$(window).on("resize", setBannerInnerWidth);

function setBannerInnerWidth() {
    const bannerWidth = $(".home-banner").outerWidth();
    const inners = $(".home-banner .inner");

    inners.css({ width: bannerWidth + "px" });
}

setBannerInnerWidth();

$(window).on("resize", setupEvents);

function setupEvents() {
    if ($(window).outerWidth() >= 829) {
        $(".home-banner").off("touchmove touchend");
        setMouseEvents();
    } else {
        $(".home-banner").off("click mouseenter mouseleave mousemove");
        setTouchEvents();
    }
}

function showMax() {
    var textInner = $(".home-banner").find(".section-1 .text");

    textInner.children().css({ opacity: 0 });

    textInner.show();

    textInner.children().each(function () {
        $(this).animate({ opacity: 1 }, "fast");
    });

    section1 = true;
}

function hideSection1() {
    var textInner = $(".home-banner").find(".section-1 .text");

    textInner
        .children()
        .each(function (index, item) {
            $(item).css({ opacity: 0 });
        })
        .promise()
        .done(() => {
            textInner.hide();
        });

    section1 = false;
}

function showMin() {
    var textInner = $(".home-banner").find(".section-2 .text");
    textInner.children().css({ opacity: 0 });

    textInner.show();

    textInner.children().each(function () {
        $(this).animate({ opacity: 1 }, "fast");
    });

    section2 = true;
}

function hideSection2() {
    var textInner = $(".home-banner").find(".section-2 .text");

    textInner
        .children()
        .each(function (index, item) {
            $(item).animate({ opacity: 0 }, "fast");
        })
        .promise()
        .done(() => {
            textInner.hide();
        });

    section2 = false;
}

function setMouseEvents() {
    setMouseMove();
    setMouseLeave();
    setMouseEnter();
}

function setMouseMove() {
    $(".home-banner")
        .off("mousemove")
        .on("mousemove", function (e) {
            const bannerWidth = $(this).outerWidth();
            const position = e.clientX;
            percent = Math.round((position / bannerWidth) * 100);

            if (section1 && percent > 50 && percent <= maxPercent - 5) {
                hideSection1();
            }

            if (section2 && percent < 50 && percent >= minPercent + 5) {
                hideSection2();
            }

            if (!section1 && percent > maxPercent) {
                showMax();
            } else if (!section2 && percent < minPercent) {
                showMin();
            }

            $(this)
                .find(".section-1")
                .css({ width: percent + "%" });
            sliderActive = true;
        });
}

function setMouseLeave() {
    $(".home-banner")
        .off("mouseleave")
        .on("mouseleave", function () {
            $(this).find(".section-1").animate({ width: "50%" }, "fast");
            $(this).find(".heading").animate({ opacity: 1 }, "ease");
            hideSection1();
            hideSection2();
        });
}

function setMouseEnter() {
    $(".home-banner")
        .off("mouseenter")
        .on("mouseenter", function () {
            if (sliderActive) {
                $(this).find(".heading").animate({ opacity: 1 }, "fast");
            }
        });
}

var sectionActive;
var sections = ["100%", "0%"];

function setTouchEvents() {
    $(".home-banner").on("touchmove", function (e) {
        // console.log($(".home-banner .heading").css("opacity"));
        if ($(".home-banner .heading").css("opacity") > 1) {
            $(".home-banner .heading").stop( true, true ).animate({ opacity: 1 }, "fast");
        }

        var touchobj = e.changedTouches[0];
        startx = parseInt(touchobj.clientX);
        // starty = parseInt(touchobj.clientY);

        const bannerWidth = $(this).outerWidth();
        const position = e.clientX;
        percent = Math.round((startx / bannerWidth) * 100);

        if (percent) {
            // section1
            $(".home-banner .section-1").stop( true, true ).css({ width: percent + "%" });

            sectionActive = sections[0];
            if (percent > 50) {
                $(".home-banner .section-1 .text").show();
                $(".home-banner .section-2 .text").hide();
            }
            if (percent < 50) {
                $(".home-banner .section-1 .text").hide();
                $(".home-banner .section-2 .text").show();
            }
        }
    });

    $(".home-banner").on("touchend", function (e) {
        $(".home-banner .section-1").animate({ width: "50%" }, "fast", "linear");
        $(".home-banner .section-1 .text").hide();
        $(".home-banner .section-2 .text").hide();
        setTimeout(() => {
            $(".home-banner .heading").css({ opacity: 1 });
        }, 1000);
        sectionActive = false;
    });
}

function setClickEvents() {
    $(".home-banner")
        .off("click")
        .on("click", function (e) {
            e.preventDefault();

            const bannerWidth = $(this).outerWidth();
            const position = e.clientX;
            percent = Math.round((position / bannerWidth) * 100);

            if (!sectionActive) {
                $(".home-banner .heading").animate({ opacity: 0 }, "fast");

                if (percent < 50) {
                    // section1
                    $(".home-banner .section-1").animate(
                        { width: sections[0] },
                        "fast"
                    );
                    $(".home-banner .section-1 .text").show();
                    sectionActive = sections[0];
                } else {
                    // section2
                    $(".home-banner .section-1").animate(
                        { width: sections[1] },
                        "fast"
                    );
                    $(".home-banner .section-2 .text").show();
                    sectionActive = sections[1];
                }
            } else {
                $(".home-banner .section-1").animate({ width: "50%" }, "fast");
                $(
                    ".home-banner .section-" +
                        (sections.indexOf(sectionActive) + 1) +
                        " .text"
                ).hide();
                $(".home-banner .heading").animate({ opacity: 1 }, "fast");
                sectionActive = false;
            }
        });
}
