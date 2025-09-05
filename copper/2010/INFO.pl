#!/usr/bin/perl

$Year="2010";
$Dates="4 April -- 9 April";
$Topic="Iterative Methods";	# even="Iterative", odd="Multigrid"
$Acronym="CMCIM10";		# even="CMCIM", odd="CMCCM"
$TheMan="Howard Elman";	        # even="Manteuffel", odd="McCormick"

require "timelocal.pl";

$DeadlineAbstr="February 8";    # 2010

$DeadlineEarlyReg="March 3";    # 2010

#-mb: added 2009,2010: ------------------------------
$DeadlineStudentPaper="18 January";                               # 2010
$DeadlineGuaranteedLodging="18 February";                         # 2010
$DeadlineSpecIssue="TBA";                                         # 2010
$DeadlineReimburse="March 12";                                    # 2010
$ConferenceCoordinator="Annette Anthony, Conference Coordinator"; # 2010
$ConferenceAddress1="Front Range Scientific Computations";        # 2010
$ConferenceAddress2="8865 E. Calle Buena Vista";
$ConferenceAddress3="Scottsdale, AZ 85255";
$ConferenceAddress4="USA";
#-mb: added 2009,2010. ------------------------------


###############################################################################
# Deadline time for early registration:
# Use timelocal($sec0,$min0,$hour0,$mday1,$mon0,$year0);
# Note: all is based at 0 here, execpt for $mday, which starts with 1.
# later in confirm.cgi compare the result with time() to chake for late submit.
###############################################################################
$deadline =timelocal(1,0,0,4,2,$Year-1900);	# start of 4 Mar thisyear 2010
$startline=timelocal(1,0,0,1,9,$Year-1901);	# 1 Oct prevyear
#  $time = timelocal($sec,$min,$hour,$mday1,$mon0,$year);

$eaddress="brezina\@colorado.edu";		# testing only
#-mb: $eaddress="copper\@colorado.edu";	# for the real thing
$eaddress="brezina\@colorado.edu";	# for the real thing
$sendmail="/bin/mailx";

##########################################################################

%FEE = (	"siam" => 395,
		"nonsiam" => 435,
		"student" => 160,
		"siam_late" => 435,
		"nonsiam_late" => 475,
		"student_late" => 160
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
