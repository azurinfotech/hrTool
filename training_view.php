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
    $qury = "SELECT uid,train_sdate,train_name, train_edate, trainer_name
     FROM training t WHERE t.uid = $uid";
    $result = $user->select_data($qury);
    $rows = mysqli_fetch_array($result);
    ?>
</header>
<section id="main-content">
    <div class="row">
        <h3 class="page-header">
            Training Details
        </h3>
    </div>
    <div class="row">

        <!-- Main Content Section -->
        <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
        <div class="large-9 push-3 columns">
            <div class="large-6 small-6 medium-6 push-1 columns">

                <h3><?php print($rows['train_name']); ?>
                    <small><?php print($rows['trainer_name']);
                        include 'getoptions.php'; ?>
                    </small>
                </h3>

                <p class="train_name"><label class="light-label">Trainee Name: </label><?php print($rows['train_name']); ?></p>
                <p class="trainer_name"><label class="light-label">Trainer Name: </label><?php print($rows['trainer_name']); ?></p>

            </div>
            <div class="large-6 medium-6 small-6 push-1 columns">
                <p class="train_sadte"><label class="light-label">Training Start Date : </label><?php print($rows['train_sdate']); ?></p>
                <p class="train_edate"><label class="light-label">Training End Date</label><?php print($rows['train_edate']); ?></p>
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