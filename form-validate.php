<?php
	$name=$_POST["name"];
	$email=$_POST["email"];
	$number=$_POST["number"];
	$gender=$_POST["gender"];
	$lang=$_POST["language"];
	$dob=$_POST["dob"];

	if (isset($_POST["submit"])) {
		echo "Hello, ".$name;
		echo "<br>";
		echo "<br>";
		echo "Your Email is: ".$email;
		echo "<br>";
		echo "<br>";
		echo "Phone: ".$number;
		echo "<br>";
		echo "<br>";
		echo "Gender: ".$gender;
		echo "<br>";
		echo "<br>";
		echo "Language you know: ".$lang;
		echo "<br>";
		echo "<br>";
		echo "Date of birth: ".$dob;

	}

?>