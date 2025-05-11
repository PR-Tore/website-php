<?php

// Globale CSS Konfiguration

    header('Content-type: text/css');

// Farben
    $body_background_color = "#ecf1f7"; // Hintergrundfarbe der Website Global
    $font_color = "#181818";            // Schriftfarbe für die globale Verwendung
    $font_color_light = "#c9c9c9";      // Leichtes grau für ausegraute Elemente
    $namelogo = "Montserrat";           // Schriftart Schriftzu/Logo
    $namelogoweight = "700";            // Dicke Schriftzu/Logo 300,400,700

    $basic_color = "#ffffff";           // Weiß für die globnale Verwendung
    $lightgrey = "#f6faff";             // Lichtgraue Hintergundfarbe von Sections
    $lightblue = "#333333";             // Hauptfarbe
    $darkblue  = "#23364b";             // Zweitfarbe/ Kontrastfarbe
    $pulsar = "#40c4ff";                // Ergänzende Farbe
    $placeholder = "#8c99ac";           // Formular Placeholder Farbe
    $footer_link_color = "#ffffff";     // Linkfarbe Footer
    $footer_link_color_hover = "#F2A057";     // Linkfarbe Foote
    $footer_bg_color = "#101010";       // Footer Hintergrundfarbe
    $copytext_color = "#666666";               // Copyright Text Color

// Animation
    $animate_bg_color = "linear-gradient(60deg, #4ECDC4, #4ECDC4, #4ECDC4)";     // Animierte Farbhintergründe
    $animate_bg_color_two = "linear-gradient(60deg, #1C202D, #25475E, #1C202D)";     // Animierte Farbhintergründe

// Schriftart
    $main_font = "Open Sans";              // Hauptschriftart

// Länge und Breite
    $section_width = "1640px";
    $menu_area_width = "1680px";

    $section_padding = "";
    $section_margin = "";


//Variable in CSS Regel einbinden Beispiel: = $body_background_color
?>

/* CSS

R.J.I.
Design, tech. Infrastruktur und Website Architektur: R.Infantino

*/


        <?php include('./reset_ri.css')?>
        <?php include('./style_ri.css')?>
        <?php include('./mobile.css')?>
