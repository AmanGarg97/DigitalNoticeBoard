<?php

session_start();
$con = mysqli_connect("localhost" , "root" , "" ,"noticeboard") or die(mysqli_error($con));

$add = $_POST['add'];
$notice_id = $_POST['id'];


$id = 0;
$select_query = "SELECT max(id) AS `id` FROM notice";
$select_submit = mysqli_query($con , $select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_submit);

$select_query2 = "SELECT id FROM notice";
$select_submit2 = mysqli_query($con , $select_query2) or die(mysqli_error($con));
$row2 = mysqli_fetch_array($select_submit2);

$id2 = $row2['id'];
$id = $row['id'];
$input_id = 0;

echo $id;
echo $id2;

if($id <= 5)
{
  $input_id = $input_id + 1;
}

else
{
  
  $input_id = 0;
}

$insert_query = "INSERT INTO notice(noticevalue) values('$add')";
$insert_submit = mysqli_query($con , $insert_query) or die(mysqli_error($con));


if($id <= 5){
  

}

else{
  echo "wrong";
  $query = "ALTER TABLE notice AUTO_INCREMENT = 1";
  $submit = mysqli_query($con , $query);
  

  $update_query = "UPDATE notice SET noticevalue = '$add' WHERE id = 1";
  $update_submit = mysqli_query($con , $update_query) or die(mysqli_error($con));
}

?>