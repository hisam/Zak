<html>
<head>
<title>
Create User Account
</title>
</head>
<body bgcolor="gray" text="green">
<center>
<h1>Create User Account</h1>
<right>
<form action="<?php $_SERVER['PHP_SELF']?>" method="get">
 
Mobile number *:     <p><input type="text" name="mob"/></p>
Amount:            <p><input type="text" name="amt"/></p>
Details:
     <p>
     <textarea name="dtls" rows="5" cols="40">
     </textarea>
     </p>
    <p><input type="submit" value="Create!" /></p>
       </form>




<?php
  $user = "hisam";
  $pass = "hisql";
  $db = "hiss";
  $link = @mysql_connect( "localhost", $user, $pass );
  if ( ! $link ) {
  die( "Couldn't connect to MySQL: ".mysql_error() );
      }
  @mysql_select_db( $db )
  or die ( "Couldn't open $db: ".mysql_error() );
  $mob=$_GET['mob'];
  $amt=$_GET['amt'];
  $detls=$_GET['dtls'];
  $detls=trim($detls);
  $date=date("r",time());
  //$update="monday";
  //$date=getdate();
  //$update=getdate();
if(!empty($mob)) {
$result = mysql_query( "SELECT * FROM zak where mob='$mob'" ); 
$ind=mysql_fetch_row( $result );
$ind=trim($ind);
if(!empty($ind)) {
print "The user account with that mobile number already exist, please try again with a new mobile number";
exit(0);
}
}


if(!empty($mob)) {
  $query = "INSERT INTO zak(mob,amt,detls,date,up2date) values('$mob','$amt','$detls','$date','$date')";
 // print "running query: <br />\n$query<br />\n";
    print "Account created!";
  mysql_query( $query, $link )
  or die ( "INSERT error: ".mysql_error() );
  mysql_close( $link );
  }
  else {
  print "Account not created,mobile number is necessary.";
  }
?>

<br>
<a href="home.php">Homepage</a>


</body>
</html>
