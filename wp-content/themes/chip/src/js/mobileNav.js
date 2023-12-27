var burgerNav = document.querySelector(".burger-nav");
var mobileNav = document.querySelector(".mobile-navigation");

burgerNav.addEventListener(
    "click",
    function () {
        this.classList.toggle("active");

        if (this.classList.contains("active")) {
            $(mobileNav).animate({ width: "476px" }, "fast");
            $("header .logo").hide();
            $("body").css("overflow-y", "hidden");
        }
    },
    false
);

var closeButton = document.querySelector(".close-button");

closeButton.addEventListener(
    "click",
    function () {
        console.log("closeButton");

        $(mobileNav).animate({ width: 0 }, "fast");
        $("header .logo").show();

        burgerNav.classList.remove("active");
        $("body").css("overflow", "unset");
    },
    false
);

$(window).on("load scroll", function () {
    var scrollPosY = window.scrollY;

    if (scrollPosY > 10) {
        $("header").addClass("scrolled");
    } else {
        $("header").removeClass("scrolled");
    }
});
