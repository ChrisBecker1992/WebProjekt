<?php echo $this->header; ?>


<header>
    <div>
        <h1 class="h1header">Studenten-Gathering </h1>
        <h4 class="h4header">FH Kufstein</h4>
    </div>
</header>


<div class="container">
    <br><br>
    <br><br>
    <br><br>

    
    <form action="Startseite.php" method="post">

        <div class="links col-xs-3"></div>


        <div class="form-group col-xs-6">

            <div class="innenlinks col-xs-3"></div>

            <div class="innenmitte col-xs-6">

                <h3 class="h3login">Login</h3>
                <br>
                <div class="form-group">
                    <label for="username">Name</label>
                    <br>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Benutzername">
                </div>
                <br>
                <!--<label for="exampleInputEmail1">Email-Addresse</label>
                <br>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">

                <br>-->

                <label for="password">Passwort</label>
                <br>
                <input type="password" name="password"  class="form-control" id="password" placeholder="Passwort">

                <br>
                <div class="pwforgot">
                    Passwort
                    <a href="Anmelden.php" target="_self">
                        vergessen?
                    </a>

                    <br><br>

                </div>

                <button class="btn btn-lg btn-primary btn-block" name="action" type="submit">
                    <a href="Startseite.php"></a>
                    Anmelden
                </button>

                <br>

                <div>

                    <h4 class="regtext">Du bimst 1 noch kein Account?
                        <br>
                        Dann <a href="Anmelden.php" class="registerOverlay">
                            hier
                        </a>
                        registrieren!
                    </h4>
                </div>
            </div>
            <div class="innenrecht col-xs-3"></div>
        </div>
    </form>
    <div class="rechts col-xs-3"></div>
</div> <!-- /container -->


<!-- Lightbox für Registrieren -->
<div class="modal fade lightbox" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="myModalLabel">Neu hier? Registriere dich jetzt!</h3>
            </div>
            <div class="modal-body">

                <form class="form-signin" action="anmelden" method="post">
                    <h4 class="form-signin-heading"></h4>

                    <div class="form-group">
                    <label for="name" class="sr-only"></label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nachname" required
                           autofocus>
                    </div>
                    <!--<br><br>

                    <label for="inputvname" class="sr-only"></label>
                    <input type="text"name="vname" id="inputvname" class="form-control" placeholder="Vorname" required autofocus>-->

                    <br><br>
                    <div class="form-group">
                    <label for="pwd" class="sr-only"></label>
                    <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Passwort" required>
                    </div>
                    <br><br>

                    <div class="form-group">
                    <label for="pwd2" class="sr-only"></label>
                    <input type="password" name="pwd2" id="pwd2" class="form-control" placeholder="Passwort wiederholen"
                           required autofocus>
                    </div>
                    <br><br>

                    <!--<label for="inputEmail" class="sr-only"></label>
                    <input type="inputemail" name="inputemail" id="inputEmail" class="form-control" placeholder="Email" required autofocus>

                    <br><br>-->

                    <!--Geburtsdatum
                    <label for="inputdatum" class="sr-only"></label>
                    <input type="date" name="birthday" id="inputdatum" class="form-control" placeholder="Geburtsdatum" required
                           autofocus>

                    <br><br>-->

                    <!--Beziehungsstatus
                    <br>
                    <input type="radio" id="single" name="beziehungsstatus">
                    <label for="single" class="beziehungsstatus">Single</label>
                    <br>
                    <input type="radio" id="vergeben" name="beziehungsstatus">
                    <label for="vergeben" class="beziehungsstatus">Vergeben</label>
                    <br>
                    <input type="radio" id="cursed" name="beziehungsstatus">
                    <label for="cursed" class="beziehungsstatus">Cursed or some shit</label>-->

                    <br><br>
                    <input type="hidden" name="action" value="register">
                    <button type="button" class="btn btn-primary registrieren">Registrieren</button>

                </form><!-- /form -->

            </div>
        </div>
    </div>
</div>


<!-- Lightbox für Passwort vergessen -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Passwort vergessen?!</h4>
            </div>
            <div class="modal-body">
                <p>
                    Kein Problem!
                    <br><br>
                    Wir senden Ihnen ein neues Passwort per Email zu.
                </p>

                <form class="forgot">
                    <label for="inputEmail" class="sr-only"></label>
                    <input type="email" id="inputEmail1" class="form-control" placeholder="Email" required autofocus>

                    <br>

                    <button type="button" class="btn btn-primary absenden">Absenden</button>

                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Lightbox für erfolgreiches Absenden der Email von Passwort vergessen -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">
                    Email erfolgreich versendet
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                </h4>
            </div>
            <div class="modal-body">
                <p>
                    Haha ne nur verarscht!
                    <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
                </p>

                <form class="forgot">

                    <br>

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php echo $this->footer; ?>
