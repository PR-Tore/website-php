<?php include('./config.php');
      $pageTitle        =    $error_404 ["Title"];
      //$pageDescription  =    $error_404 ["Description"];
      //$pageKeyword      =    $error_404 ["Keyword"];
      $robots           =    $error_404 ["Robots"];
      $canonical        =    $error_404 ["Canonical"];
?>

<!--Header & Head Infos-->
<?php include('./structure/header.php')?>


<section class="titlearea">
    <article style="text-align: center;">
            <span style="font-size: 165px;"><strong>404</strong></span>
            <p>Leider existiert die Seite nicht oder nicht mehr.<br>Nutzen Sie die Navigation, um den passenden Inhalt ausfindig zu machen.</p>
    </article>
</section>

<!-- Footer -->
<?php include('./structure/footer.php')?>
