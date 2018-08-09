<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
  <div class="container text-center" style="font-size:40px;">
    ADMIN PAGE
  </div>
  <div class="row" style = "padding:70px">
    <ul>
      <li><button onclick="add()">ADD NOTICE</button></li>
      <div style="padding:20px;display:none" id="add">
       <form method="post" action="backend.php">
       <input type="number" placeholder="Notice ID" name="id">
        <input type="text" style="width:700px;" name="add" placeholder="Text">
        <button>Submit</button>
        </form>
      </div>
<!--      <li><a href="admin.html">UPDATE EXISTING NOTICE</a></li>-->
      <li style="padding-top:10px;"><button onclick="delete1()">DELETE NOTICE</button></li>
      <div style="padding:20px;display:none" id="delete">
       <form method="post" action="delete_backend.php">
       <input type="number" placeholder="Notice ID" name="id">
<!--        <input type="text" style="width:700px;" name="add" placeholder="Text">-->
        <button>Delete</button>
        </form>
      </div>
      
      <li style="padding-top:10px;"><button onclick="view()">View All Notice ID's</button></li>
      <div style="padding-top:20px;display:none;" id="view" >
      <?php
      
      
    
      $con = mysqli_connect("localhost" , "root" , "" ,"noticeboard") or die(mysqli_error($con));
      $select_query = "SELECT * FROM notice";
      if($select_submit = mysqli_query($con , $select_query)){
        while($row = mysqli_fetch_array($select_submit)){
          
          $id = $row['id'];
          $value = $row['noticevalue'];
          echo "<li>".$id. '&nbsp&nbsp&nbsp&nbsp' .$value."</li>";
          
        }
        
      } 
      
      ?>
      </div>
     
      
      
      
<!--      <li><a href="admin.html">CHANGE DATE/PRIORITY</a></li>-->
    </ul>
  </div>
</body>
<script>
  function add(){
    var x = document.getElementById("add");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
  }
  
  function view(){
    var z = document.getElementById("view");
   if (z.style.display === "none") {
        z.style.display = "block";
    } else {
        z.style.display = "none";
    }
  }
  
  
  </script>
  
  <script>
  function delete1(){
    var y = document.getElementById("delete");
   if (y.style.display === "none") {
        y.style.display = "block";
    } else {
        y.style.display = "none";
    }
  }</script>
</html>