<?php
include('database.php');
if ($_POST) {
    try{
    $db = new database();
    $q = $_POST['search'];
    $query = "SELECT  fname, lname FROM users WHERE fname LIKE '%" . $q .  "%' AND lname LIKE '%" . $q ."%'";;
    $result = $db->get_data_rows($query);
    }
    catch(exception $e){
        echo "some database error occured";
    }
} ?>

<div class="show">
  <?php foreach ($result as $key => $value) {
    if ($key == 'fname'&&'lname'):?>
  <a href="home.php">  <div class="item">
        <span class="fname"><?php isset($result[$key]) ? print($result[$key]) : 'End of user names'; ?></span>
  </div></a>
    <?php endif; }?>
</div>

