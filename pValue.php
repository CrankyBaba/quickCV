<?php  
   $connect = mysqli_connect("localhost", "root", "", "testing"); 



 if(trim($_POST["name"] != ''))  
{  
   $name = mysqli_real_escape_string($connect, $_POST['name']);
    
}   
 if(trim($_POST["email"] != ''))  
{  
   $email = mysqli_real_escape_string($connect, $_POST['email']);
    
} if(trim($_POST["phone"] != ''))  
{  
   $phone = mysqli_real_escape_string($connect, $_POST['phone']);

} if(trim($_POST["ad"] != ''))  
{  
   $ad = mysqli_real_escape_string($connect, $_POST['ad']);    
}
$dob= date('Y-m-d',strtotime($_POST['dob']));
$gender=$_POST['sex'];

//---------session----------------//
session_start();
$custid = $_SESSION["cust_Id"];

  $sql="INSERT INTO personal (cust_id,name,gender,dob, email, phone, address) 
      VALUES('$custid','$name','$gender','$dob','$email','$phone','$ad')";
     if (!mysqli_query($connect, $sql)) {
          die('Error: ' . mysqli_error($connect));
      } echo "Data Inserted";
  
mysqli_close($connect);
   
 ?> 