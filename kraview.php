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
    $qury = "SELECT kra_id,kr_area,kpa,weight_kpi,target,actual,score,final_score FROM kra";
    $result = $user->select_data($qury);
    $rows = mysqli_fetch_array($result);
    ?>
</header>
<section id="main-content">
    <div class="row" style="text-align: center; margin-top: 5px;">
        <h3>KRA View</h3>
    </div>
   
    <div class="row">

        <!-- Main Content Section -->
        <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
        <div class="large-9 push-3 columns">
            <div class="large-6 small-6 medium-6 push-1 columns">                

                <p class="kra_id"><label class="light-label">Kra_id: </label><?php print($rows['kra_id']); ?></p>
                <p class="kr_area"><label class="light-label">Kr_area: </label><?php print($rows['kr_area']); ?></p>
                <p class="kpa"><label class="light-label">kpa:</label><?php print($rows['kpa']); ?></p>
                <p class="weight_kpi"><label class="light-label">weight_kpi:</label><?php print($rows['weight_kpi']); ?> </p>
            </div>
            <div class="large-6 medium-6 small-6 push-1 columns">
                <p class="target"><label class="light-label">Target:</label><?php print($rows['target']); ?></p>
                <p class="actual"><label class="light-label">Actual:</label><?php print($rows['actual']); ?></p>
                <p class="score"><label class="light-label">Score</label><?php print($rows['score']); ?></p>
                <p class="final_score"><label class="light-label">Final_score</label><?php print($rows['final_score']); ?></p>
                
            </div>

        </div>
    </div>
</section>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>
</body>
</html>
