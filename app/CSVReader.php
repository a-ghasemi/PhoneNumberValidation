<?php
namespace App;

class CSVReader{
    private $filePath;
    private $fileHandle;
    private $currentLine;

    public function __construct($filename){
        $this->filePath = $filename;
    }

    private function open(){
        $this->fileHandle = fopen($this->filePath, "r");

        if($this->fileHandle === false){
            throw new Exception('Could not get list file handle');
        }
    }
        
    public function read(){
        $this->open();

        $this->currentLine = 0;
        while(!feof($this->fileHandle)) {
            $this->currentLine ++;
            $line = fgets($this->fileHandle);
            list($country, $number) = $this->separate($line);
            yield $country=>$number;
       }
       
    }

    private function separate($item){
        $ret = explode(",",$item);
        if(count($ret) != 2) throw new Exception("Line #{$this->currentLine} does not follow the valid format [country,number]");
    }
        
    private function __destruct(){
        fclose($this->fileHandle);
    }
        


}