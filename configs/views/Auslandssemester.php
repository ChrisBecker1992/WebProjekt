<?php echo $this->header; ?>

<br><br>
<br><br>

<!--Button für neuen Eintrag-->

    <div class="links col-xs-10"><h1>Auslandssemester</h1></div>
        <div class="rechts col-xs-2">
        <button class="btn btn-lg btn-primary btn-block beitragbutton" data-toggle="modal" data-target="#editModal"> + neuer Beitrag</button>
        </div>

        <?php if($this->ausland): ?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Beitrag</th>
                    <th>Bearbeiten</th>
                    <th>Löschen</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($this->ausland as $ausland): ?>
                    <tr>
                        <td><?php echo $ausland->id; ?></td>
                        <td><?php echo $ausland->topic; ?></td>

                        <td><button class="btn btn-default editBeitrag" data-id="<?php echo $ausland->id; ?>" data-category="auslandssemester"></i>Bearbeiten</button></td>
                        <td><a class="btn btn-danger triggerDelete" href="api/auslandssemester/" data-id="<?php echo $ausland->id; ?>"> Löschen </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>&nbsp;</p>
            <div class="alert alert-info">Noch keine Auslandserfahrungen vorhanden - Sie können über den Button <strong>neuer Beitrag</strong> eine neue Erfrahrung hinzufügen.</div>
        <?php endif; ?>


<br><br>
<br><br>


<!--Lightbox für neuen Eintrag-->

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="myModalLabel">neuer Beitrag</h3>
            </div>
            <div class="modal-body">

                    <form method="<?php if($this->id): ?>put<?php else: ?>post<?php endif; ?>" action="api/beitrag/" class="col-xs-12" id="beitragsformular">
                        <div class="form-group">
                        <label for="topic">Beitrag</label>
                        <input type="text" name="topic" class="form-control" id="beitrag" value="<?php echo $this->topic; ?>">
                    </div>
                        <input type="hidden" name="category" value="auslandssemester" id="category">
                    </form>

                    <br><br>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                <button type="button" class="btn btn-primary saveContribution">Speichern</button>
            </div>
            </div>
        </div>
    </div>
</div>



    <script type="text/javascript">

        var editModal = $('#editModal');

        editModal.find('form').unbind('submit');

        editModal.find('form').bind('submit', function(e, that) {

            e.preventDefault();

            editModal.find('.registrieren').prop('disabled', true);

            hasError = false;

            if(typeof that === 'undefined') {
                that = editModal.find('.registrieren').get(0);
            }

            var requiredFields = ['#topic'];

            for(var i = 0; i < requiredFields.length; i++) {
                if($(requiredFields[i]).val() == '') {
                    hasError = true;
                    $(requiredFields[i]).closest('.form-group').addClass('has-error');
                }
            }

            if(!hasError)
            {
                $.ajax({
                    'url': $(this).attr('action'),
                    'method': $(this).attr('method'),
                    'data': $(this).serialize(),
                    'dataType': "json",
                    'success': function (receivedData) {

                        if(receivedData.result)
                        {
                            window.setTimeout(function() {
                                location.reload();
                            }, 500);

                        }
                        else
                        {
                            editModal.find('.form-group').removeClass('has-error');

                            $.each(receivedData.data.errorFields, function(key, value) {
                                $('#'+key).closest('.form-group').addClass('has-error');
                            });
                        }

                        editModal.find('.registrieren').prop('disabled', false);
                    }
                });
            }
            else
            {
                editModal.find('.registrieren').prop('disabled', false);
            }

        });

    </script>

    <footer>
        <div class="socialmedia">
            <span>Impressum</span>
            <a href="https://www.facebook.com" target="_blank">
                <i class="fa fa-facebook-official" aria-hidden="true"></i>
            </a>
            <a href="https://www.twitter.com" target="_blank">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
        </div>
    </footer>

<?php echo $this->footer; ?>