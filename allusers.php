<?php
include("config/database.php");
$sql="select User,id,Address,Phoneno from information";
$result=$conn->query($sql);
//delete
if(isset($_GET['id'])){
  $sql="delete from information where id=".$_GET['id'];
  $conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Users Information</title>
</head>
<body>
<table class="table" style="border:2px solid black";>
  <thead>
    <tr>
        <th>Id</th>
      <th scope="col">User</th>
      <th>Address</th>
      <th>Phone number</th>
      <th>Edit information</th>
      <th>Delete information</th>
    <a href="index.php"><button style="border-radius:20px;width:150px;margin:16px;">Add New User</button></a> 
    </tr>
  </thead>
  <tbody>
     <?php
    while($row=mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
     <td><?php echo $row['User']?></td> 
     <td><?php echo $row['Address']?></td>
     <td><?php echo $row['Phoneno']?></td>  
   <td><a href="edituser.php?id=<?php echo $row['id']?>"><button style="border-radius:20px;width:100px;">Edit</button></a></td>
      <td><a href="allusers.php?id=<?php echo $row['id']?>"><button style="border-radius:20px;width:100px;">Delete</button></a></td>
    </tr>
  <?php }?>
    
  </tbody>
</table>
</body>
</html>