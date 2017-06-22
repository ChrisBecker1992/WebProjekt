$(document).ready(function () {
    $(".registerOverlay").click(function(e) {
       e.preventDefault();

        $('#myModal').modal('show');
    });

});

$(document).ready(function () {
    $(".pwforgot").click(function(e) {
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