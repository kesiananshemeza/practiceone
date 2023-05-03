<?php include ('connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice form </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="container">
        <button class ="btn btn-sm btn-success text-center"><a href=user.php class="text-light">Add user</a>
    
        </button>
        <table class="table">
  <thead>
   
    <tr>

      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?php 
    $sql="SELECT * FROM `practice`";
    $query=mysqli_query($conn, $sql);
    if($query){
      while( $row=mysqli_fetch_assoc($query))
      
    {
      ?>
    
        <tr>
       
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['mobile'];?></td>
        <td>
        <button type="button" class="btn btn-primary btn-sm">Edit</button>
        <button type="button" class="btn btn-danger btn-sm">Delete</button>
        </td>
      
      </tr>
   
      <?php }
    
    
     }
    
    ?>
    
  
  </tbody>
</table>
    </div>
</body>
</html>