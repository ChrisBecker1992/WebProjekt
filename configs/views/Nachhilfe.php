<?php echo $this->header; ?>


    <br><br>
    <br><br>

    <!--Button für neuen Eintrag-->

    <div class="links col-xs-10"><h1>Nachhilfe</h1></div>
    <div class="rechts col-xs-2">
        <button class="btn btn-lg btn-primary btn-block beitragbutton" data-toggle="modal" data-target="#editModal">+ neuer Beitrag</button>
    </div>

<?php if($this->coaching): ?>
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
        <?php foreach($this->coaching as $coaching): ?>
            <tr>
                <td><?php echo $coaching->id; ?></td>
                <td><?php echo $coaching->coach; ?></td>

                <td><button class="btn btn-default" data-toggle="modal" data-target="#editModal" data-id="<?php echo $coaching->id; ?>"><i class="glyphicon glyphicon-pencil"></i> Bearbeiten</button></td>
                <td><a class="btn btn-danger triggerDelete" href="api/address/" data-id="<?php echo $coaching->id; ?>"><i class="glyphicon glyphicon-trash"></i> Löschen</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>&nbsp;</p>
    <div class="alert alert-info">Noch keine Nachhilfe vorhanden - Sie können über den Button <strong>neuer Beitrag</strong> neue Anfragen oder Suchen hinzufügen.</div>
<?php endif; ?>

    <br><br>
    <br><br>



    <!-- Lightbox für neuen Beitrag -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="myModalLabel">neuer Beitrag</h3>
                </div>
                <div class="modal-body">

                    <form class="Beitrag">

                        <!--<label for="Betreff" class="sr-only"></label>
                        <input type="text" id="Betreff" class="form-control" placeholder="neuer Betreff" required autofocus>-->

                        <div class="form-group">
                            <label for="coach">Beitrag</label>
                            <input type="text" name="coach" class="form-control" id="coach" value="<?php echo $this->coach; ?>">
                        </div>

                        <br><br>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                    <button type="button" class="btn btn-primary registrieren">Speichern</button>
                </div>


                </form><!-- /form -->

            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">

        var editModal = $('#editModal');

        editModal.find('form').unbind('submit');

        editModal.find('form').bind('submit', function(e, that) {

            e.preventDefault();

            editModal.find('.btn-primary').prop('disabled', true);

            hasError = false;

            if(typeof that === 'undefined') {
                that = editModal.find('.btn-primary').get(0);
            }

            var requiredFields = ['#coach'];

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

                        editModal.find('.btn-primary').prop('disabled', false);
                    }
                });
            }
            else
            {
                editModal.find('.btn-primary').prop('disabled', false);
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