#!/usr/bin/perl
#################### read info for this year: ############################
do "../INFO.pl";
##########################################################################
#-mb: $ThisDIR="~copper/$Year/Abstracts";
$ThisDIR="/srv/www/cgi-bin/copper2008/Abstracts";
$ThisURL="http://grandmaster.colorado.edu/~copper/$Year/Abstracts";
$SubmDIR="$ThisDIR/submission";
$SubmURL="$ThisURL/submission";
##########################################################################
$WordMin=40;		# abstract length
$WordLimit=1000;	# abstract length
#######################################################################
#######################################################################

unless ($ENV{'REQUEST_METHOD'} eq 'POST') {
	die "\tUse with POST / web page\n\t$ThisURL/Submit.html\n\n";
	}
read(STDIN, $buffer, $ENV{'CONTENT_LENGTH'});
@pairs = split(/&/,$buffer);
foreach $pair (@pairs) {
	($name, $value) = split(/=/,$pair);
	$value =~ tr/+/ /;
	$value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C",hex($1))/eg;
	$FORM{$name} = $value;
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


if ($FORM{"ABSTRACT"} =~ /\\begin\{document\}/) { &BodyOnly(); }
if ($FORM{"ABSTRACT"} =~ /\\end\{document\}/) { &BodyOnly(); }
if ($FORM{"ABSTRACT"} =~ /\\begin\{abstract\}/) { &BodyOnly(); }
if ($FORM{"ABSTRACT"} =~ /\\end\{abstract\}/) { &BodyOnly(); }
if ($FORM{"ABSTRACT"} =~ /\\usepackage\{/) { &BodyOnly(); }
if ($FORM{"ABSTRACT"} =~ /\\title\{/) { &BodyOnly(); }
if ($FORM{"ABSTRACT"} =~ /\\author\{/) { &BodyOnly(); }
if ($FORM{"ABSTRACT"} =~ /\\date\{/) { &BodyOnly(); }
if ($FORM{"ABSTRACT"} =~ /\\documentclass\{/) { &BodyOnly(); }

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
#-mb: uncommented the next two:
if ($nwords < $WordMin) { &AbstractProblem("too short"); }
if ($nwords > $WordLimit) { &AbstractProblem("too long"); }

$reltime = int( (time() - $startline)/100 ) % 1000000;

$filename = $FORM{"lastname"} . $FORM{"firstname"} . "____";
$filename =~ s/\W//g;
$filename = sprintf("%s%06d", substr(lc($filename),0,5), $reltime);

############################################################################

open (DBFILE,"> $SubmDIR/$filename") || die "cannot write to $filename\n\n";
foreach $key (keys %FORM) { printf DBFILE "===%s:\n%s\n", $key, $FORM{$key}; }
close DBFILE;

open (HFILE,"> $SubmDIR/$filename.tex");
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

system("$ThisDIR/Compile $filename.tex");
open(TEXLOG,"$SubmDIR/$filename.log");
while (<TEXLOG>) { if (/\d page/) {
	chomp;
	($npages = $_) =~ s/(\d) page.*$/\1/;
	$npages =~ s/^.*\D//;
	}}
close TEXLOG;

if ($npages > 4) { &AbstractProblem("too long; $npages pages"); }
if ($npages == 1) { $howmanypages = "1 page"; }
if ($npages == 2) { $howmanypages = "2 pages"; }
if ($npages == 3) { $howmanypages = "3 pages"; }
if ($npages == 4) { $howmanypages = "4 pages"; }


####################################
#-mb: log successfull abstract entry
####################################
@mname=qw(Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec);
($sec,$min,$hour,$mday,$mon) = localtime(time());
open (LOG, ">>$ThisDIR/LOG");
printf LOG "%d %s, %s %s, %s, %s.pdf\n", $mday, $mname[$mon],
	$FirstName, $LastName, $Email, $filename;
close LOG;

&ThankYouAndGoodbye();
exit 0;


######################################################################
##### SUBROUTINES ####################################################
######################################################################

sub ThankYouAndGoodbye { print <<EOH;
Content-type: text/html\n
<title>submitted abstract</title>
<body bgcolor=yellow>
<p align=right>
<a href="$SubmURL/$filename.pdf">VIEW SUBMITTED ABSTRACT (PDF)</a></p>
<h2 align=center>Thank You</h2>
Your abstract has been submitted.
To view it as rendered
into PDF ($nwords words, $howmanypages)
click on the link above, and/or save the address
<b><tt>$SubmURL/$filename.pdf</tt></b>.
If you spot errors, back up to the previous page,
edit the form appropriately, and re-submit.
(See $SubmURL/ for a link to the PDF file
and a list of any previous submissions.)
<p>If the LaTeX doesn't seem to be compiled correctly
(or at all) you should check to see whether the
same LaTeX source actually compiles on your own computer,
or try to understand the problem by viewing the log file 
<a href="$SubmURL/$filename.log">$filename.log</a>.
<p>
<b>$FORM{"firstname"} $FORM{"lastname"}</b><br>
$FORM{"email"}<br>
$Address<br>
$FORM{"firstname2"} $FORM{"lastname2"}<br>
$FORM{"firstname3"} $FORM{"lastname3"}<br>
$FORM{"otherauths"}<p>
<b>$FORM{"title"}</b><p>
EOH
($abstext = $Abstract) =~ s/\n\s*\n/\n<p>\n/g;
print $abstext, "\n</body>\n";
}

######################################################################

sub GoBack {
my ($msg) = @_;
print <<EOGB;
Content-type: text/html\n
<title>Sorry</title>
<body bgcolor=orange>
<h2>Sorry</h2><b>
You don't seem to have entered information into
<br>the box titled <font size="+1">"$msg"</font>.
<p>
Please go back (click the ``back'' arrow of your browser),
<br>enter the required "$msg" information,
<br>then click the ``Submit'' button again.
</b></body>
EOGB
exit 0;
}

######################################################################

sub BodyOnly { print <<EOBO;
Content-type: text/html\n
<title>Body of the abstract</title>
<body bgcolor=orange>
<h2>Body of the abstract</h2>
Please go back (click the ``back'' arrow of your browser)
to the submission page and enter
<b><i>ONLY THE BODY</i></b> of your Abstract
into the main box.
<p>
Do <b>NOT</b> include <i>any</i> LaTeX headers like these:<pre>
	\\documentclass{whatever}
	\\usepackage{whatever}
	\\title{whatever}
	\\author{whatever}
	\\date{whatever}
	\\begin{document}
	\\begin{abstract}
	\\end{abstract}
	\\end{document}
</pre>
These are inserted automatically; yours will be redundant
and may give strange results.
<p>
You <b>may</b> define new macros in the body of the abstract
(at the top), e.g.,<pre>
	<b>\\newcommand{\\be}{\\begin{equation}}</b></pre>
<p><hr><p>
Remember that this is just an abstract;
avoid structural frills like sections.
</body>
EOBO
exit 0;
}

######################################################################

sub AbstractProblem {
my ($msg) = @_;
print <<EOPROB;
Content-type: text/html\n
<title>Sorry</title>
<body bgcolor=orange>
<h2>Sorry</h2><b>
The abstract you have entered seems to be $msg.
<p>
Abstracts are expected to be somewhere in the range
of $WordMin--$WordLimit words in length.
<p>
Please go back (click the ``back'' arrow of your browser),
<br>revise the entered text of your abstract,
<br>then click the ``Submit'' button again.
</b></body>
EOPROB
exit 0;
}

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


