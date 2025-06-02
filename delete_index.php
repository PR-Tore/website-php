<?php include('./src/config/config.php');
//$pageTitle        =    $meta_startpage ["Title"];
//$pageDescription  =    $meta_startpage ["Description"];
//$pageKeyword      =    $meta_startpage ["Keyword"];
//$robots           =    $meta_startpage ["Robots"];
//$canonical        =    $meta_startpage ["Canonical"];
?>

<!-- Head -->
<?php include('./src/includes/head.php') ?>

<!--Header-->
<?php include('./src/includes/header.php') ?>

<!-- Intro-->
<?php include('./src/components/home-hero.section.php') ?>

<!--Main Content-->
<?php include('./src/components/main_content.php') ?>

<!-- TODO: Herausfinden, was das ist und ob man das braucht -->
<!--Aktuelle Beiträge include('./element/aktuelle_beitraege.php')?>-->


<!--Newsletter
<?php include('./src/components/newsletter.php') ?>-->


<!-- Footer -->
<?php include('./src/includes/footer.php') ?>
