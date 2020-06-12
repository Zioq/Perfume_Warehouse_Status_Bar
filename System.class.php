<?php


require_once("inc/config.inc.php");

require_once("inc/Perfume.class.php");
require_once("inc/Burberry.class.php");
require_once("inc/Bvlgari.class.php");
require_once("inc/Diptyque.class.php");
require_once("inc/Jomalone.class.php");

require_once("inc/Menufacture.class.php");
require_once("inc/FileAgent.class.php");
require_once("inc/ItemParse.class.php");
require_once("inc/Page.class.php");

FileAgent::readFile(PERFUME_FILE);
$fileContents = FileAgent::getFileContents();

//var_dump($fileContents);
ItemParse::parsePerfumeData($fileContents);
ItemParse::PerfumeArr();
var_dump(ItemParse::getBurberryItems());

// Get the array data
$jomalonePerfumes = ItemParse::getJomaloneItems();
$bvlgariPerfumes = ItemParse::getBvlgariItems();
$diptyquePerfumes = ItemParse::getDiptyqueItems();
$burberryPerfumes = ItemParse::getBurberryItems();

//
Menufature::getPerfumes($jomalonePerfumes,$bvlgariPerfumes,$diptyquePerfumes,$burberryPerfumes);

//Menufature::test();


$p= Menufature::genRandomPerfume();
var_dump($p);

?>