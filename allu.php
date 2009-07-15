  <html> 
     <head> 
      <title>Listing 13.5 Selecting Data</title> 
      </head> 
        <body bgcolor="gray" text="green"> 
	<center>
	<a href="home.php">Homepage</a>
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
	 
	 $result = mysql_query( "SELECT * FROM zak"); 
	 $num_rows = mysql_num_rows( $result ); 
	 
	 print "<p>$num_rows total accounts.</p>\n"; 
	 
	 print "<table border=\"1\">\n";
	 print "<tr>\n";
	 print "\t<td>"."Account number"."</td>\n";
	 print "\t<td>"."Mobile number"."</td>\n";
	 print "\t<td>"."Total Amount"."</td>\n";
	 print "\t<td>"."Details"."</td>\n";
	 print "\t<td>"."Date created"."</td>\n";
	 print "\t<td>"."Updates"."</td>\n";
	 print "</tr>\n";





	 while ( $a_row = mysql_fetch_row( $result ) ) { 
	   print "<tr>\n"; 
	   foreach ( $a_row as $field ) { 
	     print "\t<td>".stripslashes($field)."</td>\n"; 
	   } 
	   print "</tr>\n"; 
	 } 
	 print "</table>\n"; 
	 mysql_close( $link ); 
	 ?> 
	 <a href="home.php">Homepage</a>

	 </body> 
	</html> 
