<?php
/**
 * Created by PhpStorm.
 * User: arvind
 * Date: 5/20/14
 * Time: 5:54 PM
 */
function get_status($value){
    $status = 'active';
    if($value == 0){
        return $status;
    }
    else{
        $status = 'blocked';
        return $status;
    }
}

function get_role($value){
    $role = 'admin';
    if($value == 0){
        return $role;
    }
    else if($role == 1){
        $role = 'HR';
        return $role;
    }
    else{
        $role = 'Employee';
        return $role;
    }
}