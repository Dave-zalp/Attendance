<?php $title = "Success"?>

<?php require_once "INCLUDES/header.php";?>
<?php require_once "DB/conn.php"?>


<?php


if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phonenumber'];
    $specialty = $_POST['AREA'];

  $result = $crud->editAttendee($id,$fname,$lname,$dob,$email,$contact,$specialty);
  if($result){
      header("Location: index.php");
  }
  else{
      echo 'error in registering';
      
  }



}
else{
    echo 'error';
}
?>