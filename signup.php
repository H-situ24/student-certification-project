<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-image: url(p16.png);
        }
        #form2{
            height: 500px;
            width: 500px;
            margin-left: 300px;
        }
        #container{
            margin-left: 40px;
            margin-top: 40px;
        }
        .lb{
            margin: 20px;
            font-size: 30px;
            font-weight: normal;
            text-transform: capitalize;
        }
        .ibb{
            height: 30px;
            width: 200px;
            margin: 15px;
        }
        #ib1{
            margin-left: 63px;
        }
        #ib2{
            margin-left: 63px;
        }
        #ib4{
            margin-left: 20px;
        }
        #submit1{
            width: 150px;
            height: 40px;
            margin-left: 200px;
            margin-top: 20px;
            text-transform: capitalize;
            background-color: black;
            color: white;
            box-shadow: 3px 3px 3px burlywood;
            cursor: pointer;
        }
        #submit1:hover{
            background-color: white;
            color: black;
            font-size: 18px;
            border-radius: 10px;
            font-weight: bold;
            font-family: motype corsiva;
            transition: all,0.7s;
            border: 2px dotted black;
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
    <form action="" method="POST" id="form2"><br>
        <h1 id="rf">registration form</h1>
        <hr>
        <div id="container">
            <tr>
                <th>
                    <label for="ib1" id="l1" class="lb">name</label>
                    <input type="text" id="ib1" class="ibb" name="name">
                </th>
            </tr>
            <br>
            <tr>
                <th>
                    <label for="ib2" id="l2" class="lb">email</label>
                    <input type="email" id="ib2" class="ibb" name="email">
                </th>
            </tr>
            <br>
            <tr>
                <th>
                    <label for="ib3" id="l3" class="lb">phone no</label>
                    <input type="tel" id="ib3" class="ibb" name="phone">
                </th>
            </tr>
            <br>
            <tr>
                <th>
                    <label for="ib4" id="l4" class="lb">password</label>
                    <input type="password" id="ib4" class="ibb" name="password">
                </th>
            </tr>
            <br>
            <input type="submit" id="submit1" name="submit" value="signup">
        </div>

    </form>
    <?php
    $myconn=mysqli_connect('localhost',"root","","hub");
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $pas=$_POST['password'];
        $q="insert into signup values('$name','$email','$phone','$pas')";
        mysqli_query($myconn,$q);
    }
    
    ?>
</body>
</html>
