$(document).ready(function(){
    var BASE_URL = $('#hdnBaseUrl').val();
    $('table').delegate('.btn-danger', 'click', function(){
        var r=confirm("Are you sure to Delete data?");
        var formData = {
            'id' : $(this).data("id")
        };
        if(r==true) {
            $.ajax({
                type: "post",
                url: BASE_URL + 'useraccount/deletePost',
                data: formData,
                success: function (data) {
                    swal("Successfully Deleted", "", "success");
                    window.setTimeout(function () {
                        location.reload()
                    }, 2000)
                }
            });
        }
    });
    $('table').delegate('.btn-info','click', function(){
        $.ajax({
            type: "POST",
            url: BASE_URL + "useraccount/editPost",
            data: {"id": $(this).data("id")},
            success: function (data) {
                var obj = jQuery.parseJSON(data);
                $("#userid").val(obj.user_id);
                $("#username").val(obj.user_fullname);
                $("#usercourse").val(obj.user_course);
                $("#userage").val(obj.user_age);
                $('#myModal').modal('show');
            }
        });
    });
});