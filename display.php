<?php
include 'connect.php';

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
   <div class="container">
   <table class="table">
         <thead>
            <tr>
               <th scope="col">Name</th>
               <th scope="col">Date of Joining</th>
               <th scope="col">Department</th>
               <th scope="col">Years</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $sql="select * from `information`";
            $result=mysqli_query($con,$sql);
            if($result){
               while($row=mysqli_fetch_assoc($result)){
                  $id=$row['id'];
                  $Name=$row['Name'];
                  $DateOfJoining=$row['DateOfJoining'];
                  $Department=$row['Department'];
                  $Years=$row['Years'];
                  echo '<tr>'
                  if($row['Years']<5){
                     '<th scope="row">'.$Name.'</th>'
                     '<td>'.$DateOfJoining.'</td>
                     <td>'.$Department.'</td>
                     <td>'.$Years.'</td>'
                  }
                  else{
                     '<th scope="row" "style=background-color: #00FF00;">'.$Name.'</th>'
                     '<td "style=background-color: #00FF00;">'.$DateOfJoining.'</td>
                     <td "style=background-color: #00FF00;">'.$Department.'</td>
                     <td "style=background-color: #00FF00;">'.$Years.'</td>'
                  }
                  '<td>
                  <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                  <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                  </td>
               </tr>';
               }
            }
            
            ?>
      </tbody>
   </table>
   <button class="btn btn-primary"><a href="user.php" class="text-light">Add New</a></button>
   </div>
</body>
</html>