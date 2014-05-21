<?php include 'session.php';
$sess = new session();
$sess->startSession();
?>
<html>
<?php include 'head.php'; ?>
<body>
<header>
    <?php include 'header.php'; ?>
</header>
<section id="main-content">
    <div class="row large-12">
        <?php if (isset($_SESSION['flash_message'])) { ?>
            <div class="row error-message">The User name already exists please try again</div>
            <?php $style = "border-color: #E34234";
            $sess -> __unset('flag_message');
        }; ?>
        <div class="row" style="text-align: center;">
            <h3>Employee Registration form</h3>
        </div>
        <form class="register-form" enctype="multipart/form-data" action="register_App.php" method="post">
            <div class="large-12 columns">
                <div class="large-6 medium-6 small-6 columns">
                    <input type="text" placeholder="Email/Username" name="email"
                           style="<?php !empty($style) ? print $style : ''; ?>">
                </div>
                <div class="large-6 medium-6 small-6 columns">
                    <input type="text" placeholder="Employee Number" name="enum">
                </div>
            </div>
            <div class="large-12 columns">
                <div class="large-6 medium-6 small-6 columns">
                    <input type="password" placeholder="Password" name="pass">
                </div>
                <div class="large-6 medium-6 small-6 columns">
                    <input type="password" placeholder="Confirm password">
                </div>
            </div>
            <div class="large-12 columns">
                <div class="large-6 medium-6 small-6 columns">
                    <input type="text" placeholder="First name" name="fname">
                </div>
                <div class="large-6 medium-6 small-6 columns">
                    <input type="text" placeholder="Last name" name="lname">
                </div>
            </div>
            <div class="large-12 columns">
                <div class="large-6 medium-6 small-6 columns">
                    <label class="inline" for="up-photo">Upload Photo</label>
                    <input type="file" value="Upload Photo" id="up-photo" name="pic">
                </div>
                <div class="large-6 medium-6 small-6 columns">
                    <label class="inline" for="up-resume">Upload Resume</label>
                    <input type="file" value="Upload Resume" id="up-resume" name="resume">
                </div>
            </div>
            <div class="large-12 columns">
                <div class="large-6 medium-6 small-6 columns">
                    <div class="small-9 columns">
                        <select name="status" id="status-op">
                            <option value=-1>Status</option>
                            <option value=0>Active</option>
                            <option value=1>Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="large-6 medium-6 small-6 columns">
                    <div class="small-9 columns">
                        <select name="role" id="role-op">
                            <option value=-1>Role</option>
                            <option value=0>Admin</option>
                            <option value=1>HR</option>
                            <option value=2>Employee</option>
                        </select>
                    </div>
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
<script>
    function register_validate() {
        var status = document.getElementById("status-op").value;
        var role = document.getElementById("role-op").value;
        var pass1 = document.getElementById("pass1").value;
        var pass2 = document.getElementById("pass2").value;
        if(role < 0){
            alert("Please select a value for Role");
            status.style.borderColor = "#E34234"
        }
        if(status < 0){
            alert("Please enter a value for status");
            status.style.borderColor = "#E34234";
        }
        if (pass1 != pass2) {
            alert("Passwords Do not match");
            pass1.style.borderColor = "#E34234";
            pass2.style.borderColor = "#E34234";
        }
        var email = document.getElementById("email").value;
        if (email == '' || pass1 == '') {
            alert("Username or Password cannot be empty");
            pass1.style.borderColor = "#E34234";
            email.style.borderColor = "#E34234";
        }
    }
</script>
</html>	
	        