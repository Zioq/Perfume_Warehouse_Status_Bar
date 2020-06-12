<?php
// This class is sort the perfumes and put it in the right box

class Warehouse{

    //Declare properties with array
    public $jomaloneBox = array();
    public $diptyqueBox = array();
    public $bvlgaribox = array();
    public $burberrybox  = array();



    //perfume sort function 
    public function sortItem(Perfume $perfumeItem) {
        
        switch(get_class($perfumeItem)) {
            case "Jomalone":
                $this->addJomalone($perfumeItem);
            break;

            case "Diptyque":
                $this->addDiptyque($perfumeItem);
            break;

            case "Bvlgari":
                $this->addBvlgari($perfumeItem);
            break;

            case "Burberry":
                $this->addBurberry($perfumeItem);
            break;
            
            default:
            echo "We cannot figure out this type of item ".get_class($perfumeItem)."!.";
        } 

    

    }

    // Function to add Item to Box 
    private function addJomalone(Jomalone $perfumeItem) {
        try {
            if(count($this->jomaloneBox)<WAREHOUSE_CAPACITY) {
                $this->jomaloneBox[] = $perfumeItem;
            } else {
                throw new Exception("Jomalone Box is full.");
            }
            
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    private function addDiptyque(Diptyque $perfumeItem) {
        try {
            if(count($this->diptyqueBox)<WAREHOUSE_CAPACITY) {
                $this->diptyqueBox[] = $perfumeItem;
            } else {
                throw new Exception("Diptyque Box is full.");
            }
            
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    private function addBvlgari(Bvlgari $perfumeItem) {
        try {
            if(count($this->bvlgaribox)<WAREHOUSE_CAPACITY) {
                $this->bvlgaribox[] = $perfumeItem;
            } else {
                throw new Exception("Bvlgari Box is full.");
            }
            
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    private function addBurberry(Burberry $perfumeItem) {
        try {
            if(count($this->burberrybox)<WAREHOUSE_CAPACITY) {
                $this->burberrybox[] = $perfumeItem;
            } else {
                throw new Exception("Jomalone Box is full.");
            }
            
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    // Funtion to count of perfume items and save it new array 'stat'
    public function getStats(): array {
        $stats = array();
        $stats["Jomalone"] = count($this->jomaloneBox);
        $stats["Diptyque"] = count($this->diptyqueBox);
        $stats["Bvlgari"] = count($this->bvlgaribox);
        $stats["Burberry"] = count($this->burberrybox);

        return $stats;
    }




}



?>
