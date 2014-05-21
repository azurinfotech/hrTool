(function ($) {
    var form = 1;
    $(document).ready(function () {
        $('#next').on("click", nextSlide);
        $('#prev').on("click", prevSlide);
        $('#msform2').hide();
        $('#msform3').hide();
        $('#prev').hide();
    });
    var nextSlide = function () {
        $('#msform' + form).animate({
            position: "relative",
            left: "-200%"
        }, 'fast');
        $('#msform' + form).hide();
        form = form + 1;
        $('#msform' + form).fadeIn();
        $('#msform' + form).animate({
            position: "relative",
            right: "0%"
        }, 'fast');
        if (form == 2) {
            $('#next').hide();
        }
        $('#prev').show();
    };
    var prevSlide = function () {
        $('#msform' + form).animate({
            position: "relative",
            right: "-400%"
        }, 'fast');
        $('#msform' + form).hide();
        form = form - 1;
        $('#msform' + form).fadeIn();
        $('#msform' + form).animate({
            position: "relative",
            left: "0%"
        }, 'fast');
        if (form == 1) {
            $('#prev').hide();
        }
        $('#next').show();
    }
})(jQuery);
