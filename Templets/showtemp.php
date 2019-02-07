
 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css" />
	<style type="text/css">
		body{
			padding: 0px;
			margin: 0px;
			background-color: #171a29;
		}
		/*.screen-con{
			display: grid;
			grid-template-columns: auto auto;
		}
		.grid-con-1 img , .grid-con-2 img{
			width: 480px;
			height: 520px;
			opacity: 1;
		}
		.grid-con-1{
			position: relative;
		}
		#hvreft-1{
			transition: .5s ease;
			position: absolute;
			top: 250px;
			left: 100px;
			display: none;
		}
		#hvreft-2{
			position: absolute;
			top: 340px;
			left: 800px;
			display: none;
		}
		.grid-con-1 img:hover , .grid-con-2 img:hover{
			opacity: 0.3;
		}*/
		.swiper-container{
			margin: 0px;
			margin-top: 100px;
			padding:0px;
			width: 100%;
			height: 280px;
			background-color: #171a29;
			align-content: center;
			align-items: center;
			align-self: center;
		}
		.swiper-wrapper{
			margin: 40px;
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.swiper-slide{
			display: inline;
			width: 280px;
		}
		.swiper-slide img{
			height: 260px;
			width: 260px;
		}

		/*hover on effect*/
		.swiper-slide img:hover{
			opacity: 0.3;
			transform: scale(1.1);
		}
		.text{
			position: absolute;
			color: inherit;
			font-weight: 500;
			top: 45%;
			left: 8%;
			opacity: 0 ;
		}
		img:hover + .text{
			opacity: 1;
		}

		/*head*/
		.header-con{
			padding: 10px;
			margin: 0px;
			background-color: #2e6da4;
		}
		.header-bdy{
			margin: 20px;
			font-family: inherit;
			color: white;
			font-weight: 500;
			font-size: 25px;
		}
	</style>
</head>
<body>
<!--
	<div class="screen-con">
		<div class="grid-con-1">
			<img src="tempimg/mycvtemp4.png" onmouseenter="shwbut(1)" onmouseleave="hdut(1)">
			<div id="hvreft-1">
				<div class="text">X% of our user choose this template</div>
				<input type="submit" onclick="temppg(1)">
			</div>
		</div>
		<div class="grid-con-2">
			<img src="tempimg/mycvtemp.png" onmouseover="shwbut(2)" onmouseleave="hdut(2)">
			<div id="hvreft-2">
				<div class="text">X% of our user choose this template</div>
				<input type="submit" onclick="temppg(2)">
			</div>	
		</div>
	</div>
<script type="text/javascript">
	
	function shwbut(i){
		if(i===1){
			var x = document.getElementById("hvreft-1");
		}
		else if(i===2){
			var x = document.getElementById("hvreft-2")
		}
		x.style.display="block";
	}
	function hdbut(i){
		if(i===1){
			var x = document.getElementById("hvreft-1");
		}
		else if(i===2){
			var x = document.getElementById("hvreft-2")
		}
		x.style.display="none";
	}
</script> 
-->
<!--header-->
	<div class="header-con">
		<div class="header-bdy"><h1>Choose your CV..</h1></div>
	</div>
<!-- Swiper -->
	  <div class="swiper-container">
	    <div class="swiper-wrapper">
	      <div class="swiper-slide"><img src="tempimg/mycvtemp4.png" name="imgsub" onclick="temppg(1)"><div class="text">X% of our user choose this temp</div></div>
	      <div class="swiper-slide"><img src="tempimg/mycvtemp.png" onclick="temppg(2)"><div class="text">X% of our user choose this temp</div></div>
	      <div class="swiper-slide"><img src="tempimg/cvimg1.jpg" onclick="temppg(3)"><div class="text">Presently not avaliable.</br>Coming Soon..</div></div>
	      <div class="swiper-slide"><img src="tempimg/cvimg3.png"><div class="text">Presently not avaliable.</br>Coming Soon..</div></div>
	      <div class="swiper-slide"><img src="tempimg/mycvtemp.png"><div class="text">Presently not avaliable.</br>Coming Soon..</div></div>
	      <div class="swiper-slide"><img src="tempimg/mycvtemp4.png"><div class="text">Presently not avaliable.</br>Coming Soon..</div></div>
	    </div>
	    <!-- Add Pagination -->
	    <div class="swiper-pagination"></div>
	    <!-- Add Arrows -->
	    <div class="swiper-button-next"></div>
	    <div class="swiper-button-prev"></div>
	  </div>
	  <?php
/*	  if(isset($_POST["imgsub"]))
	  {
	  	echo "<script>alert('hhh');</script>";
				$con = mysqli_connect("localhost","root","","testing");
				if($con->connect_error){
					die("connection failed:$con->conect_error");
				} 

				$qur = mysqli_query($con,"update tempcunt set cvtemp4 = cvtemp4+2 where tempcunt_id='1'");
				if (mysqli_query($con, $qur)) {
   					echo "Record updated successfully";
				} else {
    				echo "Error updating record: " . mysqli_error($con);
				}
		}*/
		//---------session----------------//
  session_start();
  $custid = $_SESSION["cust_Id"];
  /*echo $custid;*/
			?>

<!-- Swiper JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>

<!--jquery file-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 
<script type="text/javascript">
	//Initialize Swiper 
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      //spaceBetween: 30,
      slidesPerGrouo: 3,
      loop:true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    //link for resume as respect to their choice
    function temppg(i){
		if(i==1){
			window.location="cvformate4.php";
		}
		else if(i==2){
			window.location="cvformate.php";
		}
		else if(i==3){
			window.location="cvformate4copy.php";
		}
	}
</script>
</body>
</html>
