<?php

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $mailForm = $_POST["mail"];
  $message = $_POST["message"];

$mailTo = "P2537469@my365.dmu.ac.uk";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $txt, $headers);
header("Location: index.php?mailsend");

}
