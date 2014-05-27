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
            <form name="number_trainings">
               <select id="tr_no">
                   <option value=1>1</option>
                   <option value=2>2</option>
                   <option value=3>3</option>
                   <option value=4>4</option>
                   <option value=5>5</option>
               </select>
            </form>
            <form action="emp_training_App.php" method="post" class="training_form">
                <fieldset id="form_1">
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="train_name_1" placeholder="Trainee Name">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="trainer_name_1" placeholder="Trainer Name">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="train_sdate_1" placeholder="Training Start Date mm/dd/yyyy">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="train_edate_1" placeholder="Training End Date mm/dd/yyyy">
                    </div>
                    <div class="large-12" style="text-align: center;">
                        <input type="submit" class="small radius button" value="Submit">
                    </div>
        </div>
        </fieldset>
        <fieldset id="form_2">
            <div class="large-6 medium-6 small-6 columns">
                <input type="text" name="train_name_2" placeholder="Trainee Name">
            </div>
            <div class="large-6 medium-6 small-6 columns">
                <input type="text" name="trainer_name_2" placeholder="Trainer Name">
            </div>
            <div class="large-6 medium-6 small-6 columns">
                <input type="text" name="train_sdate_2" placeholder="Training Start Date mm/dd/yyyy">
            </div>
            <div class="large-6 medium-6 small-6 columns">
                <input type="text" name="train_edate_2" placeholder="Training End Date mm/dd/yyyy">
            </div>
            <div class="large-12" style="text-align: center;">
                <input type="submit" class="small radius button" value="Submit">
            </div>
    </div>
    </fieldset>
    <fieldset id="form_1">
        <div class="large-6 medium-6 small-6 columns">
            <input type="text" name="train_name_3" placeholder="Trainee Name">
        </div>
        <div class="large-6 medium-6 small-6 columns">
            <input type="text" name="trainer_name_3" placeholder="Trainer Name">
        </div>
        <div class="large-6 medium-6 small-6 columns">
            <input type="text" name="train_sdate_3" placeholder="Training Start Date mm/dd/yyyy">
        </div>
        <div class="large-6 medium-6 small-6 columns">
            <input type="text" name="train_edate_3" placeholder="Training End Date mm/dd/yyyy">
        </div>
        <div class="large-12" style="text-align: center;">
            <input type="submit" class="small radius button" value="Submit">
        </div>
        </div>
    </fieldset>
    <fieldset id="form_1">
        <div class="large-6 medium-6 small-6 columns">
            <input type="text" name="train_name_4" placeholder="Trainee Name">
        </div>
        <div class="large-6 medium-6 small-6 columns">
            <input type="text" name="trainer_name_4" placeholder="Trainer Name">
        </div>
        <div class="large-6 medium-6 small-6 columns">
            <input type="text" name="train_sdate_4" placeholder="Training Start Date mm/dd/yyyy">
        </div>
        <div class="large-6 medium-6 small-6 columns">
            <input type="text" name="train_edate_4" placeholder="Training End Date mm/dd/yyyy">
        </div>
        <div class="large-12" style="text-align: center;">
            <input type="submit" class="small radius button" value="Submit">
        </div>
        </div>
    </fieldset>
    <fieldset id="form_1">
        <div class="large-6 medium-6 small-6 columns">
            <input type="text" name="train_name_5" placeholder="Trainee Name">
        </div>
        <div class="large-6 medium-6 small-6 columns">
            <input type="text" name="trainer_name_5" placeholder="Trainer Name">
        </div>
        <div class="large-6 medium-6 small-6 columns">
            <input type="text" name="train_sdate_5" placeholder="Training Start Date mm/dd/yyyy">
        </div>
        <div class="large-6 medium-6 small-6 columns">
            <input type="text" name="train_edate_5" placeholder="Training End Date mm/dd/yyyy">
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