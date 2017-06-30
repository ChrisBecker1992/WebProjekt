/**
 * Created by kimilk on 16.06.2017.
 */
function myFunction(x) {
    x.classList.toggle("change");
}

/*$(document).ready(function () {
    $(".container").click(function (e) {
        e.preventDefault();

        $(".dropdown-content").show();

    });

});*/



/* Lightbox */
$(document).ready(function() {

    $('.saveContribution').click(function() {

        var urlToSendStuffTo = $('#beitragsformular').attr('action');

        $.ajax({
            url: urlToSendStuffTo,
            method: "post",
            data: {category: $('#category').val(), contribution: $('#beitrag').val()},
            success: function(dataReceived) {
                if(dataReceived.result) {
                    toastr.success('Beitrag wurde erstellt!');

                    window.setTimeout(function() {
                        location.reload();
                    }, 2000);
                }
            }
        });

        //console.log($('#beitrag').val());
    });

    $('.editBeitrag').click(function() {
        var id = $(this).attr('data-id');
        var category = $(this).attr('data-category');

        $.ajax({
            url: 'api/beitrag/',
            method: "get",
            data: {category: category, id: id, returnView: 'true'},
            success: function(dataReceived) {
                if(dataReceived.result) {

                  $('.modal-body').html(dataReceived.data.view);
                  $('#editModal').modal('show');

                    toastr.success('Beitrag wurde bearbeitet!');
                }
            }
        });
    });


    $('.triggerDelete').click(function(e) {
        e.preventDefault();

        var del = confirm("Wollen Sie den wirklich löschen?");
        if (del == true) {
            var id = $(this).attr('data-id');
            $.ajax({
                'url': 'api/beitrag',
                'method': 'delete',
                'data': id,
                'dataType': "json",
                'success': function (receivedData) {
                    if(receivedData.result) {

                        toastr.success('Beitrag wurde gelöscht!');
                        window.setTimeout(function() {
                            location.reload();
                        }, 200);
                    } else {
                        toastr.error('Beitrag konnte nicht gelöscht werden.')
                    }
                }
            });
        }
    });

});