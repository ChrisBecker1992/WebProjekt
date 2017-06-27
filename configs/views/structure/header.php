<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Studenten Gathering</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="stylesheets/toastr.min.css">

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>



    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/toastr.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bevan|Droid+Serif" rel="stylesheet">
    <?php if($this->current == 'index'): ?>
        <link href="stylesheets/start.css" rel="stylesheet">
        <script type="text/javascript" src="js/start.js"></script>
    <?php endif; ?>
    <?php if($this->current == 'login'): ?>
        <link href="stylesheets/anmelden.css" rel="stylesheet">
        <script type="text/javascript" src="js/anmelden.js"></script>
        <script type="text/javascript" src="js/toastr.min.js"></script>
    <?php endif; ?>
    <?php if($this->current == 'wohnen'): ?>
        <link href="stylesheets/beitragseiten.css" rel="stylesheet">
        <script type="text/javascript" src="js/beitragseiten.js"></script>
    <?php endif; ?>
    <?php if($this->current == 'nachhilfe'): ?>
        <link href="stylesheets/beitragseiten.css" rel="stylesheet">
        <script type="text/javascript" src="js/beitragseiten.js"></script>
    <?php endif; ?>
    <?php if($this->current == 'veranstaltungen'): ?>
        <link href="stylesheets/beitragseiten.css" rel="stylesheet">
        <script type="text/javascript" src="js/beitragseiten.js"></script>
    <?php endif; ?>
    <?php if($this->current == 'auslandssemester'): ?>
        <link href="stylesheets/beitragseiten.css" rel="stylesheet">
        <script type="text/javascript" src="js/beitragseiten.js"></script>
    <?php endif; ?>
    <?php if ($this->current == 'logout'): ?>
        <link href="stylesheets/start.css" rel="stylesheet">
    <?php endif; ?>




</head>
<body>
<?php if($this->current != 'login'): ?>
<header>
    <div class="header">
        <h1 class="h1header">Studenten-Gathering</h1>
        <h4 class="h4header">FH Kufstein</h4>
    </div>
</header>

<?php endif; ?>

<?php if(LOGGED_IN == true): ?>

<!-- Dropdown-Menü -->

<div class="menu .col-xs-12">

        <div class="dropdown .col-xs-1">
            <div class="container" id="menubutton" onclick="myFunction(this, 'dropdowncontent')">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <?php if($this->current == 'index'): ?>
            <div class="dropdown-content" id="dropdowncontent">
                <div class="content"><span class="aktuelleseite">Startseite</span></div>
                <div class="content"><a href='Wohnen'>Wohnen</a></div>
                <div class="content"><a href='Nachhilfe'>Nachhilfe</a></div>
                <div class="content"><a href='Veranstaltungen'>Veranstaltungen</a></div>
                <div class="content"><a href='Auslandssemester'>Auslandssemester</a></div>
            </div>
            <?php endif; ?>

            <?php if($this->current == 'wohnen'): ?>
            <div class="dropdown-content">
                <div class="content"><a href='Startseite'>Startseite</a></div>
                <div class="content"><span class="aktuelleseite">Wohnen</span></div>
                <div class="content"><a href='Nachhilfe'>Nachhilfe</a></div>
                <div class="content"><a href='Veranstaltungen'>Veranstaltungen</a></div>
                <div class="content"><a href='Auslandssemester'>Auslandssemester</a></div>
            </div>
            <?php endif; ?>

            <?php if($this->current == 'nachhilfe'): ?>
            <div class="dropdown-content">
                <div class="content"><a href='Startseite'>Startseite</a></div>
                <div class="content"><a href='Wohnen'>Wohnen</a></div>
                <div class="content"><span class="aktuelleseite">Nachhilfe</span></div>
                <div class="content"><a href='Veranstaltungen'>Veranstaltungen</a></div>
                <div class="content"><a href='Auslandssemester'>Auslandssemester</a></div>
            </div>
            <?php endif; ?>

            <?php if($this->current == 'veranstaltungen'): ?>
            <div class="dropdown-content">
                <div class="content"><a href='Startseite'>Startseite</a></div>
                <div class="content"><a href='Wohnen'>Wohnen</a></div>
                <div class="content"><a href='Nachhilfe'>Nachhilfe</a></div>
                <div class="content"><span class="aktuelleseite">Veranstaltungen</span></div>
                <div class="content"><a href='Auslandssemester'>Auslandssemester</a></div>
            </div>
            <?php endif; ?>

            <?php if($this->current == 'auslandssemester'): ?>
            <div class="dropdown-content">
                <div class="content"><a href='Startseite'>Startseite</a></div>
                <div class="content"><a href='Wohnen'>Wohnen</a></div>
                <div class="content"><a href='Nachhilfe'>Nachhilfe</a></div>
                <div class="content"><a href='Veranstaltungen'>Veranstaltungen</a></div>
                <div class="content"><span class="aktuelleseite">Auslandssemester</span></div>
            </div>
            <?php endif; ?>


        </div>

        <div class="innen .col-xs-8"></div>
        <div class="collapse navbar-collapse .col-xs-3" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout">(Abmelden)</a></li>
            </ul>
            <p class="navbar-text navbar-right">Angemeldet als <strong class="username"><?php echo $this->username; ?></strong></p>
        </div>
</div>
<?php endif; ?>

