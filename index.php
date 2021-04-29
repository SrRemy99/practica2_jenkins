<?php
$response = file_get_contents('api.openweathermap.org/data/2.5/weather?q=tarrega&appid=a65a4cd7c92c5d7fb357a52904b1cb1c');
$response = json_decode($response);
var_dump($response);


$response2 = file_get_contents('api.openweathermap.org/data/2.5/weather?q=tokyo&appid=a65a4cd7c92c5d7fb357a52904b1cb1c');
$response2= json_decode($response);
var_dump($response2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api weather</title>
</head>
<body>



    
</body>
</html>