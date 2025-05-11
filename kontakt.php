<?php include('./config.php');
      $pageTitle        =    $meta_kontakt ["Title"];
      $pageDescription  =    $meta_kontakt ["Description"];
      $pageKeyword      =    $meta_kontakt ["Keyword"];
      $robots           =    $meta_kontakt ["Robots"];
      $canonical        =    $meta_kontakt ["Canonical"];
?>
<!--Header & Head Infos-->
<?php include('./structure/header.php')?>


<section class="titlearea">
  <article>
    <h1>Kontakt</h1>

     <div class="overflow">
        <div class="halfway floatleft">
            <h2>Telefonische Beratung</h2>
            <p>Sie erreichen uns zwischen 08.00 - 17.00 Uhr Werktags und Samstag von 09.00 - 14.00 Uhr unter folgenden Kontaktdaten:</p>
            <p>Tel.: <a href="tel:052412330900">05241 / 233 090 0</a> <br>
            E-Mail: <a href="mailto:info@pr-tore.de">info@pr-tore.de</a></p>
        </div>

        <div class="halfway floatright">
            <h2>Unverbindliche Anfrage</h2>
            <p>Nutzen Sie unser Kontaktformular für eine kostenfreie Beratung oder ein unverbindliches, auf Ihre Bedürfnisse angepasstes Angebot.</p>
        </div>
    </div>
  </article>
</section>

<!--Lead Formular-->
<?php include('./element/lead_formular.php')?>

<!-- Footer -->
<?php include('./structure/footer.php')?>
