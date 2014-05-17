<html>
    <head>
      <link rel="stylesheet" href="tab.css">
      <link href="foundation/css/foundation.min.css" rel="stylesheet" type="text/css"/>
      <script src="foundation/js/foundation/foundation.js" type="text/javascript"></script>
    </head>
      
    <header></header>
   
<body>
<<<<<<< Updated upstream

    <h3>Employee register form</h3>
    <div id="azurinfo" class="row" align="center">
  <div class=" large-12 medium-12 columns">
    <form class="container1" action="register_App.php" method="post">
        <table style="width:500px; padding:10px;" >
        <tr>
                
            <td> <input type="text"  placeholder="Email" id="email" name="email"></td>
            <td><input type="text"  placeholder="Employee Number" name="enum"></td>
        </tr>
        <tr>

            <td><input type="password" placeholder="password" id="pass1"></td>

            

            <td><a class="inline"<label>Status</label></a>
    <select class="container" name="status"> <option value=0>Active</option>
    <option value=1 >Inactive</option>
    </select></td>
        </tr>
        <tr>
            <td> <input type="password" placeholder="confirm password" id="pass2"></td>
            <td><input type="file"> </td>
        </tr>
        <tr>
            <td><input type="text" placeholder="First Name" name="fname"></td>
            <td><input type="file" value="Upload Photo" name="pic"></td>
        </tr>
        <tr>
            <td> <input type="text" placeholder="Last Name" name="lname"></td>
        </tr>
        
        <tr>
            <td></td>
            <td> <a href="#" class="small radius button" onclick="myFunction()">Save</a></td>
        </tr>
               </table>
            
         </form>

=======
    <?php include_once 'register_db.php';?>
<div class="row">
    <div class="large-9 columns" role="content">

        <div id="z" class="row">
            <div class="panel large-12 medium-6 columns" id="k">
                <form action="register_App.php">
                    <p>Email:</p> <input type="text" style="width:200px" name="email">
                        <p>Password:</p> <input type="text" style="width:200px" name="pass">
                            <p>First Name:</p> <input type="text"  style="width:200px" name="fname">
                                <p>Last Name:</p> <input type="text" style="width:200px" name="lname">
                    <p>Status:</p>
                    <select id="a" style="width:200px" name="status"> <option value="Active" >Active</option>
                        <option value="Inactive" >Inactive</option>
                    </select><br>
                    <input type="submit" class="small radius button" value="submit">
                </form>
>>>>>>> Stashed changes
            </div>
   
 </div>

</body>
<script>
    function myFunction() {
        var pass1 = document.getElementById("pass1").value;
        var pass2 = document.getElementById("pass2").value;
        if (pass1 != pass2) {
            alert("Passwords Do not match");
            document.getElementById("pass1").style.borderColor = "#E34234";
            document.getElementById("pass2").style.borderColor = "#E34234";
        }
        var email = document.getElementById("email").value;
        if(email == '' || pass1 == ''){
            alert("Username or Password cannot be empty");
            document.getElementById("pass1").style.borderColor = "#E34234";
            document.getElementById("email").style.borderColor = "#E34234";
        }
    }
</script>
</html>	
	        