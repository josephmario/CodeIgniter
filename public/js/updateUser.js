$(document).ready(function() {
    var BASE_URL = $('#hdnBaseUrl').val();
    $('#Updateuser').on('click', function () {
        formData = {
            user_id : $('[name="id"]').val(),
            user_fullname : $('[name="fullName"]').val(),
            user_course : $('[name="Course"]').val(),
            user_age : $('[name="Age"]').val()
        };
        $('form#updateForm').validate({
            rules: {
                fullName: 'required',
                Course: 'required',
                Age: {
                    number: true,
                    required: true
                }
            },
            submitHandler: function (form) {
                $.ajax({
                    type: "POST",
                    url: BASE_URL + "useraccount/updateSuccess",
                    data: formData,
                    success: function (data) {
                        //alert('success');
                        swal("Successfully Updated", "", "success");
                        window.setTimeout(function () {
                            location.reload()
                        }, 2000)
                    }
                });
            }
        });
    });
});