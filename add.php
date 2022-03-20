<?php
header("location: home2.html");
$uname=filter_input(INPUT_POST,'name');
$upass=filter_input(INPUT_POST,'pass');
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="sform";
//connection 
$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error())
{
    die('connect error ('.mysqli_connect_error().')'.mysqli_connect_error());
}else{
    $sql="INSERT INTO adminregi(username,password)
    values('$uname','$upass') ";

    if($conn->query($sql)){
        echo "NEW RECORD INSERTED SUCESSFULLY";
    }else{
        echo "ERROR",$sql."br".$conn->error;
    }
    $conn->close();
}
?>