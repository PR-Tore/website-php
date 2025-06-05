<section id="formular">

    <div class="text-center">
        <h2>Kontakt aufnehmen</h2>
        <h3>Sie sind Gewerbetreibender, die öffentliche Hand oder privater Bauherr.<br> Wir begleiten Ihr Projekt!</h3>
    </div>

    <div class="section-inner">
        <script>
            jQuery(function ($) {
                $('form').validatr();
            });
        </script>
        <div>
            <form id="masterform" class="border overflow" method=post data-parsley-validate action="senden.php">
                <div class="floatleft halfway">
                    <input class="daisy-input w-full" type="text" name="name" placeholder="Vorname, Nachname*" required><br>

                    <input class="daisy-input" style="width: 75%;" type="text" name="street" placeholder="Straße">
                    <input class="daisy-input" style="width: 20%; float: right;" type="number" id="hnumber"
                           name="hnumber"
                           placeholder="Nr."><br>

                    <input class="daisy-input" style="width: 30%;" type="number" id="plz" name="plz"
                           placeholder="Postleitzahl">
                    <input class="daisy-input" type="text" name="betreff" placeholder="Betreff*"
                           style="display:none; visibility:hidden">
                    <input class="daisy-input" style="width: 60%; float: right;" type="text" name="ort"
                           placeholder="Ort"><br>
                    <input class="daisy-input w-full" type="number" id="number" name="phone"
                           placeholder="Telefonnummer*"
                           required><br>

                    <input class="daisy-input" style="display:none;width:60px;text-transform:uppercase;" type="text"
                           name="zweieins"
                           placeholder="2.1">
                    <input class="daisy-input" style="display:none;width:60px;text-transform:uppercase;" type="text"
                           name="zweizwei"
                           placeholder="2.2">
                </div>

                <div class="floatright halfway">
                    <input class="daisy-input" type="email" id="email" name="mail" placeholder="E-Mail*" required><br>
                    <input class="daisy-input" type="text" name="objekt" placeholder="Firma, Einrichtung"><br>

                    <textarea class="daisy-textarea" name="nachricht" placeholder="Nachricht*..."
                              required></textarea><br>
                    <div class="tooltip">
                        <input type="checkbox" id="einwilligung" name="einwilligung" required><span
                                class="checkmark"></span>
                        <label for="einwilligung" style="font-size: 16px;" class="checkcontainer">*Einwilligung zur <a
                                    href="/datenschutz#datkon" style="text-decoration:underline">Datenübermittlung
                            </a></label>
                        <span class="tooltiptext" style="line-height:26px; font-size: 1em;">Ich stimme zu, dass meine Angaben aus dem Kontaktformular zur Beantwortung meiner Anfrage erhoben und verarbeitet werden. Die Daten werden nach abgeschlossener Bearbeitung Ihrer Anfrage gelöscht. Hinweis: Sie können Ihre Einwilligung jederzeit für die Zukunft per E-Mail an info@pr-tore.de widerrufen. Detaillierte Informationen zum Umgang mit Nutzerdaten finden Sie in unserer Datenschutzerklärung.</span>
                    </div>
                    <input class="button bg-brand hover:bg-brand-active text-white" type="submit"
                           value="Abschicken">

                </div>
            </form>
        </div>

    </div>
</section>
