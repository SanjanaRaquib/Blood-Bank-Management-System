<?php
include 'database.php';
if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $bloodGroup=$_POST['bloodGroup'];
  $location=$_POST['location'];
  $age=$_POST['age'];
  $contact=$_POST['contact'];
  $sql= "insert into name(name,bloodGroup,location,age,contact) values('$name','$bloodGroup','$location','$age','$contact')";
 
  if(mysqli_query($con,$sql)) {
    echo "<script>alert('new record inserted')</script>";
  }
  else {
    echo "error: ". mysqli_error($con);
  }
  mysqli_close($con);

}
?>