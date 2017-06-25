<?php echo $this->header; ?>

<header>
    <div class="header">
        <h1 class="h1header">Studenten-Gathering </h1>
        <h4 class="h4header">FH Kufstein</h4>
    </div>
</header>

<!-- Dropdown-Menü -->
<div class="menu">
    <div>
        <div class="dropdown">
            <div class="container" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <div class="dropdown-content">
                <div class="content"><a href='Startseite'>Startseite</a> </div>
                <div class="content"><span class="aktuelleseite">Wohnen</span></div>
                <div class="content"><a href='Nachhilfe'>Nachhilfe</a></div>
                <div class="content"><a href='Veranstaltungen'>Veranstaltungen</a></div>
                <div class="content"><a href='Auslandssemester'>Auslandssemester</a></div>
            </div>
        </div>
        <div class="aktuell">Wohnen</div>
    </div>
</div>

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