<?php
ob_start();
$user="xth_3647264";
$user=trim($user);
$pass="zakware";
$pass=trim($pass);
$db = "xth_3647264_zak";
$db=trim($db);
$pwd=trim($_POST['pwd']);
$local="sql302.xtreemhost.com";
$link = mysql_connect( $local, $user, $pass );
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
