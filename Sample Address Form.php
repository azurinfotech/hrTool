<html>
    <?php include 'head.php'; ?>
    <header>
        <?php include 'header.php';
        include 'database.php';
        $db = new database();
        $query = 'SELECT * FROM vocabulary';
        $vocabs = $db -> get_data_rows($query);
        $country_data = array();
        $state_data = array();
        $city_data = array();
        foreach($vocabs as $key => $value){
            if(strtolower($value['vname']) == 'country'){
                $country_vid = $value['vid'];
                $query = "SELECT * FROM taxonomy WHERE vid = $country_vid";
                $country_data = $db ->get_data_rows($query);
            }
            if(strtolower($value['vname']) == 'state'){
                $state_vid = $value['vid'];
                $query = "SELECT * FROM taxonomy WHERE vid = $state_vid";
                $state_data = $db ->get_data_rows($query);
            }
            if(strtolower($value['vname']) == 'city'){
                $city_vid = $value['vid'];
                $query = "SELECT * FROM taxonomy WHERE vid = $city_vid";
                $city_data = $db -> get_data_rows($query);
            }
        }
        ?>
    </header>
    <body>
        <section id="main-content">
            <div id="container2" class="row" align="center">
                <h3>Address Form</h3>
                <form method="post" action="address_form_App.php" method="post" class="address_form">
                    <div class="row large-12 medium-12 small-12">
                        <div class="large-6 medium-6 small-6 columns">
                            <textarea name="curr_addr" rows="5" placeholder="Enter your Current Address" draggable="none"></textarea>
                        </div> 
                        <div class="large-6 medium-6 small-6 columns">
                            <div class="row">
                                <div class="small-6 medium-6 large-6 columns">
                                    <select name="cur_country">
                                        <?php $i =0; foreach($country_data as $key => $value){ if(!is_null($value)){
                                            if($i == 0){ $i++; ?>
                                        <option value="-1" disabled selected>Country</option>
                                           <?php }?>
                                        <option value="<?php print($value['tid']); ?>"><?php print($value['tname']); ?></option>
                                        <?php } } ?>
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
                    <div class="row large-12 medium-12 small-12">
                        <div class="large-6 medium-6 small-6 columns">
                            <textarea name="emer_addr" rows="5" placeholder="Enter your Emegrncy Contact Address"></textarea>
                        </div>
                        <div class="large-6 medium-6 small-6 columns">
                            <div class="row">
                                <div class="small-6 medium-6 large-6 columns">
                                    <select name="emr_country">
                                        <?php $i =0; foreach($country_data as $key => $value){ if(!is_null($value)){
                                            if($i == 0){ $i++; ?>
                                        <option value="-1" disabled selected>Country</option>
                                           <?php }?>
                                        <option value="<?php print($value['tid']); ?>"><?php print($value['tname']); ?></option>
                                        <?php } } ?>
                                    </select>
                                </div>
                                <div class="small-6 medium-6 large-6 columns">
                                    <select name="emr_state">
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
                                    <select name="emr_city">
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
                    <div class="row large-12 medium-12 small-12">
                        <div class="large-6 medium-6 small-6 columns">
                            <textarea name="perm_addr" rows="5" placeholder="Enter your Permanent Address"></textarea>
                        </div>
                        <div class="large-6 medium-6 small-6 columns">
                            <div class="row">
                                <div class="small-6 medium-6 large-6 columns">
                                    <select name="perm_country">
                                        <?php $i =0; foreach($country_data as $key => $value){ if(!is_null($value)){
                                            if($i == 0){ $i++; ?>
                                        <option value="-1" disabled selected>Country</option>
                                           <?php }?>
                                        <option value="<?php print($value['tid']); ?>"><?php print($value['tname']); ?></option>
                                        <?php } } ?>
                                    </select>
                                </div>
                                <div class="small-6 medium-6 large-6 columns">
                                    <select name="perm_state">
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
                                    <select name="perm_city">
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
                    <div class="row large-12" style="text-align: center;">
                        <input type="submit" name="submit" value="Submit" class="small radius button">
                    </div>
                </form>
            </div>
        </section>
        <?php include 'footer.php'; ?>  
    </body>
</html>