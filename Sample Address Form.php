<html>
    <?php include 'head.php'; ?>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <body>
        <section id="main-content">
            <div id="container2" class="row" align="center">
                <h3>Address Form</h3>
                <form method="post" action="address_form_App.php">
                    <div class="row large-12 medium-12 small-12">
                        <div class="large-6 medium-6 small-6 columns">
                            <textarea name="curr_addr" rows="5" placeholder="Enter your Current Address"></textarea>
                        </div> 
                        <div class="large-6 medium-6 small-6 columns">
                            <textarea name="per_addr" rows="5" placeholder="Enter your Permanent Address"></textarea>
                        </div>
                    </div>
                    <div class="row large-12 medium-12 small-12">
                        <div class="large-6 medium-6 small-6 columns">
                            <textarea name="emer_addr" rows="5" placeholder="Enter your Emegrncy Contact Address"></textarea>
                        </div>
                        <div class="large-6 medium-6 small-6 columns">
                            <div class="row">
                                <div class="small-6 medium-6 large-6 columns">
                                    <select name="country">
                                        <option value="-1">Country</option>
                                        <option value="0">India</option>
                                    </select>
                                </div>
                                <div class="small-6 medium-6 large-6 columns">
                                    <select name="state">
                                        <option value="-1">State</option>
                                        <option value="0">Tamil Nadu</option>
                                        <option value="1">Andhra Pradesh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-6 medium-6 large-6 columns">
                                    <select name="city">
                                        <option value="-1">City</option>
                                        <option value="0">Chennai</option>
                                        <option value="1">Hyderabad</option>
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