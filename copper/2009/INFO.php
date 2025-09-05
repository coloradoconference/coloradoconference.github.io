<?php

$Year="2009";
$Dates="22 March -- 27 March";
$Topic="Multigrid Methods";	# even="Iterative", odd="Multigrid"
$Acronym="CMCMM09";		# even="CMCIM", odd="CMCCM"
$TheMan="Tom Manteuffel";	# even="Manteuffel", odd="McCormick"



$DeadlineAbstr="January 15";

$DeadlineEarlyReg="February 22";

#-mb: added 2009: ------------------------------
$TutorialDay="Sunday, March 22"; # day of the tutorial
$TalkTimeProper="15"; # 2009 time in minutes for talk proper
$TalkTimeQnA="5";     # 2009 time in minutes for Q&A after talk proper
$TalkTimeTotal="20";  # 2009 time in minutes for talk proper plus Q&A
#-mb. added 2009: ------------------------------



$eaddress="brezina\@colorado.edu";		# testing only
$eaddress="mbrezina\@grandmaster.colorado.edu";	# for the real thing
$sendmail="/bin/mailx";

##########################################################################

$FEE = array(	"siam" => 400,
		"nonsiam" => 445,
		"student" => 150,
		"siam_late" => 445,
		"nonsiam_late" => 485,
		"student_late" => 150
		);

$TYPE = array(	"siam" => "SIAM Member (early)",
		"nonsiam" => "Non-SIAM Member (early)",
		"student" => "Student",		# same fee as "late"
		"siam_late" => "SIAM Member",
		"nonsiam_late" => "Non-SIAM Member",
		"student_late" => "Student"
		);

$PayMethod = array(	"check" => "by check",
			"verisign" => "credit / VeriSign",
			"cardother" => "credit, via phone or mail"
			);

?>

