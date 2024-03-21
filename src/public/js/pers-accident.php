<?php
mail("garikayi@yahoo.com","Accident Cover", 
	"Full Name=".$_POST['name']." \n \n
	Gender=".$_POST['gender']." \n \n
	Marital Status=".$_POST['mstatus']." \n \n
	Title=".$_POST['title']." \n \n
	RSA ID Number=".$_POST['reaid']." \n \n
	Issuing Country=".$_POST['country']." \n \n
	Postal Code=".$_POST['code']." \n \n
	Vehicle Year=".$_POST['vyear']." \n \n
	Vehicle Make=".$_POST['vmake']." \n \n
	Vehicle Model=".$_POST['vmodel']." \n \n","From:".$_POST['name']);
header ("location: ../thanks-submit.htm");
?>