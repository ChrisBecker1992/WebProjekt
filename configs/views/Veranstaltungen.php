<?php echo $this->header; ?>


    <br><br>
    <br><br>
<br>


    <!--Button for new Article -->

    <div class="links col-xs-10"><h1>Veranstaltungen</h1></div>
    <div class="rechts col-xs-2">   <!-- div for responsive -->
        <button class="btn btn-lg btn-primary btn-block beitragbutton" data-toggle="modal" data-target="#editModal"> +
            neuer Beitrag
        </button>
    </div>

    <br><br>
    <br><br>


    <div class="col-xs-1"></div>    <!-- div for responsive -->
    <div class="col-xs-10 articleTable">    <!-- div for responsive -->
        <?php if ($this->event): ?>
            <table class="table table-striped"> <!-- table for the articles -->
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Beitrag</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($this->event as $event): ?>
                    <tr>
                        <td><?php echo $event->name; ?></td>
                        <td><?php echo $event->topic; ?></td>

                        <td>
                            <button class="btn btn-default" data-toggle="modal" data-target="#editModal"
                                    data-id="<?php echo $event->id; ?>"> Bearbeiten
                            </button>
                        </td>
                        <td><a class="btn btn-danger triggerDelete" href="api/veranstaltungen/"
                               data-id="<?php echo $event->id; ?>"> Löschen</td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>&nbsp;</p>       <!-- div shows when there is no article -->
            <div class="alert alert-info">Noch keine Veranstaltungen vorhanden - Sie können über den Button <strong>neuer
                    Beitrag</strong> ein neues Events hinzufügen.
            </div>
        <?php endif; ?>
    </div>

    <div class="col-xs-1"></div>    <!-- div for responsive -->

    <br><br>
    <br><br>


    <!-- Lightbox for new Article -->

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
                            <label for="veranstaltungen">Beitrag</label>
                            <input type="text" name="veranstaltungen" class="form-control" id="beitrag" value="<?php echo $this->veranstaltungen; ?>">
                        </div>
                            <input type="hidden" name="category" value="veranstaltungen" id="category">
                        </form>
                        <br><br>
                    <br><br>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                    <button type="button" class="btn btn-primary saveContribution">Speichern</button>
                </div>

            </div>
        </div>
    </div>


    <!-- Lightbox for edit Article -->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="myModalLabel">Beitrag bearbeiten</h3>
                </div>
                <div class="modal-body">

                    <form method="<?php if($this->id): ?>put<?php else: ?>post<?php endif; ?>" action="api/beitrag/" class="col-xs-12" id="beitragsformular">
                        <div class="form-group">
                            <label for="wohnung">Beitrag</label>
                            <input type="text" name="wohnung" class="form-control" id="beitrag" value="<?php echo $this->wohnung; ?>">
                        </div>
                        <input type="hidden" name="category" value="wohnen" id="category">
                    </form>
                    <br><br>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                    <button type="button" class="btn btn-primary updateContribution">Speichern</button>
                </div>
            </div>
        </div>
    </div>



    <div class="col-xs-12" style="height: 120px"></div> <!-- div at the bottom for footer being at the bottom (that's a design thing) -->



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

            var requiredFields = ['#veranstaltungen'];

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