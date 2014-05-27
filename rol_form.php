<html>
    <head>
    <link href="foundation/css/foundation.min.css" rel="stylesheet" type="text/css"/>
      <script src="foundation/js/foundation/foundation.js" type="text/javascript"></script>
    </head>
      <?php include 'head.php'; ?>

    <body>
        <header>
<?php include 'header.php'; ?>
        </header>
      
    <div id="container2" class="row" style="margin-top:150px; width:200px; margin-left:250px;">
  
    <form class="container1" action="rol_app.php">
        <div class="panel large-10 medium-10"
<form action="welcome.php" method="post">
    <input type="text" placeholder="Role Name" name="rname"><br>
 <input type="submit" value="Submit" class="small radius button">
        
 </div>
</form>
    </div>
        <table style="margin-left:500px; margin-top:-175px; position:absolute;">
<thead>
<tr>
<th>S no</th>
<th>Role Name</th>
</tr>
</thead>
<tbody>
    <tr>
        <td>1</td>
        <td>Admin</td>
    </tr>
    <tr>
        <td>2</td>
        <td>HR</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Employee</td>
    </tr>

</tbody>
</table>
     <?php include 'footer.php'; ?>
</body>
</html>         


