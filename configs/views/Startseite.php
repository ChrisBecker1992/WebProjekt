<?php echo $this->header; ?>

<br><br>
<br><br>


<div class="col-xs-9 alert-info einleitung">    <!-- div for responsive -->
    <h2>Servus Studies!</h2>
    <h4>Willkommen bei <strong>Studenten-Gathering</strong>, dem Studentenforum der FH-Kufstein Tirol.</h4>
    <p>Hier kannst du dich über die Wohnsituation informieren, Nachhilfe suchen oder geben,
        Veranstaltungen ankündigen und Auslandserfahrungen teilen.</p>
</div>
<div class="col-xs-3"></div>    <!-- div for responsive -->

<br><br>
<br><br>

    <!-- Pictures with links to the 4 categories -->
<div class="row">

    <div class="picture first" >
        <div class="bildschrift">
            <h2>Wohnen</h2>
            <a href="Wohnen"></a>
        </div>
    </div>
    <div class="picture second">
        <div class="bildschrift">
            <h2>Nachhilfe</h2>
            <a href="Nachhilfe"></a>
        </div>
    </div>
    <div class="picture third">
        <div class="bildschrift">
            <h2>Veranstaltungen</h2>
            <a href="Veranstaltungen"></a>
        </div>
    </div>
    <div class="picture fourth">
        <div class="bildschrift">
            <h2>Auslandssemester</h2>
            <a href="Auslandssemester"></a>
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