<html>

<head>
    <link rel="stylesheet" href="foundation/css/foundation.min.css" type="text/css">
    <link rel="stylesheet" href="personaldtls.css" type="text/css">
    <script src="jquery-1.11.1.js"></script>
    <script src="foundation/js/foundation.min.js"></script>
    <script language="javascript" type="text/javascript" src="foundation/js/foundation/datepicker.js">
    </script>
    <script src="personaldtls.js" type="text/javascript"></script>
    <link rel="stylesheet" href="foundation/css/datepicker.css">
</head>
<body>

<h1>Personal Details</h1>

<!-- Main Page Content and Sidebar -->

<div class="row">

    <!-- Main Blog Content -->
    <div class="large-6 medium-6 columns"  role="content">

        <form action="personalapp.php">
            <form>

                <fieldset id="msform1">
                    <label>sex</label><input type="radio" name="sex" value="male">Male
                    <input type="radio" name="sex" value="female">Female</br>
                    <label>Actual Date Of Birth</label><input type="text" name="a_dob">
                    <label>Date Of Birth As Per Records</label><div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                        <input class="span2" size="16" type="text" value="12-02-2012">
                        <span class="add-on"><i class="icon-th"></i></span>
                    </div>

                    <label>Pancard Number</label> <input type="text" name="pan_no">
                    <label>Passport Number</label> <input type="text" name="pass_no">
                </fieldset>
                <fieldset id="msform2">

                    <label>Personal E-mail</label> <input type="text" name="p_mail">
                    <label>Qualification</label> <input type="text" name="qualif">
                    <label>Certification</label> <input type="text" name="certf">

                    <label>Mother Tongue</label> <input type="text" name="mother_tongue">
                    <label>Martial Status</label><select>
                        <option value=""></option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                    </select>
                </fieldset>
                <fieldset id="msform3">
                    <label>Anniversary</label> <div

                    <label>Blood Group</label> <input type="text" name="blood_grp">
                    <label>Father Name</label> <input type="text" name="father_name">
                    <label>Mother Name</label> <input type="text" name="mother_name">
                    <label>Wife Name</label> <input type="text" name="wife_name">
                    <label>Husband Name</label> <input type="text" name="husband_name">
                    <label>Skills</label> <input type="text" name="skills">
                    </fieldset>
                    <div class="next">
                        <a href="#" class="button radius small" id="prev">Previous</a>
                        <a href="#" class="button radius small" id="next">Next</a>
                    </div>
                </form>

</div>



    <!-- End Main Content -->


    <!-- Sidebar -->

    <aside class="large-3 columns">


    </aside>

    <!-- End Sidebar -->
</div>

<!-- End Main Content and Sidebar -->


<!-- Footer -->

<footer class="row">
    <div class="large-12 columns">
        <hr/>
        <div class="row">
            <div class="large-6 columns">
                <p>© Copyright no one at all. Go to town.</p>
            </div>
            <div class="large-6 columns">

            </div>
        </div>
    </div>
</footer>

</body>
</html>