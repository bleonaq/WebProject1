<?php

    include_once '../SuperClass/tripClass.php';
    include_once '../Logic/Mapper/tripMapper.php';

    if (isset($_POST['submitBtn'])) {
        $trip=new TripLogic($_POST);
        var_dump(trip);
        $trip->insertData();
    }

    class tripLogic{

        private $tripID;
        private $place;
        private $start;
        private $end;
        private $description;
        

            public function __construct($formData)
            {
                $this->tripID=$formData['tripID'];
                $this->place=$formData['place'];
                $this->start=$formData['start'];
                $this->end=$formData['end'];
                $this->description=$formData['description'];
              
            }

            public function insertData(){
                $trip=new trip($this->tripID,$this->place,$this->start,$this->end,$this->description);
                $mapper=new tripMapper();
                $mapper->insertTrip($trip);
                sleep(2);
                header("Location:../../HTMLfiles/trip.php?success=FormSent");
            }

    }