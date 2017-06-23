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
                <div class="content">Startseite
                    <a href="Startsite.html" target="_self"></a>
                </div>
                <div class="content">Wohnen</div>
                <div class="content">Nachhilfe</div>
                <div class="content">Veranstaltungen</div>
                <div class="content">Auslandssemester</div>
            </div>
        </div>
    </div>
</div>

<br><br>

<div class="row">
    <div class="picture first" >
        <div class="bildschrift">
            <h2>Wohnen</h2>
        </div>
        <a href="Wohnen.php"></a>
    </div>
    <div class="picture second">
        <div class="bildschrift">
            <h2>Nachhilfe</h2>
            <a href="http://www.fh-kufstein.ac.at/"></a>
        </div>
    </div>
    <div class="picture third" >
        <div class="bildschrift">
            <h2>Veranstaltungen</h2>
        </div>
    </div>
    <div class="picture fourth">
        <div class="bildschrift">
            <h2>Auslandssemester</h2>
        </div>
    </div>

</div>
<?php echo $this->footer; ?>