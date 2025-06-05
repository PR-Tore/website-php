<?php
require_once __DIR__ . '/../src/router/router.php';

// URI extrahieren
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');

error_log("Incoming route: \"$uri\"");


// Wenn Datei direkt existiert (z.B. /assets/style.css), gebe sie zurück
if ($uri != "" && file_exists(__DIR__ . '/' . $uri)) {
    error_log("File exists!");
    return false;
}

// Router starten
$router = new Router();

error_log("Activating router..");
$router->dispatch($uri);

