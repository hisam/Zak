<html>
<head>
<title>
Create Sim Account
</title>
</head>
<body bgcolor="gray" text="green">
<center>
<h1>Create Sim Account</h1>
<right>
<?php ob_start();
?>
<form action="<?php $_SERVER['PHP_SELF']?>" method="get">
Sim number:         <p><input type="text" name="sim"/></p>
Mobile number :     <p><input type="text" name="mob"/></p>
Name :              <p><input type="text" name="nm"/></p>
Father/Husband name:<p><input type="text" name="fh"/></p>
Amount:             <p><input type="text" name="amt"/></p>
Details:
     <p>
     <textarea name="dtls" rows="5" cols="40">
     </textarea>
     </p>
    <p><input type="submit" value="Create!" /></p>
       </form>




<?php
  $user = "xth_3647264";
  $pass = "zakware";
  $db = "xth_3647264_zak";
  $link = @mysql_connect( "sql302.xtreemhost.com", $user, $pass );
  if ( ! $link ) {
  die( "Couldn't connect to MySQL: ".mysql_error() );
      }
  @mysql_select_db( $db )
  or die ( "Couldn't open $db: ".mysql_error() );
   $sim=$_GET['sim'];
   $mob=$_GET['mob'];
   $nm=$_GET['nm'];
   $fh=$_GET['fh'];
   $amt=$_GET['amt'];
  $detls=$_GET['dtls'];
  $detls=trim($detls);
  $date=date("r",time());
  //$update="monday";
  //$date=getdate();
  //$update=getdate();
if(!empty($sim)) {
$result = mysql_query( "SELECT * FROM zak2 where sim='$sim'" ); 
$ind=mysql_fetch_row( $result );
$ind=trim($ind);
if(!empty($ind)) {
print "The user account with that sim number already exist, please try again with a new sim number";
exit;
}
}

ob_end_flush();
if(!empty($sim)) {
  $query = "INSERT INTO zak2(sim,mob,nm,fh,amt,detls,date,up2date) values('$sim','$mob','nm','fh','$amt','$detls','$date','$date')";
 // print "running query: <br />\n$query<br />\n";
 //   header("create.php");
 //   exit;
    print "Account created!";
  mysql_query( $query, $link )
  or die ( "INSERT error: ".mysql_error() );
  mysql_close( $link );

  }
  else {
  print "Account not created,Sim number is necessary.";
  }
?>

<br>
<a href="home.php">Homepage</a>



</body>
</html>
