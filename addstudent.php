<?php
include("connection.php");

header("location: home1.html");
$uname=filter_input(INPUT_POST,'name');
$upass=filter_input(INPUT_POST,'pass');

if(mysqli_connect_error())
{
    die('connect error ('.mysqli_connect_error().')'.mysqli_connect_error());
}else{
    $sql="INSERT INTO studentregi(user,pass)
    values('$uname','$upass') ";

    if($conn->query($sql)){
        echo "NEW RECORD INSERTED SUCESSFULLY";
    }else{
        echo "ERROR",$sql."br".$conn->error;
    }
    $conn->close();
}
?>