<?php

class FileAgent {

    private static $_fileContents;

    static function readFile($fileName) {

        try{

            $fileHandle = fopen($fileName,'r');

            self::$_fileContents = fread($fileHandle, filesize($fileName));

            //Check if the file handle was opend and ther is content in the file
            if(empty(self::$_fileContents) || !$fileHandle) {
                throw new Exception ("There is a problem opening the file: ".$fileName);
            }

        } catch(Exception $ex) {
            $ex->getMessage();
        }
    }



}


?>