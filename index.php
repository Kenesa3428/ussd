<?php

$sessionId = $_POST["sessionId"]
$serviceCode = $_POST["serviceCode"]
$phoneNumber = $_POST["phoneNumber"]
$text = $_POST["text"]

if ($text == ""){
    $response = "What would you want to check \n";
    $response = "1. English\n";
    $response = "1. Amharic";
} else if ($text =="1"){
    $response = "Welcome to Our Delivery Service";
} else if ($text=="2"){
    $response = "Endet Not Selam";
} else if ($text="1*1") {
    $response = "Fuck off";
}

header('Content-type: text/plain');
echo $response;
?>
