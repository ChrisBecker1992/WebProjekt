/**
 * Created by kimilk on 16.06.2017.
 */
function myFunction(x) {
    x.classList.toggle("change");
}


/* Lightbox */
$(document).ready(function () {
    $(".").click(function(e) {
        e.preventDefault();

        $('#myModal1').modal('show');
    });

});