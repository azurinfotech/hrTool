<?php
/**
 * Created by PhpStorm.$query = "INSERT INTO emp_official(uid,designation,date_join,pre_experience,previous_comp,vertical_report,horiz_report,department) VALUES
($uid,'$designation','$date_join','$pre_experience','$previous_comp','$vertical_report','$horiz_report','$department')";
$res = $db->query_execute($query);
 * User: revathi
 * Date: 5/27/14
 * Time: 3:08 PM
 */
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
  $qury = "SELECT designation,date_join,pre_experience,previous_comp,vertical_report,horiz_report,department FROM emp_official"; //LEFT JOIN emp_personal emp ON u.uid = emp.uid WHERE u.uid = $uid";
  $result = $user->select_data($qury);
  $rows = mysqli_fetch_array($result);
  ?>
</header>
<section id="main-content">
  <div class="row">
    <h3 class="page-header">
      Employee History Report and Experience
    </h3>
  </div>
  <div class="row">
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="large-9 push-3 columns">
      <div class="large-6 small-6 medium-6 push-1 columns">


        <p class="designation"><label class="light-label">Designation: </label><?php print($rows['designation']); ?></p>
        <p class="date_join"><label class="light-label">Date_join: </label><?php print($rows['date_join']); ?></p>
        <p class="pre_experience"><label class="light-label">Pre_experience:</label><?php print(($rows['pre_experience'])); ?></p>
        <p class="previous_comp"><label class="light-label">Previous_comp:</label><?php print(($rows['previous_comp'])); ?> </p>
      </div>
      <div class="large-6 medium-6 small-6 push-1 columns">
        <p class="vertical_report"><label class="light-label">Vertical_report:</label><?php print($rows['vertical_report']); ?></p>
        <p class="horiz_report"><label class="light-label">Horiz_report:</label><?php print($rows['horiz_report']); ?></p>
        <p class="department"><label class="light-label">Department:</label><?php print($rows['department']); ?></p>
      </div>

    </div>


    <!-- Nav Sidebar -->
    <!-- This is source ordered to be pulled to the left on larger screens -->

</section>
<footer>
  <?php
  include 'footer.php';
  ?>
</footer>
<!-- End Footer -->
</body>
</html>