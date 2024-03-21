<?php
mail("garikayi@yahoo.com","Medical Insurance", 
	"First Name=".$_POST['firstname']." \n \n
	Last Name=".$_POST['lastname']." \n \n
	Contact Number=".$_POST['phone']." \n \n
	Email=".$_POST['email']." \n \n
	RSA ID Number=".$_POST['reaid']." \n \n
	Monthly Income=".$_POST['income']." \n \n","From:".$_POST['email']);
header ("location: ../thanks-submit.htm");
?>