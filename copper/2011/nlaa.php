<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<?php
    # Get this year's details:
    include("/home/copper/public_html/2011/INFO.php");
?>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<title> 
<?php
       # 2011
       print("Special Journal Issue Copper $Year");
?>
</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<style>
<!--
 /* Font Definitions */
@font-face
	{font-family:"Arial Unicode MS";
	panose-1:2 11 6 4 2 2 2 2 2 4;
	mso-font-charset:128;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-1 -369098753 63 0 4129279 0;}
@font-face
	{font-family:"\@Arial Unicode MS";
	panose-1:2 11 6 4 2 2 2 2 2 4;
	mso-font-charset:128;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-1 -369098753 63 0 4129279 0;}
 /* Style Definitions */
p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-parent:"";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;
	text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;
	text-underline:single;}
@page Section1
	{size:8.5in 11.0in;
	margin:1.0in 1.25in 1.0in 1.25in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
-->
</style>
</head>

<body lang=EN-US bgcolor="#ccccbf" link=blue alink=blue vlink=blue style='tab-interval:.5in'>

<!--
<h3>Call for Papers - SISC Copper Mountain Special Issue</h3>
-->
<h3>Call for Papers - Copper Mountain Special Issue</h3>

<?php
    print("The $OrderNum Copper Mountain Conference on $Topic is scheduled ");
    print("from $Date_start - $Date_end, $Year ");
    print("<a href=\"http://grandmaster.colorado.edu/~copper/$Year\">");
    print("(http://grandmaster.colorado.edu/~copper/$Year)</a>. ");
    print("As in previous $Year_parity-numbered years, a Special Issue of ");
    if ($Year_parity == "odd") {
        print("Numerical Linear Algebra with Applications");
    } else {
        print("SIAM Journal on Scientific Computing (SISC)");
    }
?>
is planned.  This single issue will be dedicated to recent progress in 
<?php
   if ($Year_parity == "odd") {
       print("multigrid methods.");
   } else {
       print("iterative methods.");
   }
?>

Submissions are encouraged in all aspects of 
multigrid methods, 
including this year's 
<a href="sessions.html#30">highlighted topics</a>. 
<p>
Attendees and participants of the conference as well as the general 
community are invited to submit papers.
The papers should meet the formatting and editorial
requirements of 
<?php
    if ($Year_parity == "odd") {
        print("Numerical Linear Algebra with Applications.");
    } else {
        print("SIAM Journal on Scientific Computing.");
    }
?>

<!-- How to make submissions: --> 
<!-- 
The deadline for submission to the Special Issue is <b>TBA</b>. 
<p>
  Submissions should be made using the ordinary submission process with a
  statement in the cover letter requesting that the paper be considered for the
  Special Issue on 
<?php
  if ($Year_parity == "odd") {
      print("multigrid methods.");
  } else {
      print("iterative methods.");
  }
?>
  All interested should submit a manuscript
  and cover letter in PDF format via the online submission site at
<?php
  if ($Year_parity == "odd") {
     print("<a href=\"http://www.interscience.wiley.com/jpages/1070-5325/\">");
     print("http://www.interscience.wiley.com/jpages/1070-5325/</a>.");
  } else {
     print("TBA");
  }
?>
-->


<p>
The deadlines, method of submission, guidelines, and any
submission requirements will be announced at the conference.

<p>
<?php
   if ($Year_parity == "odd") {
      print("Numerical Linear Algebra with Applications has a web page located");
      print("<a href=\"http://www.interscience.wiley.com/jpages/1070-5325/\"> here</a>.");
      print("<p><center>");
      print("<a href=\"http://www.interscience.wiley.com/jpages/1070-5325/\"> ");
      print("<img style=\"border:2px\" alt=\"NLAA logo\" src=\"../image/nlaa_cover.gif\" height=200>");
      print("</a>");
      print("</center>");
   } else {
      print("SISC has a web page located at XXXXXXXXXXXXXXXX");
      print("<a href=\"http://www.siam.org\"> here.</a>");
      print("<p><center>");
      print("<a href=\"http://www.siam.org\"> ");
      print("<img style=\"border:2px\" alt=\"SIAM logo\" src=\"../image/sisc_cover.gif\" height=230>");
      print("</a>");
      print("</center>");
   }
?>

<!-- SISC: 
<a href="http://sisc.siam.org/">http://sisc.siam.org</a>. 
Note the block labeled Special Section (just under the
keywords block on your submission screen) and select
"Copper Mountain Special Issue 2008" from the dropdown box. 
Also be sure to note in the Manuscript Comment text box at the bottom 
of this page that your work is intended for the Copper Mountain Special Issue.  
Papers will be subject to review by a guest Editorial Board.

<p>
If any questions, contact Mitch Chernoff, Publications Manager, SIAM, at
<a href="mailto:chernoff@siam.org">chernoff@siam.org</a>, 
or Ray Tuminaro, 
at <a href="mailto:rstumin@sandia.gov">rstumin@sandia.gov</a>, 
Guest Editor-in-Charge for the Special Issue.
-->

</body>
</html>
