<?php

class Menufature {

    // Menufacture the perfumes 
    // Each array is a menufacture conveyor system belt.

    private static $_jomaloneItem = array();
    private static $_diqtyqueItem = array();
    private static $_gvlgariItem = array();
    private static $_burberryItem = array();


    static function getPerfumes($jomalonePerfumes,$bvlgariPerfumes,$diptyquePerfumes,$burberryPerfumes) {
        
        foreach($jomalonePerfumes as $jp) {
            self::$_jomaloneItem[]=$jp;
        }

        foreach($bvlgariPerfumes as $bgp){
            self::$_gvlgariItem[] =$bgp;
        }
        
        foreach($diptyquePerfumes as $dp) {
            self::$_diqtyqueItem[] =$dp;
        }

        foreach($burberryPerfumes as $bbp) {
            self::$_burberryItem[] =$bbp;
        }
        
    }
    


    public static function genRandomPerfume(): Perfume {
        
        //To generate random perfume child class
        $perfumeType = rand(0,1);

        switch($perfumeType) {
            //Jo Malone
            case 0:
                $p = new Jomalone();
                $p->setName(self::$_jomaloneItem[rand(0,count(self::$_jomaloneItem)-1)]);
            break;
            case 1: 
                $p = new Jomalone();
                $p->setName(self::$_jomaloneItem[rand(0,count(self::$_jomaloneItem)-1)]);
            break;
        }

        $p->setVolume(rand(0,49));

        return $p;

    }


}







?>