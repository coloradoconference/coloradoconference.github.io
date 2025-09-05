<html>
<head>
<?php

	# this year's details:

	include("/www/faculty/copper/2005/INFO.php");


printf("<title>Registration for %s Copper Mountain Conference</title>\n", $Year);
print("<body bgcolor=\"#00bfbf\">\n<center>\n<h2>Registration</h2>\n");
print("<h3>$Year Copper Mountain Conference<br>$Topic<br>$Dates $Year</h3>\n\n");
print("<form method=\"POST\" action=\"register.cgi\">\n\n");
?>


<table cellpadding=4>

<tr><td align=right>Name</td>
	<td> <input type="text" name="fullname" size=40></td></tr>

<tr><td align=right>E-mail address</td>
	<td> <input type="text" name="email" size=40></td></tr>

<tr><td align=right>Phone #</td>
	<td> <input type="text" name="phonenum" size=40></td></tr>

<tr><td align=right>Street Address</td>
	<td><textarea name="address" cols=40 rows=3
	align="top"></textarea></td></tr>

<tr><td align=right>Country</td>
	<td> <input type="text" name="country"
	value="USA" size=20></td></tr>

<tr><td align=right>Affiliation</td>
	<td> <input type="text" name="affiliation" size=40></td></tr>

</table>


<h4>Please check the appropriate Registration Fee:</h4>
<table cellpadding=8><tr>
<td bgcolor="#9fef9f">Postmarked <font color=blue>



<?php
print("<b>prior to</b></font> $DeadlineEarlyReg, $Year:<p>\n");

print("<input name=\"category\" type=\"radio\" value=\"siam\" checked>\n");
printf("%s \$%d.00\n<br>\n", $TYPE["siam"], $FEE["siam"]);

print("<input name=\"category\" type=\"radio\" value=\"nonsiam\">\n");
printf("%s \$%d.00\n<br>\n", $TYPE["nonsiam"], $FEE["nonsiam"]);

print("<input name=\"category\" type=\"radio\" value=\"student\">\n");
printf("%s \$%d.00\n<br>\n", $TYPE["student"], $FEE["student"]);

print("\n</td><td bgcolor=\"#cfcfff\">Postmarked <font color=blue>\n");
printf("<b>on or after</b></font> %s, %s:<p>\n", $DeadlineEarlyReg, $Year);

print("<input name=\"category\" type=\"radio\" value=\"siam_late\">\n");
printf("%s \$%d.00\n<br>\n", $TYPE["siam_late"], $FEE["siam_late"]);

print("<input name=\"category\" type=\"radio\" value=\"nonsiam_late\">\n");
printf("%s \$%d.00\n<br>\n", $TYPE["nonsiam_late"], $FEE["nonsiam_late"]);

print("<input name=\"category\" type=\"radio\" value=\"student_late\">\n");
printf("%s \$%d.00\n<br>\n", $TYPE["student_late"], $FEE["student_late"]);

?>
</td></tr></table>

<h4>Method of Payment</h4>
<table cellpadding=4><tr bgcolor="#bfdfbf">
<td>	<input name="method" type="radio" value="check" checked>
	<b>Check or money order</b>
</td><td> Checks written to: <b>Copper Mtn. Conference.</b><br>
	Must be in U.S. Funds on a U.S. bank.<br>
	If paying with a EuroCheque, please add $6 to your fee
	for bank processing.
</td></tr>

<tr bgcolor="#bfdfbf">
<td>
	<input name="method" type="radio" value="verisign">
	<b>Credit&nbsp;Card&nbsp;ONLINE&nbsp(<i>VeriSign</i>)</b>
</td><td> (Visa or MasterCard only)
</td></tr>

<tr bgcolor="#bfdfbf">
<td>
	<input name="method" type="radio" value="cardother">
	<b>Credit&nbsp;Card</b>, sending information<br>
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	via mail or email or phone
</td><td> (Visa or MasterCard only)
</td></tr>
</table>

	<p>
	<input type="submit" value="Register">
	&nbsp &nbsp &nbsp &nbsp
	<input type="reset" value="Clear Values">


<p><hr><p>


<h4>Room Sharing Bulletin Board</h4>

<table cellpadding=8 width="84%"><tr><td bgcolor="#bfbfbf">
We have a bulletin board so you can leave
messages about sharing rooms at Copper Mountain.
The theory is that you can use this system to
post your needs and questions about room-sharing
so that other attendees can respond.  We take no
responsibility concerning the contents of any
message on the bulletin board. In addition, the
bulletin board may be cleared out without
notice.
</td></tr></table>

<p><a href="../Messages/add.html">Post</a> a message on the bulletin board.
<p><a href="../Messages/read.cgi">Scan</a> the bulletin board for messages.

</center>
</body>
</html>
