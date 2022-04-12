<?php $title = "Index"?>

<?php require_once "INCLUDES/header.php";?>
<?php require_once "db/conn.php"?>

<h1 class='text-center'>REGISTERATION FOR IT CONFERENCE</h1>

<form action="success.php" method="post">
<div class="mb-3">
    <label for="exampleInputFirstname" class="form-label">First name</label>
    <input required type="text" class="form-control" id="exampleInputFirstnamee" name="firstname">
  </div>
<div class="mb-3">
    <label for="exampleInputLastname" class="form-label">Last name</label>
    <input required type="text" class="form-control" id="exampleInputLastname" name="lastname"> 
  </div>
  <div class="mb-3">
    <label for="exampleInputDOB" class="form-label">Date of Birth</label>
    <input required type="date" class="form-control" id="exampleInputDOB" name="dob">
  </div>  
  <div class="mb-3">
    <label for="exampleInputnumber" class="form-label">Phone Number</label>
    <input required type="number" class="form-control" id="exampleInputnumber" name="phonenumber">
    <div id="numberHelp" class="form-text">We'll never share your number with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmai1" class="form-label">Email address</label>
    <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email'>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <label for="exampleDataList" class="form-label">Area of expertise</label>
<input required class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." name="AREA">
<datalist id="datalistOptions">
  <option value="3">Engineering</opyions>
  <option value="Computer Science">
  <option value="Arts">
  <option value="Medicine">
  <option value="Science">
</datalist>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input required type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Retype-Password</label>
    <input required type="password" class="form-control" id="exampleInputPassword1" name="password2">
  </div>
  <div class="mb-3 form-check">
    <input required type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
</form>



<br><br><br><br>

<?php require_once "INCLUDES/footer.php";?>
