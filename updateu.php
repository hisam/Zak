<html>
<head>
<title>
Update <?php
$trim=trim($_GET['lin']);
print "$trim"; ?>

</title>
</head>
<body bgcolor="gray" text="green">
<center>
<h3>
<form action="processu.php" method="post">


Amount: <p><input type="text" name="amt" value="<?php print $_GET['amt'] ?>"/>
Add: <input type="text" name="add">  Minus:<input type="text" name="min"></p>
<input type="hidden" name="lin" value="<?php print $_GET['lin']?>">
<input type="hidden" name="up2" value="<?php print $_GET['up2']?>">

Details:
     <p>
          <textarea name="detls" rows="5" cols="40" > 

<?php $trim=trim($_GET['detls']); print "$trim"; ?>

	       </textarea>
	            </p>
		        <p><input type="submit" value="Update!" /></p>
			       </form>

<br>
<br>
<a href="home.php">homepage</a>
</body>
</html>
