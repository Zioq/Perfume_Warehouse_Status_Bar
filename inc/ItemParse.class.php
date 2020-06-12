<?php


class ItemParse {


    // Array for all perfume data
    public static $_perfumesData = array();

    // Array for save each of perfume of brand
    public static $_jomalone = array();
    public static $_bvlgari = array();
    public static $_diptique = array();
    public static $_burberry = array();

    // THis function return a flat array of object and put them to perfumeItem
    static function parsePerfumeData($fileContents) {

        //Lines
        $lines = explode("\n", $fileContents);

        // Work in the lines
        for ($x=0; $x<count($lines); $x++) {

            try {
                //pull the columns
                $cols = explode(",",$lines[$x]);
                    
                for($c=0; $c<count($cols); $c++) {
                    self::$_perfumesData[$x][$c] = $cols[$c];
                    
                }
            
            } catch(Exception $ex) {
                $ex->getMasseage();
            }
        }
        //var_dump(self::$_perfumesData);
    }

    static function PerfumeArr() {
        
        foreach(self::$_perfumesData as $perfume){
            foreach($perfume as $item) {
               
                if(preg_match("/Jo Malone/", $item)) {
                    self::$_jomalone[] =$item;
                }
                else if(preg_match("/Bvlgari/", $item)) {
                    self::$_bvlgari[] =$item;
                }
                else if(preg_match("/Burberry/", $item)) {
                    self::$_burberry[] =$item;
                }
                else {
                    self::$_diptique[] =$item;
                }
            }
        } 

    }
    
    
    public static function getJomaloneItems() {
        return self::$_jomalone;
    }
    public static function getBvlgariItems() {
        return self::$_bvlgari;
    }
    public static function getDiptyqueItems() {
        return self::$_diptique;
    }
    public static function getBurberryItems() {
        return self::$_burberry;
    }

}

?>