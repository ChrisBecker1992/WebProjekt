$(document).ready(function () {

    var myModal = $('#myModal');

    $(".registerOverlay").click(function (e) {
        e.preventDefault();

        $('#myModal').modal('show');
    });

    myModal.find('.btn-primary').click(function () {
        myModal.find('form').trigger('submit', [this]);
    });

    //so we have some input fields
    myModal.find('form').bind('submit', function (e, that) {
        e.preventDefault();

        myModal.find('.btn-primary').prop('disabled', true); //prevent sending the formular again while we check it

        hasError = false; //we are positive...

        if (typeof that === 'undefined') {
            that = myModal.find('.btn-primary').get(0);
        }

        var nonEmptyFields = ['#name', '#pwd', '#pwd2'];

        for (i = 0; i < nonEmptyFields.length; i++) {
            if ($(nonEmptyFields[i]).val() == '') {
                hasError = true;
                $(nonEmptyFields[i]).closest('.form-group').addClass('has-error');
            }
        }

        if (!hasError) {
            //check if pwd is long enough...
            if ($('#pwd').val().length < 8) {
                $('#pwd').closest('.form-group').addClass('has-error');
                hasError = true;
            }
            else {

                if ($('#pwd').val() != $('#pwd2').val()) {
                    $('#pwd2').closest('.form-group').addClass('has-error');
                    hasError = true;
                    myModal.find('.btn-primary').prop('disabled', false);
                } else {
                    //everything fine

                    $.ajax({
                        'url': $(this).attr('action'),
                        'method': $(this).attr('method'),
                        'data': $(this).serialize(),
                        'dataType': "json",
                        'success': function (receivedData) {

                            if (receivedData.result) {
                                toastr.success(receivedData.message);

                                window.setTimeout(function () {
                                    location.reload();
                                }, 2500);

                            }
                            else {
                                myModal.find('.form-group').removeClass('has-error');

                                $.each(receivedData.data.errorFields, function (key, value) {
                                    $('#' + key).closest('.form-group').addClass('has-error');
                                });
                            }

                            myModal.find('.btn-primary').prop('disabled', false);
                        }
                    });

                }
            }
        }

        myModal.find('.btn-primary').prop('disabled', false);

    });
});
    $(document).ready(function () {
        $(".pwforgot").click(function (e) {
            e.preventDefault();

            $('#myModal1').modal('show');
        });

    });

    $(document).ready(function () {
        $(".absenden").click(function (e) {
            e.preventDefault();

            $('#myModal2').modal('show');
            $('#myModal1').modal('hide');
        });
    });
