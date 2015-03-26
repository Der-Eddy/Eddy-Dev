# Eddy-Dev Website

Dies ist der Source Code von www.eddy-dev.net  
Erstellt mithilfe von Composer, Twig, Semantic-UI und php-github-api!

Nginx Konfiguration:
-------------

Beschränkt auf den wichtigsten Teil welcher direkt im `server` Block steht:

	rewrite ^/(.*)\.php$ /index.php?site=$1;


Installation:
-------------

Für das Projekt benutze ich den [PHP Composer](https://getcomposer.org/)

Dieser muss auf den Webspace gebracht werden (siehe Composer Webseite) - also die `composer.phar` runterladen
Anschließend wechselt man zur Konsole und geht in den Pfad in der mein Projekt und die `composer.phar` neben der `composer.json` liegt

Führt nun die folgenden Befehle aus:

    php composer.phar install
    php composer.phar self-update
    php composer.phar update