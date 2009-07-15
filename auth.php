<?php
ob_start();
$user="hisam";
$user=trim($user);
$pass="hisql";
$pass=trim($pass);
$db = "hiss";
$db=trim($db);
$pwd=trim($_POST['pwd']);
$link = mysql_connect( "localhost", $user, $pass );
//if ( ! $link ) {
//die( "Couldn't connect to MySQL: ".mysql_error() );
//}
mysql_select_db( $db, $link )
or die ; //( "Couldn't open $db: ".mysql_error() );
$result = mysql_query( "SELECT * FROM zak3 where pwd1='$pwd'" );
$ind = mysql_fetch_row( $result );
$ind=trim($ind);
if(!empty($ind)) {
header('Location:home.php');
exit; 
}
else 
{
print "Wrong password!";
header('Location:pass.php');
}
mysql_close( $link );

ob_end_flush();
?>
