<?php 
    require 'dbconnects.php';
    if (!isset($_POST['btn_sub'])) {
    header("location:changepass.php");
}
    var_dump($_POST);
    $id = $_POST['txt_id'];
    $ps = $_POST['txt_n'];
    $cps= $_POST['txt_cn'];
    if($ps!=$cps)
    {
        header("location:changepass.php");
    }                                  
    $qry="UPDATE user_tble SET password='".$ps."' WHERE id='".$id."'";
    $rs=mysqli_query($conn,$qry);
                                        if($rs)
                                        {
                                            echo "Updated";
                                            header("location:login.php");
                                        }
                                        else
                                        {
                                            header("location:forgotpass.php");
                                        }                                          
                          ?>

