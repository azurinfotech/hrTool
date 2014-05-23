<?php include "session.php";
$sess = new session();
$sess->startSession();
?>
<html>
<?php include 'database.php';?>
<?php include 'head.php';?>

<?php include 'header.php';?>


<h3>Employee Search </h3>
<head>
    <script src="jquery-1.11.0.js"></script>
    <script src="employee_search.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jquery.autocomplete.js"></script>
    <link rel="stylesheet" type="text/css" href="jquery.autocomplete.css">


</head>
<body>

<div class="row large-12">
    <?php if (isset($_SESSION['flag_message'])) { ?>
        <div class="row error-message">The Employee Does Not Exists</div>
        <?php $style = "border-color: #E34234";
        $sess->__unset('flag_message');
    }; ?>
</div>

<div class="large-6 medium-6 small-6 columns">
    <input type="text" name="fname" id="autosuggest"  placeholder="Search Employees" onkeyup="autosuggest()">

</div>
</body>
</html>

