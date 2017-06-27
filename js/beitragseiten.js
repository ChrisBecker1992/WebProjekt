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
jQuery(document).ready(function() {

    var editModal = $('#editModal');

    editModal.on('show', function (event) {

        var button = $(event.relatedTarget) // Button that triggered the modal
        var beitragId = button.data('id') // Extract info from data-* attributes

        var that = this;


        var theTitle = "Neue Adresse anlegen";
        var thePrimaryButton = "Hinzufügen";
        var apiRequestUrl = "api/beitrag/?returnView=true";

        if(typeof beitragId !== "undefined")
        {
            editModal.find('.id').html(beitragId);
            theTitle = "Beitrag mit der ID " + beitragId + " bearbeiten";
            thePrimaryButton = "Speichern";

            apiRequestUrl = apiRequestUrl + "&id=" + beitragId;
        }

        //this is to give the title and the "save" button different labels if they clicked on edit or new
        editModal.find('.modal-title').html(theTitle);
        editModal.find('.registrieren').html(thePrimaryButton);

        //before we have a formular loaded via ajax - we don't want them to be able to click on "save"
        //therefore we disable the button
        editModal.find('.registrieren').prop('disabled', true);

        jQuery.ajax({
            'url': apiRequestUrl,
            'method': 'get',
            'success': function(receivedData) {

                if(receivedData.result) {
                    var modal = $(that)
                    modal.find('.modal-body').html(receivedData.data.html);
                    editModal.find('.registrieren').prop('disabled', false);
                } else { //there was an error - do something!

                }
            }
        });



    });


    editModal.find('.registrieren').click(function() {
        editModal.find('form').trigger('submit', [this]);
    });


    $('.triggerDelete').click(function(e) {
        e.preventDefault();

        var r = confirm("Wollen Sie den wirklich löschen?");
        if (r == true) {
            var dataToSend = {'id':$(this).attr('data-id')};
            $.ajax({
                'url': $(this).attr('href'),
                'method': 'delete',
                'data': dataToSend,
                'dataType': "json",
                'success': function (receivedData) {
                    if(receivedData.result) {
                        window.setTimeout(function() {
                            location.reload();
                        }, 500);
                    } else {
                        //@TODO display error message
                    }
                }
            });
        }
    });

});