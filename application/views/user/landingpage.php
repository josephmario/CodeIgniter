<script href="<?php echo base_url('assets/js/user/js/registration.js')?>"></script>
<link media="all" type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/user/css/registration.css')?>">
<?php include('header.php'); ?>


<div id="container">
    <div id="registration">
        <form id="registerForm">
            <div class="text-center col-xs-12">
                <h3 class="">USER INFORMATION</h3>
            </div>
            <div class="form-group col-xs-12">
                <input type="text" name="fullName" class="form-control" id="" placeholder="Full Name">
                <div class="flash-message"></div>
            </div>
            <div class="form-group col-xs-12">
                <input type="text" name="Course" class="form-control" id="" placeholder="Course">
                <div class="flash-message"></div>
            </div>
            <div class="form-group col-xs-12">
                <input type="text" name="Age" class="form-control" id="" placeholder="Age">
                <div class="flash-message"></div>
            </div>
            <div class="col-xs-12 text-center">
                <input type="button" id="register-btn" class="submit-btn btn" value="Register" />
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#register-btn').click(function(){
           alert('asdasdf');
        });
    });
</script>