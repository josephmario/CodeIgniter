
<?php include('header.php'); ?>
<table id="user-grid"  cellpadding="0" cellspacing="0" border="0" class="display" width="100%">
    <thead>
    <tr>
        <th>User_ID</th>
        <th>Full Name</th>
        <th>Course</th>
        <th>Age</th>
        <th>Edit Profile</th>
    </tr>
    </thead>
</table>
<script type="text/javascript">
    $(document).ready(function () {
        var dataTable = $('#user-grid').DataTable({
            "scrollCollapse": true,
            "sDom": '<"top"f>rt<"bottom"ip><"clear">',
            "bServerSide": true,
            "pagingType": "full_numbers",
            "sAjaxSource": "<?php echo base_url();?>useraccount/datatable"
        });
    });
</script>