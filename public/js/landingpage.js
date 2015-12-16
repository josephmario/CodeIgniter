$(document).ready(function() {
    var BASE_URL = $('#hdnBaseUrl').val();
    $('form#registerForm').validate({
        rules:{
            fullname: 'required',
            course: 'required',
            age:{
                number: true,
                required: true
            }
        },
        submitHandler: function(form) {
            $.ajax({
                type: "post",
                url: BASE_URL + "useraccount/registerSuccess",
                data: $(form).serialize(),
                success: function (data) {
                    //alert('success');
                    swal("Successfully Registered", "", "success");
                    window.setTimeout(function(){location.reload()},2000)
                }
            });
        }
    });
});