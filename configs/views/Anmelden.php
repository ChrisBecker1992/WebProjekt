<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../favicon.ico">

    <title>Login</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script type="text/javascript" src="../../js/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Bevan|Droid+Serif" rel="stylesheet">
    <link href="../../sass/forget.css" rel="stylesheet">
    <link href="../../sass/regist.css" rel="stylesheet">
    <link href="../../stylesheets/anmelden.css" rel="stylesheet">

    <script type="text/javascript" src="../../js/anmelden.js"></script>


</head>
?>
<body>

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


    <form>
        <div class="links col-xs-3"></div>


        <div class="form-group col-xs-6">

            <div class="innenlinks col-xs-3"></div>

            <div class="innenmitte col-xs-6">

                <h3 class="h3login">Login</h3>
                <br>

                <label for="exampleInputEmail1">Email-Addresse</label>
                <br>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">

                <br>

                <label for="exampleInputPassword1">Passwort</label>
                <br>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Passwort">

                <br>
                <div class="pwforgot">
                    Passwort
                    <a href="/PW_forget/PWforget.html" target="_self">
                        vergessen?
                    </a>

                    <br><br>

                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Anmelden</button>

                <br>

                <div>

                    <h4 class="regtext">Du bimst 1 noch kein Account?
                        <br>
                        Dann <a href="../Registrieren/Registrieren.html" class="register">
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="myModalLabel">Neu hier? Registriere dich jetzt!</h3>
            </div>
            <div class="modal-body">

                <form class="form-signin regist">
                    <h4 class="form-signin-heading"></h4>
                    <label for="inputname" class="sr-only"></label>
                    <input type="text" id="inputname" class="form-control" placeholder="Nachname" required autofocus>

                    <br><br>

                    <label for="inputvname" class="sr-only"></label>
                    <input type="text" id="inputvname" class="form-control" placeholder="Vorname" required autofocus>

                    <br><br>

                    <label for="inputPassword" class="sr-only"></label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Passwort" required>

                    <br><br>

                    <label for="inputWHPassword" class="sr-only"></label>
                    <input type="password" id="inputWHPassword" class="form-control" placeholder="Passwort wiederholen"
                           required autofocus>

                    <br><br>

                    <label for="inputEmail" class="sr-only"></label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>

                    <br><br>

                    Geburtsdatum
                    <label for="inputdatum" class="sr-only"></label>
                    <input type="date" id="inputdatum" class="form-control" placeholder="Geburtsdatum" required
                           autofocus>

                    <br><br>

                    Beziehungsstatus
                    <br>
                    <input type="radio" id="single" name="beziehungsstatus">
                    <label for="single" class="beziehungsstatus">Single</label>
                    <br>
                    <input type="radio" id="vergeben" name="beziehungsstatus">
                    <label for="vergeben" class="beziehungsstatus">Vergeben</label>
                    <br>
                    <input type="radio" id="cursed" name="beziehungsstatus">
                    <label for="cursed" class="beziehungsstatus">Cursed or some shit</label>

                    <br><br>

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


</body>
</html>
