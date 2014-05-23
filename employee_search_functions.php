<?php
$q=$_GET['q'];
$my_data=mysql_real_escape_string($q);
$mysqli=mysqli_connect('localhost','root','','hrtool') or die("Database Error");
$sql="SELECT fname FROM users WHERE fname LIKE '%$my_data%' ";
$result = mysqli_query($mysqli,$sql) or die(mysqli_error());

if($result)
{
    while($row=mysqli_fetch_array($result))
    {
        echo $row['fname']."\n";
    }
}
?>