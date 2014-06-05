<?php
include 'session.php';
$sess = new session();
$sess ->startSession();
include 'head.php'; ?>
<?php include 'header.php'; ?>
<?php include 'kra_db.php'; ?>
<html>
<body>
<section id="main-content">
    <div class="row" style="text-align: center;">
        <h3> KRA Form </h3>
    </div>
    <div class="row">
        <div class="large-12 medium-10 small-12 columns" role="content">

            <form>
                <select id="quantity" name="quantity">
                    <option disabled="disabled">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>


            </form>
            <script type="text/javascript">
            var registerCount = function() {
            var qty = $(this).val();

            var fieldsets = $('fieldset');

            fieldsets.slice(0, qty ).show();
            }


            $("#quantity").change(registerCount).keypress(registerCount);
            </script>
            
        <form action="kraform_logic.php" method="post" class="training_form">
                <fieldset id="form_1">
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kra_id" placeholder="kra_id">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kr_area" placeholder="kr_area">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kpa" placeholder="kpa">
                    </div>
                    
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="weight_kpi" placeholder="weight_kpi">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="target" placeholder="target">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="actual" placeholder="actual">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="score" placeholder="score">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="final_score" placeholder="final_score">
                    </div>
                    
        
        </fieldset>
                
        <fieldset id="form_2" style="display: none;">
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kra_id" placeholder="kra_id">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kr_area" placeholder="kr_area">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kpa" placeholder="kpa">
                    </div>
                    
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="weight_kpi" placeholder="weight_kpi">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="target" placeholder="target">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="actual" placeholder="actual">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="score" placeholder="score">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="final_score" placeholder="final_score">
                    </div>
                    
        
        </fieldset>
                
    <fieldset id="form_3" style="display: none;">
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kra_id" placeholder="kra_id">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kr_area" placeholder="kr_area">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kpa" placeholder="kpa">
                    </div>
                    
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="weight_kpi" placeholder="weight_kpi">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="target" placeholder="target">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="actual" placeholder="actual">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="score" placeholder="score">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="final_score" placeholder="final_score">
                    </div>
                    
    
        </fieldset>
                
    <fieldset id="form_4" style="display: none;">
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kra_id" placeholder="kra_id">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kr_area" placeholder="kr_area">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kpa" placeholder="kpa">
                    </div>
                    
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="weight_kpi" placeholder="weight_kpi">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="target" placeholder="target">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="actual" placeholder="actual">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="score" placeholder="score">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="final_score" placeholder="final_score">
                    </div>
                    
                </fieldset>
                
        <fieldset id="form_5" style="display: none;">
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kra_id" placeholder="kra_id">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kr_area" placeholder="kr_area">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kpa" placeholder="kpa">
                    </div>
                    
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="weight_kpi" placeholder="weight_kpi">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="target" placeholder="target">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="actual" placeholder="actual">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="score" placeholder="score">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="final_score" placeholder="final_score">
                    </div>
                    
       
        </fieldset>
         
         <fieldset id="form_6" style="display: none;">
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kra_id" placeholder="kra_id">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kr_area" placeholder="kr_area">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kpa" placeholder="kpa">
                    </div>
                    
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="weight_kpi" placeholder="weight_kpi">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="target" placeholder="target">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="actual" placeholder="actual">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="score" placeholder="score">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="final_score" placeholder="final_score">
                    </div>
                    
       
        </fieldset>

        <fieldset id="form_7" style="display: none;">
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kra_id" placeholder="kra_id">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kr_area" placeholder="kr_area">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kpa" placeholder="kpa">
                    </div>
                    
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="weight_kpi" placeholder="weight_kpi">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="target" placeholder="target">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="actual" placeholder="actual">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="score" placeholder="score">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="final_score" placeholder="final_score">
                    </div>
                    
       
        </fieldset>
                
        <fieldset id="form_8" style="display: none;">
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kra_id" placeholder="kra_id">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kr_area" placeholder="kr_area">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kpa" placeholder="kpa">
                    </div>
                    
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="weight_kpi" placeholder="weight_kpi">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="target" placeholder="target">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="actual" placeholder="actual">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="score" placeholder="score">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="final_score" placeholder="final_score">
                    </div>
                    
        </fieldset>
                
        <fieldset id="form_9" style="display: none;">
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kra_id" placeholder="kra_id">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kr_area" placeholder="kr_area">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kpa" placeholder="kpa">
                    </div>
                    
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="weight_kpi" placeholder="weight_kpi">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="target" placeholder="target">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="actual" placeholder="actual">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="score" placeholder="score">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="final_score" placeholder="final_score">
                    </div>
                    
        </fieldset>
                
        <fieldset id="form_10" style="display: none;">
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kra_id" placeholder="kra_id">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kr_area" placeholder="kr_area">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="kpa" placeholder="kpa">
                    </div>
                    
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="weight_kpi" placeholder="weight_kpi">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="target" placeholder="target">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="actual" placeholder="actual">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="score" placeholder="score">
                    </div>
                    <div class="large-6 medium-6 small-6 columns">
                        <input type="text" name="final_score" placeholder="final_score">
                    </div>
                    
       
        </fieldset>
            <div class="large-12" style="text-align: center;">
                        <input type="submit" class="small radius button" value="Submit">
                    </div>
</form>
    </div>
    </div>
</section>
</body>
<?php include 'footer.php'; ?>
</html>