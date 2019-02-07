<?php session_start(); ?>
<?php $custid = $_SESSION["cust_Id"]; ?>
<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 12 (filtered)">
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
	{font-family:Cambria;
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
	{font-family:Garamond;
	panose-1:2 2 4 4 3 3 1 1 8 3;}
@font-face
	{font-family:Impact;
	panose-1:2 11 8 6 3 9 2 5 2 4;}
 /* Style Definitions */


body{
  margin-left: 15%;
}

 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:4.0pt;
	margin-right:0in;
	margin-bottom:2.0pt;
	margin-left:0in;
	font-size:11.0pt;
	font-family:"Cambria","serif";}
h1
	{mso-style-link:"Heading 1 Char";
	margin-top:16.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:0in;
	margin-bottom:.0001pt;
	font-size:26.0pt;
	font-family:"Garamond","serif";
	color:#556D7D;
	font-weight:normal;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-link:"Header Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Cambria","serif";}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-link:"Footer Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Cambria","serif";}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;}
p
	{margin-right:0in;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-link:"Balloon Text Char";
	margin-top:4.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:0in;
	margin-bottom:.0001pt;
	font-size:8.0pt;
	font-family:"Tahoma","sans-serif";}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:4.0pt;
	margin-right:0in;
	margin-bottom:2.0pt;
	margin-left:7.9pt;
	font-size:11.0pt;
	font-family:"Cambria","serif";}
span.BalloonTextChar
	{mso-style-name:"Balloon Text Char";
	mso-style-link:"Balloon Text";
	font-family:"Tahoma","sans-serif";}
span.Heading1Char
	{mso-style-name:"Heading 1 Char";
	mso-style-link:"Heading 1";
	font-family:"Garamond","serif";
	color:#556D7D;}
p.BoldLarge, li.BoldLarge, div.BoldLarge
	{mso-style-name:"Bold Large";
	margin-top:4.0pt;
	margin-right:0in;
	margin-bottom:2.0pt;
	margin-left:0in;
	font-size:14.0pt;
	font-family:"Cambria","serif";
	color:#2F3133;
	font-weight:bold;}
p.Name, li.Name, div.Name
	{mso-style-name:Name;
	margin-top:4.0pt;
	margin-right:0in;
	margin-bottom:2.0pt;
	margin-left:0in;
	text-align:right;
	font-size:40.0pt;
	font-family:"Garamond","serif";
	color:skyblue;
	letter-spacing:2.0pt;
	font-weight:bold;}
p.BoldNormal, li.BoldNormal, div.BoldNormal
	{mso-style-name:"Bold Normal";
	margin-top:4.0pt;
	margin-right:0in;
	margin-bottom:2.0pt;
	margin-left:0in;
	font-size:11.0pt;
	font-family:"Cambria","serif";
	font-weight:bold;}
p.ContactInfo, li.ContactInfo, div.ContactInfo
	{mso-style-name:"Contact Info";
	margin:0in;
	margin-bottom:.0001pt;
	text-align:right;
	font-size:11.0pt;
	font-family:"Cambria","serif";}
span.HeaderChar
	{mso-style-name:"Header Char";
	mso-style-link:Header;
	font-family:"Cambria","serif";}
span.FooterChar
	{mso-style-name:"Footer Char";
	mso-style-link:Footer;
	font-family:"Cambria","serif";}
p.Contacts, li.Contacts, div.Contacts
	{mso-style-name:Contacts;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:2.0pt;
	margin-left:0in;
	text-align:right;
	font-size:11.0pt;
	font-family:"Cambria","serif";}
span.tgc
	{mso-style-name:_tgc;}
.MsoPapDefault
	{margin-bottom:4.0pt;}
 /* Page Definitions */
 @page Section1
	{size:8.5in 11.0in;
	margin:.5in .5in .5in .5in;}
div.Section1
	{page:Section1;}
 /* List Definitions */
 ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
.preview{
  width: 750px;
  border:2px black solid;
  padding: 20px;
}
-->
</style>

</head>

<body lang=EN-US link=blue vlink=purple>

<div class="preview">
<?php
    



    $con = mysqli_connect("localhost","root","","testing");
    if($con->connect_error){
      die("connection failed:$con->coonect_error");
    }
    echo "connection sucess";

    $qur = mysqli_query($con,"select * from personal where cust_id='$custid'");
    while($res = mysqli_fetch_assoc($qur))
    {
      $cust_id = $res['cust_id'];
    
    ?>  



<div class=Section1>

<p class=MsoNormal style='margin:0in;margin-bottom:.0001pt'><a
href="https://www.myperfectresume.com/membership/RegisterGuestUser.aspx?wizard=true&amp;productid=17&amp;utm_source=hloom-com&amp;utm_medium=referral&amp;utm_campaign=word-template"><span
style='font-size:48.0pt;font-family:"Impact","sans-serif";color:windowtext;
text-decoration:none'></a><span style='font-size:48.0pt;
font-family:"Impact","sans-serif"'><br>
<a name="_GoBack"></a></span><span style='position:relative;z-index:1'><span
style='position:absolute;left:-7px;top:-80px;width:555px;height:166px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=555 height=166 style='vertical-align:top'><span style='position:
  absolute;z-index:1'>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td>
    <div style='padding:3.6pt 7.2pt 3.6pt 7.2pt'>
    <p class=Name><?php echo $res['name'];?></p>
    <p class=ContactInfo>&nbsp;</p>
    <p class=Contacts><?php echo $res['address'];  ?></p>
    <p class=Contacts><?php echo $res['email'];?> </p>
    <p class=Contacts><?php echo $res['phone'];} ?></p>
    <p class=Contacts>&nbsp;</p>
    <p class=MsoNormal align=right style='text-align:right'>&nbsp;</p>
    </div>
    </td>
   </tr>
  </table>
  </span>&nbsp;</td>
 </tr>
</table>


<?php
  $propicqry = mysqli_query($con,"select * from propic where cust_id='$cust_id'");
  while($propicres = mysqli_fetch_assoc($propicqry)){ ?>
</span></span><span style='position:relative;z-index:2'><span style='position:
absolute;left:561px;top:-75px;width:165px;height:163px'><img width=165
height=163 src="<?php echo "../".$propicres['picsrc']; }?>"></span></span></p>

<p class=MsoNormal style='margin:0in;margin-bottom:.0001pt'>&nbsp;</p>

<p class=MsoNormal style='margin:0in;margin-bottom:.0001pt'>&nbsp;</p>

<p class=MsoNormal style='margin:0in;margin-bottom:.0001pt'>&nbsp;</p>

<p class=MsoNormal style='margin:0in;margin-bottom:.0001pt'>&nbsp;</p>

<div align=center>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=734 colspan=3 valign=top style='width:7.65in;padding:0in 5.4pt 0in 5.4pt'>
  <h1>Professional Profile</h1>
  </td>
 </tr>
 <!-- php for objective -->
<?php
  $objqry = mysqli_query($con,"select * from obj where custId='$cust_id'");
  while($objres = mysqli_fetch_assoc($objqry)){ ?>

 <tr>
  <td width=734 colspan=3 valign=top style='width:7.65in;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin-left:.5in;text-indent:-.25in'><span
  style='font-family:Symbol'><span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><?php echo $objres['obj']; ?></p>
  <?php } ?>
  <!--<p class=MsoListParagraph style='margin-left:.5in;text-indent:-.25in'><span
  style='font-family:Symbol'>&bull;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span>Phasellusgravidanequenulla, non cursusnequecommodositamet. </p>-->
  <h1>Projects:</h1>
  <!-- php for projects -->
<?php
  $proqry = mysqli_query($con,"select * from projects where cust_id='$cust_id'");
  while($prores = mysqli_fetch_assoc($proqry)){ ?>

  <p class=MsoListParagraph style='margin-left:.5in;text-indent:-.25in'><span
  style='font-family:Symbol'>&bull;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><?php echo $prores['proj_name']; ?></p>
  <?php } ?>
  </td>
 </tr>
 <tr>
  <td width=734 colspan=3 valign=top style='width:7.65in;padding:0in 5.4pt 0in 5.4pt'>
  <h1>Skills</h1>
  </td>
 </tr>
 <tr>
  <td width=734 colspan=3 valign=top style='width:7.65in;padding:0in 5.4pt 0in 5.4pt'>
    <!-- php for skills -->
<?php
  $sklqry = mysqli_query($con,"select * from skills where cust_id='$cust_id'");
  while($sklres = mysqli_fetch_assoc($sklqry)){ ?>

  <p class=MsoListParagraph style='margin-left:.5in;text-indent:-.25in'><span
  style='font-family:Symbol'>&bull;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><?php echo $sklres['skill']; }?></p>
  <!--<p class=MsoListParagraph style='margin-left:.5in;text-indent:-.25in'><span
  style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span>Phasellusgravidanequenulla.</p>-->
  <h1>Hobbies and Interest:</h1>

<!-- php for hobby -->
<?php
  $hbyqry = mysqli_query($con,"select * from hobby where cust_id='$cust_id'");
  while($hbyres = mysqli_fetch_assoc($hbyqry)){ ?>

  <p class=MsoListParagraph style='margin-left:.5in;text-indent:-.25in'><span
  style='font-family:Symbol'>&bull;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><?php echo $hbyres['hobby']; }?></p>
  <!--<p class=MsoListParagraph style='margin-left:.5in;text-indent:-.25in'><span
  style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span>hhh</p>-->
  </td>
 </tr>
<!-- php code for work exprience-->
<?php
  
  $wrkqry = mysqli_query($con,"select * from workxp where custId='$custid'");
  $noyrexp = mysqli_num_rows($wrkqry);
  /*echo "$noyrexp";*/
  if($noyrexp > 0)
  { 
    ?>
   
 <tr>
  <td width=734 colspan=3 valign=top style='width:7.65in;padding:0in 5.4pt 0in 5.4pt'>
  <h1>Relevant Work Experience</h1>
  </td>
 </tr>
 <?php while($wrkres = mysqli_fetch_assoc($wrkqry)){  ?>
 <tr>
  <td width=133 valign=top style='width:99.9pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=BoldNormal><!--Summer 2012--> <?php  echo $wrkres['yearXP'].'year'; ?></p>
  </td>
  <td width=18 valign=top style='width:13.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=583 valign=top style='width:437.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=BoldLarge><!--Health Administrator--><?php echo $wrkres['workType']; ?></p>
  <p class=MsoNormal><i><!--Fairview Health Services – Minneapolis, MN--><?php echo $wrkres['cName']; ?></i></p>
  <?php   
        }
  }
?> 
  <!--<p class=MsoListParagraph style='margin-left:43.9pt;text-indent:-.25in'><span
  style='font-family:Symbol'>&bull;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span>Pellentesqueporttitor, velitlaciniaegestasauctor, diameros
  tempus arcu, necvulputateaugue magna velrisus.</p>
  <p class=MsoListParagraph style='margin-left:43.9pt;text-indent:-.25in'><span
  style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span>Cras non magna vel ante adipiscingrhoncus.</p>
  <p class=MsoListParagraph style='margin-left:43.9pt;text-indent:-.25in'><span
  style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span>Vivamus a mi.</p>-->
  </td>
 </tr>
 <tr>
  <td width=734 colspan=3 valign=top style='width:7.65in;padding:0in 5.4pt 0in 5.4pt'>
  <h1>Education</h1>
  </td>
 </tr>
 <!--php for education -->
<?php
    
    $eduqry = mysqli_query($con,"select * from postgradu where cust_id='$cust_id'");
    while($edures = mysqli_fetch_assoc($eduqry)){
      if( $edures['college_name'] != 0){ ?>
 <tr>
  <td width=133 valign=top style='width:99.9pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=BoldNormal><?php echo $edures['pass_year']; ?></p>
  </td>
  <td width=18 valign=top style='width:13.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=583 valign=top style='width:437.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=BoldLarge><?php echo $edures['course']; ?></p>
  <p class=MsoNormal><i><?php echo $edures['college_name']; ?></i></p>
  <p class=MsoNormal><?php echo $edures['board']; ?></p>
  <p class=MsoNormal><?php echo $edures['cgpa']; }}?></p>
  </td>
 </tr>
  <?php  
    $eduqry = mysqli_query($con,"select * from gradu where cust_id='$cust_id'");
    while($edures = mysqli_fetch_assoc($eduqry)){ ?>
 <tr>
  <td width=133 valign=top style='width:99.9pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=BoldNormal><?php echo $edures['pass_year']; ?></p>
  </td>
  <td width=18 valign=top style='width:13.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=583 valign=top style='width:437.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=BoldLarge><?php echo $edures['course']; ?></p>
  <p class=MsoNormal><i><?php echo $edures['college_name']; ?></i></p>
  <p class=MsoNormal><?php echo $edures['board']; ?></p>
  <p class=MsoNormal><?php echo $edures['cgpa']; }?></p>
  </td>
 </tr>
 <?php  
    $eduqry = mysqli_query($con,"select * from hs where cust_id='$cust_id'");
    while($edures = mysqli_fetch_assoc($eduqry)){ ?>
 <tr>
  <td width=133 valign=top style='width:99.9pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=BoldNormal><?php echo $edures['pass_year']; ?></p>
  </td>
  <td width=18 valign=top style='width:13.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=583 valign=top style='width:437.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=BoldLarge>12th</p>
  <p class=MsoNormal><i><?php echo $edures['school_name']; ?></i></p>
  <p class=MsoNormal><?php echo $edures['board']; ?></p>
  <p class=MsoNormal><?php echo $edures['percent']; }?></p>
  </td>
 </tr>
  <?php  
    $eduqry = mysqli_query($con,"select * from sc where cust_id='$cust_id'");
    while($edures = mysqli_fetch_assoc($eduqry)){ ?>
 <tr>
  <td width=133 valign=top style='width:99.9pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=BoldNormal><?php echo $edures['pass_year']; ?></p>
  </td>
  <td width=18 valign=top style='width:13.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=583 valign=top style='width:437.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=BoldLarge>10th</p>
  <p class=MsoNormal><i><?php echo $edures['school_name']; ?></i></p>
  <p class=MsoNormal><?php echo $edures['board']; ?></p>
  <p class=MsoNormal><?php echo $edures['percent']; }?></p>
  </td>
 </tr>
 <!--
 <tr>
  <td width=133 valign=top style='width:99.9pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=BoldNormal>2010</p>
  </td>
  <td width=18 valign=top style='width:13.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=583 valign=top style='width:437.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=BoldLarge>Bachelor of Science in Community Health</p>
  <p class=MsoNormal><i>St. Cloud State University – Saint Cloud, MN</i></p>
  <p class=MsoNormal>Pellentesqueelementum vitae ipsumsitameteleifend.
  Nullamtinciduntodio id orcialiquetmattis. Maurisdapibusnullaquisvelitpellentesquevariusegetegetlacus.</p>
  </td>
 </tr>
-->
</table>

</div>

<p class=MsoNormal>&nbsp;</p>

<div align=center>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=734 colspan=3 valign=top style='width:7.65in;padding:0in 5.4pt 0in 5.4pt'>
  <h1>Leadership Activities and Awards</h1>
  </td>
 </tr>
 <!--  DB for achievement -->
<?php 
  
  $achvqry = mysqli_query($con,"select * from cust_achievement where cust_id='$cust_id'");
  while($achvres = mysqli_fetch_assoc($achvqry)){
?>
 <tr>
  <td width=583 valign=top style='width:437.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span
  style='font-family:Symbol'>&bull;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><?php echo $achvres['achiv']; }?></p>
  </td>
 </tr>
 <!--
 <tr>
  <td width=133 valign=top style='width:99.9pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=BoldNormal>2010 – 2012</p>
  </td>
  <td width=18 valign=top style='width:13.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=583 valign=top style='width:437.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal>Sedcursus quam id felis. Curabiturposuere quam velnibh.</p>
  </td>
 </tr>
 <tr>
  <td width=133 valign=top style='width:99.9pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=BoldNormal>2010 – 2011</p>
  </td>
  <td width=18 valign=top style='width:13.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=583 valign=top style='width:437.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal>Crasdapibusdapibusnisl. Vestibulumquis dolor a
  felisconguevehicula.</p>
  </td>
 </tr>
 <tr>
  <td width=133 valign=top style='width:99.9pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=BoldNormal>2010 – 2011</p>
  </td>
  <td width=18 valign=top style='width:13.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=583 valign=top style='width:437.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal>Maecenas pedepurus, tristique ac, tempus eget,
  egestasquis, mauris. </p>
  </td>
 </tr>
 <tr>
  <td width=133 valign=top style='width:99.9pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=BoldNormal>2009 – 2010</p>
  </td>
  <td width=18 valign=top style='width:13.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=583 valign=top style='width:437.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal>Curabitur non eros. Nullamhendreritbibendumjusto.
  Fusceiaculis, estquislaciniapretium, pedemetusmolestie lacus, at gravidawisi
  ante at libero. </p>
  </td>
 </tr>
-->
 <tr>
  <td width=734 colspan=3 valign=top style='width:7.65in;padding:0in 5.4pt 0in 5.4pt'>
  <h1>Referees</h1>
  </td>
 </tr>

<!-- php for ref -->
<?php
  $refqry = mysqli_query($con,"select * from reference where cust_id='$custid'");
  while($refres = mysqli_fetch_assoc($refqry)){ ?>

 <tr>
  <td width=583 valign=top style='width:437.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><?php echo $refres['name']; }?></p>
  </td>
 </tr>


 <tr>
  <td width=734 colspan=3 valign=top style='width:7.65in;padding:0in 5.4pt 0in 5.4pt'>
  <h1>Attachments</h1>
  </td>
 </tr>
<p>
    <?php 
  $docqry = mysqli_query($con,"select * from docs where cust_id='$cust_id'");
  while($docres = mysqli_fetch_assoc($docqry)){
     $filenm = $docres['docsrc'];
     //echo basename($filenm);
     //echo basename($filenm,".")."</br>";
     //print_r (explode(" ",$filenm));
     $path_parts = pathinfo($filenm);

      //echo $path_parts['dirname']."</br>";
      //echo $path_parts['basename']."</br>";
      //echo $path_parts['extension']."</br>";
     //echo $path_parts['filename']."</br>";?>
  <tr>
    <td width=583 valign=top style='width:437.4pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal><span
  style='font-family:Symbol'>&bull;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><?php echo $path_parts['filename']; ?></p>
    </td>
  </tr>
<?php } ?>
  

 <!--
 <tr style='height:27.0pt'>
  <td width=133 valign=top style='width:99.9pt;padding:0in 5.4pt 0in 5.4pt;
  height:27.0pt'>
  <p class=BoldNormal>&nbsp;</p>
  </td>
  <td width=18 valign=top style='width:13.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:27.0pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td style='border:none;padding:0in 0in 0in 0in' width=583><p class='MsoNormal'>&nbsp;</td>
 </tr>
</table>

</div>

<p class=MsoNormal>&nbsp;</p>

<span style='font-size:11.0pt;font-family:"Cambria","serif"'><br clear=all
style='page-break-before:always'>
</span>

<p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:4.0pt;
margin-left:0in'>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<!--
<div style='border:solid #9BBB59 3.0pt;border-bottom:none;padding:10.0pt 10.0pt 0in 10.0pt'>


<p style='margin:0in;margin-bottom:.0001pt;text-align:justify;border:none;
padding:0in'><b><span style='font-size:11.0pt;font-family:"Calibri","sans-serif";
color:black'>Copyright information - Please read</span></b></p>

</div>

<div style='border-top:none;border-left:solid #9BBB59 3.0pt;border-bottom:none;
border-right:solid #9BBB59 3.0pt;padding:0in 10.0pt 0in 10.0pt'>

<p style='margin:0in;margin-bottom:.0001pt;text-align:justify;border:none;
padding:0in'>&nbsp;</p>

<p style='margin:0in;margin-bottom:.0001pt;text-align:justify;border:none;
padding:0in'><span style='font-size:11.0pt;font-family:"Calibri","sans-serif";
color:black'>© This </span><a href="http://www.hloom.com/resumes/"><b><span
style='font-size:11.0pt;font-family:"Calibri","sans-serif"'>Free Resume
Template</span></b></a><span style='font-size:11.0pt;font-family:"Calibri","sans-serif";
color:black'> is the copyright of Hloom.com. You can download and modify this
template for your own personal use to create a resume for yourself, or for
someone else. You can (and should!) remove this copyright notice (</span><a
href="http://www.hloom.com/resumes/how-to-format-word/"><span style='font-size:
11.0pt;font-family:"Calibri","sans-serif"'>click here to see how</span></a><span
style='font-size:11.0pt;font-family:"Calibri","sans-serif";color:black'>)
before sending your resume to potential employers.</span></p>

<p style='margin:0in;margin-bottom:.0001pt;text-align:justify;border:none;
padding:0in'>&nbsp;</p>

</div>

<div style='border:solid #9BBB59 3.0pt;border-top:none;padding:0in 10.0pt 10.0pt 10.0pt'>

<p style='margin:0in;margin-bottom:.0001pt;text-align:justify;border:none;
padding:0in'><span style='font-size:11.0pt;font-family:"Calibri","sans-serif";
color:black'>You may not distribute or resell this template, or its
derivatives, and you may not make it available on other websites without our
prior permission. All sharing of this template must be done using a link to </span><a
href="http://www.hloom.com/resumes/"><span style='font-size:11.0pt;font-family:
"Calibri","sans-serif";color:#1155CC'>http://www.hloom.com/resumes/</span></a><span
style='font-size:11.0pt;font-family:"Calibri","sans-serif";color:black'>. For
any questions relating to the use of this template please email us - </span><a
href="mailto:info@hloom.com"><span style='font-size:11.0pt;font-family:"Calibri","sans-serif"'>info@hloom.com</span></a></p>

</div>
-->

<p class=MsoNormal>&nbsp;</p>

</div>
</div>
</body>

</html>
