<?php

class user{
    //private database object
    private $db;


function __construct($conn){
  $this->db = $conn;
  
}
public function insertuser($username,$password){
    try {
        $result = $this->getuserbyusername($username);
        if($result['num']>0){
            return false;
        }
        else{
        $new_password = md5($password.$username);
        $sql = "INSERT INTO users (username,password) VALUES (:uname,:pass)";
        $stmt = $this->db->prepare($sql);

        $stmt->bindparam(':uname',$usernmae);
        $stmt->bindparam(':pass',$new_password);
        
        $stmt->execute();
        }
        
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
public function getuser($username,$password){
    try{
        $sql = "SELECT * FROM user WHERE username=:username AND password=:password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':username',$username);
        $stmt->bindparam(':password',$password);

        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
        }
        catch(PDOException $e){
            echo $e->getMessage();

        }

}

public function getuserbyusername($username){
    try {
        $sql = 'SELECT COUNT(*) AS num FROM USERS WHERE USERNAME = :username';
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':username',$username);

        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
        }
        catch(PDOException $e){
            echo $e->getMessage();

        }
}
}

?>