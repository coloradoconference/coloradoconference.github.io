<html>
<head>
<?php
    # Get this year's details:
    include("/home/copper/public_html/2011/INFO.php");
?>

<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<base href="http://grandmaster.colorado.edu/~copper/2011/">

<title>
    <?php
      # 15th 
      print("$OrderNum");
    ?>
      COPPER MOUNTAIN CONFERENCE ON MULTIGRID METHODS
</title> 
</head>
<!--
  <body bgcolor="#8fffff">
  <body bgcolor="#cfcfcf">
  <body bgcolor="#ccaa7f">
  <body bgcolor="#DA8849">
  <body bgcolor="#efefef">
  <body bgcolor="#DA8849" link="fdf87f" alink="fdf87f" vlink=brown>
  <body bgcolor="#ccaa7f" link="fdf87f" alink="fdf87f" vlink=brown>
  <body bgcolor="#ccaa7f" link="fdfdff" alink="fdf87f" vlink=brown>
  <body bgcolor="#ccccbf" link="fdfdff" alink="fdf87f" vlink="#EEEEEE">
-->
  <body bgcolor="#ccccbf" link="333333" alink="fdf87f" vlink="#333333">
<!--  <body bgcolor="#efefef" onunload='javascript: alert("Thank you for visiting the 2011 Copper Mountain Website;\nHope to see you there!")'> -->
<!-- body bgcolor="#DA8849" link=blue alink=blue vlink=blue -->
<a name="top"></a>

<!-- ======================================================================= -->

<!-- ======================================================================= -->
<center>
<font style="font-family: courier">
<br>
<h1>
       <?php
	   # FIFTEENTH 
           print("$OrderTxt");
        ?>
        COPPER MOUNTAIN CONFERENCE<br>
	<font size="-1">ON</font><br> 
	MULTIGRID METHODS<br>
        <p>
<h2>
	<font color=red>
          <?php
             # March 27 - April 1, 2011
             print("$Dates");
           ?>
        </font>
</h2>
</h1>
</font>
<p>
<h2>
<!--
        <font color=red><blink>*</blink></font>
        <font color=red><blink>*</blink></font>
        <font color=red><blink>*</blink></font>
	&nbsp
        <a href="program.php"><font color=brown>PROGRAM</font></a>
	&nbsp
        <font color=red><blink>*</blink></font>
        <font color=red><blink>*</blink></font>
        <font color=red><blink>*</blink></font>
-->
        <a href="program.php"><font color=red>PROGRAM</font></a>
</h2>
<br>

<!-- ======================================================================= -->
<table cellspacing=5 cellpadding=12>
<!-- <tr bgcolor="#00ff7f"> -->
<!-- <tr bgcolor="#DAA869"> -->
<!--
<tr bgcolor="#90bfaf">
-->
<tr bgcolor="#EFEFEA">
<th align=right style="border:3px outset #545565;"><font color="#0f0f0f">Co-organized&nbsp;by</font></th>
<td>
	<!-- <UL> -->
	<li><a href="http://www.llnl.gov/casc">
		The Center for Applied Scientific Computing</a>,
		<br> &nbsp &nbsp
		<a href="http://www.llnl.gov/casc/">
		Lawrence Livermore National Laboratory</a>
	<li><a href="http://www.colorado.edu/">University of Colorado</a>
<!-- 
	<li><a href="http://www.umd.edu/">University of Maryland</a>
        <li><a href="http://www.sandia.gov">Sandia National Laboratories</a>
-->

<th align=right style="border:3px outset #545565;"><font color="#0f0f0f">Organized&nbsp;by</font></th>
<td>

	<a href="../frsc.html">Front Range Scientific Computations, Inc.</a>
	<!-- </UL> -->
</td>
<!-- </tr><tr bgcolor="#00bfff"> -->
<!-- </tr><tr bgcolor="#DA8849"> -->
</tr>
<!--
<tr bgcolor="#90bfaf">
-->
<tr bgcolor="#EFEFEA">
<th align=right style="border:3px outset #545565;"><font color="#0f0f0f">Sponsored&nbsp;by</font></th>
	<th>
        	<a href="http://www.sandia.gov"> Sandia</a>,
		<a href="http://www.llnl.gov/casc">LLNL</a>,
        	<a href="http://www.ibm.com">IBM</a>,
		<a href="http://www.doe.gov">DOE</a>,
		<a href="http://www.lanl.gov">LANL</a>
<!--
		<a href="http://www.nsf.gov">NSF</a>, 
        	<a href="http://www.boeing.com/">Boeing</a>,
-->
	</th>
<!-- </tr><tr bgcolor="#00ff7f"> -->
<!-- </tr><tr bgcolor="#DAA869"> -->
</tr>
<tr bgcolor="#EFEFEA">
<th align=right style="border:3px outset #545565;">
        <font color="#0f0f0f">In&nbsp;cooperation&nbsp;with</font></th>
	<th><a href="http://www.siam.org">
            <!--
               SIAM
            -->
	    <img style="border:2px" alt="SIAM logo" src="../image/SIAMblue_path3.jpg" height=30>
            </a>
            <H6> SIAM contact: Tom Manteuffel</H6>
        </th>
<!--
<th align=right style="border:0px outset #545565;" bgcolor="#FFFFFF">
        <a href="http://www.siam.org">
	<img style="border:0px" alt="SIAM logo" src="../image/SIAMblue_path3.jpg" height=50>
        </a>
</th>
-->
</tr></table>



<!-- ======================================================================= -->
<table cellspacing=24><tr>
	<td align=center>
	<!-- img alt="Picture of Copper Mts" src="../image/CM300.jpg" -->
	<img style="border:6px outset #545565;" alt="Picture of Copper Mts" src="../image/CM300.jpg" height=200>
	</td>
	<!-- td align=center style="border:6px outset #545565;" -->
	<td align=center>
	<table cellpadding=8><tr>
	<td align=center bgcolor="#efff5f">
	<br>
	<b><font size="+2">CONFERENCE DEADLINES:</font></b>
        <br>	
	<p>
	Student Competition Papers: 
        <!-- <b>10 January</b> <font size="-1">2011</font><br> -->
               <b>
               <?php
                   # 10 January
                   print("$DeadlineStudentPaper, $Year");
               ?>
               </b><br>
	Author Abstracts: 
        <!-- <b> 14 January</b> <font size="-1">2011</font><br> -->
               <b> 
               <?php
                   # 14 January
                   print("$DeadlineAbstr, $Year");
                ?>
               </b><br>
	Early Registration: 
               <!-- <b>25 February</b> <font size="-1">2011</font><br> -->
               <b>
               <?php
                   # 25 February
                   print("$DeadlineEarlyReg, $Year");
                ?>
               </b><br>
	Guaranteed&nbsp;Lodging:
               <!-- <b>&nbsp;23 &nbsp;February</b>&nbsp;<font size="-1">2011</font><br> -->
               <b>
               <?php
                   print("$DeadlineGuaranteedLodging");
                ?>
               </b><br>
<!--
        <a href="http://www.siam.org/journals/sisc.php">
	Full Papers for <b>special SISC issue</b></a>: 
              <b>TBA June</b> <font size="-1">2010</font><br>
-->
	Full Papers for <b>special journal issue</b>: 
            <b>
            <?php
                   # TBA
                   print("$DeadlineSpecIssue");
            ?>
            </b> 
        <br>
        <br>
        <br>
	</td></tr></table>
</tr></table>


<!-- ======================================================================= -->
<CENTER>
<p><br>
Travel support is available for students, postdocs, women, minorities,
and the disabled.<br>
<a href="funding.php">Click here</a> for more information.

<p><br>
<th>
     <font color="#0f0f0f" size="+2"><bf>CONFERENCE LINKS:</bf> </font>
</th>
</CENTER>

<!-- <table cellpadding=10 style="border:6px outset #545565;"><tr> -->
<table cellpadding=10><tr>
<!-- 
  <th><font color="#00af00" size="+2">OTHER<br>LINKS:</font></th>
  <td bgcolor="#00dfaf">
  <td bgcolor="#90bfaf" style="border:3px outset #545565;">
-->
<td bgcolor="#EFEFEA" style="border:3px outset #545565;">

    <table>
    <tr>
        <a href="location.php">Location</a>
    </tr> <br>
    <tr>
        <a href="transportation.php">Transportation</a>
    </tr> <br>
    <tr>
        <a href="accommodation.php">Accommodations</a>
    </tr> <br>
    <tr>
        <a href="registration.php">Registration </a>
    </tr> <br>
<!--
    <tr>
        <a href="funding.php">Funding opportunities </a>
    </tr> <br>
-->
    <tr>
    	<br>&nbsp
    </tr> <br>
    <tr>
        <a href="../frsc.html">Further Information</a>
    </tr> <br>
    <tr>
        <a href="skitix_2011.html">Lift Tickets, Rentals, and Lessons</a>
    </tr> <br>
    </table>


<!--
   </td><td bgcolor="#00dfaf"> 
-->
</td>
<!--
<td bgcolor="#90bfaf" style="border:3px outset #545565;"> 
-->
<td bgcolor="#EFEFEA" style="border:3px outset #545565;">

    <table>
    <tr>
        <a href="sessions.html#5">Highlighted Topics</a><br>
    </tr>
    <tr>
        <a href="sessions.html#6">Format</a><br>
    </tr>
 <!-- 
    <tr>
        <a href="workshops.html">Workshops</a><br>
    </tr>
 -->
    <tr>
        <a href="sessions.html#30">Special Features</a><br>
    </tr>
    <tr>
<!--
        <a href="program.php"><font color=brown>Conference Program</font></a>
-->
        <a href="program.php">Conference Program</a>
    </tr>

    <tr>
       &nbsp
    </tr>
    </table>

    <table>
    <tr>
        <a href="Abstracts/">Submitting Abstracts</a><br>
    </tr>
    <tr>
        <a href="Abstracts/">Hardcopy Preliminary Proceedings</a><br>
    </tr>
    <tr>
        <a href="Abstracts/">Virtual Pre-Proceedings</a>
    </tr>
    </table>

</td>
<!--
<td bgcolor="#90bfaf" style="border:3px outset #545565;"> 
-->
<td bgcolor="#EFEFEA" style="border:3px outset #545565;">
     <table>
     <tr>
        <a href="people.html">Conference Chairs</a>
     </tr><br>
     <tr>
        <a href="people.html">Workshop Chair</a>
     </tr><br>
     <tr>
        <a href="people.html">Program Committee</a>
     </tr><br>
     <tr>
     </tr><br>
     <tr>
        <a href="student.html#Compete">Student Paper Competition and  List of Previous Winners</a>
     </tr><br>
     <tr>
        <a href="student.html#RegSupport">Student Registration Support</a>
     </tr><br>
     <tr>
         <!-- Even numbered years are in SISC: 
         <a href="sisc.html">Special Journal Issue</a>
         --> 
         <a href="nlaa.php">Special Journal Issue</a>
     </tr><br>
     <tr>
     </tr><br>
     <tr>
         <a href="http://etna.mcs.kent.edu/">Copper 1997, 1999, and 2001
		ETNA Special Issues</a>
     </tr><br>
     <tr>
         <a href=
	"http://www3.interscience.wiley.com/cgi-bin/jissue/107632537/">
	Copper 2003 Special Multigrid Issue <i>Numerical Linear Algebra with Applications</i></a>
     </tr><br>
     <tr>
        <!-- <a href=//epubs.siam.org/SISC/vol_27_iss_5.html> Copper 2004 SISC</a> -->
        <a href=http://siamdl.aip.org/dbt/dbt.jsp?KEY=SJOCE3&Volume=27&Issue=5> Copper 2004 SISC issue</a>
     </tr><br>
     <tr>
        <a href="http://www3.interscience.wiley.com/cgi-bin/jissue/112464204">
	Copper 2005 Special Multigrid Issue <i>Numerical Linear Algebra with Applications</i></a>
     </tr><br>
     <tr>
        <a href=http://siamdl.aip.org/dbt/dbt.jsp?KEY=SJOCE3&Volume=29&Issue=5> Copper 2006 SISC issue</a>
     </tr><br>
     <tr>
        <a href=
        "http://www3.interscience.wiley.com/journal/117910203/issue">
	Copper 2007 Special Multigrid Issue <i>Numerical Linear Algebra with Applications</i></a>
     </tr><br>
     <tr>
        <a href="http://siamdl.aip.org/dbt/dbt.jsp?KEY=SJOCE3&Volume=32&Issue=1"> Copper 2008 SISC issue</a>
     </tr><br>
     <tr>
        <a href="http://www3.interscience.wiley.com/journal/123320633/issue"> Copper 2009 Special Multigrid Issue <i>Numerical Linear Algebra with Applications</i></a>
        <!-- Volume 17 Issue 2-3, April 2010  (175-598), 
             "Special Issue : Copper Mountain Conference on Multigrid Methods 2009" 
         -->
     </tr><br>
     </table>

</td></tr></table>

<a name="links"></a>
<table width="100%"><tr>
<!--
        <td bgcolor="#00ff7f" align=center>
-->
        <p>
        <td align=center>
	<tt>http://grandmaster.colorado.edu/~copper/2011/</tt>
</td></tr></table>
</center>
</body>
