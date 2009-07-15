<html>
<head>
<title>
Account update Status
</title>
</head>
<body bgcolor="gray" text="green">
<center>
<h2>
<?php

$user = "hisam";
$pass = "hisql";
$db = "hiss";


$lin=$_POST['lin'];
//print "$lin";
$amt=$_POST['amt'];
//print "$amt";
$add=$_POST['add'];
$adds=trim($add);
$min=$_POST['min'];
$mins=trim($min);
$detls=$_POST['detls'];
$up2=$_POST['up2'];


//print $adds;
$link = @mysql_connect( "localhost", $user, $pass );
if ( ! $link ) {
die( "Couldn't connect to MySQL: ".mysql_error() );
 }
 //@mysql_select_db( $db )
if(!empty($adds) && !empty($mins) ) {
print "You cannot add and minus at the same time. Please enter only one.";
print "Go back and try again!";
exit;
}
//print "$lin";
if(!empty($adds)) {
mysql_select_db( $db, $link )
or die ( "Couldn't open $db: ".mysql_error() );
$res=$amt+$adds;
//print "$lin";
$qu=mysql_query("UPDATE zak SET amt ='$res'   WHERE mob='$lin'");
$dt=date("r",time());
$upd="Added "."$adds"." on "."$dt";
$upd="$upd"."<br>"."$up2"."<br>";
mysql_query("UPDATE zak SET up2date ='$upd'   WHERE mob='$lin'");



//mysql_close( $link );
//print "Amount updated";
}
if(!empty($mins)) {
mysql_select_db( $db, $link )
or die ( "Couldn't open $db: ".mysql_error() );
$res2=$amt-$mins;
$qu=mysql_query("UPDATE zak SET amt ='$res2'   WHERE mob='$lin'");

$dt=date("r",time());
$upd="Minused "."$mins"." on "."$dt";
$upd="$upd"."<br>"."$up2"."<br>";
mysql_query("UPDATE zak SET up2date ='$upd'   WHERE mob='$lin'");


//mysql_close( $link );
//print "Amount updated";
}
if(!empty($detls)) {
mysql_select_db( $db, $link )
or die ( "Couldn't open $db: ".mysql_error() );
$qu=mysql_query("UPDATE zak SET detls ='$detls'   WHERE mob='$lin'");
//mysql_close( $link );
}
//mysql_select_db( $db, $link )
//or die ( "Couldn't open $db: ".mysql_error() );
//$up2=date("r",time());
//$qu=mysql_query("UPDATE zak SET up2date ='$up2'   WHERE mob='$lin'");
//mysql_close( $link );
print "$lin <br> Account Updated!<br>";




$result = mysql_query( "SELECT * FROM zak where mob='$lin'" );
$num_rows = mysql_num_rows( $result );

//print "<p>$num_rows women have added data to the table</p>\n";


//mysql_select_db( $db, $link )
//or die ( "Couldn't open $db: ".mysql_error() );
//mysql_query("UPDATE zak SET amt = amt + 1 WHERE mob='$lin'");



while ( $a_row = mysql_fetch_array( $result ) ) {

print "Account number:".($a_row['id'])."";
print " <br><br>";



print "Mobile number:".($a_row['mob'])."";
print " <br><br>";
print "Amount::".($a_row['amt']);
print " <br><br>";

print "Details:".($a_row['detls']);
print " <br><br>";

print "Date Created:".($a_row['date']);
print " <br><br>";

print "UPDATES: <br>--------------------------------------------------------------------------------------------------<br>".($a_row['up2date']);
print " <br><br>";
}
 mysql_close( $link );


  
?>

<br>

<a href="home.php">Homepage</a>

</body>
</html>
