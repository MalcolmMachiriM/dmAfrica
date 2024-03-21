<?php
mail("garikayi@yahoo.com","Camera Insurance", 
	"Full Name=".$_POST['fullname']." \n \n
	Gender=".$_POST['gender']." \n \n
	Title=".$_POST['title']." \n \n
	RSA ID Number=".$_POST['reaid']." \n \n
	Email=".$_POST['email']." \n \n
	ID Type=".$_POST['idtype']." \n \n
	Contact Number=".$_POST['phone']." \n \n","From:".$_POST['email']);
header ("location: ../thanks-submit.htm");
?>