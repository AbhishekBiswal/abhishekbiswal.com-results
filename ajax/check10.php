<?php
	if(!$_GET['name'])
	{
		echo "<h3>Boom!</h3>";
		echo "<p>Please Enter a Name :)</p>";
	exit();
	}
	$fName = strtolower($_GET['name']);

	if($fName == "abhishek biswal")
	{
		echo "<h3>How Dare You?</h3>";
		echo "<p>Can't outsmart him. He's the Developer</p>";
		exit();
	}
	if($fName == "bharat kashyap")
	{
		echo "<h3>Loading...</h3>";
		echo "<p>The requested page will be loaded one year later.</p>";
		exit();
	}

	include('db.php');
	$checkName = $DBH->prepare("SELECT * FROM studs WHERE name=?");
	$checkName->execute(array($fName));
	if($checkName->rowCount() == 0)
	{
		echo "<h3>Not Found!</h3>";
		echo "<p>Check for any spelling error(s). Can't find this Name in the database :( You don't even know how to spell your friend's/enemy's name correctly?</p>";
			exit();
	}

	while($row = $checkName->fetch())
	{
		$cgpa = $row['cgpa'];
		$name = $row['name'];
	}

	echo "<p>$name's result:</p><h3>CGPA : $cgpa</h3><p>so? he/she lied, right?</p>";

?>