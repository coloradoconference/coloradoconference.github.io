#!/usr/bin/perl
##########################################################################
##########################################################################
if($ENV{'REQUEST_METHOD'} eq 'POST') {
  read(STDIN, $buffer, $ENV{'CONTENT_LENGTH'});
  @pairs = split(/&/,$buffer);
  foreach $pair (@pairs) {
    ($name, $value) = split(/=/,$pair);
    $value =~ tr/+/ /;
    $value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C",hex($1))/eg;
    $value =~ s/\"/''/g;
    $FORM{$name} = $value;
    }
}

	$title = $FORM{"title"};
	$speaker = $FORM{"speaker"};
	$address = $FORM{"address"};
	$email = $FORM{"email"};
	$authortwo = $FORM{"authortwo"};
	$authorthree = $FORM{"authorthree"};
	$abstract = $FORM{"abstract"};

exit 0;

#################################################################################
#################################################################################

sub YouForgotName { print <<EOYFN;
Content-Type: text/html\n\n
<html>
<head>
<title>Go back, provide name</title>
</head>
<body bgcolor=yellow>
<h1>We need your name</h1>
Please go back to the registration page and
provide your name, and any other needed information.<p>
We need, at the very least, your name and either your
email address or your street address.<p>
<hr>
</body></html>
EOYFN
exit 0;
}

#################################################################################

sub YouForgotAddress { print <<EOYFA;
Content-Type: text/html\n\n
<html>
<head>
<title>Go back, provide address</title>
</head>
<body bgcolor=yellow>
<h1>We need your address</h1>
Please go back to the registration page and
provide either your email address or your street address.<p>
<hr>
</body></html>
EOYFA
exit 0;
}

#################################################################################

sub ConfirmationPage {
print <<EOH;
Content-Type: text/html\n\n
<html>
<head><title>CONFIRM REGISTRATION:</title></head>
<body bgcolor=navy>
<center>
<p><table cellpadding=20 border=12><tr>
<td align=center bgcolor="#afdfaf">
<h1>CONFIRM REGISTRATION</h1>
Review the information below.<br>
Either confirm your registration,<br>
or go back to the registration page and revise as needed.

<form method="POST" action="confirm.cgi">

	<input type="hidden" name="fullname" value="$fullname">
	<input type="hidden" name="email" value="$email">
	<input type="hidden" name="phonenum" value="$phonenum">
	<input type="hidden" name="country" value="$country">
	<input type="hidden" name="affil" value="$affiliation">
	<input type="hidden" name="fee" value="$fee">
	<input type="hidden" name="method" value="$method">
	<input type="hidden" name="addrform" value="$addrform">

<table cellpadding=10><tr><td colspan=3 bgcolor=white>
<table align=center cellpadding=2>\n
<tr><td align=right>Name</td><td><b>$fullname</b></td></tr>
<tr><td align=right>Email</td><td><b>$email</b></td></tr>
<tr><td align=right>Phone</td><td><b>$phonenum</b></td></tr>
<tr><td align=right>Address</td><td bgcolor="#affff"><b>$addrhtml</b></td></tr>
<tr><td align=right>Country</td><td><b>$country</b></td></tr>
<tr><td align=right>Affiliation</td><td><b>$affiliation</b></td></tr>
<tr><td align=right>Fee</td><td><b>\$ $price{$fee}.00</b>,
		$feetype{$fee}</td></tr>
<tr><td align=right>Payment</td><td><b>
EOH

if ($method eq "check") { print "by check or money order</b>\n";
	print "(sent by mail)"; }
if ($method eq "verisign") { print "online credit card</b>\n";
	print "(VeriSign)"; }
if ($method eq "cardother") { print "credit card</b>\n";
	print "(sending information by phone/mail/email)"; }

###################################
print <<EOT;
\n</td></tr></table>
</td></tr>
<tr><td></td><th bgcolor=yellow>
	<input type="submit" value=" *****  CONFIRM REGISTRATION  ***** ">
</th><td></td></tr></table>

   <center>
   <p>
   	(For a EuroCheque payment, a \$6 bank processing fee will be added.)
   <p>
   	Please be sure you understand the cancellation policy:<br>
   	No refunds will be given for cancellations after March 1.<br>
   	Full refunds less a \$50 service charge will be given
   	if notified before March 1.
   </center>

</td></tr></table>
</body></html>
EOT
exit 0;
}

#################################################################################


