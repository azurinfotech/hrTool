<?php
$user = new database();
$uid = $_SESSION['uid'];
/*$qury = "SELECT fname
     FROM users u INNER JOIN emp_personal emp ON u.uid = emp.uid WHERE u.uid = $uid";
$result = $user->select_data($qury);
$rows = mysqli_fetch_array($result);
?>*/

$query = "SELECT fname
     FROM users u INNER JOIN emp_personal emp ON u.uid = emp.uid WHERE u.uid = $uid";

//if ($stmt = mysqli_prepare($link, $query)) {

/* execute statement */
//mysqli_stmt_execute($stmt);

/* bind result variables */
//mysqli_stmt_bind_result($stmt, $key, $value);

/* fetch values */
//while (mysqli_stmt_fetch($stmt)) {
//printf ("%s (%s)\n", $key, $value);
//}

/* close statement */
//mysqli_stmt_close($stmt);
//}

/* close connection */
//mysqli_close($link);
?>