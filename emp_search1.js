/**
 * Created by user-pc on 26/5/14.
 */
$(function(){
    $(".search").keyup(function()
    {
        var searchid = $(this).val();
        var dataString = 'search='+ searchid;
        if(searchid!='')
        {
            $.ajax({
                type: "POST",
                url: "emp_search_func1.php",
                data: dataString,
                cache: false,
                success: function(html)
                {
                    $("#result").html(html).show();
                }
            });
        }return false;
    });

    jQuery("#result").live("click",function(e){
        var $clicked = $(e.target);
        var $name = $clicked.find('.name').html();
        var decoded = $("<div/>").html($name).text();
        $('#searchid').val(decoded);
    });
    jQuery(document).live("click", function(e) {
        var $clicked = $(e.target);
        if (! $clicked.hasClass("search")){
            jQuery("#result").fadeOut();
        }
    });
    $('#searchid').click(function(){
        jQuery("#result").fadeIn();
    });




function empdisplay()
{
    var empdisp=document.getElementById('.fname').value;
return empdisp;
}

/*        $(document).ready(function () {
            $('#saerchid').on('autocompletechange change', function () {
                $('.item').html( this.value);
            }).change();
        });*/
}
    )(jQuery);