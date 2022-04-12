<?php

     class crud{
          //private database object
          private $db;


    function __construct($conn){
        $this->db = $conn;

    }


      public function insert($fname,$lname,$dob,$email,$contact,$specialty){
          try {
              $sql = "INSERT INTO attendee (Firstname,lastname,DateofBirth,Email,Contact,specialty_id) VALUES (:fname,:lname,:dob,:email,:contact,:specialty)";
              $stmt = $this->db->prepare($sql);

              $stmt->bindparam(':fname',$fname);
              $stmt->bindparam(':lname',$lname);
              $stmt->bindparam(':dob',$dob);
              $stmt->bindparam(':email',$email);
              $stmt->bindparam(':contact',$contact);
              $stmt->bindparam(':specialty',$specialty);

              $stmt->execute();
              
          } catch (PDOException $e) {
              echo $e->getMessage();
          }

    }

    public function getAttendees(){
        try{
        $sql = "SELECT * FROM attendee";
        $result = $this->db->query($sql);
        return $result;
        }
        catch(PDOException $e){
            echo $e->getMessage();

        }
    }

    public function getAttende($id){
        try{
        $sql = "SELECT * FROM attendee WHERE attendee_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
        }
        catch(PDOException $e){
            echo $e->getMessage();

        }

    }

    public function editAttendee($id,$fname,$lname,$dob,$email,$contact,$specialty){
        try{
        $sql = "UPDATE `attendee` SET `Firstname`=:fname,`lastname`=:lname,`DateofBirth`=:dob,`Email`=:email,`Contact`=:contact,`specialty_id`=:specialty WHERE attendee_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id',$id);


        $stmt->bindparam(':fname',$fname);
        $stmt->bindparam(':lname',$lname);
        $stmt->bindparam(':dob',$dob);
        $stmt->bindparam(':email',$email);
        $stmt->bindparam(':contact',$contact);
        $stmt->bindparam(':specialty',$specialty);

        $stmt->execute();
        }
        catch(PDOException $e){
            echo $e->getMessage();

        }
    }
    public function deleteattendee($id){
        try{
            $sql = "DELETE FROM attendee WHERE `attendee_id` = :id;";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id' ,$id);
            $stmt->execute();

        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}

?>