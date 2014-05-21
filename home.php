<?php
include 'session.php';
$sess = new session();
$sess->startSession();
include 'head.php';
?>
<html>
<body>
<header>
    <?php
    include 'header.php';
    include 'database.php';
    $user = new database();
    $uid = $_SESSION['uid'];
    $qury = "SELECT off_email,fname,lname,emp_no,status,role,pic,resume,pan_no,pass_no,p_email,off_mob,per_mob,blood_grp
     FROM users u INNER JOIN emp_personal emp ON u.uid = emp.uid WHERE u.uid = $uid";
    $result = $user->select_data($qury);
    $rows = mysqli_fetch_array($result);
    ?>
</header>
<section id="main-content">
    <div class="row">
        <h3 class="page-header">
            Dashboard
        </h3>
    </div>
    <div class="row">

        <!-- Main Content Section -->
        <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
        <div class="large-9 push-3 columns">
            <div class="large-6 small-6 medium-6 push-1 columns">

                <h3><?php print($rows['fname']); ?>
                    <small><?php print($rows['lname']);
                        include 'getoptions.php'; ?>
                    </small>
                </h3>

                <p class="off-email"><label class="light-label">Mail: </label><?php print($rows['off_email']); ?></p>
                <p class="emp_no"><label class="light-label">Employee Number: </label><?php print($rows['emp_no']); ?></p>
                <p class="emp_status"><label class="light-label">Status</label><?php print(get_status($rows['status'])); ?></p>
                <p class="emp_role"><label class="light-label">Role</label><?php print(get_role($rows['role'])); ?> </p>
            </div>
            <div class="large-6 medium-6 small-6 push-1 columns">
                <p class="pan_no"><label class="light-label">Pan Card No.</label><?php print($rows['pan_no']); ?></p>
                <p class="pass_no"><label class="light-label">Passport No.</label><?php print($rows['pass_no']); ?></p>
                <p class="p_email"><label class="light-label">Personal Email</label><?php print($rows['p_email']); ?></p>
                <p class="off_mob"><label class="light-label">Official Mobile No.</label><?php print($rows['off_mob']); ?></p>
                <p class="per_mob"><label class="light-label">Personal Mobile No.</label><?php print($rows['per_mob']); ?></p>
                <p class="blood-grp"><label class="light-label">Blood Group</label><?php print($rows['blood_grp']); ?></p>
            </div>

        </div>


        <!-- Nav Sidebar -->
        <!-- This is source ordered to be pulled to the left on larger screens -->
        <div class="large-3 pull-9 columns">
            <p><img src="<?php print($rows['pic']); ?>"/></p>

            <div class="row columns resume-box">
                <div class="large-5 small-5 medium-5 columns">
                    <img class="resume-icon" src="resume_icon.jpg"/>
                </div>
                <div class="large-6 small-6 medium-6 columns">
                    <p><a href="<?php print($rows['resume']); ?>">My resume</a></p>
                </div>
            </div>
        </div>

    </div>
</section>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>
<!-- End Footer -->
</body>
</html>