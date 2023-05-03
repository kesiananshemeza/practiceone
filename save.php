<?php include ('connection.php');?>
<?php
if(isset($_POST['submit'])){
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

// insert data into database
//<!-- retrieving information from db -->

//$sql="SELECT * FROM `practice` order by id desc";
//$query=mysqli_query($conn, $sql);
//while($row=mysqli_fetch_array($query))


// <tr>
//$sql=  SELECT * FROM `practice` WHERE 1"INSERT INTO `practice`( `id`,`name`, `email`, `mobile`, `password`) VALUES ($id','$name','$email' '$mobile','$password')";
//$result=mysqli_query($conn,$sql);


$sql="INSERT INTO `practice`(`id`, `name`, `email`, `mobile`, `password`)VALUES
(NULL, '$name','$email','$mobile','$password')";
$query=mysqli_query($conn, $sql);
if($query){
    header("location:display.php");
}else{
    die(mysqli_error($conn));
}
}
?>