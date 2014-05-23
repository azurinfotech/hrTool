<?php include 'session.php';
$sess = new session();
$sess ->startSession();
include 'head.php'; ?>
<?php include 'header.php';
include 'training_db.php'?>
<html>
<body>
<section id="main-content">
    <div class="row" style="text-align: center;">
        <h3>Employee Training Form</h3>
    </div>
    <div class="row">
        <div class="large-12 medium-12 small-12 columns" role="content">
            <form action="emp_training_App.php" method="post" class="training_form">
                <fieldset id="form1">
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="train_sdate" placeholder="Training Start Date mm/dd/yyyy ">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="train_name" placeholder="Trainee Name">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="train_edate" placeholder="Training End Date mm/dd/yyyy">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="trainer_name" placeholder="Trainer Name">
                    </div>
                    <div class="large-12" style="text-align: center;">
                        <input type="submit" class="small radius button" value="Submit">
                        </div>
        </div>
        </fieldset>
        </form>
    </div>
    <aside class="large-3 columns">
    </aside>
    </div>
</section>
<?php include 'footer.php'; ?>
</body>
</html>