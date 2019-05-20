<?php

require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Create a simple "default" Doctrine ORM configuration for Annotations
echo __DIR__."\src";
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__.'/src'), $isDevMode, null, null, false);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$conn = array(
	'url' => 'mysql://root:root@localhost:3306/esim',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

$productRepository = $entityManager->getRepository('Usuario');
$products = $productRepository->findAll();

echo "Antes de imprimir";
foreach ($products as $product) {
	echo sprintf("-$$$$$$$$$$$$%s\n", $product->getEstadoUsuario()->getDescripcion());
}