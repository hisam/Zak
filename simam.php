<html>
<head>
<title>
Calculate Sim Account</title>
</head>
<body bgcolor="gray" text="green">
<center>
<h3>

<form action="<?php $_SERVER['PHP_SELF']?>" method="get">
Enter account numbers:<br>
<p>From-<input type="text" name="from">-To-<input type="text" name="to"></p>
<p><input type="submit" value="Calculate!" /></p>
       </form>


<?php 

$from=$_GET['from'];
$to=$_GET['to'];

$user = "xth_3647264";
$pass = "zakware";
$db = "xth_3647264_zak";
$link = mysql_connect( "sql302.xtreemhost.com", $user, $pass );
if ( ! $link ) {
die( "Couldn't connect to MySQL: ".mysql_error() );
}

for($i=$from;$i<=$to;$i++)
{
mysql_select_db( $db, $link )
or die ( "Couldn't open $db: ".mysql_error() );
$result = mysql_query( "SELECT * FROM zak2 where id='$i'" );
$num_rows = mysql_num_rows( $result );



while ( $a_row = mysql_fetch_array( $result ) ) {


print "Account number:".($a_row['id'])."--";
print "Sim number:".($a_row['sim'])."--";
print "Mobile number:".($a_row['mob'])."--";
print "Name:".($a_row['nm'])."--";
print "Father/Husband Name:".($a_row['fh'])."--";
print "Amount::".($a_row['amt'])."--";
print "Details:".($a_row['detls'])."--";
print "Date Created:".($a_row['date']);
print " <br><br>";




$sum=$sum+$a_row['amt'];
}
}
mysql_close( $link );
Print "<h2><u>Total sum from the account number $from to $to: $sum</u></h2>";

?>
<br>
<a href="home.php">Homepage!</a>
</body>
</html>

