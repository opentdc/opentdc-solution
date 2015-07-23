<?php
//Event registration
if(isset($_POST["event"])){
	if(isset($_POST["name"]) && $_POST["name"]!="" && isset($_POST["email"]) && $_POST["email"]!=""){
		mail("info@arbalo.ch", "Anmeldung für den arbalo.ch Anlass", $_POST["name"]." ".$_POST["email"]." ".$_POST["message"]);
		header("location: event.php?n=".$_POST["name"]."&formsent");
		}
	else header("location: event.php?formerr&n=".$_POST["name"]."&e=".$_POST["email"]."&m=".$_POST["message"]);
	}
//Contact Form
else{
	if(isset($_POST["name"]) && $_POST["name"]!="" && isset($_POST["email"]) && $_POST["email"]!="" && isset($_POST["subject"]) && $_POST["subject"]!="" && isset($_POST["message"]) && $_POST["message"]!=""){
		mail("info@arbalo.ch", "Nachricht über arbalo.ch", $_POST["name"]." ".$_POST["email"]." ".$_POST["subject"]." ".$_POST["message"]);
		header("location: index.php?formsent");
		}
	else header("location: index.php?formerr&n=".$_POST["name"]."&e=".$_POST["email"]."&s=".$_POST["subject"]."&m=".$_POST["message"]);
}
?>