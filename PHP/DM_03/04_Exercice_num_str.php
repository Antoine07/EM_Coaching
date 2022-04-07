<?php

$students = ["alan", "sophie" , "bernard", "jacques"];

// créez un tableau des longueurs des students 
$numbers = [];

foreach($students as $student){
        $numbers[] = strlen($student);
}

print_r($numbers);