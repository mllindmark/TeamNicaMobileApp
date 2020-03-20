<?php

$host = 'http://localhost';
$port = 8086;
$db_name = 'chlorinators';
$user = 'admin';
$pass = 'admin';


$db_obj = new InfluxDB\Client::fromDSN(sprintf('influxdb://%s:%s@%s:%s/%s',$user,$pass,$host,$port,$db_name));

echo 'Hello World';

?>