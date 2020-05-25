<?php
namespace App;

class Kernel{
    private $listfile;
    private $logfile;

    function __construct($list,$log){
        $this->logfile = $log;
        $this->listfile = $list;
    }

    public function main(){
        $reader = new CSVReader($this->listfile);

        $checker = new Checker();
        $logger = new Logger($this->logfile);
        
        $list = $reader->read();
        foreach($list as $country => $item) {
          $checker->process($country, $item);
          $logger->write_log($checker->result());
        }
    }
}