<html>
    <head>
      <link rel="stylesheet" href="tab.css">
      <link href="foundation/css/foundation.min.css" rel="stylesheet" type="text/css"/>
      <script src="foundation/js/foundation/foundation.js" type="text/javascript"></script>
    </head>
      
    <header></header>
   
<body>

    <h3>Employee register form</h3>
    <div id="azurinfo" class="row" align="center">
  <div class=" large-12 medium-12 columns">
    <form class="container1" action="loginApp.php">
        <table style="width:500px; padding:10px;" >
        <tr>
                
            <td> <input type="text"  placeholder="Email"></td>
            <td><input type="text"  placeholder="Employee Number"></td>
        </tr>
        <tr>
            <td><input type="password" placeholder="password" id="pass1"></td>
            <td><a class="inline"<label>Status</label></a>
    <select class="container"> <option value="Active" >Active</option>
    <option value="Inactive" >Inactive</option>
    </select></td>
        </tr>
        <tr>
            <td> <input type="password" placeholder="confirm password" id="pass2"></td>
            <td><input type="file"> </td>
        </tr>
        <tr>
            <td><input type="text" placeholder="First Name"></td>
            <td><input type="file" value="Upload Photo"></td>
        </tr>
        <tr>
            <td> <input type="text" placeholder="Last Name"></td>
        </tr>
        
        <tr>
            <td></td>
            <td> <a href="#" class="small radius button" onclick="myFunction()">Save</a></td>
        </tr>
               </table>
            
         </form>

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
        else {
            alert("passwors match");
        }
    }
</script>
</html>	
	        