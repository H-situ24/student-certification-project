<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <style>
        #admin{
            /* display: none; */
        }
    </style>
    <?php
    // include('login.php');
    ?>
</head>
<body>
    <div id="con">
        <a href="index.php" target="_blank">home</a>
        <a href="course.php" target="_blank">Course</a>
        <a href="verify.php" target="_blank">Verify</a>
        <a href="signup.php" target="_blank">signup</a>
        <a href="contactus.php" target="_blank">contactus</a>
        <a href="certificate.php" target="_blank">certificate</a>
        <button id="btn" onclick="adminji()"><i class="fa fa-solid fa-lock"></i></button>
    </div>
        <form action="" method="POST" id="admin"><br>
            <h1>login form  <small style="font-size: 20px; color: brown; text-transform: lowercase; text-shadow: none;"> (admin)</small></h1>
            <hr>
            <div class="con2">
                <tr>
                    <label for="txt1" class="lbl" id="l1">Name</label>
                    <input type="text" id="txt1" class="ib" name="name">
                </tr>
                <br>
                <tr><small id="s1" class="sml"></small></tr>
                <br>
                <tr>
                    <label for="txt2" class="lbl" id="l2">Uid</label>
                    <input type="text" id="txt2" class="ib" name="uid">
                </tr>
                <br>
                <tr><small id="s2" class="sml"></small></tr>
                <br>
                <tr>
                    <label for="txt3" class="lbl" id="l3">Password</label>
                    <input type="password" id="txt3" class="ib" name="password">
                </tr>
                <br>
                <tr><small id="s3" class="sml"></small></tr>
                <br>
                <tr>
                    <input type="submit" id="sub1" class="sub" name="signUp" value="cancel">
                    <input type="submit" id="sub2" class="sub" name="signIn" value="signIn">
                </tr>
            </div>
        </form>
        <!-- <script src="action.js"></script> -->
        <script>
            function adminji(){
                document.getElementById('btn').value.body.style.display='block';
            }
        </script>
        <?php
        $myconn=mysqli_connect("localhost","root","","hub");
        if(isset($_POST['signIn'])){
            $n=$_POST['name'];
            $u=$_POST['uid'];
            $p=$_POST['password'];
            $q="select * from admin where uid='$u' and password='$p'";
            $rec=mysqli_query($myconn,$q);
            if(mysqli_num_rows($rec)>0){
                header("Location: http://localhost/hubnet/admin.php");
                echo "login successfull";
            }
            else{
                echo "login fail";
            }

        }
    ?>
</body>
</html>