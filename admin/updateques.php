<?php 
include('../db/db.php');
session_start();
// $sql = "UPDATE complain SET Reply = '".$_POST['Reply']."', Status = '".$_POST['Status']."', RepliedBy = '".$_SESSION['NIDNo']."' WHERE serialno = $_POST['id']";
$sql = "UPDATE `question` SET `Reply`='".$_POST['Reply']."',`RepliedBy`='".$_SESSION["NIDNO"]."' WHERE `serialno` = '".$_POST['id']."'";
if($con->query($sql) ===  TRUE){
    echo '<script language="javascript">';
  echo 'alert("Info updated Successfully"); location.href="aquestion.php"';
  echo '</script>';
      }
      
      else{
          echo $con->Error;
      }
?>