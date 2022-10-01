<?php

include 'connect.php';
if(isset($_POST['submit'])){
   $location=$_POST['location'];
   $matchcount=$_POST['matchcount'];
   $timetaken=$_POST['timetaken'];
   $milestravelled=$_POST['milestravelled'];
   $fuelused=$_POST['fuelused'];
   $numbervehicles=$_POST['numbervehicles'];
   $registrationid=$_POST['registrationid'];


   $sql="insert into `information` (location,matchcount,timetaken,milestravelled,fuelused,numbervehicles,registrationid) values('$location','$matchcount','$timetaken','$milestravelled','$fuelused','$numbervehicles','$registrationid')";
   $result=mysqli_query($con,$sql);
   if($result){
      header('location:display.php');
   }
   else{
      die(mysqli_error($con));
   }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Demo</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
   <div class="container my-5">
      <form method="post">
         <div class="form-group">
         <label>Name</label>
         <input type="text" class="form-control" placeholder="Enter Name" name="Name" autocomplete="off">
         </div>
         <div class="form-group">
         <label>Date Of Joining</label>
         <input type="date" class="form-control" placeholder="Enter Date Of Joining" name="DateOfJoining" autocomplete="off" max=new Date()>
         </div>
         <div class="form-group">
         <labe>Department</label>
         <input type="text" class="form-control" placeholder="Enter Department" name="Department" autocomplete="off">
         </div>
         <div class="form-group">
         <label>Years</label>
         <input type="number" class="form-control" placeholder="Enter years worked" name="Years" autocomplete="off">
         </div>
         <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
   </div>
</body>
</html>