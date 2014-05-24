<?php
/**
 * Created by PhpStorm.
 * User: revathi
 * Date: 5/22/14
 * Time: 11:12 AM
 */
include 'C:\wamp\www\hrTool\session.php';
$sess = new session();
$sess->startSession();
?>
<html>
<?php include 'C:\wamp\www\hrTool\head.php'; ?>
<body>
<header>
  <?php include 'C:\wamp\www\hrTool\header.php'; ?>
</header>
<section id="main-content">
  <div class="row large-12">
    <?php if (isset($_SESSION['flash_message'])) { ?>

      <?php $style = "border-color: #E34234";
      $sess -> __unset('flag_message');
    }; ?>
    <div class="row" style="text-align: center;">
      <h3>Reporting History/Experience</h3>
    </div>
    <form class="register-form" enctype="multipart/form-data" action="Report_his_exp_App.php" method="post">
      <div class="large-12 columns">
      <div class="large-6 medium-6 small-6 columns">
        <input type="text" placeholder="Designation" name="designation">
      </div>
      <div class="large-6 medium-6 small-6 columns">
        <input type="text" placeholder="Date of join" name="date_join">
      </div>
  </div>
      <div class="large-12 columns">
        <div class="large-6 medium-6 small-6 columns">
          <input type="text" placeholder="Previous experience" name="pre_experience">
        </div>
        <div class="large-6 medium-6 small-6 columns">
          <input type="text" placeholder="Previous company" name="previous_comp">
        </div>
      </div>
      <div class="large-12 columns">
        <div class="large-6 medium-6 small-6 columns">
          <input type="text" placeholder="Vertical Reporting Manager" name="vertical_report">
        </div>
        <div class="large-6 medium-6 small-6 columns">
          <input type="text" placeholder="Horizontal Reporting Manager" name="horiz_report">
        </div>
      </div>
      <div class="large-12 columns">
        <div class="large-6 medium-6 small-6 columns">
          <input type="text" placeholder="Department" name="department">
        </div>
      </div>
      <div class="large-12 columns" style="text-align: center">
        <input type="submit" value="Submit" class="small radius button"
               onclick="register_validate()">
      </div>
    </form>
  </div>

</section>
<?php include 'footer.php'; ?>
</body>
</html>
