<?php include 'kra_db.php' ?>
<html>
   <?php include 'head.php'; ?>
    <title> kra Form </title>
    <?php include 'header.php'; ?> 
    <div class="row" style="text-align: center;">
        <h3>KRA Form</h3>
    </div>
   
  
    <body>
   
        <form action="KRAform_logic.php" method="post" style="margin-left: 300px; padding-top: 50px;">
            <div class="large-8 columns">
                <div class="large-6 medium-6 small-6 columns">
                     <input type="text" name="kra_id" placeholder="kra_id">
                </div>
                <div class="large-6 medium-6 small-6 columns">
                     <input type="text" name="kr_area" placeholder="kr_area">

                </div>
            </div>
            <div class="large-8 columns">
                <div class="large-6 medium-6 small-6 columns">
                     <input type="text" name="kpa" placeholder="kpa">

                </div>
                <div class="large-6 medium-6 small-6 columns">
                    <input type="text" name="weight_kpi" placeholder="weight_kpi">

                </div>
            </div>
            <div class="large-8 columns">
                <div class="large-6 medium-6 small-6 columns">
                    <input type="text" name="target" placeholder="target"> 
                </div>
                <div class="large-6 medium-6 small-6 columns">
                    <input type="text" name="actual" placeholder="actual"> 
                </div>
            </div>
            <div class="large-8 columns">
                <div class="large-6 medium-6 small-6 columns">
                    <input type="text" name="score" placeholder="score">
 
                </div>
                <div class="large-6 medium-6 small-6 columns">
                    <input type="text" name="final_score" placeholder="final_score">

                </div>
            </div>
            <div class="large-12 columns" style="text-align:center; margin-right: 170px;">
                <input type="submit" class="small radius button" value="submit"
                           style="width:70px; height:40px; padding:10px;">
            </div>
            </form> 

    </body>
    <?php include 'footer.php';?>
</html>