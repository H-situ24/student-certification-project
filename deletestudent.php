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
            background-image: url(p7.png);
        }
        #navbar{
            width: 100%;
            height: 80px;
            background-color: aliceblue;
            border: 2px solid ivory;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }
        #navbar #under{
            display: flex;
            list-style: none;
            /* margin-left: 50px; */
        }
        #navbar #under .list{
            /* margin: 90px; */
            padding: 60px;
            position: relative;
        }
        #navbar #under .list .anchr{
            font-size: 30px;
            text-transform: capitalize;
            text-decoration: none;
            color: black;
            font-family: monotype corsiva;
            font-weight: 500;
        }
        .subcon1{
            display: flex;
            height: 200px;
            width: 150px;
            margin-top: 25px;
            border-radius: 10px;
            margin-left: -20px;
            box-shadow: 20px 10px 20px black;
            position: absolute;
            justify-content: space-evenly;
            justify-content: center;
            background-color: ivory;
            display: none;
        }
        .subcon1 #under2{
            list-style: none;

        }
        .subcon1 #under2 .lis{
            margin: 20px;
        }
        .subcon1 #under2 .lis a{
            font-size: 20px;
            color: black;
            font-weight: 300;
            text-transform: capitalize;
            text-decoration: none;
            font-style: italic;
            display: flex;
            justify-content: center;
        }
        .subcon1 #under2 .lis a:hover{
            text-decoration: underline 3px solid red;
            color: blue;
            transition: 1s;
        }
        #navbar #under #l5:hover .subcon1{
            display: block;
        }


        .subcon1 #under2 .lis:hover{
            transition: all 0.8s;
            width: 100%;
            margin-left: 1px;
            /* background-color: rgb(193, 247, 247); */
            background-color: blanchedalmond;
            /* text-shadow: 5px 5px 5px rgb(241, 241, 45); */
            text-shadow: 1px 1px 2px blue;
            border-radius: 10px;
        }


        .subcon2{
            display: flex;
            height: 200px;
            width: 150px;
            margin-top: 25px;
            border-radius: 10px;
            margin-left: -20px;
            box-shadow: 20px 10px 20px black;
            position: absolute;
            justify-content: space-evenly;
            justify-content: center;
            background-color: ivory;
            display: none;
        }
        .subcon2 #under3{
            list-style: none;

        }
        .subcon2 #under3 .lis{
            margin: 20px;
        }
        .subcon2 #under3 .lis a{
            font-size: 20px;
            color: black;
            font-weight: 300;
            text-transform: capitalize;
            text-decoration: none;
            font-style: italic;
            display: flex;
            justify-content: center;
        }
        .subcon2 #under3 .lis a:hover{
            text-decoration: underline 3px solid red;
            color: blue;
            transition: 1s;
        }
        #navbar #under #l4:hover .subcon2{
            display: block;
        }
        .subcon2 #under3 .lis:hover{
            transition: all 0.8s;
            width: 100%;
            margin-left: 1px;
            /* background-color: rgb(193, 247, 247); */
            background-color: blanchedalmond;
            /* text-shadow: 5px 5px 5px rgb(241, 241, 45); */
            text-shadow: 1px 1px 2px blue;
            border-radius: 10px;
        }


        .subcon3{
            display: flex;
            height: 200px;
            width: 150px;
            margin-top: 25px;
            border-radius: 10px;
            margin-left: -20px;
            box-shadow: 20px 10px 20px black;
            position: absolute;
            justify-content: space-evenly;
            justify-content: center;
            background-color: ivory;
            display: none;
        }
        .subcon3 #under4{
            list-style: none;

        }
        .subcon3 #under4 .lis{
            margin: 20px;
        }
        .subcon3 #under4 .lis a{
            font-size: 20px;
            color: black;
            font-weight: 300;
            text-transform: capitalize;
            text-decoration: none;
            font-style: italic;
            display: flex;
            justify-content: center;
        }
        .subcon3 #under4 .lis a:hover{
            text-decoration: underline 3px solid red;
            color: blue;
            transition: 1s;
        }
        #navbar #under #l3:hover .subcon3{
            display: block;
        }
        .subcon3 #under4 .lis:hover{
            transition: all 0.8s;
            width: 100%;
            margin-left: 1px;
            /* background-color: rgb(193, 247, 247); */
            background-color: blanchedalmond;
            /* text-shadow: 5px 5px 5px rgb(241, 241, 45); */
            text-shadow: 1px 1px 2px blue;
            border-radius: 10px;
        }


        .subcon4{
            display: flex;
            height: 200px;
            width: 150px;
            margin-top: 25px;
            border-radius: 10px;
            margin-left: -20px;
            box-shadow: 20px 10px 20px black;
            position: absolute;
            justify-content: space-evenly;
            justify-content: center;
            background-color: ivory;
            display: none;
        }
        .subcon4 #under5{
            list-style: none;

        }
        .subcon4 #under5 .lis{
            margin: 20px;
        }
        .subcon4 #under5 .lis a{
            font-size: 20px;
            color: black;
            font-weight: 300;
            text-transform: capitalize;
            text-decoration: none;
            font-style: italic;
            display: flex;
            justify-content: center;
        }
        .subcon4 #under5 .lis a:hover{
            text-decoration: underline 3px solid red;
            color: blue;
            transition: 1s;
        }
        #navbar #under #l2:hover .subcon4{
            display: block;
        }
        .subcon4 #under5 .lis:hover{
            transition: all 0.8s;
            width: 100%;
            margin-left: 1px;
            /* background-color: rgb(193, 247, 247); */
            background-color: blanchedalmond;
            /* text-shadow: 5px 5px 5px rgb(241, 241, 45); */
            text-shadow: 1px 1px 2px blue;
            border-radius: 10px;
        }

        .frm{
            height: 400px;
            margin-left: 810px;
            background-color: rgba(53, 226, 174, 0.623);
            width: 500px;
        }
        #hh{
            font-family: algerian;
            color: chartreuse;
            font-weight: normal;

        }
        #container{
            margin-top: 20px;
        }
        .lbl1{
            margin-left: 30px;
            margin-top: 60px;
            text-transform: capitalize;
            font-size: 26px;
            color:blue;
            font-weight: bold;
        }
        .txtt{
            margin-top: 20px;
            height: 35px;
            width: 250px;
        }
        #txt2{
            margin-left: 85px;
        }
        #txt3{
            margin-left: 50px;
        }
        #sub1{
            margin-left: 230px;
            width: 159px;
            text-transform: capitalize;
        }



    </style>

   
    <nav id="navbar">
        <img src="hub.png" alt="" style="height: 70px; width: 100px; margin-top: 3px; background-color: white;">
        <ul id="under">
            <li class="list" id="l1"><a href="" class="anchr" id="a1">home</a></li>
            <li class="list" id="l2"><a href="" class="anchr" id="a2">course</a>
                <div class="subcon4">
                    <ul id="under5">
                        <li class="lis" id="ll1"><a href="http://localhost/hubnet/addcourse.php" target="_blank">addC</a></li>
                        <li class="lis" id="ll2"><a href="http://localhost/hubnet/modifycourse.php" target="_blank">modify</a></li>
                        <li class="lis" id="ll3"><a href="http://localhost/hubnet/deletecourse.php" target="_blank">delete</a></li>
                        <li class="lis" id="ll4"><a href="http://localhost/hubnet/Cfind.php" target="_blank">verify</a></li>
                    </ul>
                </div>
            </li>
            <li class="list" id="l3"><a href="" class="anchr" id="a3">student</a>
                <div class="subcon3">
                    <ul id="under4">
                        <li class="lis" id="ll1"><a href="http://localhost/hubnet/addstudent.php">add</a></li>
                        <li class="lis" id="ll2"><a href="http://localhost/hubnet/modifystudent.php">modify</a></li>
                        <li class="lis" id="ll3"><a href="http://localhost/hubnet/deletestudent.php">delete</a></li>
                        <li class="lis" id="ll4"><a href="http://localhost/hubnet/veryfystudent.php">verify</a></li>
                    </ul>
                </div>
            </li>
            <li class="list" id="l4"><a href="" class="anchr" id="a4">certificate</a>
                <div class="subcon2">
                    <ul id="under3">
                        <li class="lis" id="ll1"><a href="http://localhost/hubnet/issuecertificate.php">issue</a></li>
                        <li class="lis" id="ll2"><a href="http://localhost/hubnet/revokecertificate.php">revoke</a></li>
                        <li class="lis" id="ll3"><a href="http://localhost/hubnet/updatecertificate.php">update</a></li>
                        <li class="lis" id="ll4"><a href="">verify</a></li>
                    </ul>
                </div>
            </li>
            <li class="list" id="l5"><a href="#" class="anchr">employee</a>
                <div class="subcon1">
                    <ul id="under2">
                        <li class="lis" id="ll1"><a href="http://localhost/hubnet/newemployee.php">new</a></li>
                        <li class="lis" id="ll2"><a href="http://localhost/hubnet/findemployee.php">find</a></li>
                        <li class="lis" id="ll3"><a href="http://localhost/hubnet/employeedelete.php">delete</a></li>
                        <li class="lis" id="ll4"><a href="http://localhost/hubnet/updateemployee.php">update</a></li>
                    </ul>
                </div> 
            </li>
        </ul>
    </nav>
    <form action="" method="POST" class="frm"><br>
        <h1 id="hh">delete student</h1>
        <hr style="background-color: black;">
        <!-- <table> -->
            <div id="container">
                <tr>
                    <th><label for="" id="cor" class="lbl1">RegNo.</label></th>
                    <th><input type="text" id="txt1" class="txtt" name="regno" placeholder="Enter registration no..."></th>
                </tr>
                <br>
                <tr>
                    <th><label for="" id="dur" class="lbl1">name</label></th>
                    <th><input type="text" id="txt2" class="txtt" name="name" placeholder="Enter student name..."></th>
                </tr>
                <br>
                <tr>
                    <th><label for="" id="fee" class="lbl1">PhoneNo</label></th>
                    <th><input type="text" id="txt3" class="txtt" name="phn" placeholder="Enter phone no."></th>
                </tr>
                <br><br>
                <tr>
                    <input type="submit" id="sub1" class="sub" name="submit" value="deleteS">
                </tr>
            </div>
            
            
        <!-- </table> -->
    </form>
    <?php
    $myconn=mysqli_connect("localhost","root",'',"hub");
    if(isset($_POST['submit'])){
        $sr=$_POST['regno'];
        $sn=$_POST['name'];
        $sp=$_POST['phn'];
        $q="delete from student where RegNo='$sr'";
        mysqli_query($myconn,$q);
    }

    ?>
</body>
</html>