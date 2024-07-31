<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-image: url(p14.png);
        }
        #tbl{
            margin-left: 300px;
            margin-top: 20px;
            height: 350px;
            width: 800px;
            border-radius: 10px;
        }
        #oc{
            margin-top: 40px;
            font-size: 70px;
            position: relative;
            color: coral;
        }
        label{
            font-size: 40px;
            font-weight: normal;
            text-transform: capitalize;
            /* margin: 25px; */
        }
        th{
            background-color: black;
            color: blue;
            font-size: 40px;
        }
        td{
            font-size: 20px;
            text-align: center;
            color: black;
            font-size: 30px;
            background-color: rgba(24, 207, 18, 0.836);
        }
        #hd{
            font-weight: bold;
            background-color: rgba(255, 255, 255, 0.582);
            
        }
        #hd:hover{
            background-color: black;
        }
        #hd a{
            text-decoration: none;
            text-transform: capitalize;
        }
        #hd a:hover{
            color: antiquewhite;
            text-shadow: 3px 3px 3px red;
            transition: 0.8s;
        }
        
        
    </style>
</head>
<body>
    <div id="con">
        <a href="index.php" target="_blank">home</a>
        <a href="course.php" target="_blank">Course</a>
        <a href="verify.php" target="_blank">Verify</a>
        <a href="signup.php" target="_blank">signup</a>
        <a href="contactus.php" target="_blank">contactus</a>
        <a href="certificate.php" target="_blank">certificate</a>
    </div>
    <h1 id="oc">our courses</h1>
    <hr style="margin-left: 150px;">
    <table id="tbl">
            <tr>
                <th><label for="">course</label></th>
                <th><label for="">duration</label></th>
                <th><label for="">fee</label></th>
            </tr>
            <?php
                $myconn=mysqli_connect("localhost","root","","hub");
                $q="select * from course";
                $rec=mysqli_query($myconn,$q);
                if(mysqli_num_rows($rec)>0){
                    foreach($rec as $r){
                        ?>
                        <tr>
            
                            <td id="hd"><a href="cd.php"><?php echo $r['name'];?></a></td>
                            <td><?php echo $r['duration'];?></td>
                            <td><?php echo $r['fee'];?></td>

                        </tr>
                        <?php

                    }

                }
            ?>
    </table>
</body>
</html>