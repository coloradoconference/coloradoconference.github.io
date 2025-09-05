<?php

$ConferenceName=
	"Thirteenth Copper Mountain Conference on Multigrid Methods";
$Year="2007";
$Dates="18--23 March";
$Topic="Multigrid Methods";
$Acronym="CMCCM07";
$TheMan="Steve McCormick";

# require "timelocal.pl";

$DeadlineAbstr="January 29";		# abstract submission
$DeadlineEarlyReg="February 15";	# early registration
$DeadlineRoomDrop="February 15";	# drop date on room reserv.
$DeadlineStPaper="January 8";		# student paper submission

# $deadline =timelocal(1,0,0,28,1,$Year-1900);    # 28 Feb thisyear
# $startline=timelocal(1,0,0,1,10,$Year-1901);    # 1 Oct prevyear

$eaddress="fast\@colorado.edu";		# testing only
$eaddress="copper\@colorado.edu";	# for the real thing
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

