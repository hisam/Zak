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


<form action="updateu.php" method="get">  
<p><input type="hidden" name="lin" value="<?php print $_GET['lin']?>" /></p>
<p><input type="hidden" name="amt" value="<?php 


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
$result = mysql_query( "SELECT * FROM zak where mob='$lin'" );
$num_rows = mysql_num_rows( $result );




//mysql_select_db( $db, $link )
//or die ( "Couldn't open $db: ".mysql_error() );
//mysql_query("UPDATE zak SET amt = amt + 1 WHERE mob='$lin'");



while ( $a_row = mysql_fetch_array( $result ) ) {

$trims=trim($a_row['amt']);
print $trims;

}
mysql_close( $link );
?>" /></p>




<p><input type="hidden" name="up2" value="<?php


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
$result = mysql_query( "SELECT * FROM zak where mob='$lin'" );
$num_rows = mysql_num_rows( $result );




//mysql_select_db( $db, $link )
//or die ( "Couldn't open $db: ".mysql_error() );
//mysql_query("UPDATE zak SET amt = amt + 1 WHERE mob='$lin'");



while ( $a_row = mysql_fetch_array( $result ) ) {

$trims=trim($a_row['up2date']);
print $trims;

}
mysql_close( $link );
?>" /></p>






<p><input type="hidden" name="detls" value="<?php


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
$result = mysql_query( "SELECT * FROM zak where mob='$lin'" );
$num_rows = mysql_num_rows( $result );

while ( $a_row = mysql_fetch_array( $result ) ) {

$trims=trim($a_row['detls']);
print $trims;

}
mysql_close( $link );
?>" /></p>


<p><input type="submit" value="Update Account!" /></p>
                               </form>

<a href="home.php">Logout</a>

 </body> 
 </html>
