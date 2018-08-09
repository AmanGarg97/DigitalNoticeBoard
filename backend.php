<?php
$con = mysqli_connect("localhost" , "root" , "" ,"noticeboard") or die(mysqli_error($con));

$add = $_POST['add'];
$notice_id = $_POST['id'];

$select_query = "SELECT * FROM notice";
$select_submit = mysqli_query($con , $select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_submit);






$select_query2 = "SELECT * FROM notice WHERE id = '$notice_id'";
$select_submit2 = mysqli_query($con , $select_query2) or die(mysqli_error($con));
$row2 = mysqli_fetch_array($select_submit2);

if($row2 == 0){



$insert_query = "INSERT INTO notice(noticevalue , id) values('$add' , '$notice_id')";
$insert_submit = mysqli_query($con , $insert_query) or die(mysqli_error($con));
echo "Notice Successfully Added";
}

else{
  echo "Already ID exist";
}



?>