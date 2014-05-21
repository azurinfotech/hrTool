<?php include 'session.php';
$sess = new session();
$sess ->startSession();
include 'head.php'; ?>
<?php include 'header.php';
include 'emp_personal_db.php'; ?>
<html>
<body>
<section id="main-content">
    <div class="row" style="text-align: center;">
        <h3>Employee Personal Details form</h3>
    </div>
    <div class="row">
        <div class="large-12 medium-12 small-12 columns" role="content">
            <form action="personal_App.php" method="post" class="personal_form">
                <fieldset id="msform1">
                    <div class="large-6 medium-6 small-6 columns">
                        <label class="right-align">Sex</label>
                        <input type="radio" name="sex" value="0"> Male
                        <input type="radio" name="sex" value="1"> Female</br>
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="a_dob" placeholder="Actual Date of Birth mm/dd/yyyy">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="f_dob" placeholder="Date of Birth as per Records mm/dd/yyyy">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="pan_no" placeholder="Pan Card No.">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="pass_no" placeholder="Passport No.">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="p_mail" placeholder="Personal E-mail">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="qualif" placeholder="Qualification">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="certf" placeholder="Certifications">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="skills" placeholder="Skills">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <select name="mar_status">
                            <option value=-1>Martial Status</option>
                            <option value=0>Single</option>
                            <option value=1>Married</option>
                        </select>
                    </div>
        </div>
        </fieldset>
        <fieldset id="msform2">
            <div class="large-6 medium-6 small-6 columns">
                <input type="text" name="anniv" placeholder="Anniversary">
            </div>
            <div class="large-6 medium-6 small-6 columns">
                <input type="text" name="blood_grp" placeholder="Blood Group">
            </div>
            <div class="large-6 medium-6 small-6 columns">
                <input type="text" name="father_name" placeholder="Father's Name">
            </div>
            <div class="large-6 medium-6 small-6 columns">
                <input type="text" name="mother_name" placeholder="Mother's Name">
            </div>
            <div class="large-6 medium-6 small-6 columns">
                <input type="text" name="wife_name" placeholder="Wife's name">
            </div>
            <div class="large-6 medium-6 small-6 columns">
                <input type="text" name="husband_name" placeholder="Husband's name">
            </div>
            <div class="large-6 medium-6 small-6 columns">
                <input type="text" name="mother_tongue" placeholder="Mother Tongue">
            </div>
            <div class="large-6 medium-6 small-6 columns">
                <input type="text" name="off_mob" placeholder="Official Phone Number">
            </div>
            <div class="large-6 medium-6 small-6 columns">
                <input type="text" name="per_mob" placeholder="Personal Mobile Number">
            </div>
            <div class="large-6 medium-6 small-6 columns">
                <input type="submit" class="small radius button" value="Submit">
            </div>
        </fieldset>
        <div class="next">
            <a href="#" class="button radius small" id="prev">Previous</a>
            <a href="#" class="button radius small" id="next">Next</a>
        </div>
        </form>

    </div>
    <aside class="large-3 columns">
    </aside>
    </div>
</section>
    <?php include 'footer.php'; ?>
</body>
</html>