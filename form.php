<?php
	$name=$_POST["e_name"];
    $dob=$_POST["dob"];
	$phone=$_POST["P_num"];
	$mail=$_POST["email"];
	$add=$_POST["address"];	
    $bg=$_POST["bgroup"];
	$sel1=$_POST["select1"];
	$sel2=$_POST["select2"];

	echo "your name is : $name <br>";
	echo "your date of birth is : $dob <br>";
	echo "your phone number is : $phone <br>";
	echo "your address is : $add <br>";
	echo "your blood group is : $bg <br>";
	echo "your expirence is : $sel1 <br>";
	echo "your qualification is : $sel2";
?>