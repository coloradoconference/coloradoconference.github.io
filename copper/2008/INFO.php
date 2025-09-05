<?php

$Year="2008";
$Dates="6 April -- 11 April";
$Topic="Iterative Methods";	# even="Iterative", odd="Multigrid"
$Acronym="CMCIM08";		# even="CMCIM", odd="CMCCM"
$TheMan="Tom Manteuffel";	# even="Manteuffel", odd="McCormick"



$DeadlineAbstr="February 5";

$DeadlineEarlyReg="March 2";



$eaddress="brezina\@colorado.edu";		# testing only
$eaddress="mbrezina\@grandmaster.colorado.edu";	# for the real thing
$sendmail="/bin/mailx";

##########################################################################

$FEE = array(	"siam" => 380,
		"nonsiam" => 420,
		"student" => 150,
		"siam_late" => 420,
		"nonsiam_late" => 460,
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

