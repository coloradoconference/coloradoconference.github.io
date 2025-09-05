#!/usr/bin/perl

#-mb: $Year="2008_tent";
$Year="2008";
$Dates="6 April -- 11 April";
$Topic="Iterative Methods";	# even="Iterative", odd="Multigrid"
$Acronym="CMCIM08";		# even="CMCIM", odd="CMCCM"
$TheMan="Tom Manteuffel";	# even="Manteuffel", odd="McCormick"

require "timelocal.pl";

$DeadlineAbstr="February 5";

$DeadlineEarlyReg="March 2";
$deadline =timelocal(1,0,0,3,2,$Year-1900);	# start of 3 Mar thisyear
$startline=timelocal(1,0,0,1,10,$Year-1901);	# 1 Oct prevyear

$eaddress="brezina\@colorado.edu";		# testing only
#-mb: $eaddress="copper\@colorado.edu";	# for the real thing
$eaddress="mbrezina\@grandmaster.colorado.edu";	# for the real thing
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
