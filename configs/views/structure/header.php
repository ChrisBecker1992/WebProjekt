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

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>



    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
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




</head>
<body>