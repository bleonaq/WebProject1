<?php

    class Trip{
       
        private $tripID;
        private $place;
        private $start;
        private $end;
        private $description;

            public function __construct($tripID,$place,$start,$end,$description)
            {
                $this->tripID=$tripID;
                $this->place=$place;
                $this->start=$start;
                $this->end=$end;
                $this->description=$description;
                
            }

            public function gettripID(){
                return $this->tripID;
            }

            public function getplace(){
                return $this->place;
            }

            public function getstart(){
                return $this->start;
            }

            public function getend(){
                return $this->end;
            }

            public function getdescription(){
                return $this->description;
            }

            
    }