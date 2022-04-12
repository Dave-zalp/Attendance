<?php $title = "VIEW-RECORD"?>

<?php require_once "INCLUDES/header.php";?>
<?php require_once "db/conn.php"?>
<?php

if(!isset($_GET['id'])){

  include 'INCLUDES/errormessage.php';

}
else{
    $id = $_GET['id'];
    $result=$crud->getAttende($id);

?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"> <?php  echo $result["Firstname"];" " .$result ['lastname'] . '<br>';
         ?></h5><br>
    <h6 class="card-subtitle mb-2 text-muted">
        <?php  echo $result['specialty_id']?>
    </h6><br>
    <p class="card-text"><?php  echo 'Date of birth : '.$result['DateofBirth']?></p>
    <p class="card-text"><?php   echo 'Email Address : '. $result['Email']?></p>
    <p class="card-text"><?php  echo 'Contact Address : ' .  $result['Contact']?></p><br> 


    <a href="#" class="card-link"></a>
    <a href="#" class="card-link">Another link</a>

  </div> 
</div>
<?php } ?>