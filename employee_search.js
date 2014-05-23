function autosuggest()
{
    $(document).ready(function(){
        $("#autosugget").autocomplete("employee_search_functions.php", {
            selectFirst: true
        });
    });
}