<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display-Record</title>
    <link rel="stylesheet" href="display.css">
</head>
<body vlink="yellow" alink="yellow" link="yellow">
    <header><h1>ATTENDANCE RECORD OF THE STUDENT</h1></header>
    <nav>
        <a href="home1.html">HOME</a>
        <a href="index">LOGOUT</a>
    </nav>
    <div class="table">
    <table  border="3">
        <tr>
        <th>names</th>
        <th>university_roll_no</th>
        <th>class_roll_no</th>
        <th>date</th>
        <th>time</th>
        </tr>
        <?php
    
        include("connection.php");
       // error_reporting(0);
        $query="select * from record";
        $info=mysqli_query($conn,$query);
        $total=mysqli_num_rows($info);
    

        if($total!=0)
        {
            
            while(($result=mysqli_fetch_assoc($info)))
            {
                echo "
                <tr>
                <td>".$result['names']."</td>
                <td>".$result['university_roll_no']."</td>
                <td>".$result['class_roll_no']."</td>
                <td>".$result['date']."</td>
                <td>".$result['time']."</td>
                
                </tr>
                ";
            }
        }
        else{
            echo "No Record Found";
        }
        ?>
    </table>
    </div>
    <footer>
        <h4>Made by Naoman Ali</h4>
    </footer>
</body>
</html>
