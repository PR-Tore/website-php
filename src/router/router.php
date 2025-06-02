<?php
// src/Router/Router.php
require_once __DIR__ . '/../config/config.php';

class Router
{
    protected $routes = [];

    public function __construct()
    {
        $this->routes = [
            '' => 'home.php',
            'kontakt' => 'footer/kontakt.php',
            'team' => 'team/team.php',
            'karriere' => 'karriere.php',
            // Weitere Seiten
        ];
    }

    public function dispatch(string $route)
    {
        $file = $this->routes[$route] ?? '404.php';
        $path = __DIR__ . '/../pages/' . $file;

        error_log("Attempting to route to: $path");


        if (file_exists($path)) {
            switch ($route) {
                case '':
                    $this->setMetaGlobals(Config::$default_meta);
                    break;
                case 'kontakt':
                    $this->setMetaGlobals(Config::$meta_kontakt);
                    break;
                default:
                    break;

            }
            include __DIR__ . '/../includes/head.php';
            include __DIR__ . '/../includes/header.php';
            include $path;
        } else {
            $this->setMetaGlobals(Config::$error_404);

            include __DIR__ . '/../includes/head.php';
            include __DIR__ . '/../includes/header.php';
            include __DIR__ . '/../pages/404.php';
        }

        include __DIR__ . '/../includes/footer.php';
    }

    private function setMetaGlobals(array $configArray)
    {
        $GLOBALS['pageTitle'] = $configArray["Title"] ?? Config::$default_meta['Title'];
        $GLOBALS['pageDescription'] = $configArray["Description"] ?? Config::$default_meta['Description'];
        $GLOBALS['pageKeyword'] = $configArray["Keyword"] ?? Config::$default_meta['Keyword'];
        $GLOBALS['robots'] = $configArray["Robots"] ?? Config::$default_meta['Robots'];
        $GLOBALS['canonical'] = $configArray["Canonical"] ?? Config::$default_meta['Canonical'];
    }
}
