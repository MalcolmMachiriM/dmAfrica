<?php
mail("garikayi@yahoo.com , hello@kayistudios.com","DM Africa Newsletter Subsciber",  "Name=".$_POST['name']." \n \nEmail=".$_POST['email']." \n","From:".$_POST['name']);
header ("location: ../thanks.htm");
?>