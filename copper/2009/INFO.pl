#!/usr/bin/perl

$Year="2009";
$Dates="22 March -- 27 March";
#-mb: $Topic="Iterative Methods";	# even="Iterative", odd="Multigrid"
$Topic="Multigrid Methods";	# even="Iterative", odd="Multigrid"
$Acronym="CMCMM09";		# even="CMCIM", odd="CMCCM"
$TheMan="Tom Manteuffel";	# even="Manteuffel", odd="McCormick"

require "timelocal.pl";

#-mb: $DeadlineAbstr="January 15";                                      # 2009
$DeadlineAbstr="January 26";                                      # 2009
$DeadlineEarlyReg="February 22";                                  # 2009
#-mb: added 2009: ------------------------------ 
#-mb: $DeadlineStudentPaper=" 5 January";                                # 2009
$DeadlineStudentPaper="12 January";                                # 2009
$DeadlineGuaranteedLodging="18 February";                         # 2009
$DeadlineSpecIssue="TBA";                                         # 2009
$DeadlineReimburse="March 1";                                     # 2009
$ConferenceCoordinator="Annette Anthony, Conference Coordinator"; # 2009
$ConferenceAddress1="Front Range Scientific Computations";        # 2009
$ConferenceAddress2="8865 E. Calle Buena Vista";
$ConferenceAddress3="Scottsdale, AZ 85255";
$ConferenceAddress4="USA";
#-mb. added 2009. ------------------------------ 

#-mb: added 2009: ------------------------------
$TutorialDay="Sunday, March 22"; # day of the tutorial
$TalkTimeProper="15"; # 2009 time in minutes for talk proper
$TalkTimeQnA="5";     # 2009 time in minutes for Q&A after talk proper
$TalkTimeTotal="20";  # 2009 time in minutes for talk proper plus Q&A
#-mb. added 2009: ------------------------------


# Deadline time for early registration:
# Use timelocal($sec,$min,$hour,$mday,$mon,$year);
# Note: all is based at 0 here, execpt for $mday, which starts with 1.
# later in confirm.cgi compare the result with time() to chake for late submit.
#-mb: $deadline =timelocal(1,0,0,3,2,$Year-1900); # start of 3 Mar of $Year
$deadline =timelocal(1,0,0,23,1,$Year-1900);	#start of 23 Feb of $Year; 2009
$startline=timelocal(1,0,0,1,9,$Year-1901);	# 1 Oct prevyear to $Year

#-mb: $eaddress="brezina\@colorado.edu";		# testing only
#-mb: $eaddress="copper\@colorado.edu";	# for the real thing
$eaddress="mbrezina\@grandmaster.colorado.edu";	# for the real thing
$sendmail="/bin/mailx";

##########################################################################

%FEE = (	"siam" => 400,
		"nonsiam" => 445,
		"student" => 150,
		"siam_late" => 445,
		"nonsiam_late" => 485,
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
