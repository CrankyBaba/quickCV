<?php

$connect = mysqli_connect("localhost", "root", "", "testing");
session_start();
$custid = $_SESSION["cust_Id"];

$images_arr = array();

	$filenamePic = $_FILES["uploadfile"] ["name"];
	$tmpnamePic = $_FILES["uploadfile"] ["tmp_name"];
	$folderPic = "proPics/".$filenamePic;

	move_uploaded_file($tmpnamePic, $folderPic);
	
	$sql="INSERT INTO propic (cust_id,picsrc) 
      VALUES('$custid','$folderPic')";
     if (!mysqli_query($connect, $sql)) {
          die('Error: ' . mysqli_error($connect));
      } echo "Data Inserted";

     	
		foreach ($_FILES["uploaddoc"] ["name"] as $key=>$val){
		$filenameDoc = $_FILES["uploaddoc"] ["name"][$key];
		$tmpnameDoc = $_FILES["uploaddoc"] ["tmp_name"][$key];
		$fileName = basename($_FILES['uploaddoc']['name'][$key]);
		$folderDoc =  "docs/".$filenameDoc;

		if(move_uploaded_file($_FILES['uploaddoc']['tmp_name'][$key],$folderDoc)){
                $images_arr[] = $folderDoc;
            }
		

		$sql="INSERT INTO docs (cust_id,docsrc) 
      	VALUES('$custid','$folderDoc')";
     	if (!mysqli_query($connect, $sql)) {
          die('Error: ' . mysqli_error($connect));
      } echo "Data Inserted";
	} 



?>