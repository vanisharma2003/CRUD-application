<?php
include("config/database.php");
if(isset($_GET['id'])){
    $sql="select User,Address,Phoneno from information where id =".$_GET['id'];
    $result=$conn->query($sql);
    $data=mysqli_fetch_assoc($result);
}
else{
    echo "invalid request";
}
if(isset($_POST['submit'])){
    extract($_POST);
    $sql="update information set User='$username' where id=".$_GET['id'];
  $res= $conn->query($sql);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <form action="edituser.php?id=<?php echo $_GET['id']?>" method="POST">
        <h1>Edit your details</h1>
        <label for="user" style="font-size:x-large;margin-top:10px;">Enter your username here</label>
        <input type="text" name="username" id="user" style="margin-top:10px;" required value="<?php echo $data['User']?>"/>
        <label for="address"style="font-size:x-large;margin-top:10px;">Enter your address here</label>
        <input type="text" name="address" id="address" style="width:400px;height:150px;margin-top:10px;" value="<?php echo $data['Address']?>"/>
        <label for="phone" style="font-size:x-large;margin-top:10px;">Enter your phone number here</label>
        <input name="phoneno" id="phone" value="<?php echo $data['Phoneno']?>" style="margin-top:10px;"/>
    <input type="submit" name="submit" style="border-radius:20px;width:150px;height:30px;font-size:large;margin-top:20px;"/> 
    <a href="allusers.php" style="color:black; margin-top: 10px;font-size: 25px; text-decoration: none;">Click here to display all users</a>
    </form>
</body>
</html>