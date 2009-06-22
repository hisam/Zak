<html>
<head>
<title>Change password</title>
</head>
<body bgcolor="gray" text="green">
<center>
<h3>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
Current password:     <p><input type="password" name="opwd"/></p>
New password:  <p><input type="password" name="npwd"/></p>
<p><input type="submit" value="Change password!" /></p>
       </form>


<?php

$user="xth_3647264";
$user=trim($user);
$pass="zakware";
$pass=trim($pass);
$db = "xth_3647264_zak";
$db=trim($db);
$opwd=$_POST['opwd'];
$npwd=$_POST['npwd'];
$link = mysql_connect( "sql302.xtreemhost.com", $user, $pass );
//if ( ! $link ) {
//die( "Couldn't connect to MySQL: ".mysql_error() );
//}
mysql_select_db( $db, $link )
or die ; //( "Couldn't open $db: ".mysql_error() );
$result = mysql_query( "SELECT * FROM zak3 where pwd1='$opwd'" );
$ind = mysql_fetch_row( $result );
$ind=trim($ind);
if(!empty($ind)) {
mysql_query("UPDATE zak3 SET pwd1='$npwd' where pwd1='$opwd'");
print"password changed successfully";

}
else
{
print "Wrong current password.Please try again";

}
mysql_close( $link );

?>

<br>
<br>
<a href="home.php">Homepage</a>

</body>
</html>
