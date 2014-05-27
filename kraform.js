$values = array();

$type = explode(",", $_POST['kra_id']);

foreach ($type as $value) {
    $values[] = sprintf('(%d)', $value);
}

$values = implode(',', $values);

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
   $insertSQL = sprintf("INSERT INTO table (name, date, number) 
                         VALUES (%s, %s, '$values')",
       GetSQLValueString($_POST['kra_id'], "text"),
    );


