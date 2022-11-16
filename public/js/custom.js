//  Toast: Start
var Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    },
});
// Toast: End

function redirect(url) {
    window.location = url;
}

function submitForm(form, url, redirect_url) {
    $(".msg").html("");
    var method = 'get';
    var fd = '';
    if (form) {
        method = 'post';
        $("#" + form + "_btn_spinner").removeClass('d-none');
        $("#" + form + "_btn_submit").addClass('d-none');
        fd = new FormData($("#" + form)[0]);
    }
    $.ajax({
        url: url,
        type: method,
        data: fd,
        contentType: false,
        processData: false,
        success: function(rslt) {
            $("#" + form + "_btn_spinner").addClass('d-none');
            $("#" + form + "_btn_submit").removeClass('d-none');
            if (rslt.validation_errors) {
                let first_key = "";
                $.each(rslt.validation_errors, function(key, value) {
                    if (!first_key) {
                        first_key = key;
                    }
                    $("#" + key).addClass("is-invalid");
                    $("." + key).addClass("text-danger");
                    $("." + key).html(value);
                    $("#" + first_key).focus();
                });
            } else if (rslt.status == 1) {
                if (rslt.msg) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: rslt.msg,
                        allowOutsideClick: false
                    }).then(function() {
                        if (redirect_url) {
                            window.location = redirect_url;
                        }
                    });
                } else if (redirect_url) {
                    window.location = redirect_url;
                }
            } else if (rslt.status == 2) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Warning',
                    text: rslt.msg,
                    allowOutsideClick: false
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: rslt.msg,
                    allowOutsideClick: false
                });
            }
        },
        error: function(e, status) {
            var response = JSON.parse(e.responseText);
            $("#" + form + "_btn_spinner").addClass('d-none');
            $("#" + form + "_btn_submit").removeClass('d-none');
            Swal.fire({
                icon: 'error',
                title: "Error",
                text: response.msg,
                allowOutsideClick: false
            });
        }
    });
    return false;
}