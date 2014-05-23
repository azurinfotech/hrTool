<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php include 'head.php' ?>
    <body>
        <?php include 'header.php'; ?>
        <section id="main-content">
        <div class="row large-12">
            <div class="large-6 medium-6 small-6 column">
                <form action="vocabulary_applog.php" method="post">
                <input type="text" name="vname" placeholder="Vocabulary Name">
                
                <input type ="submit"class="small radius button">
            </form>
            </div>
        </div>
        </section>
        <?php include 'footer.php'; ?>
    </body>
</html>
