<?php
include 'database.php';
$query = "SELECT * FROM rol_req";
$db = new database();
$result = $db->get_data_array($query);
var_dump($result);
?>
<html>
    <head>
        <link href="foundation/css/foundation.min.css" rel="stylesheet" type="text/css"/>
        <script src="foundation/js/foundation/foundation.js" type="text/javascript"></script>
    </head>

        <?php include 'head.php'; ?>
        
        <body>
            <header>
<?php include 'header.php'; ?>
            </header>   
        
    

    <div id="container2" class="row" style="margin-top:150px; width:300px; margin-left:250px;">

        <form class="container1" action="permi_app.php" method="post">
            <div class="large-12 medium-12" style="text-align: center;"
                 <form action="welcome.php" method="post">
                     <input type="text" placeholder="Permission Name" name="permission"><br>
                    <?php foreach ($result as $val) {
                        if (!is_null($val['rname']) && $val['rname'] != '') { ?>
                            <input type="checkbox" name="<?php print($val['rname']); ?>" value="<?php print($val['rid']); ?>"> <?php print($val['rname']); ?>
                              
    <?php }
 
    } ?><br>
                    <input type="submit" value="Submit" class="small radius button">


                </form>
            </div>
    </div>               
    <table style="margin-left:600px; margin-top:-175px; position:absolute;">
<thead>
<tr>
<th>S no</th>
<th>Permission Name</th>
</tr>
</thead>
<tbody>
    <tr>
        <td>1</td>
        <td>Can Edit Personal Details</td>
    </tr>
   

</tbody>
</table>   
   <?php include 'footer.php'; ?>
        </body>
</html>         



