<?php include('./config.php');
      $pageTitle        =    $meta_ratgeber["Title"];
      $pageDescription  =    $meta_ratgeber ["Description"];
      $pageKeyword      =    $meta_ratgeber ["Keyword"];
      $robots           =    $meta_ratgeber ["Robots"];
      $canonical        =    $meta_ratgeber ["Canonical"];
?>

<!--Header & Head Infos-->
<?php include('./src/components/structure/header.php') ?>


<section class="titlearea">
    <article>
            <h1>Ratgeber</h1>
    </article>
</section>

<!-- Footer -->
<?php include('./src/components/structure/footer.php') ?>
