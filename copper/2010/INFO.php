<?php

$Year="2010";
$Dates="4 April -- 9 April";
$Topic="Iterative Methods";	# even="Iterative", odd="Multigrid"
$Acronym="CMCIM10";		# even="CMCIM", odd="CMCCM"
$TheMan="Howard Elman";	        # even="Manteuffel", odd="McCormick"



$DeadlineAbstr="February 8";

$DeadlineEarlyReg="March 3";



$eaddress="brezina\@colorado.edu";		# testing only
$eaddress="mbrezina\@grandmaster.colorado.edu";	# for the real thing
$sendmail="/bin/mailx";

##########################################################################

$FEE = array(	"siam" => 395,
		"nonsiam" => 435,
		"student" => 160,
		"siam_late" => 435,
		"nonsiam_late" => 475,
		"student_late" => 160
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

