<?php
$conn = mysqli_connect("localhost", "root", "","fitness");
if(!$conn)
{
    echo "error";
}

ini_set ("display_errors", "1");
error_reporting(E_ALL);

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $bmi = ($weight/$height/$height) * 10000;
    $bmi = round($bmi,2);


    $query = "INSERT INTO user values('$name','$email','$password','$height','$weight','$bmi')";
    $run = mysqli_query($conn,$query);
    
    //check query
    if(!$run)
    {
        echo "<script> alert('Query Failed')</script>";

    }
    else
    {
        echo "success";
    }
}
?>