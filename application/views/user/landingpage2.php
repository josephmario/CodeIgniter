<?php include("header.php"); ?>
<script type="text/javascript" src="<?php echo base_url()?>public/js/landingpage.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/jquery.validate.min.js"></script>
<div id="container">
    <div id="registration">
        <?php
            echo form_open('','id=registerForm');
            echo "<div class='col-xs-12 text-center form-group'>";
            echo form_input('fullname','' ,'class="form-control"');
            echo "<div class='flash-message'></div>";
            echo "</div>";
            echo "<div class='col-xs-12 text-center form-group'>";
            echo form_input('course','' ,'class="form-control"');
            echo "<div class='flash-message'></div>";
            echo "</div>";
            echo "<div class='col-xs-12 text-center form-group'>";
            echo form_input('age','' ,'class="form-control"');
            echo "<div class='flash-message'></div>";
            echo "</div>";
            echo "<div class='col-xs-12 text-right form-group'>";
            echo form_submit('register','Register', 'id="register-btn"' );
            echo form_close();
        ?>
    </div>
</div>
<?php include('footer.php'); ?>
