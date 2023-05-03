<?php
//connect to the database
$host="localhost";
$username="root";
$password="";
$dbname="practiceone";
$conn=mysqli_connect($host,$username,$password,$dbname);
 
//check connection
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
//else{
  //  echo("connection successfull");
//}
?>



<!-- //get form data
// $name=$_POST['name'];
// $email=$_POST['email'];
// $mobile=$_POST['mobile'];
// $password=$_POST['password'];

// //insert data into database
// $sql="INSERT INTO `form_table`(`id`,`name`, `email`, `mobile`, `password`) VALUES (NULL,'$name','$email' '$mobile','$password')";
// $query=mysqli_query($conn,$sql);
// move_uploaded_file($tempname,$folder);
//     if(!$query)
//     {
//         echo "error in insertion";
//     }
// //if(mysqli_query($conn,$sql)){
//    // echo "new record added";
// //}
// //else{
//     //echo "error".sql.".mysqli_error($conn);
// //}
// //close connection
// mysqli_close($conn);

//  ?> -->