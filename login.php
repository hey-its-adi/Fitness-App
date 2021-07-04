<?php
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
    if($pass != $password)
    {
        echo "wrong password";

    }
    else
    {
        echo "redirecting to login page";
    }

}

?>