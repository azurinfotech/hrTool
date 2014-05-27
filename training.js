(function ($) {
    var rows =1;
    var abc = '';
    var addRows = function(){
        for(var i=0; i<rows; i++){
            var z = $.ajax({
                type:"GET",
                url:"trainingform.php",
                success:function(html){
                     abc = html;
                }
            });
        }
    }
    $(document).ready(function(){
        addRows();
     $('#tr_no').change(function(){
          $('option').each(function(){
           var y = this;
              if(this.selected){
                  rows = this.value();
              }
         })
     });

});
})(jQuery);