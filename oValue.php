<?php  
   $connect = mysqli_connect("localhost", "root", "", "testing");

//---------session----------------//
session_start();
$custid = $_SESSION["cust_Id"];

$skillCount = count($_POST["skills"]);
$hobbyCount = count($_POST["hobby"]);
$achivCount = count($_POST["achivements"]);
$projCount = count($_POST["projects"]);
$refCount = count($_POST["ref"]);
$yearCount = count($_POST["years"]);
$workTypeCount = count($_POST["workType"]);
$CnameCount = count($_POST["Cname"]);
 

if ($skillCount >= 1) {
    for ($i=0; $i <$skillCount ; $i++) { 
      if(trim($_POST["skills"][$i] != ''))  
      {  
        $skills = mysqli_real_escape_string($connect, $_POST['skills'][$i]);
        $sql="INSERT INTO skills (cust_id,skill) 
        VALUES('$custid','$skills')";
        if (!mysqli_query($connect, $sql)) 
        {
            die('Error: ' . mysqli_error($connect));
        } 
        echo "Data Inserted";
      }
    }  
}

if ($achivCount>=1) {
    for ($i=0; $i <$achivCount ; $i++) { 
      if(trim($_POST["achivements"][$i] != ''))  
      {  
        $achivements = mysqli_real_escape_string($connect, $_POST['achivements'][$i]);
        $sql="INSERT INTO cust_achievement (cust_id,achiv) 
        VALUES('$custid','$achivements')";
        if (!mysqli_query($connect, $sql)) 
        {
            die('Error: ' . mysqli_error($connect));
        } 
        echo "Data Inserted";
      }
    }   
}
if ($projCount>=1) {
    for ($i=0; $i <$projCount ; $i++) { 
      if(trim($_POST["projects"][$i] != ''))  
      {  
        $projects = mysqli_real_escape_string($connect, $_POST['projects'][$i]);
        $sql="INSERT INTO projects (cust_id,proj_name) 
        VALUES('$custid','$projects')";
        if (!mysqli_query($connect, $sql)) 
        {
            die('Error: ' . mysqli_error($connect));
        } 
        echo "Data Inserted";
      }
    }   
}
if ($refCount>=1) {
    for ($i=0; $i <$refCount ; $i++) { 
      if(trim($_POST["ref"][$i] != ''))  
      {  
        $refr = mysqli_real_escape_string($connect, $_POST['ref'][$i]);
        $sql="INSERT INTO reference (cust_id,name) 
        VALUES('$custid','$refr')";
        if (!mysqli_query($connect, $sql)) 
        {
            die('Error: ' . mysqli_error($connect));
        } 
        echo "Data Inserted";
      }
    }   
}
if ($hobbyCount>=1) {
    for ($i=0; $i <$hobbyCount ; $i++) { 
      if(trim($_POST["hobby"][$i] != ''))  
      {  
        $hobbies = mysqli_real_escape_string($connect, $_POST['hobby'][$i]);
        $sql="INSERT INTO hobby (cust_id,hobby) 
        VALUES('$custid','$hobbies')";
        if (!mysqli_query($connect, $sql)) 
        {
            die('Error: ' . mysqli_error($connect));
        } 
        echo "Data Inserted";
      }
    }   
}
if ($yearCount>=1) {
    for ($i=0; $i <$yearCount ; $i++) { 
      if(trim($_POST["years"][$i] != '')&&trim($_POST["Cname"][$i] != '')&&trim($_POST["workType"][$i] != ''))  
      {  
        $years = mysqli_real_escape_string($connect, $_POST['years'][$i]);
        $Cname = mysqli_real_escape_string($connect, $_POST['Cname'][$i]);
        $workType = mysqli_real_escape_string($connect, $_POST['workType'][$i]);
        $sql="INSERT INTO workXP (custId,yearXP,workType,cName) 
        VALUES('$custid','$years','$workType','$Cname')";
        if (!mysqli_query($connect, $sql)) 
        {
            die('Error: ' . mysqli_error($connect));
        } 
        echo "Data Inserted";
      }
    }   
}
// if ($CnameCount>=1) {
//     for ($i=0; $i <$CnameCount ; $i++) { 
//       if(trim($_POST["Cname"][$i] != ''))  
//       {  
//         $Cname = mysqli_real_escape_string($connect, $_POST['Cname'][$i]);
//         $sql="INSERT INTO workXP (custId,cName) 
//         VALUES('$custid','$Cname')";
//         if (!mysqli_query($connect, $sql)) 
//         {
//             die('Error: ' . mysqli_error($connect));
//         } 
//         echo "Data Inserted";
//       }
//     }   
// }
// if ($workTypeCount>=1) {
//     for ($i=0; $i <$workTypeCount ; $i++) { 
//       if(trim($_POST["workType"][$i] != ''))  
//       {  
//         $workType = mysqli_real_escape_string($connect, $_POST['workType'][$i]);
//         $sql="INSERT INTO workXP (custId,workType) 
//         VALUES('$custid','$workType')";
//         if (!mysqli_query($connect, $sql)) 
//         {
//             die('Error: ' . mysqli_error($connect));
//         } 
//         echo "Data Inserted";
//       }
//     }   
// }

if(trim($_POST["obj"] != ''))  
{  
   $obj = mysqli_real_escape_string($connect, $_POST['obj']);   
}else{
  $obj  =NULL;
}

$sql="INSERT INTO obj (custId,obj) 
      VALUES('$custid','$obj')";
     if (!mysqli_query($connect, $sql)) {
          die('Error: ' . mysqli_error($connect));
      } echo "Data Inserted";

?> 