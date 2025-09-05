<html>
<head>
<?php
   # this year's details:
   include("/home/copper/public_html/2009/INFO.php");

   print("<title> $Acronym: Sessions</title>\n");
?>
   <link rel="icon" href="favicon.ico" type="image/x-icon">
   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<!-- body bgcolor="#7FFFFF" -->
<!-- body bgcolor="#DA8849" link=blue alink=blue vlink=blue -->
<body bgcolor="#ccaa7f" link=blue alink=blue vlink=blue>

<a name="format">
<h2>Format of Sessions</h2>
Morning and afternoon sessions (Monday-Friday) will consist of
individual talks of approximately 
<?php 
   print("$TalkTimeTotal\n");
?>
minutes each, including 
<?php 
   print("$TalkTimeQnA\n");
?>
minutes for questions and answers.
<!--
<a href="#circus">Workshop and Circus</a> sessions 
will be held in the evenings.
-->

<p><hr size=5 noshade><p>

<a name="topics"><h2>Highlighted Topics</h2>
<li> General scalable multigrid, multilevel, multiscale and hierarchical 
     techniques, algebraic & structured 
<li> Parallel and cache-aware implementation of multigrid 
<li> Coarsening and upscaling
<li> Systems of PDEs 
<li> MG as preconditioning
<li> Applications 
<!-- 
<p>
Special sessions will be organized by the program committee.
Some of the more general topics will include applications,
nonlinear systems, parallel algorithms, continuation methods,
and multilevel preconditioning.
-->

<p><hr size=5 noshade><p>
<a NAME="mgrid"></a>
<h2>Multigrid Tutorial Day</h2>

A set of multigrid tutorials will be presented on
<b>
<?php
   print("$TutorialDay,\n");
?>
starting at 8:30 am</b>.
Attendance is open to all, and there is no charge
or required registration.  All the tutorials will be
elementary in nature, and are designed to familiarize
the audience with the basics of the topic.
See the <a href="program.html"><b>online Program page</b></a>
for information about the tutorial topics and schedule. 

 
<!--
  <p><hr size=5 noshade><p>
  <a NAME="circus"></a>
  <h2>Workshops and Circus Sessions</h2>
  The program will include special time set aside for
  Workshops and Circuses.  The Workshop Chair will encourage
  and support informal workshops on special topics of
  interest.  The Circus Chair, for each of the planned circus
  sessions, will encourage participation and contributions
  and will organize, set the schedule, and oversee its
  progress.
  See the <a href="program.html"><b>online Program page</b></a>
  for information about the topics and schedule of the workshops.
-->

<!--
<a name="features"><h2>Special Features</h2>
<ul>
<li> Workshops - Informal Topical Discussions
<li> Student Papers and Travel Support
<li> Preliminary Proceedings
<li> Special Journal Issue of SISC
</ul>
-->

</body>
