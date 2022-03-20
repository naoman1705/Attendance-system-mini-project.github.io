<?php
header("location: index.html");
$name=filter_input(INPUT_POST,'name');
$university_roll_no=filter_input(INPUT_POST,"uniroll");
$section=filter_input(INPUT_POST,"sec");
$class_roll_no=filter_input(INPUT_POST,"clrn");
$date=filter_input(INPUT_POST,"date");
$time=filter_input(INPUT_POST,"time");
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
    $sql="INSERT INTO record(names,university_roll_no,section,class_roll_no,date,time)
    values('$name','$university_roll_no','$section','$class_roll_no','$date','$time') ";

    if($conn->query($sql)){
        echo "NEW RECORD INSERTED SUCESSFULLY";
    }else{
        echo "ERROR",$sql."br".$conn->error;
    }
    $conn->close();
}
?>