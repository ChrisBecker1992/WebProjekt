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
                <div class="content"><span class="aktuelleseite">Startseite</span></div>
                <div class="content"><a href='Wohnen'>Wohnen</a></div>
                <div class="content"><a href='Nachhilfe'>Nachhilfe</a></div>
                <div class="content"><a href='Veranstaltungen'>Veranstaltungen</a></div>
                <div class="content"><a href='Auslandssemester'>Auslandssemester</a></div>
            </div>
        </div>
    </div>
</div>

<br><br>

<div class="row">
        <div class="picture first">
            <div class="bildschrift">
                <h2>Wohnen</h2>
            </div>
        </div>
        <div class="picture second">
            <div class="bildschrift">
                <h2>Nachhilfe</h2>
            </div>
        </div>
    <div class="picture third">
        <div class="bildschrift">
            <h2>Veranstaltungen</h2>
        </div>
    </div>
    <div class="picture fourth" href='Auslandssemester'>
        <div class="bildschrift">
            <h2>Auslandssemester</h2>
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