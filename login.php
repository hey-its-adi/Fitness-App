<?php
 session_start();
$conn = mysqli_connect("localhost", "root","","fitness");
if(!$conn)
{
    echo "error";
}

ini_set ("display_errors", "1");
error_reporting(E_ALL);

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM user WHERE email = '$email'";
    $run = mysqli_query($conn,$query);
    //check query
    if(!$run)
    {
        echo mysqli_error($conn);

    }
    $row = mysqli_fetch_assoc($run);
    $password = $row['password'];
    $name = $row['name'];
    $bmi = $row['bmi'];
    
    if($pass != $password)
    {
        echo "<h1 style='color:red'>Wrong Password<h1>";

    }
    else
    {
        $_SESSION['name']= $name;
        $_SESSION['bmi'] = $bmi;
        echo '<meta http-equiv= "refresh" content="0; url=/Fitness-App/dashboard.php"/>';
        
    }

}
?>
<html>
    <head>
            <link rel="stylesheet" href="php.css">
    </head>
</html>