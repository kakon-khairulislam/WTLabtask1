<?php
$json_data = file_get_contents('data.json');
$json_data = json_decode($json_data,true);

echo $json_data->UserName;
?>