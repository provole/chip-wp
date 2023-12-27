if( $('section.points').length) {

    $(window).on('resize', calculateBarOffset);

    calculateBarOffset();

    function calculateBarOffset() {
        if( $(window).outerWidth() < 820 ) {
            console.log($(".points .heading").height());
            console.log($(".points .line-mobile"));
            $('.points .line-mobile').css({ transform: 'translate( -50%, calc( -50% + '+ $('.points .heading').height() +'px - 2px )' });
        }  
        else {
            $('.points .line-mobile').css({ translate: 'transform( -50%, -50% )' });
        }
    }

}