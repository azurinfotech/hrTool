<?php 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'session.php';
$sess = new session();
$sess->startSession();
include 'head.php';
?>
<html>
<body>
<header>
    <?php
    include 'header.php';
    include 'database.php';
    $user = new database();
    
    $qury = "SELECT cur_add,cur_country,cur_state,cur_city, perm_add,perm_country,perm_state,perm_city,emer_add, emer_country, emer_state, emer_city FROM address";
    $result = $user->select_data($qury);
    $rows = mysqli_fetch_array($result);
    ?>
</header>
<section id="main-content">
    <div class="row">
        <h3 class="page-header">
            Address View
        </h3>
   <form method="get" action="address_form_App.php" method="get" class="address_form">
                    <div class="row large-12 medium-12 small-12">
                        <div class="large-6 medium-6 small-6 columns">
                            <textarea rows="5" draggable="none"></textarea>
                        </div> 
                        <div class="large-6 medium-6 small-6 columns">
                            <div class="row">
                                <div class="small-6 medium-6 large-6 columns">
                                    <select>
                                        
                                        <option></option>
                                          
                                        <option ></option>
                                        
                                    </select>
                                </div>
                                <div class="small-6 medium-6 large-6 columns">
                                    <select name="cur_state">
                                        <?php $i =0; foreach($state_data as $key => $value){ if(!is_null($value)){
                                            if($i == 0){ $i++; ?>
                                        <option value="-1" disabled selected>State</option>
                                           <?php }?>
                                        <option value="<?php print($value['tid']); ?>"><?php print($value['tname']); ?></option>
                                        <?php } } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-6 medium-6 large-6 columns">
                                    <select name="cur_city">
                                        <?php $i =0; foreach($city_data as $key => $value){ if(!is_null($value)){
                                            if($i == 0){ $i++; ?>
                                        <option value="-1" disabled selected>City</option>
                                           <?php }?>
                                        <option value="<?php print($value['tid']); ?>"><?php print($value['tname']); ?></option>
                                        <?php } } ?>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                    </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
   