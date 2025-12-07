#!/usr/local/bin/perl
##########################################################################
$#ARGV && die "Usage: $0 aaaaaNNNNNN\n\n";	# 1 parameter
$infile=$ARGV[0];
unless ($infile =~ /^\w\w\w\w\w\d\d\d\d\d\d$/) {
		die "Usage: $0 aaaaaNNNNNN\n\n"; }
##########################################################################
#################### read info for this year: ############################
do "../../INFO.pl";
##########################################################################
$ParentDIR="/www/faculty/copper/$Year/Abstracts";
$SubmDIR="$ParentDIR/submission";
##########################################################################
open (TXT,$infile) || die "cannot read file $infile\n\n";
while (<TXT>) {
	if (/^===/) {
		$fld = $_;
		chomp $fld;
		$fld =~ s/^===//;
		$fld =~ s/:$//;
		next;
		}
	$FORM{$fld} .= $_;
}

#########################################################################
#### check for missing fields ###########################################
#########################################################################

($Title = $FORM{"title"}) =~ s/\s+/ /g;
if (length($Title)<9) { &GoBack("Title of Talk"); }

($LastName = $FORM{"lastname"}) =~ s/\s+/ /g;
$LastName =~ s/^ //;
$LastName =~ s/ $//;
if (length($LastName)<2) { &GoBack("Speaker's Last Name"); }

($FirstName = $FORM{"firstname"}) =~ s/\s+/ /g;
$FirstName =~ s/^ //;
$FirstName =~ s/ $//;
if (length($FirstName)<2) { &GoBack("Speaker's First Name"); }

($Email = $FORM{"email"}) =~ s/\s+/ /g;
$Email =~ s/^ //;
$Email =~ s/ $//;
unless (($Email =~ /\@/) && (length($Email)>11)) {
			&GoBack("Speaker's Email address"); }

($Address = $FORM{"postal"}) =~ s/\r\n/\n/g;
$Address =~ s/\n\n*/\n/g;
$Address =~ s/,\s*$//mg;
$Address =~ s/\./ /g;
$Address =~ s/^\s*//mg;
$Address =~ s/\s*$//mg;
$Address =~ s/\n/, /g;
$Address =~ s/\s+/ /g;
if (length($Address)<20) { &GoBack("Speaker's Postal Address"); }
($TeXaddress = $Address) =~ s/, / \\\\ /g;

@ABSTR = split(/\r?\n/,$FORM{"ABSTRACT"});
$Abstract="";
foreach $line (@ABSTR) {
	if ($line =~ /^\s*\%/) { next; }
	$line =~ s/\s+\%.*$//;
	$line =~ s/^\s*//;
	$line =~ s/\s*$//;
	$line =~ s/\s+/ /g;
	if (length($line) < 90) { $Abstract .= "$line\n"; next; }
	@words = split(/\s+/,$line);
	$col=0;
	while (@words) {
		$word = shift @words;
		$l = length($word);
		if ($col == 0) { $Abstract .= $word; $col=$l; }
		elsif (($col+$l)>72) { $Abstract .= "\n$word"; $col=$l; }
		else { $Abstract .= " $word"; $col += (1+$l); }
	}
	$Abstract .= "\n";
	}

$nwords = &Wordcount($Abstract);

open (HFILE,"> $SubmDIR/$infile.tex");
print HFILE <<HHEAD;
\\documentclass{report}
\\usepackage{amsmath,amssymb}
\\setlength{\\parindent}{0mm}
\\setlength{\\parskip}{1em}
\\begin{document}
\\begin{center}
\\rule{6in}{1pt} \\
{\\large $FirstName $LastName \\\\
{\\bf $Title}}

$TeXaddress
HHEAD

if ($Email) { printf HFILE "\\\\\n{\\tt $Email}"; }
if ($FORM{"lastname2"}) {
	printf HFILE "\\\\\n%s %s", $FORM{"firstname2"}, $FORM{"lastname2"};
	}
if ($FORM{"lastname3"}) {
	printf HFILE "\\\\\n%s %s", $FORM{"firstname3"}, $FORM{"lastname3"};
	}
if ($FORM{"otherauths"}) {
	($Others = $FORM{"otherauths"}) =~ s/\r\n/\n/g;
	$Others =~ s/\n/\n\t/g;
	print HFILE "\\\\\n\t$Others";
	}

printf HFILE "\\end{center}\n\n%s\n\n\\end{document}\n", $Abstract;
close HFILE;		# HEY

system("$ParentDIR/Compile $infile.tex");
open(TEXLOG,"$SubmDIR/$infile.log");
while (<TEXLOG>) { if (/\d page/) {
	chomp;
	($npages = $_) =~ s/(\d) page.*$/\1/;
	$npages =~ s/^.*\D//;
	}}
close TEXLOG;

print "**** compiled: $npages pages.\n\n";
system("/bin/ls -l $infile $infile.tex $infile.pdf");

exit 0;


######################################################################
##### SUBROUTINES ####################################################
######################################################################


sub Wordcount {
    my ($ab) = @_;
    $ab =~ s/\s+/ /g;
    $ab =~ s/\$\$[^\$]+\$\$/ x x x x x x x x x x x x /g;
    $ab =~ s/\$[^\$]+\$/ x x /g;
    $ab =~ s/\\begin{eq[^q]+\\end{eq/ x x x x x x x x x x x x /g; # }}
    $ab =~ s/\\[a-zA-Z]+/ /g;
    $ab =~ s/[{}]/ /g;
    return int(0.99 * scalar(split(/\s+/,$ab)));
    }

######################################################################

sub GoBack {
	my ($str) = @_;
	die "missing something.\n$str\n\n";
	}


__END__


===email:
kjordan@us.ibm.com
===title:
Blue Gene/L Impacting Computational Science and Engineering
===firstname:
Kirk E.
===lastname:
Jordan
===postal:
http://www-3.ibm.com/software/info/university/people/kjordan.html
===ABSTRACT:
One year has passed and Blue Gene has been placed at
several sites, many of which have a computational science component
that involves iterative methods.  In this talk, I will review some of
the results obtained at some of these sites.  I will elaborate on work
underway with collaborators and colleagues in the area of
computational science.  For those unfamiliar with the Blue Gene
System, I will very briefly describe the hardware and software
environment.

I will describe how Blue Gene might be used to tackle
multi-scale problems, many of which will need good parallel iterative
solvers.  While progress is being made, there remain many challenges
for the computational science community to apply the Blue Gene
resource to Big science problems with impact on society that until now
or in current implementations have fallen short of the mark.  Finally,
I will elaborate on opportunities that exist for the community to get
access to Blue Gene. 
