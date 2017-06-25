/**
 * Created by kimilk on 16.06.2017.
 */
function myFunction(x) {
    x.classList.toggle("change");

    $(".dropdown-content").show();
}

/*$(document).ready(function () {
    $(".container").click(function (e) {
        e.preventDefault();

        $(".dropdown-content").show();

    });

});*/



/* Lightbox */
$(document).ready(function () {
    $(".beitragbutton").click(function(e) {
        e.preventDefault();

        $('#myModal4').modal('show');
    });
});