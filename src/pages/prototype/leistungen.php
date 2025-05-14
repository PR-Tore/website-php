<?php include('./config.php');
      $pageTitle        =    $meta_service ["Title"];
      $pageDescription  =    $meta_service ["Description"];
      $pageKeyword      =    $meta_service ["Keyword"];
      $robots           =    $meta_service ["Robots"];
?>
<!--Header & Head Infos-->
<?php include('src/components/structure/header.php') ?>

<section class="titlearea">
  <article>
        <h1>Service & Leistungen</h1>


        <h2>Beratung</h2>
        <p>Ob Planung, Neubau oder Renovierung: Wir bieten Ihnen eine qualifizierte Beratung rund um das Thema Tore & Türen. Gerne besuchen wir Sie vor Ort in der Firma, im eigenen Heim oder auf der Baustelle.</p>
        <a href="kontakt" title="Unverbindliche Beratung anfragen" class="orangebutton">Unverbindlichen Termin vereinbaren</a>



        <h2>Vertrieb von Toren & Türen</h2>
        <p>Wir vertreiben Produkte rund um das Thema Tore & Türen vom Hersteller Hörmann, z.B. Industrie- und Garagentore, Hauseingangs- und Nebentüren, Brandschutztüren und Multifunktionstüren. Auch beim Thema Antriebs- und Verladetechnik sind wir der richtige Ansprechpartner. Bei uns bekommen Sie zeitnah ihr individuelles, kostenloses Angebot.</p>
        <p><b>Sehen Sie sich eine kleine Auswahl unserer Produkte an:</b></p>
        <a href="industrie-tore" title="Industrietor Informationen" class="orangebutton">Gewerbe-/ Industrietore</a>
        <a href="gewerbe-tueren" title="Gewerbetür Informationen" class="orangebutton">Gewerbe-/ Industrietüren</a>
        <a href="garagentore" title="Garagentor Informationen" class="orangebutton">Tore fürs Eigenheim</a>
        <a href="private-tueren" title="Haustüren Informationen" class="orangebutton">Türen fürs Eigenheim</a>


        <h2>Montage & Demontage von Toren & Türen</h2>
        <p>Qualität steht bei uns an erster Stelle. Deshalb wird die Montage fachmännisch und mit höchster Genauigkeit durchgeführt.</p>
        <p>Das Aufmaß vor Ort erledigen wir schnell und präzise mit modernstem Equipment, um Ihnen das optimale Produkt anbieten zu können.</p>
        <p>Für die Montage bieten wir Festpreise, sodass die Kosten kalkulierbar bleiben. Wir übernehmen ebenfalls die Demontage bei Renovierungen.</p>
        <a href="kontakt" title="Montage anfragen" class="orangebutton">kostenlosen Termin vereinbaren</a>

        <h2>Wartung & Service</h2>
        <p>Durch regelmäßige Schulungen und Zertifizierungen kennen wir die aktuellsten Standards und Anforderungen der Toren und Türen und wissen genau, wie diese gewartet werden müssen.</p>
        <a href="kontakt" title="Wartung anfragen" class="orangebutton">Mehr Informationen einholen</a>
  </article>
</section>

<!--Lead Formular-->
<?php include('./src/components/lead_formular.php') ?>
<!-- Footer -->
<?php include('src/components/structure/footer.php') ?>
