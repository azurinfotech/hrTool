<?php if(isset($_SESSION['uid'])){ ?>
<nav class="top-bar" data-topbar="">
    <ul class="title-area">

        <li class="name">
        </li>

        <li class="toggle-topbar menu-icon"><a href="">Menu</a></li>
    </ul>

    <section class="top-bar-section">


        <ul class="right">
            <li class="divider"></li>
            <li><a href="home.php">Home</a></li>
            <li class="divider"></li>
            <li><a href="personal_dtls.php">Personal details</a></li>
            <li class="divider"></li>
            <li><a href="register_Page.php">Registration form</a></li>
            <li class="divider"></li>
            <li><a href="logout.php">Logout</a></li>

        </ul>
    </section>
</nav>
<?php } ?>
<div class="row large-12 site-header">
    <div class="logo large-4 medium-4 small-4 columns">
        <a href="home.php"> <img src="foundation/logo.png" alt="Azur Info Tech"></a>
    </div>
    <div class="site-slogan large-8 medium-8 small-8 columns">
        <h2 class="slogan">Azur Employee Database</h2>
    </div>
</div>

<?php //if(isset($_SESSION['uid'])){ ?>
