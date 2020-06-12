<?php


require_once("inc/config.inc.php");

require_once("inc/Perfume.class.php");
require_once("inc/Burberry.class.php");
require_once("inc/Bvlgari.class.php");
require_once("inc/Diptyque.class.php");
require_once("inc/Jomalone.class.php");

require_once("inc/Menufacture.class.php");
require_once("inc/Warehouse.class.php");
require_once("inc/FileAgent.class.php");
require_once("inc/ItemParse.class.php");
require_once("inc/Page.class.php");

FileAgent::readFile(PERFUME_FILE);
$fileContents = FileAgent::getFileContents();


ItemParse::parsePerfumeData($fileContents);
ItemParse::PerfumeArr();

// Get the array data
$jomalonePerfumes = ItemParse::getJomaloneItems();
$bvlgariPerfumes = ItemParse::getBvlgariItems();
$diptyquePerfumes = ItemParse::getDiptyqueItems();
$burberryPerfumes = ItemParse::getBurberryItems();

Menufature::getPerfumes($jomalonePerfumes,$bvlgariPerfumes,$diptyquePerfumes,$burberryPerfumes);
//Declare the class

$perfumeMenufature = new Menufature();
$perfumeItems = array();
$perfumeWarehouse = new Warehouse();

Page::setTitle("Perfume Warehouse Status Bar");
Page::header();


for($c=0; $c<=rand(0,50); $c++) {
    $perfumeItems[] = $perfumeMenufature->genRandomPerfume();
}


foreach($perfumeItems as $perfumeItem) {
    
    $perfumeWarehouse->sortItem($perfumeItem);
    
}

Page::DisplayWarehouse($perfumeWarehouse->getStats());


Page::footer();
?>