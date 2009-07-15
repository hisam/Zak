<html>
<head>
<title>
<?php
$trim=trim($_GET['lin']);
print "$trim" ?>
</title>
</head>
<body bgcolor="gray" text="green">
<center>
<h3>
<?php 
$user = "hisam"; 
$pass = "hisql"; 
$db = "hiss"; 
$link = mysql_connect( "localhost", $user, $pass ); 
if ( ! $link ) { 
die( "Couldn't connect to MySQL: ".mysql_error() ); 
} 

mysql_select_db( $db, $link ) 
or die ( "Couldn't open $db: ".mysql_error() ); 
$lin=$_GET['lin'];
$result = mysql_query( "SELECT * FROM zak2 where sim='$lin'" ); 
$num_rows = mysql_num_rows( $result ); 

//print "<p>$num_rows women have added data to the table</p>\n"; 


//mysql_select_db( $db, $link )
//or die ( "Couldn't open $db: ".mysql_error() );
//mysql_query("UPDATE zak SET amt = amt + 1 WHERE mob='$lin'");



while ( $a_row = mysql_fetch_array( $result ) ) { 

print "Account number:".($a_row['id'])."";
print " <br><br>";


print "Sim number:".($a_row['sim']);
print " <br><br>";

print "Mobile number:".($a_row['mob'])."";
print " <br><br>";
print "Name:".($a_row['nm'])."";
print " <br><br>";

print "Father/Husband Name:".($a_row['fh'])."";
print " <br><br>";
print "Amount::".($a_row['amt']);   
print " <br><br>";

print "Details:".($a_row['detls']);
print " <br><br>";

print "Date Created:".($a_row['date']);
print " <br><br>";

print "Last Updated:".($a_row['up2date']);
print " <br><br>";
}
 mysql_close( $link );
?> 


<br>
<br>




<a href=home.php>Logout</a>

 </body> 
 </html>
