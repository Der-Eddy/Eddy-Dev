<?php
require_once '../vendor/autoload.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array(
	'cache' => 'cache',
	'debug' => true,
));

echo $twig->render('semantic-ui.html', array('title' => 'test', 'navigation' => array(
	array("caption" => "Test1", "href" => "index.php"),
	array("caption" => "Test2", "href" => "index.php"),
	array("caption" => "Test3", "href" => "index.php")
	)));
?>
