(function($){
    var form = 1;
$(document).ready(function(){
    $('#next').on("click", nextSlide);
    $('#prev').on("click", prevSlide);
    $('#msform2').hide();
    $('#msform3').hide();
    $('#prev').hide();
});
    var nextSlide = function(){
        $('#msform'+form).animate({
            position: "relative",
            left : "-200%"

        },'fast');
        form = form+1;
        $('#msform'+form).fadeIn()


    };
    var prevSlide = function(){
        $('#msform'+form).hide();
        form = form-1;
        $('#msform'+form).show();
    }
})(jQuery);