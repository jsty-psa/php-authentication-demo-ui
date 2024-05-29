$(function() {
    disableFingerPrintForm(true);
    disableIrisForm(true);
    disableFaceForm(true);
    disableOTPForm(true);
    disableDemographicForm(true);

    $("#auth-type-fp").change(function() {
        disableFingerPrintForm(!$(this).prop("checked"));
    });

    $("#auth-type-iris").change(function() {
        disableIrisForm(!$(this).prop("checked"));
    });

    $("#auth-type-face").change(function() {
        disableFaceForm(!$(this).prop("checked"));
    });

    $("#auth-type-otp").change(function() {
        disableOTPForm(!$(this).prop("checked"));
    });

    $("#auth-type-demo").change(function() {
        disableDemographicForm(!$(this).prop("checked"));
    });

    $("#otp-request").click(function() {
        individual_id = $("#individual-id").val();
        individual_id_type = $("#individual-id-type").val();

        $.ajax({
            type:"GET",
            url:"/otp/request",
            data:{
                individual_id: individual_id,
                individual_id_type: individual_id_type
            },
            success:function(data) {
               alert("individual_id: " + data.individual_id);
            }
         });
    });

});

function disableFingerPrintForm(value) {
    $("#fingers-count").attr("disabled", value);
    $("#biometric-capture").attr("disabled", value);
}

function disableIrisForm(value) {
    $("#iris-type").attr("disabled", value);
    $("#biometric-capture").attr("disabled", value);
}

function disableFaceForm(value) {
    $("#biometric-capture").attr("disabled", value);
}

function disableOTPForm(value) {
    $("#otp-request").attr("disabled", value);
    $("#otp-value").attr("disabled", value);
}

function disableDemographicForm(value) {
    $("#demographic-value").attr("disabled", value);
}