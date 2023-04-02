<?php

echo "<pre>";

var_dump($_FILES);

echo "</pre>";

$basename = $_FILES["imagen"]["name"];

echo "\n";
echo $basename;