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
            background-image: url(p15.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        #form1{
            height: 450px;
            width: 500px;
            margin-left: 400px;
            background-color: rgba(15, 91, 141, 0.685);
            
        }
        #div1{
            margin-top: 60px;
        }
        .lbll{
            font-size: 30px;
            text-transform: capitalize;
            margin-left: 100px;
            color: azure;
        }
        .ibb{
            width: 300px;
            height: 40px;
            margin-left: 100px;
            border-radius: 10px;
            padding: 20px;
        }
        #submit1{
            margin-top: 30px;
            width: 160px;
            height: 30px;
            border: 2px solid black;
            box-shadow: 3px 3px 3px black;
            margin-left: 170px;
            cursor: pointer;
            font-size: 17px;
            text-transform: capitalize;
        }
        #submit1:hover{
            background-color: black;
            color: antiquewhite;
            border: 6px dotted black;
            border-radius: 5px;
            transition: all,0.6s;
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
    <form action="sf.php" id="form1" method="POST"><br>
        <h1 style="color: rgb(78, 231, 31);">verification of student</h1>
        <hr style="margin-left: 50px;">
        <div id="div1">
            <tr>
                <th>

                    <label for="rn" id="pn" class="lbll">reg. no.</label><br>
                    <input type="text" class="ibb" id="rn" name="regno">
                </th>
            </tr>
            <br><br>
            <small style="margin-left: 250px; font-weight: bold; color: aliceblue;">or</small>
            <br>
            <tr>
                <th>

                    <label for="ph" id="pn" class="lbll">phon no.</label><br>
                    <input type="tel" class="ibb" id="ph" name="phone">
                </th>
            </tr>
            <br>
            <tr>
                <th><input type="submit" id="submit1" class="ss" name="btn" value="result"></th>
            </tr>
        </div>
    </form>
</body>
</html>