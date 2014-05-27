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
    $qury = "SELECT kra_id,kra_area,kpa,weight_kpi,target,actual,score,final_score
     FROM kra k WHERE k.uid = $uid";
    $result = $user->select_data($qury);
    $rows = mysqli_fetch_array($result);
    ?>
</header>
<section id="main-content">
    <div class="row">
        <h3 class="page-header">
           kra Details
        </h3>
    </div>
    <div class="row">

        <!-- Main Content Section -->
        <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
        <div class="large-9 push-3 columns">
            <div class="large-6 small-6 medium-6 push-1 columns">

                <h3><?php print($rows['kra_id']); ?>
                    <small><?php print($rows['kra_area']);
                        include 'getoptions.php'; ?>
                    </small>
                </h3>

                <p class="kra_id"><label class="light-label">ID: </label><?php print($rows['kra_id']); ?></p>
                <p class="kra_area"><label class="light-label">kra area: </label><?php print($rows['kra_area']); ?></p>
                <p class="kpa"><label class="light-label">kpa</label><?php print(get_status($rows['kpa'])); ?></p>
                <p class="weight_kpi"><label class="light-label">weight Kpi</label><?php print(get_role($rows['weight_kpi'])); ?> </p>
            </div>
            <div class="large-6 medium-6 small-6 push-1 columns">
                <p class="target"><label class="light-label">Target:</label><?php print($rows['target']); ?></p>
                <p class="actual"><label class="light-label">actual:</label><?php print($rows['actual']); ?></p>
                <p class="score"><label class="light-label">score</label><?php print($rows['score']); ?></p>
                <p class="final_score"><label class="light-label">final score:</label><?php print($rows['final_score']); ?></p>
                
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

