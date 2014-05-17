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
    <form class="container1" action="register_App.php" method="post">
        <table style="width:500px; padding:10px;" >
        <tr>
                
            <td> <input type="text"  placeholder="Email" name="email"></td>
            <td><input type="text"  placeholder="Employee Number" name="enum"></td>
        </tr>
        <tr>
            <td><input type="password" placeholder="password" name="pass"></td>
            <td><a class="inline"<label>Status</label></a>
    <select class="container" name="status"> <option value=0>Active</option>
    <option value=1 >Inactive</option>
    </select></td>
        </tr>
        <tr>
            <td> <input type="password" placeholder="confirm password"></td>
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
            <td><input type="submit" value="Save" class="small radius button"> </td>
        </tr>
               </table>
     </form>

            </div>
</div>
</body>
</html>	
	        