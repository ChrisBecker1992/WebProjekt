<?php echo $this->header; ?>

<header>
    <div>
        <h1>Studenten-Gathering </h1>
        <h4>FH Kufstein</h4>
    </div>
</header>

<!-- Dropdown-Menü -->
<div class="dropdown">
    <div class="container" onclick="myFunction(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>

    <div class="dropdown-content">
        <div class="content">Startseite
        <a href="Startsite.html" target="_self"></a>
        </div>
        <div class="content">Wohnen</div>
        <div class="content">Nachhilfe</div>
        <div class="content">Veranstaltungen</div>
        <div class="content">Auslandssemester</div>
    </div>
</div>

<br><br>

<!--Button für neuen Eintrag-->

<div class="links col-xs-10"></div>
<div class="rechts col-xs-2">
<button class="btn btn-lg btn-primary btn-block" type="submit">+ neuer Beitrag</button>
</div>


<!--Lightbox für neuen Eintrag-->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="myModalLabel">neuer Eintrag</h3>
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
<?php echo $this->footer; ?>