<?php


abstract class Perfume {

    private $_name = "";
    private $_volume = 0;
    private $_type = "Perfume";

    public function setName(string $name){
        $this->_name = $name;
    }

    public function setVolume(int $volume){
        $this->_volume = $volume;
    }

    abstract function getType(): string;

}


?>