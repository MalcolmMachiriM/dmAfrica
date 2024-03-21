<?php
mail("garikayi@yahoo.com , hello@kayistudios.com","DM Africa Newsletter Subsciber",  "Email=".$_POST['email']." \n","From:".$_POST['name']);
header ("location: ../thanks.htm");
?>