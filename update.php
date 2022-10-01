<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `information` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$location=$row['location'];
$matchcount=$row['matchcount'];
$timetaken=$row['timetaken'];
$milestravelled=$row['milestravelled'];
$fuelused=$row['fuelused'];
$numbervehicles=$row['numbervehicles'];
$registrationid=$row['registrationid'];


if(isset($_POST['submit'])){
   $location=$_POST['location'];
   $matchcount=$_POST['matchcount'];
   $timetaken=$_POST['timetaken'];
   $milestravelled=$_POST['milestravelled'];
   $fuelused=$_POST['fuelused'];
   $numbervehicles=$_POST['numbervehicles'];
   $registrationid=$_POST['registrationid'];


   $sql="update `information` set id=$id,location='$location',matchcount=$matchcount,timetaken=$timetaken,milestravelled=$milestravelled,fuelused=$fuelused,numbervehicles=$numbervehicles,registrationid=$registrationid where id=$id";
   $result=mysqli_query($con,$sql);
   if($result){
      // echo 'updated successfully';
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
         <input type="text" class="form-control" placeholder="Enter location" name="Name" autocomplete="off" value=<?php echo $Name?>>
         </div>
         <div class="form-group">
         <label>Date Of Joining</label>
         <input type="date" class="form-control" placeholder="Enter match count" name="DateOfJoining" autocomplete="off" value=<?php echo $DateOfJoining?> max=new Date()>
         </div>
         <div class="form-group">
         <labe>Department</label>
         <input type="text" class="form-control" placeholder="Enter time taken" name="Department" autocomplete="off" value=<?php echo $Department?>>
         </div>
         <div class="form-group">
         <label>Years</label>
         <input type="number" class="form-control" placeholder="Enter Years working" name="Years" autocomplete="off" value=<?php echo $Years?>>
         </div>
         <button type="submit" class="btn btn-primary" name="submit">Update</button>
      </form>
   </div>
</body>
</html>