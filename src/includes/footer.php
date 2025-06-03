<footer>
    <div class="section-inner">
        <nav class="firstcolumn floatleft">
            <ul>
                <li><a href="" title="Zur Startseite">Startseite</a></li>
                <li><a href="/ueberuns" title="PR Tore & Türen GmBH">Das Unternehmen</a></li>
                <!--TODO: Unterseite Ratgeber erstellen-->
                <!--<li><a href="/ratgeber" title="ratgeber">Ratgeber</a></li>-->
                <br><br>
                <li class="footer_headline">Leistung</li>
                <!--    <li><a href="industrie_gewerbe_oeffentliche_hand" title="Industrie, Gewerbe, öffentliche Hand">Industrie, Gewerbe, öffentliche Hand</a></li>
                    <li><a href="private_bauherren" title="Private Bauherren">Private Bauherren</a></li>
                    <li><a href="planer_architekten" title="Planer & Architekten">Planer & Architekten</a></li> -->
                <li><a href="/service_und_leistung" title="Service & Leistung">Service & Leistung</a></li>
                <li><a href="/referenzen" title="Tore und Türen Referenzen">Referenzen</a></li>
                <li><a href="/team" title="PR Tore & Türen Team">Das Team</a></li>
            </ul>
        </nav>
        <nav class="centercolumn floatleft">
            <ul class="kontaktdaten">
                <li><span><strong>Tel.: </strong></span><a href="tel:052412330900" title="Telefonnummer"> 05241 / 233
                        090 0</a></li>
                <li><span><strong>E-Mail:</strong></span> <a href="mailto:info@pr-tore.de" title="E-Mail Adresse">
                        info@pr-tore.de</a></li>
            </ul>
            <ul>
                <li><a href="/kontakt" title="PR Tore & Türen GmbH Kontakt">Kontakt</a></li>
                <li><a href="/impressum" title="Impressum">Impressum</a></li>
                <li><a href="/datenschutz" title="Datenschutz">Datenschutz</a></li>
            </ul>
        </nav>
        <div class="lastcolumn floatright">
            <ul>
                <li><img class="footer_logo" src="/assets/img/pr-tore-logo.svg" alt="PR-Tore & Türen GmbH "
                         width="180"/></li>
            </ul>
        </div>
    </div>

</footer>

<div class="phonecall">
    <a href="kontakt#formular" title="E Mail verschicken"><img class="mailicon" src="/assets/img/mail.svg" width="80"
                                                               alt="Mailbutton"></a>
    <a href="tel:052412330900" title="PR anrufen"><img class="phoneicon" src="/assets/img/phonecall.svg" width="80"
                                                       alt="Anruf Button"></a>
</div>

<div class="handwritten">
    <div class="section-inner">
        <!-- <img style=""src="./assets/img/handwritten_slogan.svg" alt="" width="220"> -->
        <p class="copytext">© <?php echo date("Y"); ?> PR - Tore & Türen GmbH - Ihr Spezialist für Tore & Türen</p>
    </div>
</div>
<script src="../../js/create.js"></script>
<script src="../../js/validatr.min.js"></script>
<script>
    $(document).ready(function () {
        $.cookieBar({
            message: 'Wir verwenden Cookies sowie Online-Tracking-Technologien, um Ihnen den bestmöglichen Service zu gewährleisten. Mit der weiteren Nutzung der Seite stimmen Sie der Nutzung dieser Technologien zu. <a href="datenschutz">Mehr Infos.</a>',
            acceptText: 'OK'
        });
    });

    function menuDropdown(node) {
        var count = 0;
        var cbs = document.getElementsByClassName("submenuCheck");
        for (var i = 0; i < cbs.length; i++) {
            if (cbs[i].checked && cbs[i].id != node.id) {
                cbs[i].checked = false;
                count++;
            }
        }
    }

    function paintHeader() {
        var ch = document.getElementById("show-menu");
        var h = document.getElementsByTagName("header");
        if (ch.checked) {
            h[0].style.backgroundColor = "#181818";
        } else {
            h[0].style.background = "none";
        }
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="/js/jquery.slicknav.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#menu').slicknav();
    });
</script>
<script src="/js/lightbox.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>
</html>
