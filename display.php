<?php
include 'connect.php';
?>


<!<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>crud_operation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
    <button  class ="btn btn-primary  my-5">
    
    <a href="user.php" class='text-light'>Add user</a>
    
    </button>
    </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">operations</th>
 



        
    </tr>
  </thead>
  <tbody>
  <?php
  //update
  $sql ="Select * from `crud` ";
 $result=mysqli_query($con,$sql);
 if($result){

     while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>
        <button class="btn btn-primary"> <a href="update.php? updateid='.$id.'" class="text-light">update</a></button>
        <button class="btn btn-danger"> <a href="delete.php? deleteid='.$id.'" class ="text-light">Delete</a></button>
        <td/>
      </tr>';
     }
    } 
     
      
 
  ?>
    
  </tbody>
</table>
</body>
</html>