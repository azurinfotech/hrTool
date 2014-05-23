<?php include "session.php";
$sess = new session();
$sess->startSession();
?>
<html>
<?php include 'head.php'; ?>
<title>Forgot Password</title>
<?php include 'header.php'; ?>
<body>
<section id="main-content">

    <div class="row large-12">
        <?php if (isset($_SESSION['flag_message'])) { ?>
            <div class="row error-message">The User name does not exist</div>
            <?php $style = "border-color: #E34234";
            $sess->__unset('flag_message');
        }; ?>
        <h2>Forgot Password</h2>
    </div>
    <div class="row" id="forgot-pass">
        <p>Enter your registered E-mail ID to recieve your password.</p>

        <form action="forgotpass_App.php" method="post">
            <input type="text" name="off_email" placeholder="Email Id" style="width:175px;<?php print($style); ?>;">
            <input type="submit" class="small radius button" value="submit"
                   style="width:70px; height:40px; padding:10px;">
        </form>
    </div>
</section>
<?php include 'footer.php'; ?>
</body>
</html>

    