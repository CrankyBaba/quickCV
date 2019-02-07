 <?php session_start(); ?>
<?php $custid = $_SESSION["cust_Id"]; ?>
 <html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 12 (filtered)">
<title>Curriculum Vitae</title>
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
	{font-family:Verdana;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
	{font-family:Cremona;}
@font-face
	{font-family:Garamond;
	panose-1:2 2 4 4 3 3 1 1 8 3;}
 /* Style Definitions */
 body{
 	/*background-image: url(tempimg/image002.png);
 	background-repeat: no-repeat; 	*/
 	margin-left: 15%;
 	
 }
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	color:windowtext;}
h1
	{margin:0in;
	margin-bottom:.0001pt;
	page-break-after:avoid;
	font-size:14.0pt;
	font-family:Cremona;
	color:maroon;
	font-weight:bold;}
h2
	{margin:0in;
	margin-bottom:.0001pt;
	page-break-after:avoid;
	font-size:10.0pt;
	font-family:"Verdana","sans-serif";
	color:maroon;
	font-weight:bold;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{margin:0in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	color:windowtext;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{margin:0in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	color:windowtext;}
p.MsoTitle, li.MsoTitle, div.MsoTitle
	{margin:0in;
	margin-bottom:.0001pt;
	text-align:center;
	font-size:14.0pt;
	font-family:"Verdana","sans-serif";
	color:windowtext;
	font-weight:bold;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{margin:0in;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:"Verdana","sans-serif";
	color:windowtext;}
p.MsoBodyText2, li.MsoBodyText2, div.MsoBodyText2
	{margin:0in;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:"Verdana","sans-serif";
	color:maroon;
	font-weight:bold;}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;}
p
	{mso-style-link:"Normal \(Web\) Char";
	margin-right:0in;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	color:black;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-link:"Balloon Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:8.0pt;
	font-family:"Tahoma","sans-serif";
	color:windowtext;}
p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
	{mso-style-link:"No Spacing Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	color:windowtext;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	color:windowtext;}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	color:windowtext;}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	color:windowtext;}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	color:windowtext;}
span.NormalWebChar
	{mso-style-name:"Normal \(Web\) Char";
	mso-style-link:"Normal \(Web\)";
	color:black;}
p.Address1, li.Address1, div.Address1
	{mso-style-name:"Address 1";
	margin:0in;
	margin-bottom:.0001pt;
	text-align:center;
	line-height:8.0pt;
	font-size:7.5pt;
	font-family:"Garamond","serif";
	color:windowtext;
	text-transform:uppercase;
	letter-spacing:1.5pt;}
span.NoSpacingChar
	{mso-style-name:"No Spacing Char";
	mso-style-link:"No Spacing";
	font-family:"Calibri","sans-serif";}
p.SectionTitle, li.SectionTitle, div.SectionTitle
	{mso-style-name:"Section Title";
	margin-top:11.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:0in;
	margin-bottom:.0001pt;
	line-height:11.0pt;
	border:none;
	padding:0in;
	font-size:10.0pt;
	font-family:"Garamond","serif";
	color:windowtext;
	text-transform:uppercase;
	letter-spacing:.75pt;}
p.CompanyName, li.CompanyName, div.CompanyName
	{mso-style-name:"Company Name";
	margin-top:11.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:0in;
	margin-bottom:.0001pt;
	line-height:11.0pt;
	font-size:11.0pt;
	font-family:"Garamond","serif";
	color:windowtext;}
p.JobTitle, li.JobTitle, div.JobTitle
	{mso-style-name:"Job Title";
	margin-top:2.0pt;
	margin-right:0in;
	margin-bottom:2.0pt;
	margin-left:0in;
	font-size:11.5pt;
	font-family:"Garamond","serif";
	color:windowtext;
	letter-spacing:.25pt;
	font-style:italic;}
p.Achievement, li.Achievement, div.Achievement
	{mso-style-name:Achievement;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:3.0pt;
	margin-left:12.0pt;
	text-align:justify;
	text-indent:-12.0pt;
	line-height:12.0pt;
	font-size:11.0pt;
	font-family:"Garamond","serif";
	color:windowtext;}
span.st
	{mso-style-name:st;}
span.BalloonTextChar
	{mso-style-name:"Balloon Text Char";
	mso-style-link:"Balloon Text";
	font-family:"Tahoma","sans-serif";}
p.Default, li.Default, div.Default
	{mso-style-name:Default;
	margin:0in;
	margin-bottom:.0001pt;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	color:black;}
.MsoChpDefault
	{font-size:10.0pt;}
 /* Page Definitions */
 @page Section1
	{size:595.3pt 841.9pt;
	margin:56.7pt 99.25pt 56.7pt 70.9pt;}
div.Section1
	{page:Section1;}
 /* List Definitions */
 ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
-->


.preview{
	width: 800px;
 	border:2px black solid;
 	padding: 20px;
 	background-image: linear-gradient(to right, #ffb3b3, white, white);
}

.header-info{
	display: grid;
	grid-template-columns: 10% 80%;
}
.print-btn{
	margin-top: 50px;
	margin-left: 75%;
}
.print-btn button{
	height: 30px;
}
</style>

</head>

<body lang=EN-US link=blue vlink=purple>
	<div class="preview">
	<?php

		$con = mysqli_connect("localhost","root","","testing");
		if($con->connect_error){
			die("connection failed:$con->coonect_error");
		}
		//echo "connection sucess";

		$qur = mysqli_query($con,"select * from personal where cust_id='$custid'");
		while($res = mysqli_fetch_assoc($qur))
		{
			$cust_id = $res['cust_id'];
		
		?>	


<div class=Section1>
<div class="header-info">
	<div class="header-propic">	
  <?php
  $propicqry = mysqli_query($con,"select * from propic where cust_id='$cust_id'");
  while($propicres = mysqli_fetch_assoc($propicqry)){ ?>
  	<img width=165 height=163 src="<?php echo "../".$propicres['picsrc']; }?>">
	</div>
<div class="header-txt">
<p class=MsoTitle><span style='position:relative;z-index:-2'></span><span
style='font-size:36.0pt;font-family:"Times New Roman","serif"'><?php echo $res['name'];?></span></p>

<p class=MsoTitle style='margin-right:5.0pt'><span lang=NO-BOK
style='font-size:12.0pt;font-family:"Times New Roman","serif"'><br>
<?php echo $res['address'];  ?></span></p>

<p class=MsoNormal align=center style='margin-left:117.0pt;text-align:center;
text-indent:-117.0pt'><span lang=EN-GB style='font-size:9.0pt'>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center'><b><span lang=EN-GB
style='font-size:11.0pt'>Mobile:</span></b><span lang=EN-GB style='font-size:
11.0pt'> <?php echo $res['phone']; ?>&emsp;<b>E-mail: </b><?php echo $res['email'];?> </span></p>
</div></div>

<p class=MsoTitle align=left style='text-align:left'><span lang=NO-BOK
style='font-size:12.0pt;font-family:"Times New Roman","serif";color:maroon'>&nbsp;</span></p>
<?php } ?>
<p class=MsoTitle align=left style='text-align:left'><span style='position:
absolute;z-index:1;margin-left:-22px;margin-top:31px;width:649px;height:13px'><img
width=649 height=13 src="tempimg/image003.png"></span><span
lang=NO-BOK style='font-size:18.0pt;font-family:"Times New Roman","serif";
color:maroon'>Personal Profile </span></p>

<p class=MsoTitle align=right style='text-align:right'><span lang=NO-BOK
style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
<!-- php for objective -->
<?php
  $objqry = mysqli_query($con,"select * from obj where custId='$cust_id'");
  while($objres = mysqli_fetch_assoc($objqry)){ ?>

<p class=MsoNormal align=center style='margin-left:117.0pt;text-align:center;
text-indent:-117.0pt'><span lang=EN-GB style='font-size:8.0pt'>&nbsp;</span></p>

<p class=MsoNormal><span lang=EN-GB><?php echo $objres['obj']; } ?></span></p>			<!--end of db cust_info-->

<p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

<p class=MsoBodyText><span lang=EN-GB style='font-size:9.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoTitle align=left style='text-align:left'><span style='position:
absolute;z-index:2;margin-left:-22px;margin-top:31px;width:649px;height:13px'><img
width=649 height=13 src="tempimg/image003.png"></span><span
lang=NO-BOK style='font-size:18.0pt;font-family:"Times New Roman","serif";
color:maroon'>Achievements</span></p>

<p class=MsoTitle align=right style='text-align:right'><span lang=NO-BOK
style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:117.0pt;text-indent:-117.0pt'><span
lang=NO-BOK style='font-size:8.0pt'>&nbsp;</span></p>

<!--  DB for achievement -->
<?php 
	
	
	$achvqry = mysqli_query($con,"select * from cust_achievement where cust_id='$cust_id'");
	while($achvres = mysqli_fetch_assoc($achvqry)){
?>

<p class=MsoNoSpacing style='margin-top:0in;margin-right:0in;margin-bottom:
6.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
font-family:Wingdings'>&#8827;<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
style='font-size:12.0pt;font-family:"Times New Roman","serif"'><?php echo $achvres['achiv']; }?></span></p> 
 
<p class=MsoNoSpacing style='margin-top:0in;margin-right:0in;margin-bottom:
6.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
font-family:Wingdings'><span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span>
<!-- unnessary code
<span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>[insert
achievement]</span></p>

<p class=MsoNoSpacing style='margin-top:0in;margin-right:0in;margin-bottom:
6.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
font-family:Wingdings'>Ø<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
style='font-size:12.0pt;font-family:"Times New Roman","serif"'>[insert
achievement]<br>
<br>
</span></p>

-->


<p class=MsoTitle align=left style='text-align:left'><span style='position:
absolute;z-index:6;margin-left:-22px;margin-top:31px;width:649px;height:13px'><img
width=649 height=13 src="tempimg/image003.png"></span><span
lang=NO-BOK style='font-size:18.0pt;font-family:"Times New Roman","serif";
color:maroon'>Education</span></p>

<p>
<table cellspacing="10">
	<tr>
		<td><b>Passing Year</b></td>
		<td><b>Course</b></td>
		<td><b>Institution</b></td>
		<td><b>Board/University</b></td>
		<td><b>Grade achieved</b></td>
	</tr>
</p>

<!--php for education -->
<?php
		
		$eduqry = mysqli_query($con,"select * from postgradu where cust_id='$cust_id'");
		while($edures = mysqli_fetch_assoc($eduqry)){ 
			if( $edures['college_name'] != 0){ ?>
			<tr>	
				<td><?php echo $edures['pass_year']; ?></td>
				<td><?php echo $edures['course']; ?></td>
				<td><?php echo $edures['college_name']; ?></td>
				<td><?php echo $edures['board']; ?></td>
				<td><?php echo $edures['cgpa']; ?></td>
			</tr> <?php }}

			$eduqry = mysqli_query($con,"select * from gradu where cust_id='$cust_id'");
		while($edures = mysqli_fetch_assoc($eduqry)){ ?>
			<tr>	
				<td><?php echo $edures['pass_year']; ?></td>
				<td><?php echo $edures['course']; ?></td>
				<td><?php echo $edures['college_name']; ?></td>
				<td><?php echo $edures['board']; ?></td>
				<td><?php echo $edures['cgpa']; ?></td>
			</tr> <?php } 

		$eduqry = mysqli_query($con,"select * from hs where cust_id='$cust_id'");
		while($edures = mysqli_fetch_assoc($eduqry)){ ?>
			<tr>	
				<td><?php echo $edures['pass_year']; ?></td>
				<td><?php echo '12th' ?></td>
				<td><?php echo $edures['school_name']; ?></td>
				<td><?php echo $edures['board']; ?></td>
				<td><?php echo $edures['percent']; ?></td>
			</tr> <?php }

			$eduqry = mysqli_query($con,"select * from sc where cust_id='$cust_id'");
		while($edures = mysqli_fetch_assoc($eduqry)){ ?>
			<tr>	
				<td><?php echo $edures['pass_year']; ?></td>
				<td><?php echo '10th' ?></td>
				<td><?php echo $edures['school_name']; ?></td>
				<td><?php echo $edures['board']; ?></td>
				<td><?php echo $edures['percent']; ?></td>
			</tr> <?php }
			 ?>
		</table> 
<!--

<p class=MsoTitle align=right style='text-align:right'><span lang=NO-BOK
style='font-size:9.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:117.0pt;text-indent:-117.0pt'><b><span
lang=NO-BOK style='font-size:18.0pt;color:maroon'>&nbsp;</span></b></p>

<p class=MsoNormal style='margin-left:117.0pt;text-indent:-117.0pt'><b><span
lang=EN-GB><td> </td><td> </td></span></b><b><span lang=NO-BOK>&emsp;</span></b><span
lang=NO-BOK><td></td><td> </td></tr></table></span></p>

<p class=MsoNormal style='margin-left:117.0pt;text-indent:-117.0pt'><b><span
lang=NO-BOK>Grade achieved:&emsp;&emsp;</span></b></p>


<!--usless shit of code
<p class=MsoNormal style='margin-left:117.0pt;text-indent:-117.0pt'><b><span
lang=NO-BOK>&nbsp;</span></b></p>

<p class=MsoNormal style='margin-left:117.0pt;text-indent:-117.0pt'><b><span
lang=EN-GB>[From – To]</span></b><b><span lang=NO-BOK>                  </span></b><span
lang=NO-BOK>[Course]                   [Institution Name]</span></p>

<p class=MsoNormal style='margin-left:117.0pt;text-indent:-117.0pt'><b><span
lang=NO-BOK>Grade achieved:           [Grade]</span></b></p>

<p class=MsoNormal style='margin-left:117.0pt;text-indent:-117.0pt'><b><span
lang=NO-BOK>&nbsp;</span></b></p>

<p class=MsoNormal style='margin-left:117.0pt;text-indent:-117.0pt'><b><span
lang=EN-GB>[From – To]</span></b><b><span lang=NO-BOK>                  </span></b><span
lang=NO-BOK>[Course]                   [Institution Name]</span></p>

<p class=MsoNormal style='margin-left:117.0pt;text-indent:-117.0pt'><b><span
lang=NO-BOK>Grade achieved:           [Grade]</span></b></p>

<p class=MsoNormal><b><span lang=NO-BOK style='font-size:18.0pt;color:maroon'>&nbsp;</span></b></p>-->

<p class=MsoTitle align=left style='text-align:left'><span style='position:
absolute;z-index:6;margin-left:-22px;margin-top:31px;width:649px;height:13px'><img
width=649 height=13 src="tempimg/image003.png"></span><b><span lang=NO-BOK
style='font-size:18.0pt;color:maroon'>Work Experience</span></b></p>

<!-- php code for work exprience-->
<?php
	
	$wrkqry = mysqli_query($con,"select * from workxp where custId='$custid'");
	$noyrexp = mysqli_num_rows($wrkqry);
	/*echo "$noyrexp";*/
	if($noyrexp > 0)
	{
		while($wrkres = mysqli_fetch_assoc($wrkqry)){ 
    ?>
			

<p class=MsoTitle align=right style='text-align:right'><span lang=NO-BOK
style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:117.0pt;text-indent:-117.0pt'><span
lang=NO-BOK style='font-size:8.0pt'>&nbsp;</span></p>

<!--<p class=MsoNormal><b><span lang=EN-GB><php echo $reswrkyr['year'];?>&emsp;&emsp;&emsp;<php echo $reswrktyp['workType'];?> &emsp;&emsp;&emsp;<php echo $reswrkcnm['Cname'];?></span></b></p>-->
 

<!---
	<p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

<p class=MsoNormal><span lang=EN-GB>Main duties performed:&emsp;<php echo $reswrkcnm['Cname'];?></span></p>

<p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>-->



<p class=MsoNormal><b><span lang=EN-GB><!--[From – To]--><?php  echo $wrkres['yearXP'].'year'; ?>                           <!--[Job
Position]--><?php echo $wrkres['workType']; ?>                         <!--[Company name]--><?php echo $wrkres['cName']; ?></span></b></p>
<?php   
        }
  }
  else{ ?>
  	<p class=MsoTitle align=right style='text-align:right'><span lang=NO-BOK
style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:117.0pt;text-indent:-117.0pt'><span
lang=NO-BOK style='font-size:8.0pt'>&nbsp;</span></p>
    <p class=MsoNormal><b><span lang=EN-GB>Freshers</span></b></p>
<?php }
?> 
<p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>
<!--
<p class=MsoNormal><span lang=EN-GB>Main duties performed:  </span></p>

<p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

<p class=MsoNormal><b><span lang=EN-GB>[From – To]                           [Job
Position]                         [Company name]</span></b></p>

<p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

<p class=MsoNormal><span lang=EN-GB>Main duties performed: </span></p>-->

<!-- projects-->
<p class=MsoTitle align=left style='text-align:left'><span style='position:
absolute;z-index:6;margin-left:-22px;margin-top:31px;width:649px;height:13px'><img
width=649 height=13 src="tempimg/image003.png"></span><b><span
lang=NO-BOK style='font-size:18.0pt;color:maroon'>Projects</span></b></p>

<p class=MsoTitle align=right style='text-align:right'><span lang=NO-BOK
style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<!-- php for projects -->
<?php
	$proqry = mysqli_query($con,"select * from projects where cust_id='$cust_id'");
	while($prores = mysqli_fetch_assoc($proqry)){ ?>

		<p class=MsoNoSpacing style='margin-top:0in;margin-right:0in;margin-bottom:
6.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
font-family:Wingdings'>&#8827;<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
style='font-size:12.0pt;font-family:"Times New Roman","serif"'><?php echo $prores['proj_name']; }?></span></p> 
<p class=MsoNormal style='margin-left:117.0pt;text-indent:-117.0pt'><b><span
lang=NO-BOK style='font-size:18.0pt;color:maroon'>&nbsp;</span></b></p>



<p class=MsoTitle align=left style='text-align:left'><span style='position:
absolute;z-index:6;margin-left:-22px;margin-top:31px;width:649px;height:13px'><img
width=649 height=13 src="tempimg/image003.png"></span><b><span
lang=NO-BOK style='font-size:18.0pt;color:maroon'>Skills</span></b></p>

<p class=MsoTitle align=right style='text-align:right'><span lang=NO-BOK
style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<!-- php for skills -->
<?php
	$sklqry = mysqli_query($con,"select * from skills where cust_id='$cust_id'");
	while($sklres = mysqli_fetch_assoc($sklqry)){ ?>

		<p class=MsoNoSpacing style='margin-top:0in;margin-right:0in;margin-bottom:
6.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
font-family:Wingdings'>&#8827;<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
style='font-size:12.0pt;font-family:"Times New Roman","serif"'><?php echo $sklres['skill']; }?></span></p> 
 

<!--
<p class=MsoTitle align=right style='text-align:right'><span lang=NO-BOK
style='font-size:9.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoTitle align=right style='text-align:right'><span lang=NO-BOK
style='font-size:8.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=Default><b><span lang=EN-GB style='color:windowtext'><br>
Technical:<?php echo $techskill; ?></span></b><span lang=EN-GB style='color:windowtext'> </span></p>

<p class=Default><b><span lang=EN-GB style='color:windowtext'>&nbsp;</span></b></p>

<p class=Default><b><span lang=EN-GB style='color:windowtext'>Interpersonal: <?php echo $interskill; ?></span></b></p>

<p class=Default><span lang=EN-GB style='font-family:Wingdings;color:windowtext'>&nbsp;</span></p>-->

<!-- check the value of other -->
<!--
<?php 
if($othrskill != ''){?>
<p class=Default><b><span lang=EN-GB style='color:windowtext'>Other: <?php echo $othrskill; ?> </span></b><span
lang=EN-GB style='color:windowtext'> </span></p><?php } ?>-->

<p class=MsoNormal style='margin-left:117.0pt;text-indent:-117.0pt'><b><span
lang=NO-BOK style='font-size:18.0pt;color:maroon'>&nbsp;</span></b></p>

<p class=MsoTitle align=left style='text-align:left'><span style='position:
absolute;z-index:6;margin-left:-22px;margin-top:31px;width:649px;height:13px'><img
width=649 height=13 src="tempimg/image003.png"></span><b><span lang=NO-BOK
style='font-size:18.0pt;color:maroon'>Hobbies and Interests</span></b></p>

<p class=MsoTitle align=right style='text-align:right'><span lang=NO-BOK
style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoNormal><span lang=EN-GB style='font-size:8.0pt'>&nbsp;</span></p>

<p class=MsoNormal><span lang=EN-GB style='font-size:10.0pt'>&nbsp;</span></p>

<!-- php for hobby -->
<?php
	$hbyqry = mysqli_query($con,"select * from hobby where cust_id='$cust_id'");
	while($hbyres = mysqli_fetch_assoc($hbyqry)){ ?>
		<p class=MsoNoSpacing style='margin-top:0in;margin-right:0in;margin-bottom:
6.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
font-family:Wingdings'>&#8827;<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
style='font-size:12.0pt;font-family:"Times New Roman","serif"'><?php echo $hbyres['hobby']; ?></span></p> <?php } ?>
 

<!--<p class=MsoNormal><span lang=EN-GB>[Briefly outline your hobbies and interests
(particularly those that are related to the job you are applying for)]</span></p>-->

<p class=MsoNormal><span lang=EN-GB style='font-size:10.0pt'>&nbsp;</span></p>

<p class=MsoNormal><span lang=EN-GB style='font-size:10.0pt'>&nbsp;</span></p>

<p class=MsoTitle align=left style='text-align:left'><span style='position:
absolute;z-index:5;margin-left:-22px;margin-top:31px;width:649px;height:13px'><img
width=649 height=13 src="tempimg/image003.png"></span><span
lang=NO-BOK style='font-size:18.0pt;font-family:"Times New Roman","serif";
color:maroon'>Referees</span></p>

<p class=MsoTitle align=right style='text-align:right'><span lang=NO-BOK
style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:117.0pt;text-indent:-117.0pt'><span
lang=NO-BOK style='font-size:6.0pt'>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:3.0in;text-indent:-3.0in'><span lang=FR>&nbsp;</span></p>


<!-- php for ref -->
<?php
	$refqry = mysqli_query($con,"select * from reference where cust_id='$custid'");
	while($refres = mysqli_fetch_assoc($refqry)){ ?>

<p class=MsoNormal><b><span lang=EN-GB><?php echo $refres['name']; }?></span></b></p>
<!--
<p class=MsoNormal><span lang=EN-GB>[Job position / company name]</span></p>
<p class=MsoNormal><b><span lang=EN-GB>Address: </span></b><span lang=EN-GB>[insert
here]</span></p>
<p class=MsoNormal><b><span lang=EN-GB>Tel: </span></b><span lang=EN-GB>[insert
here]</span><b><span lang=EN-GB></span></b></p>
<p class=MsoNormal><b><span lang=EN-GB>Email: </span></b><span lang=EN-GB>[insert here]</span><b><span lang=EN-GB></span></b></p>-->
<!--
<p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

<p class=MsoNormal><b><span lang=EN-GB>[Referee 2 full name]                                                
</span></b></p>

<p class=MsoNormal><span lang=EN-GB>[Job position / company name]                                   </span></p>

<p class=MsoNormal><b><span lang=EN-GB>Address: </span></b><span lang=EN-GB>[insert
here]</span></p>

<p class=MsoNormal><b><span lang=EN-GB>Tel: </span></b><span lang=EN-GB>[insert
here]</span><b><span lang=EN-GB>                                                                     
</span></b></p>

<p class=MsoNormal style='margin-left:3.0in;text-indent:-3.0in'><b><span
lang=EN-GB>Email: </span></b><span lang=EN-GB>[insert here]</span></p>-->

<!--attachments kbugd--------------------------------->
<p class=MsoNormal style='margin-left:117.0pt;text-indent:-117.0pt'><b><span
lang=NO-BOK style='font-size:18.0pt;color:maroon'>&nbsp;</span></b></p>

<p class=MsoTitle align=left style='text-align:left'><span style='position:
absolute;z-index:6;margin-left:-22px;margin-top:31px;width:649px;height:13px'><img
width=649 height=13 src="tempimg/image003.png"></span><b><span lang=NO-BOK
style='font-size:18.0pt;color:maroon'>Attachments</span></b></p>

<p class=MsoTitle align=right style='text-align:right'><span lang=NO-BOK
style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoNormal><span lang=EN-GB style='font-size:8.0pt'>&nbsp;</span></p>

<p class=MsoNormal><span lang=EN-GB style='font-size:10.0pt'>&nbsp;</span></p>

<!-- php for hobby -->
<?php 
  $docqry = mysqli_query($con,"select * from docs where cust_id='$cust_id'");
  while($docres = mysqli_fetch_assoc($docqry)){
     $filenm = $docres['docsrc'];
     $path_parts = pathinfo($filenm);
     ?>
		<p class=MsoNoSpacing style='margin-top:0in;margin-right:0in;margin-bottom:
6.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
font-family:Wingdings'>&#8827;<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
style='font-size:12.0pt;font-family:"Times New Roman","serif"'><?php echo $path_parts['filename'];?></span></p> <?php } ?>
 

<p class=MsoTitle align=right style='text-align:right'><span lang=NO-BOK
style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoTitle align=right style='text-align:right'><span lang=NO-BOK
style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoTitle align=right style='text-align:right'><span lang=NO-BOK
style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoTitle align=right style='text-align:right'><span lang=NO-BOK
style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoTitle align=right style='text-align:right'><span lang=NO-BOK
style='font-family:"Times New Roman","serif"'>&nbsp;</span></p>
</div>
</div>
</div>
<p class="print-btn"><button onclick="myFunction()"  id="print-btn">Print this page</button></p>

<script>

function myFunction() {
	//var x = document.getElementById("print-btn");
	//x.style.display="none";
    window.print();
}
</script>

</body>

</html>
