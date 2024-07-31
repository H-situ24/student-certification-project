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
            background-image: url(p18.jpg);
            background-size: cover;
        }
        #ffrr{
            background-color: rgba(39, 90, 199, 0.76);
            border: 2px dotted white;
        }
        .cont{
            margin-left: 70px;
            margin-top: 30px;
        }
        #cn{
            text-transform: capitalize;
            font-weight: bold;
            font-size: 40px;
            color:gold;
        }
        #cno{
            height: 40px;
            width: 250px;
            margin-top: 10px;
            border-radius: 10px;
            padding: 20px;
        }
        .sub{
            width: 250px;
            /* margin-left: 30px; */
            text-transform: capitalize;
        }
        .sub:hover{
            background-color: white;
            color: green;
            font-size: 24px;
            font-weight: bold;
            border: dotted;
            transition: all,0.8s;
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
    <form action="certificateredirect.php" method="POST" id="ffrr"><br>
        <h1 style="color: blanchedalmond;">chek certificate</h1>
        <hr>
        <div class="cont">
            <table>
                <tr>
                    <label for="cno" id="cn">certificate no.</label><br>
                    <input type="text" id="cno" class="cr" name="certificate" placeholder="Enter certificate no..."><br>
                    <input type="submit" id="subb1" class="sub" name="submit" value="result">
                </tr>
        </table>
        </div>
    </form>
</body>
</html>