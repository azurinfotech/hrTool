<?php
//include 'session.php';
//$sess = new session();
//$sess->startSession();
include 'getoptions.php';
$user_role = $_SESSION['role'];
$role = get_role($user_role);
$user=array("0","1","2");
$isAdmin = $user->has_role('admin');
$isHr = $user->has_role('hr');
$isEmployee = $user->has_role('employee');
 /*if($isAdmin): ?>

<p>Admin only content</p>

<? endif; ?>if(! $this->user->has_role('role')) {
  header("Location: /index.php");
  die();
}*/

if($isAdmin==0){
 // Register $myusername, $mypassword and redirect to file "login_success.php"
 session_register("username");
 session_register("password"); 
 session_register("admin"); 
 header("location:Dashboard_page.php");
}
else{
header("location:login.php");
}

  if($isHr==1){
   session_register("username");
   session_register("password"); 
   session_register("hr"); 
   header("location:Dashboard_page.php");
  }
  else {
  header("location:login.php");
}

    if($isEmployee==2) {
    session_register("username");
   session_register("password"); 
   session_register("employee"); 
   header("location:Dashboard_page.php");
     
  }
  else{
  header("location:login.php");
}


Session::init();
   Session::set('role', $data['role']);
    $role = Session::get('role');
    if ($role != 'owner') {
        Session::destroy();
        header('location: '.URL.'login');
        exit;
    }

?>