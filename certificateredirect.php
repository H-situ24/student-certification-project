<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .ss{
            height: 580px;
            width: 200px;
            border: 2px solid red;
            display: inline-block;
            margin: 50px;
            padding: 2px;
            background-color: sandybrown;
        }
        #conn{
            display: inline-block;
            height: 580px;
            width: 800px;
            border-left: 5px solid red;
            border-top: 2px solid black;
            border-right: 2px solid black;
            border-bottom: 2px solid black;
            margin-top: 50px;
            margin-left: -45px;
            position: absolute;
        }
        #hubnet{
            width: 130px;
            height: 130px;
            margin-left:600px;
            padding: 5px;
        }
        #iso{
            margin-left: 500px;
        }
        .hed{
            font-size: 20px;
            color: black;
            text-shadow: none;
            letter-spacing: 2px;
        }
        #txt{
            width: 400px;
            height: 100px;
            margin-top: 30px;
            margin-left: 39px;
            font-family: monotype corsiva;
        }
        #txt1{
            display: inline-block;
            margin-left: 550px;
            position: absolute;
            margin-top: -20px;
        }
        /* #nm{
            font-size: 20px;
            color: black;
            text-shadow: none;
        } */

        .circle{
            height: 150px;
            width: 150px;
            border: 3px solid blue;
            border-radius: 50%;
            position: relative;
            margin: 15px;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            justify-content: space-evenly;
            margin-top: -135px;
            /* animation: circle 0.8s linear infinite; */
        }
        /* @keyframes circle {
            0%{
                transform: rotate(0deg);
            }
            100%{
                transform: rotate(360deg);
            }
        } */
        .subcircle{
            height: 100px;
            width: 100px;
            border: 3px solid blue;
            border-radius: 50%;
            display: flex;
            line-height: 50px;
            justify-content: center;
            /* align-items: center; */
            justify-content: space-evenly;
        }
        #hp{
            color: blue;
            font-size: 20px;
            font-weight: bold;
            text-shadow: none;
            font-family: normal;
        }
        .txtt{
            font-size: 20px;
            text-transform: uppercase;
            color: blue;
            font-weight: bold;
        }
        #t_1{
            display: block;
            position: absolute;
            margin-top: -100px;
            margin-left: 20px;
            transform: rotate(90deg);
        }
        #t_2{
            display: block;
            position: absolute;
            margin-top: -123px;
            margin-left: 25px;
            transform: rotate(-70deg);
        }
        #t_3{
            display: block;
            position: absolute;
            margin-top: -140px;
            margin-left: 35px;
            transform: rotate(-45deg);
        }
        #t_4{
            display: block;
            position: absolute;
            margin-top: -155px;
            margin-left: 50px;
            transform: rotate(-30deg);
        }
        #t_5{
            display: block;
            position: absolute;
            margin-top: -163px;
            margin-left: 70px;
            transform: rotate(-20deg);
        }
        #t_6{
            display: block;
            position: absolute;
            margin-top: -163px;
            margin-left: 87px;
            transform: rotate(0deg);
        }
        #t_7{
            display: block;
            position: absolute;
            margin-top: -160px;
            margin-left: 103px;
            transform: rotate(15deg);
        }
        #t_8{
            display: block;
            position: absolute;
            margin-top: -152px;
            margin-left: 118px;
            transform: rotate(30deg);
        }
        #t_9{
            display: block;
            position: absolute;
            margin-top: -137px;
            margin-left: 134px;
            transform: rotate(50deg);
        }
        #t_10{
            display: block;
            position: absolute;
            margin-top: -118px;
            margin-left: 140px;
            transform: rotate(60deg);
        }
        #t_11{
            display: block;
            position: absolute;
            margin-top: -96px;
            margin-left: 145px;
            transform: rotate(10deg);
        }
        #t_12{
            display: block;
            position: absolute;
            margin-top: -76px;
            margin-left: 140px;
            transform: rotate(100deg);
        }
        #t_13{
            display: block;
            position: absolute;
            margin-top: -59px;
            margin-left: 127px;
            transform: rotate(120deg);
        }
        #t_14{
            display: block;
            position: absolute;
            margin-top: -47px;
            margin-left: 115px;
            transform: rotate(140deg);
        }
        #t_15{
            display: block;
            position: absolute;
            margin-top: -40px;
            margin-left: 93px;
            transform: rotate(160deg);
        }
        #t_16{
            display: block;
            position: absolute;
            margin-top: -40px;
            margin-left: 73px;
            transform: rotate(180deg);
        }
        #t_17{
            display: block;
            position: absolute;
            margin-top: -45px;
            margin-left: 57px;
            transform: rotate(190deg);
        }
        #t_18{
            display: block;
            position: absolute;
            margin-top: -45px;
            margin-left: 50px;
            transform: rotate(-140deg);
        }
        #t_19{
            display: block;
            position: absolute;
            margin-top: -57px;
            margin-left: 42px;
            transform: rotate(-130deg);
        }
        #t_20{
            display: block;
            position: absolute;
            margin-top: -64px;
            margin-left: 46px;
            transform: rotate(110deg);
        }
        #t_21{
            display: block;
            position: absolute;
            margin-top: -75px;
            margin-left: 30px;
            transform: rotate(-120deg);
        }
        #t_22{
            display: block;
            position: absolute;
            margin-top: -82px;
            margin-left: 25px;
            transform: rotate(-120deg);
        }
        


    </style>
</head>
<body>
<?php
    $myconn=mysqli_connect("localhost","root","","hub");
    if(isset($_POST['submit'])){
        $cn=$_POST['certificate'];
        $q="select * from certificate where CrNo='$cn'";
        $rec=mysqli_query($myconn,$q);
        if(mysqli_num_rows($rec)>0){
            $data=mysqli_fetch_assoc($rec);
            $sn=$data['sname'];
            $fn=$data['Fname'];
            $cor=$data['corurse'];
            $sd=$data['startdate'];
            $ed=$data['enddate'];
            $grd=$data['grrade'];
        }
        else{
            header("Location: http://localhost/hubnet/certificate.php");
            echo "Certificate not found";
        }
    }
    ?>
<span class="ss">

</span>
<span id="conn">
    <h1>hubnet certificate of excellence</h1>
    <img src="hub.png" alt="" id="hubnet">
    <h2 style="margin-left: 560PX;">C E R T I F I E D</h2>
    <hr style="width: 250px; margin-left: 510px; height: 3px;">
    <div id="iso">
        <h1 class="hed">iso : 9001:2015</h1>
        <h1 class="hed">CN :QMS / 2067</h1><br>
        <div class="hed" style="margin-left: 70px; font-weight: 700;">HCN:<?php
        echo $cn;
        
        ?></div>
    </div>
    <hr style="width: 90%;height: 3px"><br>
    <p style="margin-left: 50px; font-weight: bold; text-transform: uppercase;"><?php
    echo $sn." ".$fn." ".$cor." ".$sd." ".$ed." ".$grd;
    ?></p>
    <hr style="width: 50%;margin-top: 10px;height: 3px">
    <div id="txt">
        <h4>has successfully completed the requirement to be recogniged as a hubnet certified</h4>
    </div>
    <div id="txt1"><h2>managing director</h2>
        <div class="circle">
            <div class="subcircle">
                <h1 id="hp">patna</h1>
            </div>
        </div>
        <div id="content">
            <span class="txtt" id="t_1">h</span>
            <span class="txtt" id="t_2">u</span>
            <span class="txtt" id="t_3">b</span>
            <span class="txtt" id="t_4">n</span>
            <span class="txtt" id="t_5">e</span>
            <span class="txtt" id="t_6">t</span>
            <span class="txtt" id="t_7">f</span>
            <span class="txtt" id="t_8">o</span>
            <span class="txtt" id="t_9">u</span>
            <span class="txtt" id="t_10">n</span>
            <span class="txtt" id="t_11">d</span>
            <span class="txtt" id="t_12">a</span>
            <span class="txtt" id="t_13">t</span>
            <span class="txtt" id="t_14">i</span>
            <span class="txtt" id="t_15">o</span>
            <span class="txtt" id="t_16">n</span>
            <span class="txtt" id="t_17">p</span>
            <span class="txtt" id="t_18">.</span>
            <span class="txtt" id="t_19">v</span>
            <span class="txtt" id="t_20">.</span>
            <span class="txtt" id="t_21">t</span>
            <span class="txtt" id="t_22">.</span>
        </div>
    </div> 
</span>
</body>
</html>