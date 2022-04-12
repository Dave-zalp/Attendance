<?php $title = "EDIT"?>
<?php require_once "INCLUDES/header.php";?>
<?php require_once "db/conn.php"?>
<?php



if(!isset($_GET['id'])){
    include 'INCLUDES/errormessage.php';
    header("Location: index.php");

}
else{
    $id = $_GET['id'];
  $attendee =$crud->getAttende($id);


?>

<h1 class='text-center'>EDIT DETAILS</h1>

<form method="post" action="editrecord.php">
<input type='hidden' name='id' value='<?php echo $attendee['attendee_id']?>'>
<div class="mb-3">
    <label for="exampleInputFirstname" class="form-label">First name</label>
    <input type="text" class="form-control" id="exampleInputFirstnamee" name="firstname" value=<?php echo $attendee['Firstname'] ?>>
  </div>
<div class="mb-3">
    <label for="exampleInputLastname" class="form-label">Last name</label>
    <input type="text" class="form-control" id="exampleInputLastname" name="lastname" value=<?php echo $attendee['lastname'] ?>> 
  </div>
  <div class="mb-3">
    <label for="exampleInputDOB" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" id="exampleInputDOB" name="dob" value=<?php echo $attendee['DateofBirth'] ?>>
  </div>  
  <div class="mb-3">
    <label for="exampleInputnumber" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputnumber" name="phonenumber" value=<?php echo $attendee['Contact'] ?>>
    <div id="numberHelp" class="form-text">We'll never share your number with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmai1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email' value=<?php echo $attendee['Email'] ?>>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <label for="exampleDataList" class="form-label">Area of expertise</label>
<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." name="AREA" value=<?php echo $attendee['specialty_id'] ?>>
<datalist id="datalistOptions">
  <option value="3">Engineering</opyions>
  <option value="Computer Science">
  <option value="Arts">
  <option value="Medicine">
  <option value="Science">
</datalist>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-success btn-block" name='submit'>Save</button>
</form>


<?php } ?>


<br><br><br><br>

<?php require_once "INCLUDES/footer.php";?>
