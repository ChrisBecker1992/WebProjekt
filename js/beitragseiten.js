/**
 * Created by kimilk on 16.06.2017.
 */

function myFunction(x) {

    x.classList.toggle("change");

    var y = document.getElementById('dropdowncontent');

    if (y.style.display === 'block'){

        $('#dropdowncontent').fadeOut("slow").style.display = 'none';

    } else {

        $('#dropdowncontent').fadeIn("slow").style.display = 'block';
    }
}



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
                  $('#updateModal').modal('show');

                  }
                }
            });
        });

    $('.updateContribution').click(function () {

        var formWithData = $(this).closest('.modal-content').find('.modal-body form');
        var urlSentStuffTo = formWithData.attr('action');
        //var urlSendStuffTo1 = $('#beitragsformular').attr('action');

        var dataToSend = formWithData.serialize();
        //var dataForContribution = {contribution: $('#beitrag').val()};
        //var id = $('#id').val();

        dataToSend = dataToSend + "&contribution=" + $('#beitrag').val();
        //dataToSend = dataToSend + id + dataForContribution;

        $.ajax({
            url: urlSentStuffTo,
            method: "put",
            data: dataToSend,
            success: function (dataReceived) {
                if (dataReceived.result){
                    toastr.success('Beitrag wurde bearbeitet!')

                    window.setTimeout(function () {
                        location.reload();
                    }, 2000);
                }

            }
        })
    });


    $('.triggerDelete').click(function(e) {
        e.preventDefault();

        var del = confirm("Wollen Sie diesen Beitrag wirklich löschen?");
        if (del == true) {
            var id = $(this).attr('data-id');
            $.ajax({
                'url': 'api/beitrag/',
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