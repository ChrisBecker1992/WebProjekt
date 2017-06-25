<?php echo $this->header; ?>


<br><br>
<br><br>

<!--Button für neuen Eintrag-->

<div class="links col-xs-10"></div>
<div class="rechts col-xs-2">
<button class="btn btn-lg btn-primary btn-block beitragbutton">+ neuer Beitrag</button>
</div>

<br><br>
<br><br>


<!-- Textfeld für Eintrag -->
<div class="links col-xs-1"></div>

<textarea class="innen col-xs-8" cols="100" rows="10">
</textarea>

<div class="rechts col-xs-3"></div>

<br><br>


<!--Lightbox für neuen Eintrag-->

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="myModalLabel">neuer Beitrag</h3>
            </div>
            <div class="modal-body">

                <form class="Beitrag">

                    <label for="Betreff" class="sr-only"></label>
                    <input type="text" id="Betreff" class="form-control" placeholder="neuer Betreff" required autofocus>

                    <br><br>

                    <textarea class="sr" cols="100" rows="8" placeholder="Beitrag" maxlength="250"></textarea>

                    <br><br>



                    <button type="button" class="btn btn-primary registrieren">Speichern</button>

                </form><!-- /form -->

            </div>
        </div>
    </div>
</div>


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