<?php
mail("jorge@dmafrica.co.za","Motor Insurance", 
	"
	Full Name: ".$_POST['name']."
	Gender: ".$_POST['gender']." 
	Marital Status: ".$_POST['mstatus']."
	Title: ".$_POST['title']." 
	RSA ID Number: ".$_POST['reaid']."
	Issuing Country: ".$_POST['country']."
	License Code: ".$_POST['code']."
	Vehicle Year: ".$_POST['vyear']."
	Vehicle Make: ".$_POST['vmake']."
	Vehicle Model: ".$_POST['vmodel']."
	Email Address: ".$_POST['cemail']."
	Contact: ".$_POST['ccontact']." ",
	"From: ".$_POST['name']);
header ("location: ../thanks-submit.htm");




?>