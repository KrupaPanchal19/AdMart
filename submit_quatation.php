<?php
    require 'dbconnects.php';
    session_start();
    $id=$_SESSION['id'];
    $qry1="SELECT * FROM user_tble WHERE id=$id";
            $rs1=mysqli_query($conn,$qry1);
            $row1=mysqli_fetch_assoc($rs1);
            $firstname=$row1['firstname'];
            $adid=$_SESSION['ad_id'];
    $qry2="SELECT * FROM subcate_tbl WHERE s_id=$adid";
    $rs2=mysqli_query($conn,$qry2);
    $row2=mysqli_fetch_assoc($rs2);
    $name=$row2['subcate_name'];
    $isactive=1;
    $h=$_SESSION['price'];
    $b=$_SESSION['qty'];
    $a=$_SESSION['duration'];
    $cat_name=$_SESSION['cat_name'];
    $c=$h*$b*$a;
    $d=$c+$c*0.15;
    $Q=$_SESSION['quatation'];
    $q="INSERT INTO quoo_tbl(quotation_no,service_name,name,final_price,u_id,user_name,quantity,duration,isactive) VALUES('".$Q."','".$cat_name."','".$name."','".$d."','".$id."','".$firstname."','".$b."','".$a."','".$isactive."')";
    $rs=mysqli_query($conn,$q);
    if($rs)
    {
         header("location:print_quatation.php");
    }
    else
    {
        echo "error";
    }
?>