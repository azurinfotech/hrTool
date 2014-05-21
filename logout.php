<?php
include "session.php";
$sess = new session();
$sess -> startSession();
$sess -> __unset('uid');
$sess -> __unset('uname');
$sess -> destroy();
header('Location:login_Page.php');
