<?php
    include("connection.php");
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $username=$_POST["name"];
        $password=$_POST["pass"];

        $sql="select * form sform where username='".$username."' AND password='".$password."' ";
        header("location: home1.html");
    }
?>