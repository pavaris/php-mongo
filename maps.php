<?php


date_default_timezone_set("America/New_York");
$m = new MongoClient();


$db = $m->map;
$doc = $db->poi2;
$result = $doc->find();


echo json_encode(iterator_to_array($result));

?>
