<?php
include_once 'session.php';
$sess = new session();
$sess->startSession();
$sess->destroy();
?>
<html>
    <?php
    include_once 'user_db.php';
    include 'head.php';
    ?>
    <title>Login Hr Tool</title>
    <header>
<?php include 'header.php'; ?>
    </header>
    <body>
        <!-- Azur logo -->

        <section id="main-content">

            <div class="row form_size">

                <div class="row large-12 columns">
                    <div class="large-9 medium-9 columns">
                        <div class="large-4 medium-5 small-3 columns ceo-image">

                            <img src="foundation/ceo.png" alt="" height="200px" width="200px">
                        </div>
                        <div class="large-8 medium-8 small-8 columns">
                            <p class="ceo-message">
                                Azur has taken the industry lead by investing in a few key areas
                                – Big Data Analytics, e-Commerce, m-Commerce (Collaboration and Mobility), Cloud Services,
                                ERP/SAP (SAP and Oracle)
                                and Microsoft Technology which are the building blocks for technology products and enterprise
                                applications of the future.
                                Our core differentiator is our approach to each client engagement with a focus on revenue
                                enhancement and business growth,
                                not just cost minimization.</p>

                            <p class="ceo-message">Our partnerships leverage our core technology and business process expertise
                                – whether it is by developing a new software
                                application, integrating large amounts (volume, velocity and variety) of data, or developing a
                                collaborative
                                e-Commerce website. We help enterprise customers enhance the value and life of their existing IT
                                investments through
                                creative use of specific technologies which meet, and exceed, the most rigorous quality and
                                innovation standards.
                                We hire the best and the brightest people and our talent base are made up advanced degrees and
                                deep experience.
                            </p>
                        </div>
                    </div>
                    <div class="panel large-3 medium-3 columns login-block">
                        <form action="login_App.php" method="post">
                            <input type="text" name="uname" placeholder="User name">
                            <input type="password" name="pass" placeholder="Password">
                            <input type="submit" class="small radius button" value="submit"
                                   style="width:70px; height:40px; padding:10px;">

                            <div class="forgotpwd">
                                <a href="forgotpass.php" "> Forgot Password </a>

                            </div>
                        </form>
                    </div>
                </div>
        </section>
<?php include 'footer.php'; ?>
    </body>

</html>





