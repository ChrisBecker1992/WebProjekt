<?php echo $this->header; ?>


<header>
    <div>
        <h1 class="h1header">Studenten-Gathering </h1>
        <h4 class="h4header">FH Kufstein</h4>
    </div>
</header>


<!-- Login Window -->

<div class="container">
    <br><br>
    <br><br>
    <br><br>


    <form action="anmelden" method="post">

        <div class="links col-xs-3"></div>  <!-- div for responsive -->


        <div class="form-group col-xs-6">   <!-- div for responsive -->

            <div class="innenlinks col-xs-3"></div>     <!-- div for responsive -->

            <div class="innenmitte col-xs-6">           <!-- div for responsive -->

                <h3 class="h3login">Login</h3>
                <br>
                <div class="form-group">

                    <br>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Benutzername">
                </div>
                <br>

                <br>
                <input type="password" name="password"  class="form-control" id="password" placeholder="Passwort">

                <br>
                <div class="pwforgot">
                    Passwort
                    <a href="Anmelden.php" target="_self">
                        vergessen?
                    </a>

                    <br><br>

                </div>  <!-- div for getting to main site -->

                <a href="Startseite.php">
                <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">
                    Anmelden
                </button>
                </a>
                <input type="hidden" name="action" value="login">
                <br>

                <div>   <!-- div for getting to registration -->

                    <h4 class="regtext">Hasd du noch k1 Account?
                        <br>
                        Dann
                        <a href="Anmelden.php" class="registerOverlay">
                            hier
                        </a>
                        registrieren!
                    </h4>
                </div>
            </div>
            <div class="innenrecht col-xs-3"></div>     <!-- div for responsive -->
        </div>
    </form>
    <div class="rechts col-xs-3"></div>     <!-- div for responsive -->
</div> <!-- /container -->


<!-- Lightbox for registration -->
<div class="modal fade <?php if($registerError):?> in<?php endif; ?> lightbox" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                    <input type="text" name="name" id="name" class="form-control" placeholder="Benutzername" required
                           autofocus>
                    </div>

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
                    <br><br>

                    <input type="hidden" name="action" value="register">
                    <button type="button" class="btn btn-primary registrieren" name="register">Registrieren</button>

                </form><!-- /form -->

            </div>
        </div>
    </div>
</div>


<!-- Lightbox for password forgot -->
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


<!-- Lightbox for successful sending of Email (doesn't work, is just a nice thing to have) -->
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
