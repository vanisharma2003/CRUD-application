<?php
include("config/database.php");
$usernameerror="";
$passworderror="";
$addresserror="";
$phonenoerror="";
if(isset($_POST['submit'])){
    extract($_POST);
    if(empty($username)){
        $usernameerror="User name is required";
     }
     if(empty($password)){
        $passworderror="Password is required";
     }
     if(empty($address)){
        $addresserror="Address is required";
    }
     if(empty($phoneno)){
        $phonenoerror="Phone number is required";
     }
     if($username!="" && $password!="" && $address!="" && $phoneno!=""){
        $sql="insert into information (User,Password,Address,Phoneno) values ('$username','$password','$address','$phoneno')";
        $result= $conn->query($sql);
     }
   
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Form</title>
<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#C63989;">
    <form action="index.php" method="POST">
        <h1  style=" color: #39C676;">Enter your details below</h1>
        <!-- username -->
        <label for="user" style=" color: #39C676;font-size:x-large;margin-top:10px;">Enter your username here</label>
        <input type="text" name="username" id="user" style="margin-top:10px;"/>
        <span style="font-size:large;"><?php echo $usernameerror?></span>
        <!-- password -->
        <label for="pass" style=" color: #39C676;font-size:x-large;margin-top:10px;">Enter your password here</label>
        <input type="password" name="password" id="pass" style="margin-top:10px;"/>
        <span  style="font-size:large;"><?php echo $passworderror?></span>
        <!-- address -->
        <label for="address"style=" color: #39C676;font-size:x-large;margin-top:10px;">Enter your address here</label>
        <input type="text" name="address" id="address" style="width:400px;height:150px;margin-top:10px;"/>
        <span  style="font-size:large;"><?php echo $addresserror?></span>
        <!-- phone number -->
        <label for="phone" style=" color: #39C676;font-size:x-large;margin-top:10px;">Enter your phone number here</label>
        <input name="phoneno" id="phone" style="margin-top:10px";/>
        <span  style="font-size:large;"><?php echo $phonenoerror?></span>
      <!-- submit button -->
    <input type="submit" name="submit" style=" color: #39C676;border-radius:20px;border:none;height:30px;font-size:large;margin-top:20px;"/>
<a href="allusers.php" style="color: #39C676; margin-top: 10px;font-size: 25px; text-decoration: none;">Click here to display all users</a>
    </form>
</body>
</html>