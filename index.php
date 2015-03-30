<?php
require_once './vendor/autoload.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('web');
$twig = new Twig_Environment($loader, array(
	'cache' => 'cache',
	'debug' => true,
));

$client = new \Github\Client();
$repositories = $client->api('user')->repositories('Der-Eddy');

switch (htmlspecialchars($_GET["site"])){
	case "":
	case "index":
		echo $twig->render('semantic-ui.html', array('title' => 'Index', "content" => "Diese Webseite dient nicht nur als Präsentation sondern auch als Sammelplatz meiner Projekte."));
		break;
    case "test":
         echo $twig->render('test.html', array('title' => 'Test', "content" => var_dump($repositories)));
         break;
	case "about":
		echo $twig->render("semantic-ui.html", array("title" => "about", "content" => "about"));
		break;	
	default:
		echo $twig->render("semantic-ui.html", array("title" => "404", "content" => "404\r\nnot found"));
		break;
}
?>