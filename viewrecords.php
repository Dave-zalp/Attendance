<?php
$title = "VIEW RECORDS";

require_once "INCLUDES/header.php";
require_once "DB/conn.php";
$result = $crud->getAttendees();
?>


<table class="table table-dark table-striped">
    <tr>
        <th>#</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Specialty</th>
        <th>ACTION</th>
    </tr>
    <?php
        while ($r= $result->fetch(PDO::FETCH_ASSOC)){
    ?>
    <tr>
    <td><?php echo $r['attendee_id']?></td>
    <td><?php echo $r['Firstname']?></td>
    <td><?php echo $r['lastname']?></td>
    <td><?php echo $r['specialty_id']?></td>
    <td><a href='view.php?id=<?php echo $r['attendee_id']?>' class='btn btn-warning'>VIEW</a>
         <a href='edit.php?id=<?php echo $r['attendee_id']?>' class='btn btn-success'>UPDATE</a>
         <a href='delete.php?id=<?php echo $r['attendee_id']?>' class='btn btn-danger'>DELETE</a>

    </td>




    </tr>
<?php } ?>


</table>

<br>
<br>
<br>
<?php require_once "INCLUDES/footer.php"?>