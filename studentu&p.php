<?php
    include("connection.php");
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $username=$_POST["name"];
        $password=$_POST["pass"];

        $sql="select * form sform where user='".$username."' AND pass='".$password."' ";
        if($sql)
        {
           header("location: home.html");
        }
        else{
            header("location: index.html");
        }
    }
?>