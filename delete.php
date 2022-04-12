<?php $title = "ERASE-RECORD"?>
<?php require_once "db/conn.php"?>

<?php
if(!isset($_GET['id'])){
    include "INCLUDES/errormessage.php";
    header("Location: index.php");

}
else{
    $id = $_GET["id"];


try{
    $result = $crud->deleteattendee($id);

}
catch(PDOException $e){
    include "INCLUDES/errormessage.php";
}

header("Location: viewrecords.php");

}


?>