<title>Registration Form (mail or fax)</title>
<h2>REGISTRATION FORM</h2>
<body bgcolor=white>
<center> 
<h3>
<?php
	# this year's details:
	#-mb: include("~copper/2008_tent/INFO.php");
	#-mb: include("/home/copper/public_html/2008_tent/INFO.php");
	include("/home/copper/public_html/2008/INFO.php");

print("Copper Mountain Conference on $Topic<br>\n");
print("Copper Mountain, Colorado, $Dates, $Year\n</h3>\n\n");
?>

Please use the address you want to appear on the attendee list.
<p><table><tr><td><pre>
Name ________________________________________________
 
Affiliation _________________________________________
 
Street Address ______________________________________
 
_____________________________________________________
 
_____________________________________________________
 
Country        ______________________________________
 
email address  ______________________________________
 
phone number   ______________________________________
 
<?php
print("Advanced Registration Fee\n");
print("postmarked <b>before $DeadlineEarlyReg</b>, $Year\n");
printf("\t(   ) SIAM Member \$%s.00\n", $FEE{"siam"});
printf("\t(   ) Non-SIAM Member \$%s.00\n", $FEE{"nonsiam"});
printf("\t(   ) Student \$%s.00\n", $FEE{"student"});
 
print("\nRegular Registration Fee\npostmarked ");
print("<b>on or after $DeadlineEarlyReg</b>, $Year, or paid at conference\n");
printf("\t(   ) SIAM Member \$%s.00\n", $FEE{"siam_late"});
printf("\t(   ) Non-SIAM Member \$%s.00\n", $FEE{"nonsiam_late"});
printf("\t(   ) Student \$%s.00\n", $FEE{"student_late"});
?> 

Method of Payment
	(   )  Check or money order enclosed
 
Checks written to:   <b>Copper Mountain Conference</b>
Must be in U.S. funds drawn on a U.S. bank.  If paying with
a EuroCheque, please add $6 to your fee for bank processing.
 
	(  ) VISA or MASTERCARD only  (No Amer.Expr.)

	Name on Card_________________________________

	Card # ______________________________________
			Exp. Date ___________________

	Signature____________________________________
	(if sending by email no signature necessary)
</pre>
</td></tr></table>
</center>
</body>
