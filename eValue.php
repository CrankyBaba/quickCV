<?php 
 $connect = mysqli_connect("localhost", "root", "", "testing");

 //---------session----------------//
session_start();
$custid = $_SESSION["cust_Id"];


 //==========================graduation=======================================

  if(trim($_POST["nameGradu"] != ''))  
{  
   $nameGradu = mysqli_real_escape_string($connect, $_POST['nameGradu']);
    
}else{
  $nameGradu = NULL;
}
if(trim($_POST["courseGradu"] != ''))  
{  
   $courseGradu = mysqli_real_escape_string($connect, $_POST['courseGradu']);
    
}else{
	$courseGradu = NULL;
} 

if(trim($_POST["pYearGradu"] != ''))  
{ 
   	$pYearGradu = mysqli_real_escape_string($connect, $_POST['pYearGradu']);
   	$pDateGradu=date('Y-m-d',strtotime($pYearGradu));    
}else{
	$pDateGradu = NUll;
}


 if(trim($_POST["cgpaGradu"] != ''))  
{  
   $cgpaGradu = mysqli_real_escape_string($connect, $_POST['cgpaGradu']);
    
} else{
  $cgpaGradu = NUll;
}
if(trim($_POST["boardGradu"] != ''))  
{  
   $boardGradu = mysqli_real_escape_string($connect, $_POST['boardGradu']);
    
} else{
	$boardGradu = NUll;
}

$sql="INSERT INTO gradu (cust_id,college_name,course, pass_year, cgpa, board) 
      VALUES('$custid','$nameGradu','$courseGradu','$pDateGradu','$cgpaGradu','$boardGradu')";
     if (!mysqli_query($connect, $sql)) {
          die('Error: ' . mysqli_error($connect));
      } echo "Data Inserted";

//==================================postgraduation==============================

 if(trim($_POST["namePost"] != ''))  
{  
   $namePost = mysqli_real_escape_string($connect, $_POST['namePost']);
    
}else{
  $namePost  =NULL;
}
if(trim($_POST["coursePost"] != ''))  
{  
   $coursePost = mysqli_real_escape_string($connect, $_POST['coursePost']);
    
}else{
	$coursePost  =NULL;
} 

if(trim($_POST["pYearPost"] != ''))  
{  
   $pYearPost = mysqli_real_escape_string($connect, $_POST['pYearPost']);
   $pDatePost=date('Y-m-d',strtotime($pYearPost));
    
}else{
	$pDatePost  =NULL;
}

 if(trim($_POST["cgpaPost"] != ''))  
{  
   $cgpaPost = mysqli_real_escape_string($connect, $_POST['cgpaPost']);
    
}else{
	$cgpaPost  =NULL;
}
if(trim($_POST["boardPost"] != ''))  
{  
   $boardPost = mysqli_real_escape_string($connect, $_POST['boardPost']);
    
} else{
  $boardPost = NUll;
}

$sql="INSERT INTO postgradu (cust_id,college_name,course, pass_year, cgpa, board) 
      VALUES('$custid','$namePost','$coursePost','$pDatePost','$cgpaPost','$boardPost')";
     if (!mysqli_query($connect, $sql)) {
          die('Error: ' . mysqli_error($connect));
      } echo "Data Inserted";
//==============================HS============================================
  
  if(trim($_POST["schoolNameHs"] != ''))  
{  
   $schoolNameHs = mysqli_real_escape_string($connect, $_POST['schoolNameHs']);
    
}else{
	$schoolNameHs  =NULL;
} 

if(trim($_POST["pYearHs"] != ''))  
{  
   $pYearHs = mysqli_real_escape_string($connect, $_POST['pYearHs']);
   $pDateHs=date('Y-m-d',strtotime($pYearHs));
    
}else{
	$pDateHs  =NULL;
}

 if(trim($_POST["boardHs"] != ''))  
{  
   $boardHs = mysqli_real_escape_string($connect, $_POST['boardHs']);
    
}else{
	$boardHs  =NULL;
}
 
 if(trim($_POST["percentHs"] != ''))  
{  
   $percentHs = mysqli_real_escape_string($connect, $_POST['percentHs']);
    
}else{
	$percentHs  =NULL;
}

$sql="INSERT INTO hs (cust_id,school_name, pass_year, board, percent) 
      VALUES('$custid','$schoolNameHs','$pDateHs','$boardHs','$percentHs')";
     if (!mysqli_query($connect, $sql)) {
          die('Error: ' . mysqli_error($connect));
      } echo "Data Inserted";

//==============================SC==============================================
  
  if(trim($_POST["schoolNameSc"] != ''))  
{  
   $schoolNameSc = mysqli_real_escape_string($connect, $_POST['schoolNameSc']);
    
}else{
	$schoolNameSc  =NULL;
} 

if(trim($_POST["pYearSc"] != ''))  
{  
   $pYearSc = mysqli_real_escape_string($connect, $_POST['pYearSc']);
   $pDateSc=date('Y-m-d',strtotime($pYearSc));
    
}else{
	$pDateSc  =NULL;
} 

if(trim($_POST["boardSc"] != ''))  
{  
   $boardSc = mysqli_real_escape_string($connect, $_POST['boardSc']);
    
}else{
	$boardSc  =NULL;
}
 if(trim($_POST["percentSc"] != ''))  
{  
   $percentSc = mysqli_real_escape_string($connect, $_POST['percentSc']);
    
}else{
	$percentSc  =NULL;
} 

$sql="INSERT INTO sc (cust_id,school_name, pass_year, board, percent) 
      VALUES('$custid','$schoolNameSc','$pDateSc','$boardSc','$percentSc')";
     if (!mysqli_query($connect, $sql)) {
          die('Error: ' . mysqli_error($connect));
      } echo "Data Inserted";


 ?>