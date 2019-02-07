<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 12 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Helvetica;
	panose-1:2 11 6 4 2 2 2 2 2 4;}
@font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"MS Mincho";
	panose-1:2 2 6 9 4 2 5 8 3 4;}
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
	{font-family:"Arial Narrow";
	panose-1:2 11 6 6 2 2 2 3 2 4;}
@font-face
	{font-family:"High Tower Text";
	panose-1:2 4 5 2 5 5 6 3 3 3;}
@font-face
	{font-family:"\@MS Mincho";
	panose-1:2 2 6 9 4 2 5 8 3 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-link:"Balloon Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:8.0pt;
	font-family:"Tahoma","sans-serif";}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
span.BalloonTextChar
	{mso-style-name:"Balloon Text Char";
	mso-style-link:"Balloon Text";
	font-family:"Tahoma","sans-serif";}
.MsoPapDefault
	{margin-bottom:10.0pt;
	line-height:115%;}
@page Section1
	{size:595.3pt 841.9pt;
	margin:1.0in 1.0in 1.0in 1.0in;}
div.Section1
	{page:Section1;}
 /* List Definitions */
 ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
-->


.preview{
  width: 842px;
  border:2px black solid;
  padding: 20px;
}

</style>

</head>

<body lang=EN-US link=blue vlink=purple>

  <div class="preview">
  <?php
  $custid = 5;  
    $con = mysqli_connect("localhost","root","","testing");
    if($con->connect_error){
      die("connection failed:$con->coonect_error");
    }
    echo "connection sucess";

    $qur = mysqli_query($con,"select * from personal where cust_id='$custid'");
    while($res = mysqli_fetch_assoc($qur))
    {
      $custid = $res['cust_id'];
    
    ?>  

<div class=Section1>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=187 colspan=2 valign=top style='width:140.1pt;border:none;
  border-right:solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-family:"Arial Narrow","sans-serif"'><img
  width=154 height=156 id="Picture 1"
  src="tempimg/2image0001.jpg"></span></p>
  <table>
      <tr style='height:5.4pt'>
  <td width=149 valign=top style='width:111.75pt;border:none;padding:1.4pt 5.4pt 1.4pt 5.4pt;
  height:5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-GB style='font-family:
  "Arial Narrow","sans-serif";color:gray'><?php echo $res['email'];?> </span></p>
  </td>
  <td width=38 valign=top style='width:28.35pt;border:none;border-right:solid #D9D9D9 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Arial Narrow","sans-serif"'><img width=21
  height=21 id="Picture 2"
  src="tempimg/2image002.png"></span></p>
  </td>
 </tr>
 <tr style='height:5.4pt'>
  <td width=149 valign=top style='width:111.75pt;border:none;padding:1.4pt 5.4pt 1.4pt 5.4pt;
  height:5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-GB style='font-family:
  "Arial Narrow","sans-serif";color:gray'><?php echo $res['phone']; ?></span></p>
  </td>
  <td width=38 valign=top style='width:28.35pt;border:none;border-right:solid #D9D9D9 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Arial Narrow","sans-serif"'><img width=21
  height=21 id="Picture 3"
  src="tempimg/2image003.jpg"></span></p>
  </td>
 </tr>
 <tr style='height:5.4pt'>
  <td width=149 valign=top style='width:111.75pt;border:none;padding:1.4pt 5.4pt 1.4pt 5.4pt;
  height:5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-GB style='font-family:
  "Arial Narrow","sans-serif";color:gray'><?php echo $res['address'];  ?></span></p>
  <!--<p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-GB style='font-family:
  "Arial Narrow","sans-serif";color:gray'>The Town </span></p>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-GB style='font-family:
  "Arial Narrow","sans-serif";color:gray'>The City</span></p>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-GB style='font-family:
  "Arial Narrow","sans-serif";color:gray'>NG1 234</span></p>-->
  </td>
  <td width=38 valign=top style='width:28.35pt;border:none;border-right:solid #D9D9D9 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Arial Narrow","sans-serif"'><img width=21
  height=21 id="Picture 5"
  src="tempimg/2image004.jpg"></span></p>
  </td>
 </tr>
  </table>
  </td>
  <td width=429 rowspan=9 valign=top style='width:322.0pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-GB style='font-size:
  22.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'><?php echo $res['name'];?></span></b></p><?php } ?>

  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=EN-GB style='font-size:10.0pt;
  font-family:"Arial Narrow","sans-serif";color:gray'>&nbsp;</span></p>
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none'>
   <tr style='height:.1in'>
    <td width=138 valign=top style='width:103.45pt;border:none;border-bottom:
    solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>&nbsp;</span></p>
    </td>
    <td width=138 rowspan=2 valign=top style='width:103.5pt;border:none;
    padding:0in 5.4pt 0in 5.4pt;height:.1in'>
    <!--php for yr of exp-->
    <?php
      $yrexpqry = mysqli_query($con, "select * from yearexp where cust_id='custid'");?>
      
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:16.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>Experience</span></p>
    </td>
    <td width=138 valign=top style='width:103.5pt;border:none;border-bottom:
    solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>&nbsp;</span></p>
    </td>
   </tr>
   <tr style='height:.1in'>
    <td width=138 valign=top style='width:103.45pt;border:none;padding:0in 5.4pt 0in 5.4pt;
    height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>&nbsp;</span></p>
    </td>
    <td width=138 valign=top style='width:103.5pt;border:none;padding:0in 5.4pt 0in 5.4pt;
    height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>&nbsp;</span></p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:#00B0F0'>Sales Director</span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><i><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>ABC Company Limited ~ 2011 to date</span></i></p>
  <!--
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>Here is an overview of my experience and key achievements
  working for this company.</span></p>
  <p class=MsoListParagraphCxSpFirst style='margin-bottom:0in;margin-bottom:
  .0001pt;text-indent:-.25in;line-height:normal'><span lang=EN-GB
  style='font-family:Symbol;color:#00B0F0'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>1<sup>st</sup> key achievement which happened quite recently.</span></p>
  <p class=MsoListParagraphCxSpLast style='margin-bottom:0in;margin-bottom:
  .0001pt;text-indent:-.25in;line-height:normal'><span lang=EN-GB
  style='font-family:Symbol;color:#00B0F0'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>2<sup>nd</sup> key achievement which happened not so long ago.</span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:#00B0F0'>Sales Manager</span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><i><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>XYZ Company Limited ~ 2001 - 2011</span></i></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>Here is an overview of my experience and key achievements
  working for this company.</span></p>
  <p class=MsoListParagraphCxSpFirst style='margin-bottom:0in;margin-bottom:
  .0001pt;text-indent:-.25in;line-height:normal'><span lang=EN-GB
  style='font-family:Symbol;color:#00B0F0'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>1<sup>st</sup> key achievement </span></p>
  <p class=MsoListParagraphCxSpLast style='margin-bottom:0in;margin-bottom:
  .0001pt;text-indent:-.25in;line-height:normal'><span lang=EN-GB
  style='font-family:Symbol;color:#00B0F0'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>2<sup>nd</sup> key achievement </span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:#00B0F0'>Sales Executive</span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><i><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>123 Company Limited ~ 1999 - 2001</span></i></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>Here is an overview of my experience and key achievements
  working for this company.</span></p>
  <p class=MsoListParagraphCxSpFirst style='margin-bottom:0in;margin-bottom:
  .0001pt;text-indent:-.25in;line-height:normal'><span lang=EN-GB
  style='font-family:Symbol;color:#00B0F0'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>1<sup>st</sup> key achievement </span></p>
  <p class=MsoListParagraphCxSpLast style='margin-bottom:0in;margin-bottom:
  .0001pt;text-indent:-.25in;line-height:normal'><span lang=EN-GB
  style='font-family:Symbol;color:#00B0F0'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>2<sup>nd</sup> key achievement </span></p>
-->
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=EN-GB style='font-size:10.0pt;
  font-family:"Arial Narrow","sans-serif";color:gray'>&nbsp;</span></p>
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none'>
   <tr style='height:.1in'>
    <td width=138 valign=top style='width:103.45pt;border:none;border-bottom:
    solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>&nbsp;</span></p>
    </td>
    <td width=138 rowspan=2 valign=top style='width:103.5pt;border:none;
    padding:0in 5.4pt 0in 5.4pt;height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:16.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>Qualifications</span></p>
    </td>
    <td width=138 valign=top style='width:103.5pt;border:none;border-bottom:
    solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>&nbsp;</span></p>
    </td>
   </tr>
   <tr style='height:.1in'>
    <td width=138 valign=top style='width:103.45pt;border:none;padding:0in 5.4pt 0in 5.4pt;
    height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>&nbsp;</span></p>
    </td>
    <td width=138 valign=top style='width:103.5pt;border:none;padding:0in 5.4pt 0in 5.4pt;
    height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>&nbsp;</span></p>
    </td>
   </tr>
  </table><!--php for education -->
<?php
    
    $eduqry = mysqli_query($con,"select * from postgradu where cust_id='$custid'");
    while($edures = mysqli_fetch_assoc($eduqry)){ ?>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:#00B0F0'><?php echo 'course' ?> From <?php echo $edures['college_name']; ?></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><i><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'><?php echo 'University' ?> ~ <?php echo $edures['pass_year']; ?></span></i></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><i><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>cgpa : <?php echo $edures['cgpa']; ?></span></i></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>&nbsp;</span></p>
  <?php } ?>

  <?php
  $eduqry = mysqli_query($con,"select * from gradu where cust_id='$custid'");
    while($edures = mysqli_fetch_assoc($eduqry)){ ?>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:#00B0F0'><?php echo 'course' ?> From <?php echo $edures['college_name']; ?></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><i><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'><?php echo 'University' ?> ~ <?php echo $edures['pass_year']; ?></span></i></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><i><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>cgpa : <?php echo $edures['cgpa']; ?></span></i></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>&nbsp;</span></p>
  <?php } ?>

  <?php
  $eduqry = mysqli_query($con,"select * from hs where cust_id='$custid'");
    while($edures = mysqli_fetch_assoc($eduqry)){ ?>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:#00B0F0'><?php echo '12th' ?> From <?php echo $edures['school_name']; ?></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><i><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'><?php echo $edures['board']; ?> ~ <?php echo $edures['pass_year']; ?></span></i></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><i><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>Percentage : <?php echo $edures['percent']; ?></span></i></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>&nbsp;</span></p>
  <?php } ?>

  <?php
  $eduqry = mysqli_query($con,"select * from sc where cust_id='$custid'");
    while($edures = mysqli_fetch_assoc($eduqry)){ ?>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:#00B0F0'><?php echo '10th' ?> From <?php echo $edures['school_name']; ?></span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><i><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'><?php echo $edures['board']; ?> ~ <?php echo $edures['pass_year']; ?></span></i></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><i><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>Percentage : <?php echo $edures['percent']; ?></span></i></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>&nbsp;</span></p>
<?php } ?>
  <!--
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:#00B0F0'>A Levels</span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><i><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>ABC College ~ 1994 – 1996</span></i></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>English (A), Maths (A) and Physics (A)</span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>&nbsp;</span></p>
-->
  <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none'>
   <tr>
    <td width=207 valign=top style='width:155.2pt;padding:0in 5.4pt 0in 5.4pt'>
      <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
     style='border-collapse:collapse;border:none'>
     <tr style='height:.1in'>
      <td width=35 valign=top style='width:26.25pt;border:none;border-bottom:
      solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>&nbsp;</span></p>
      </td>
      <td width=123 rowspan=2 valign=top style='width:91.9pt;border:none;
      padding:0in 5.4pt 0in 5.4pt;height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:16.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>Skills</span></p>
      </td>
      <td width=35 valign=top style='width:26.25pt;border:none;border-bottom:
      solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>&nbsp;</span></p>
      </td>
     </tr>
     <tr style='height:.1in'>
      <td width=35 valign=top style='width:26.25pt;border:none;padding:0in 5.4pt 0in 5.4pt;
      height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>&nbsp;</span></p>
      </td>
      <td width=35 valign=top style='width:26.25pt;border:none;padding:0in 5.4pt 0in 5.4pt;
      height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>&nbsp;</span></p>
      </td>
     </tr>
    </table>

    <!-- php for skills -->
  <?php
  $sklqry = mysqli_query($con,"select * from skills where cust_id='$custid'");
  while($sklres = mysqli_fetch_assoc($sklqry)){ ?>

    <p class=MsoListParagraphCxSpFirst style='margin-top:0in;margin-right:0in;
    margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;text-indent:-.25in;
    line-height:normal'><span lang=EN-GB style='font-family:Symbol;color:#00B0F0'>&#8827;<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
    color:black'><?php echo $sklres['skill']; ?></span></p>
  <?php } ?>
    <!--
    <p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:
    0in;margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;text-indent:
    -.25in;line-height:normal'><span lang=EN-GB style='font-family:Symbol;
    color:#00B0F0'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
    color:black'>Strong business sense and ability to forecast major shifts in
    the marketplace </span></p>
    <p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:
    0in;margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;text-indent:
    -.25in;line-height:normal'><span lang=EN-GB style='font-family:Symbol;
    color:#00B0F0'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
    color:black'>Understanding of what drives demand in the market</span></p>
    <p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:
    0in;margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;text-indent:
    -.25in;line-height:normal'><span lang=EN-GB style='font-family:Symbol;
    color:#00B0F0'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
    color:black'>Expert negotiator</span></p>
    <p class=MsoListParagraphCxSpLast style='margin-top:0in;margin-right:0in;
    margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;text-indent:-.25in;
    line-height:normal'><span lang=EN-GB style='font-family:Symbol;color:#00B0F0'>·<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
    color:black'>Expert mentor and coach</span></p>
  -->
    </td>
    <td width=207 valign=top style='width:155.25pt;padding:0in 5.4pt 0in 5.4pt'>
    <!--<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
     style='border-collapse:collapse;border:none'>
     <tr style='height:.1in'>
      <td width=35 valign=top style='width:26.25pt;border:none;border-bottom:
      solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>&nbsp;</span></p>
      </td>
      <td width=123 rowspan=2 valign=top style='width:91.9pt;border:none;
      padding:0in 5.4pt 0in 5.4pt;height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:16.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>Memberships</span></p>
      </td>
      <td width=35 valign=top style='width:26.3pt;border:none;border-bottom:
      solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>&nbsp;</span></p>
      </td>
     </tr>
     <tr style='height:.1in'>
      <td width=35 valign=top style='width:26.25pt;border:none;padding:0in 5.4pt 0in 5.4pt;
      height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>&nbsp;</span></p>
      </td>
      <td width=35 valign=top style='width:26.3pt;border:none;padding:0in 5.4pt 0in 5.4pt;
      height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>&nbsp;</span></p>
      </td>
     </tr>
    </table>
    <p class=MsoListParagraphCxSpFirst style='margin-top:0in;margin-right:0in;
    margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;text-indent:-.25in;
    line-height:normal'><span lang=EN-GB style='font-family:Symbol;color:#00B0F0'>·<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
    color:black'>Member of the Association of Professional Sales</span></p>
    <p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:
    0in;margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;text-indent:
    -.25in;line-height:normal'><span lang=EN-GB style='font-family:Symbol;
    color:#00B0F0'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
    color:black'>Member of the Institute of Sales Management</span></p>
    <p class=MsoListParagraphCxSpLast style='margin-top:0in;margin-right:0in;
    margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;text-indent:-.25in;
    line-height:normal'><span lang=EN-GB style='font-family:Symbol;color:#00B0F0'>·<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
    color:black'>Member of the National Association of Sales Professionals</span></p>-->
    </td>
   </tr>
  </table>
  <tr>
    <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
     style='border-collapse:collapse;border:none'>
     <tr style='height:.1in'>
      <td width=35 valign=top style='width:26.25pt;border:none;border-bottom:
      solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>&nbsp;</span></p>
      </td>
      <td width=123 rowspan=2 valign=top style='width:91.9pt;border:none;
      padding:0in 5.4pt 0in 5.4pt;height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:16.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>Skills</span></p>
      </td>
      <td width=35 valign=top style='width:26.25pt;border:none;border-bottom:
      solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>&nbsp;</span></p>
      </td>
     </tr>
     <tr style='height:.1in'>
      <td width=35 valign=top style='width:26.25pt;border:none;padding:0in 5.4pt 0in 5.4pt;
      height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>&nbsp;</span></p>
      </td>
      <td width=35 valign=top style='width:26.25pt;border:none;padding:0in 5.4pt 0in 5.4pt;
      height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>&nbsp;</span></p>
      </td>
     </tr>
    </table>

    <!-- php for skills -->
  <?php
  $sklqry = mysqli_query($con,"select * from skills where cust_id='$custid'");
  while($sklres = mysqli_fetch_assoc($sklqry)){ ?>

    <p class=MsoListParagraphCxSpFirst style='margin-top:0in;margin-right:0in;
    margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;text-indent:-.25in;
    line-height:normal'><span lang=EN-GB style='font-family:Symbol;color:#00B0F0'>&#8827;<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
    color:black'><?php echo $sklres['skill']; ?></span></p>
  <?php } ?>
    <!--
    <p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:
    0in;margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;text-indent:
    -.25in;line-height:normal'><span lang=EN-GB style='font-family:Symbol;
    color:#00B0F0'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
    color:black'>Strong business sense and ability to forecast major shifts in
    the marketplace </span></p>
    <p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:
    0in;margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;text-indent:
    -.25in;line-height:normal'><span lang=EN-GB style='font-family:Symbol;
    color:#00B0F0'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
    color:black'>Understanding of what drives demand in the market</span></p>
    <p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:
    0in;margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;text-indent:
    -.25in;line-height:normal'><span lang=EN-GB style='font-family:Symbol;
    color:#00B0F0'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
    color:black'>Expert negotiator</span></p>
    <p class=MsoListParagraphCxSpLast style='margin-top:0in;margin-right:0in;
    margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;text-indent:-.25in;
    line-height:normal'><span lang=EN-GB style='font-family:Symbol;color:#00B0F0'>·<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
    color:black'>Expert mentor and coach</span></p>
  -->
    </td>
    <td width=207 valign=top style='width:155.25pt;padding:0in 5.4pt 0in 5.4pt'>
    <!--<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
     style='border-collapse:collapse;border:none'>
     <tr style='height:.1in'>
      <td width=35 valign=top style='width:26.25pt;border:none;border-bottom:
      solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>&nbsp;</span></p>
      </td>
      <td width=123 rowspan=2 valign=top style='width:91.9pt;border:none;
      padding:0in 5.4pt 0in 5.4pt;height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:16.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>Memberships</span></p>
      </td>
      <td width=35 valign=top style='width:26.3pt;border:none;border-bottom:
      solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>&nbsp;</span></p>
      </td>
     </tr>
     <tr style='height:.1in'>
      <td width=35 valign=top style='width:26.25pt;border:none;padding:0in 5.4pt 0in 5.4pt;
      height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>&nbsp;</span></p>
      </td>
      <td width=35 valign=top style='width:26.3pt;border:none;padding:0in 5.4pt 0in 5.4pt;
      height:.1in'>
      <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
      .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
      style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";
      color:#00B0F0'>&nbsp;</span></p>
      </td>
     </tr>
    </table>
    <p class=MsoListParagraphCxSpFirst style='margin-top:0in;margin-right:0in;
    margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;text-indent:-.25in;
    line-height:normal'><span lang=EN-GB style='font-family:Symbol;color:#00B0F0'>·<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
    color:black'>Member of the Association of Professional Sales</span></p>
    <p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:
    0in;margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;text-indent:
    -.25in;line-height:normal'><span lang=EN-GB style='font-family:Symbol;
    color:#00B0F0'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
    color:black'>Member of the Institute of Sales Management</span></p>
    <p class=MsoListParagraphCxSpLast style='margin-top:0in;margin-right:0in;
    margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;text-indent:-.25in;
    line-height:normal'><span lang=EN-GB style='font-family:Symbol;color:#00B0F0'>·<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
    color:black'>Member of the National Association of Sales Professionals</span></p>-->
    </td>
   </tr>
  </table>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'>&nbsp;</span></p>
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none'>
   <tr style='height:.1in'>
    <td width=138 valign=top style='width:103.45pt;border:none;border-bottom:
    solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>&nbsp;</span></p>
    </td>
    <td width=138 rowspan=2 valign=top style='width:103.5pt;border:none;
    padding:0in 5.4pt 0in 5.4pt;height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:16.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>Hobbies and Interests</span></p>
    </td>
    <td width=138 valign=top style='width:103.5pt;border:none;border-bottom:
    solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>&nbsp;</span></p>
    </td>
   </tr>
   <tr style='height:.1in'>
    <td width=138 valign=top style='width:103.45pt;border:none;padding:0in 5.4pt 0in 5.4pt;
    height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>&nbsp;</span></p>
    </td>
    <td width=138 valign=top style='width:103.5pt;border:none;padding:0in 5.4pt 0in 5.4pt;
    height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>&nbsp;</span></p>
    </td>
   </tr>
  </table>

  <!-- php for hobby -->
<?php
  $hbyqry = mysqli_query($con,"select * from hobby where cust_id='$custid'");
  while($hbyres = mysqli_fetch_assoc($hbyqry)){ ?>

  <p class=MsoListParagraphCxSpFirst style='margin-top:0in;margin-right:0in;
    margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;text-indent:-.25in;
    line-height:normal'><span lang=EN-GB style='font-family:Symbol;color:#00B0F0'>&#8827;<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
    color:black'><?php echo $hbyres['hobby']; ?></span></p>
<?php } ?>
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none'>
   <tr style='height:.1in'>
    <td width=138 valign=top style='width:103.45pt;border:none;border-bottom:
    solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>&nbsp;</span></p>
    </td>
    <td width=138 rowspan=2 valign=top style='width:103.5pt;border:none;
    padding:0in 5.4pt 0in 5.4pt;height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:16.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>References</span></p>
    </td>
    <td width=138 valign=top style='width:103.5pt;border:none;border-bottom:
    solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>&nbsp;</span></p>
    </td>
   </tr>
   <tr style='height:.1in'>
    <td width=138 valign=top style='width:103.45pt;border:none;padding:0in 5.4pt 0in 5.4pt;
    height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>&nbsp;</span></p>
    </td>
    <td width=138 valign=top style='width:103.5pt;border:none;padding:0in 5.4pt 0in 5.4pt;
    height:.1in'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span lang=EN-GB
    style='font-size:9.0pt;font-family:"Arial Narrow","sans-serif";color:#00B0F0'>&nbsp;</span></p>
    </td>
   </tr>
  </table>
  <?php
  $refqry = mysqli_query($con,"select * from reference where cust_id='$custid'");
  while($refres = mysqli_fetch_assoc($refqry)){ ?>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif";
  color:black'><?php echo $refres['name']; ?></span></p><?php } ?>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:5.4pt'>
  <td width=149 valign=top style='width:111.75pt;border:none;padding:0in 5.4pt 0in 5.4pt;
  height:5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif"'>&nbsp;</span></p>
  </td>
  <td width=38 valign=top style='width:28.35pt;border:none;border-right:solid #D9D9D9 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif"'>&nbsp;</span></p>
  </td>
 </tr>
 <!-- <tr style='height:5.4pt'>
  <td width=149 valign=top style='width:111.75pt;border:none;padding:1.4pt 5.4pt 1.4pt 5.4pt;
  height:5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-GB style='font-family:
  "Arial Narrow","sans-serif";color:gray'>jamesmay@hotmail.com</span></p>
  </td>
  <td width=38 valign=top style='width:28.35pt;border:none;border-right:solid #D9D9D9 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Arial Narrow","sans-serif"'><img width=21
  height=21 id="Picture 2"
  src="tempimg/2image002.png"></span></p>
  </td>
 </tr>
 <tr style='height:5.4pt'>
  <td width=149 valign=top style='width:111.75pt;border:none;padding:1.4pt 5.4pt 1.4pt 5.4pt;
  height:5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-GB style='font-family:
  "Arial Narrow","sans-serif";color:gray'>01234 567890</span></p>
  </td>
  <td width=38 valign=top style='width:28.35pt;border:none;border-right:solid #D9D9D9 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Arial Narrow","sans-serif"'><img width=21
  height=21 id="Picture 3"
  src="tempimg/2image003.jpg"></span></p>
  </td>
 </tr>
 <tr style='height:5.4pt'>
  <td width=149 valign=top style='width:111.75pt;border:none;padding:1.4pt 5.4pt 1.4pt 5.4pt;
  height:5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-GB style='font-family:
  "Arial Narrow","sans-serif";color:gray'>123 The Street</span></p>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-GB style='font-family:
  "Arial Narrow","sans-serif";color:gray'>The Town </span></p>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-GB style='font-family:
  "Arial Narrow","sans-serif";color:gray'>The City</span></p>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-GB style='font-family:
  "Arial Narrow","sans-serif";color:gray'>NG1 234</span></p>
  </td>
  <td width=38 valign=top style='width:28.35pt;border:none;border-right:solid #D9D9D9 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Arial Narrow","sans-serif"'><img width=21
  height=21 id="Picture 5"
  src="tempimg/2image004.jpg"></span></p>
  </td>
 </tr>
 <tr style='height:5.4pt'>
  <td width=149 valign=top style='width:111.75pt;border:none;padding:1.4pt 5.4pt 1.4pt 5.4pt;
  height:5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-GB style='font-family:
  "Arial Narrow","sans-serif";color:gray'>jamesmay71</span></p>
  </td>
  <td width=38 valign=top style='width:28.35pt;border:none;border-right:solid #D9D9D9 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Arial Narrow","sans-serif"'><img width=21
  height=21 id="Picture 6"
  src="tempimg/2image005.jpg"></span></p>
  </td>
 </tr>
 <tr style='height:5.4pt'>
  <td width=149 valign=top style='width:111.75pt;border:none;padding:1.4pt 5.4pt 1.4pt 5.4pt;
  height:5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-GB style='font-family:
  "Arial Narrow","sans-serif";color:gray'>jamesmay</span></p>
  </td>
  <td width=38 valign=top style='width:28.35pt;border:none;border-right:solid #D9D9D9 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Arial Narrow","sans-serif"'><img width=21
  height=21 id="Picture 4"
  src="tempimg/2image006.jpg"></span></p>
  </td>
 </tr>
 <tr style='height:5.4pt'>
  <td width=149 valign=top style='width:111.75pt;border:none;padding:1.4pt 5.4pt 1.4pt 5.4pt;
  height:5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-GB style='font-family:
  "Arial Narrow","sans-serif";color:gray'>jamesmay71</span></p>
  </td>
  <td width=38 valign=top style='width:28.35pt;border:none;border-right:solid #D9D9D9 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Arial Narrow","sans-serif"'><img width=21
  height=21 id="Picture 7"
  src="Contact-Icons-Word-CV-template_files/image007.jpg"></span></p>
  </td>
 </tr>-->
 <tr>
  <td width=187 colspan=2 valign=top style='width:140.1pt;border:none;
  border-right:solid #D9D9D9 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif"'>&nbsp;</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span lang=EN-GB style='font-family:"Arial Narrow","sans-serif"'>&nbsp;</span></p>


</div>

<p class=MsoNormal style='margin-bottom:6.0pt'><span lang=EN-GB
style='font-size:12.0pt;line-height:115%;font-family:"High Tower Text","serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center'><span lang=EN-GB
style='font-size:10.0pt;line-height:115%;font-family:"Helvetica","sans-serif"'>&nbsp;</span></p>

</div>

</body>

</html>
