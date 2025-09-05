#!/usr/bin/perl

$ConferenceName=
	"Thirteenth Copper Mountain Conference on Multigrid Methods";
$Year="2007";
$Dates="18--23 March";
$Topic="Multigrid Methods";
$Acronym="CMCCM07";
$TheMan="Steve McCormick";


$DeadlineAbstr="January 29";		# abstract submission
$DeadlineEarlyReg="February 15";	# early registration
$DeadlineRoomDrop="February 15";	# drop date on room reserv.
$DeadlineStPaper="January 8";		# student paper submission

#	Early Registration:
require "timelocal.pl";
$startline=timelocal(1,0,0,1,10,$Year-1901);	# 1 Oct prevyear
$deadline =timelocal(1,0,0,16,2,$Year-1900);	# 16,2 = 16Feb

$eaddress="fast\@colorado.edu";		# testing only
$eaddress="copper\@colorado.edu";	# for the real thing
$sendmail="/bin/mailx";

##########################################################################

%FEE = (	"siam" => 380,
		"nonsiam" => 420,
		"student" => 150,
		"siam_late" => 420,
		"nonsiam_late" => 460,
		"student_late" => 150
		);

%TYPE = (	"siam" => "SIAM Member (early)",
		"nonsiam" => "Non-SIAM Member (early)",
		"student" => "Student",		# same fee as "late"
		"siam_late" => "SIAM Member",
		"nonsiam_late" => "Non-SIAM Member",
		"student_late" => "Student"
		);

%PayMethod = (	"check" => "by check",
			"verisign" => "credit / VeriSign",
			"cardother" => "credit, via phone or mail"
			);

