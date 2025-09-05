<?php
##########################################################################
# Info for registration etc for 2011 conference
##########################################################################

$Year="2011";                    # 2011
$Year_parity="odd";              # 2011
$Year_dir="copper2011";          # directory in /srv/www/cgi-bin where stuff resides
$Dates="27 March - 1 April, 2011";     # 2011
$Date_start = "27 March";        # 2011
$Date_end = "1 April";           # 2011
# $Topic="Iterative Methods";	 # even="Iterative", odd="Multigrid"
$Topic="Multigrid Methods";	 # even="Iterative", odd="Multigrid"
$Acronym="CMCMM15";		 # even="CMCIM", odd="CMCCM"
$AcronymYear="CMCMM 2011";	 # even="CMCIM", odd="CMCCM"
# $OrderNum = "11th";            # 2010 Iterative
# $OrderTxt = "ELEVENTH";        # 2010 Iterative
$OrderNum = "15th";              # 2011 Multiugrid
$OrderTxt = "FIFTEENTH";         # 2011 Multiugrid
#$TheMan="Howard Elman";	 # even="Manteuffel", odd="McCormick"
$TheMan="Van Emden Henson";	 # even="Manteuffel", odd="McCormick"



$DeadlineAbstr="January 14";     # 2011

$DeadlineEarlyReg="February 25"; # 2011
$DeadlineRefund="March 1, 2011"; # 2011 XXX unused yet

#-mb: added for 2011 and on: ------------------------------
$BanquetDay = "Wednesday";                                        # 2011
$GroupCode = "3GB2II";                                            # 2011
#-mb: added 2009,2010, 2011: ------------------------------
$DeadlineStudentPaper="January 10";                               # 2011
$DeadlineGuaranteedLodging="February 23, 2011";                   # 2011
#$DeadlineSpecIssue="TBA";                                         # 2011
$DeadlineSpecIssue="May 16, 2011";                                         # 2011
$DeadlineTravelSupport="February 13, 2011";                       # 2011
$DeadlineReimburse="March 1";                                     # 2011 unused
$ConferenceCoordinator="Annette Anthony, Conference Coordinator"; # 2011
$ConferenceAddress1="Front Range Scientific Computations";        # 2011
$ConferenceAddress2="8865 E. Calle Buena Vista";
$ConferenceAddress3="Scottsdale, AZ 85255";
$ConferenceAddress4="USA";
#-mb: added 2009,2010, 2011. ------------------------------



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

