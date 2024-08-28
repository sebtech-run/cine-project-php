<?php
include 'vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;
$films = Yaml::parseFile('./films.yaml');
var_dump($films);





