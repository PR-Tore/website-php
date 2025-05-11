<?php
                    $name   = $_REQUEST['name'];
                    $street  = $_REQUEST['street'];
                    $hnumber  = $_REQUEST['hnumber'];
                    $plz  = $_REQUEST['plz'];
                    $ort  = $_REQUEST['ort'];
                    $phone  = $_REQUEST['phone'];
                    $mail   = $_REQUEST['mail'];
                    $objekt  = $_REQUEST['objekt'];
                    $nachricht  = $_REQUEST['nachricht'];
                    $betreff    = $_REQUEST['betreff'];

                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: info@pr-tore.de' . "\r\n";
                    $headers .= 'Reply-To: '.$mail.'' . "\r\n";

                    $headersKunde = "MIME-Version: 1.0" . "\r\n";
                    $headersKunde .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headersKunde .= 'From: info@pr-tore.de' . "\r\n";

                    $empfaenger = "info@pr-tore.de";
                    $absender = $mail;

                    $betreffwebmaster = "Kontaktanfrage ($name)";
                    $koerperwebmaster = "
                    <html>
                    <head>
                    <title>Kontaktanfrage von (".$name.")</title>
                    </head>
                    <body>
                    <p>".$name." hat über über die Webseite PR-Tore.de folgende Kontaktanfrage getätigt:</p><br>
                    <p>Kontaktdaten:<br><br>
                    Vorname, Nachname: ".$name."<br>
                    Straße: ".$street." Hausnummer: ".$hnumber."<br>
                    Postleitzahl: ".$plz." Ort: ".$ort."<br>
                    E-Mail: ".$mail."<br>
                    Telefonnummer: ".$phone."<br>
                    Firma, Einrichtung: ".$objekt."<br>
                    Nachricht: ".$nachricht."<br></p>
                    </body>
                    </html>";

                    $betreffkunde = "Ihre unverbindliche Anfrage bei PR - Tore & Türen GmbH";
                    $koerperkunde = "
                        <html>
                        <head>
                        <title>Vielen Dank für Ihre Kontaktanfrage.</title>
                        </head>
                        <body>
                        <p>Guten Tag ".$name.",<br><br>
                        vielen Dank für Ihr Interesse an unseren Leistungen.</p>
                        <p>Wir haben Ihre Anfrage erhalten und werden uns schnellstmöglich mit Ihnen in Verbindung setzen.<br>Sie haben folgende Anfrage gestellt:</p><br>
                        <p>Kontaktdaten:<br><br>
                        Vorname, Nachname: ".$name."<br>
                        Straße: ".$street." Hausnummer: ".$hnumber."<br>
                        Postleitzahl: ".$plz." Ort: ".$ort."<br>
                        E-Mail: ".$mail."<br>
                        Telefonnummer: ".$phone."<br>
                        Firma, Einrichtung: ".$objekt."<br>
                        Nachricht:<br>".$nachricht."</p><br>
                        <p>Mit freundlichen Grüßen</p>
                        <p>PR - Tore & Türen GmbH</p>
                        </body>
                        </html>";


                    $abgesandt = "<section><br /><h1>Kontaktbest&auml;tigung</h1>
                    <p>Vielen Dank f&uuml;r Ihre Kontaktaufnahme. Wir werden uns in K&uuml;rze mit Ihnen in Verbindung setzen und weitere Details mit Ihnen besprechen. Wir wünschen Ihnen einen wunderschönen Tag und viele Grüße.<br><br></p></section>";

                    if($mail && !$betreff){
                        mail("$empfaenger",
                             "$betreffwebmaster",
                             "$koerperwebmaster\n",
                             $headers);
                        mail("$mail",
                             "$betreffkunde",
                             "$koerperkunde\n",
                             $headersKunde);
                    }
            ?>



<?php include('./structure/header.php')?>

<section>
    <div class="section-inner">

        <h1 style="padding: 20px;border-radius: 3px;background: #ecffc8; color:#75933e;">Nachricht versendet</h1>

        <?php echo $abgesandt; ?>
    </div>
</section>

<!-- Footer -->
<?php include('./structure/footer.php')?>
