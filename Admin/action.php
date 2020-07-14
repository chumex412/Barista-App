<?php
$email_subs="";
if(isset ($_POST['submit']))
{
    $email_subs= $_POST['email_subs'];
    $conn=new mysqli ("localhost", "root", "", "mydata");
    $cmd= "INSERT into newsletter  value ('$email_subs');";
    if (mysqli_query ($conn, $cmd)) {
        echo "Sucessful";
    }
    else {
        echo "Not saved";
    }
}
?>