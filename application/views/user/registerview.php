
<?php include('header.php'); ?>
<script type="text/javascript" src="<?php echo base_url() ?>public/js/viewRegister.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>public/js/updateUser.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/js/jquery.validate.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>public/css/modal.css">
<table class="table table-responsive table-bordered" width="100%">
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Course</th>
        <th>Age</th>
        <th>Action</th>
    </tr>
    <?php
    foreach($viewResult as $aRow)
    {?>
    <tr>
        <td><?php echo $aRow->user_id; ?></td>
        <td><?php echo $aRow->user_fullname; ?></td>
        <td><?php echo $aRow->user_course; ?></td>
        <td><?php echo $aRow->user_age; ?></td>
        <td><button class="btn btn-danger" data-id="<?php echo $aRow->user_id; ?>">DELETE</button><button class="btn btn-info" data-id="<?php echo $aRow->user_id; ?>">EDIT</button></td>
    </tr>
    <?php } ?>
</table>
<?php include("modal.php"); ?>
<?php include("footer.php"); ?>