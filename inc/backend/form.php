<?php 
$name="";
$phone="";
$email="";
$option="";
$message="";

$errors=[
    "name"=>"",
    "phone"=>"",
    "email"=>"",
    "option"=>"",
    "message"=>"",
];

if(isset($_POST["send"])){
    $name=mysqli_real_escape_string($conn,$_POST["name"]);
    $phone=mysqli_real_escape_string($conn,$_POST["phone"]);
    $email=mysqli_real_escape_string($conn,$_POST["email"]);
    $option=mysqli_real_escape_string($conn,$_POST["option"]);
    $message=mysqli_real_escape_string($conn,$_POST["message"]);

    if(empty($name)){$errors["name"]="The name shouldn't be empty.";}
    if(empty($phone)){$phone="None";}
    if(empty($email)){$errors["email"]="The email shouldn't be empty. ";}
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){$errors["email"].="The email should be a valid one.";}
    if(empty($message)){$errors["message"]="The message shouldn't be empty.";}

    if(!array_filter($errors)){
        $sql="INSERT INTO messages(name,phone,email,option,message) VALUES('$name','$phone','$email','$option','$message')";
        if(!mysqli_query($conn,$sql)){
            echo "Error: " . mysqli_connect_error();
        }
    }
    

};