<?php
include 'database.php';
$query = "SELECT * FROM vocabulary";
$db = new database();
$result = $db ->get_data_rows($query);
?>
<html>
    <?php include 'head.php' ?>
    <body>
        <?php include 'header.php'; ?>
        <section id="main-content">
            <div class="rows large-12 columns">
                <div class="large-6 medium-6 small-6">
                    <form class="taxonomy-form" action="taxo_save.php" method="post">
                        <input  type="text" name="tname" placeholder="Enter Taxonomy name">
                        <select name="vocab">
                            <?php foreach($result as $key => $val){
                                if(!is_null($val)){ ?>
                            <option value="<?php print($val[0]) ?>"><?php print($val[1]) ?></option>
                                <?php } } ?>
                        </select>
                        <input type ="submit"class="small radius button">
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>