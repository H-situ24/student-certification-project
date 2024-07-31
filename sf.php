<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
<h1 id="oc">student verification</h1>
    <hr style="margin-left: 150px;">
<?php
if($_POST['btn']){
    $myconn=mysqli_connect("localhost","root","","hub");
    $r=$_POST['regno'];
    $p=$_POST['phone'];
    $q="select * from student where RegNo='$r' or sphn='$p'";
    $rec=mysqli_query($myconn,$q);
    if(mysqli_num_rows($rec)>0){
        $data=mysqli_fetch_assoc($rec);
            ?>
            <table>
                <tr>
                    <td class="stle" id="r1"><img src="<?php echo "./pic/".$data['photo'];?>" alt="" width=100 height=100></td>
                </tr>
                <tr>
                    <td class="stle" id="r2"><?php echo $data['RegNo'];?></td>
                </tr>
                <tr>
                    <td class="stle" id="r3"><?php echo $data['sname'];?></td>
                </tr>
                <tr>
                    <td class="stle" id="r4"><?php echo $data['sphn'];?></td>
                </tr>
            </table>
            <?php
        }
        else{
            header("location: http://localhost/hubnet/veryfy.php");
        }
} 
?>           
</body>
</html>