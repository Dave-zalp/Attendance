<?php $title = "Success"?>

<?php require_once "INCLUDES/header.php";?>
<?php require_once "DB/conn.php"?>



<?php


if(isset($_POST['submit'])){

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phonenumber'];
    $specialty = $_POST['AREA'];


try{
    $issuccess =$crud->insert($fname,$lname,$dob,$email,$contact,$specialty);

}
catch(PDOException $e){
include "INCLUDES/error.php";
}
     



}



?>

<!-- This prints out all the value that were passed to the action page using method='get'
 <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"> <?php // echo $_GET['firstname']." " . $_GET ['lastname'] . '<br>';
 ?></h5><br>
 <h6 class="card-subtitle mb-2 text-muted">
     <?php // echo $_GET['AREA']?>
 </h6><br>
 <p class="card-text"><?php // echo 'Date of birth : '. $_GET['dob']?></p>
 <p class="card-text"><?php  // echo 'Email Address : '. $_GET['email']?></p>
 <p class="card-text"><?php // echo 'Contact Address : ' .  $_GET['phonenumber']?></p><br> 


 <a href="#" class="card-link"></a>
 <a href="#" class="card-link">Another link</a> -->
</div>
</div>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"> <?php  echo $_POST["firstname"];" " . $_POST ['lastname'] . '<br>';
         ?></h5><br>
    <h6 class="card-subtitle mb-2 text-muted">
        <?php  echo $_POST['AREA']?>
    </h6><br>
    <p class="card-text"><?php  echo 'Date of birth : '. $_POST['dob']?></p>
    <p class="card-text"><?php   echo 'Email Address : '. $_POST['email']?></p>
    <p class="card-text"><?php  echo 'Contact Address : ' .  $_POST['phonenumber']?></p><br> 


    <a href="#" class="card-link"></a>
    <a href="#" class="card-link">Another link</a>

  </div> 
</div>

    <br><br><br><br>
<?php require_once "INCLUDES/footer.php";?>
