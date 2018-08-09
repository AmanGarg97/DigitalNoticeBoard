<?php

session_start();
$con = mysqli_connect("localhost" , "root" , "" ,"noticeboard") or die(mysqli_error($con));

$notice_id = $_POST['id'];

$select_query = "SELECT * FROM notice WHERE id = '$notice_id'";
$select_submit = mysqli_query($con , $select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_submit);

if($row == 0){
  echo "No notice exist with this id";
}

else{
  $delete_query = "DELETE FROM notice WHERE id = '$notice_id'";
  $delete_submit = mysqli_query($con , $delete_query) or die(mysqli_error($con));
  
  echo "Notice Successfully Deleted.";
}

?>