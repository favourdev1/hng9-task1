<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Request-Method: GET");

$arr["slackUsername"] = "Favour Okechukwu";
$arr["backend"]= true;
$arr["age"] =23;
$arr["bio"]= "am a php programmer,i build web applications using php and its frameworks,am a software Engineer ";

echo json_encode($arr);
?>
