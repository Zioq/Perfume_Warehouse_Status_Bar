<?php

class Menufature {

    // Menufacture the perfumes 
    // Each array is a menufacture conveyor system belt.

    private static $_jomaloneItem = array();
    private static $_diqtyqueItem = array();
    private static $_bvlgariItem = array();
    private static $_burberryItem = array();


    public static function getPerfumes($jomalonePerfumes,$bvlgariPerfumes,$diptyquePerfumes,$burberryPerfumes) {
        
       
        foreach($jomalonePerfumes as $jp) {
            self::$_jomaloneItem[] =$jp;
            
        }
        //var_dump(self::$_jomaloneItem);
        
        //var_dump($bvlgariPerfumes);
        foreach($bvlgariPerfumes as $bgp){
            self::$_bvlgariItem[] =$bgp;
        }
        //var_dump(self::$_bvlgariItem);
        
        foreach($diptyquePerfumes as $dp) {
            self::$_diqtyqueItem[] =$dp;
        }

        foreach($burberryPerfumes as $bbp) {
            self::$_burberryItem[] =$bbp;
        }

        
       
    }
    public static function genRandomPerfume(): Perfume {
        
        //To generate random perfume child class
        $perfumeType = rand(0,3);

        switch($perfumeType) {
            //Jo Malone
            case 0:
                $p = new Jomalone();
                $p->setName(self::$_jomaloneItem[rand(0,count(self::$_jomaloneItem)-1)]);
            break;

            case 1: 
                $p = new Diptyque();
                $p->setName(self::$_diqtyqueItem[rand(0,count(self::$_diqtyqueItem)-1)]);
            break;

            case 2:
                $p = new Bvlgari();
                $p->setName(self::$_bvlgariItem[rand(0,count(self::$_bvlgariItem)-1)]);
            break;

            case 3:
                $p = new Burberry();
                $p->setName(self::$_burberryItem[rand(0,count(self::$_burberryItem)-1)]);
            break;
        }

        $p->setVolume(rand(0,50));

        return $p;

    }


}







?>