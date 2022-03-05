<?php

    include_once 'dbh.class.php';

    class TripMapper extends Dbh{

        private $query;
        private $conn;

            public function __construct()
            {
                $this->conn=$this->getConnection();
            }

            public function getTripById($tripID){
                $query="SELECT * FROM trip WHERE id=:tripID";
                $statement=$this->conn->prepare($query);
                $statement->bindParam(":id",$TripID);
                $statement->execute();
                return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            }

            public function getAllTrips(){
                $query="SELECT * FROM trip";
                $statement=$this->conn->prepare($query);
                $statement->execute();
                return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            }

            public function deleteTrip($tripID){
                $query="DELETE FROM tripforms WHERE id:=tripID";
                $statement=$this->conn->prepare($query);
                $statement->bindParam(":id",$tripID);
                $statement->execute();
            }

            public function insertTrip(\Trip $trip){

                $query="INSERT INTO trip(tripID,place,start,end,description) VALUES(:tripID,:place,:start,:end,:description)";
                $statement=$this->conn->prepare($query);

                $tripID=$trip->gettripById();
                $place=$trip->getPlace();
                $start=$trip->getStart();
                $end=$trip->getEnd();
                $description=$trip->getDescription();
                

                $statement->bindParam("tripID",$tripID);
                $statement->bindParam("place",$place);
                $statement->bindParam("start",$start);
                $statement->bindParam("end",$end);
                $statement->bindParam("description",$description);
                

                $statement->execute();
            }

    }