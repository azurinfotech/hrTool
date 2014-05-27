<?php include "session.php";
$sess = new session();
$sess->startSession();
?>
<html>
<?php include 'database.php'; ?>
<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<head>
    <script type="text/javascript" src="jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="emp_search1.js"></script>
    <link rel="stylesheet" href="emp_search1.css">
</head>
<body>

<div class="content">
<form action="emp_search_func1.php" method="get">
    <input type="text" class="search" id="searchid" placeholder="Search for people" name="search"/>
         &nbsp; &nbsp;<br/>
</form>
   <div id="result">
    </div>
</div>

</html>