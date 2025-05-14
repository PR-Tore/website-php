<!DOCTYPE html>

<html lang="de-DE">
<head>
    <script>
      var gaProperty = '';
      var disableStr = 'ga-disable-' + gaProperty;
      if (document.cookie.indexOf(disableStr + '=true') > -1) {
      window[disableStr] = true;
      }
      function gaOptout() {
      document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
      window[disableStr] = true;
      document.cookie = "cb-enabled=disabled; path=/;";
      location.reload();
      }
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W8KTP2J');</script>
    <!-- End Google Tag Manager -->

    <title><?php if (isset($pageTitle)) { echo $pageTitle; } else { echo $default_meta['Title']; } ?></title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=device-width, user-scalable=no">
<meta name="revisit-after" content="10 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="author" content="PR-Tore & Türen GmbH">
<meta name="copyright" content="PR-Tore & Türen GmbH">
<meta name="language" content="de">
<meta name="keywords" content="<?php if (isset($pageKeyword)) { echo $pageKeyword; } else { echo $default_meta['Keyword']; } ?>">
<meta name="description" content="<?php if (isset($pageDescription)) { echo $pageDescription; } else { echo $default_meta['Description']; } ?>">
<meta name="robots" content="<?php if (isset($robots)) { echo $robots; } else { echo $default_meta['Robots']; } ?>">
<link rel="canonical" href="https://pr-tore.de<?php echo parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);?>">

<link rel="stylesheet" href="./src/styles/style_ri.css.php">

<link rel="stylesheet" href="./src/styles/styles.css">

<link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
<link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">

<!-- Navigation Control -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>

<link rel="apple-touch-icon" sizes="57x57" href="./assets/img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="./assets/img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="./assets/img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="./assets/img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="./assets/img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="./assets/img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="./assets/img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="./assets/img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="./assets/img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="./assets/img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- HTML5 --->
<script src="js/create.js" type="text/javascript"></script>

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PXQX7RX"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->