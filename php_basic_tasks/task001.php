<?php

/*
echo 'I went down to the river,<br />';
echo 'I set down on the bank.<br />';
echo 'I tried to think but couldn\'t,<br />';
echo 'So I jumped in and sank.<br /><br />';

echo 'I came up once and hollered!<br />';
echo 'I came up twice and cried!<br />';
echo 'If that water hadn\'t a-been so cold<br />';
echo 'I might\'ve sunk and died.\'<br /><br />';
*/
$firstName = 'Milovan';
$age = '35';
$height = '1.7';

//print_r($firstName);
//print_r($age);
//print_r($height);

var_dump($firstName);
var_dump($age);
var_dump($height);

$newFirstName = $firstName;
$newAge = (int)$age;
$newHeight = (double)$height;

var_dump($newFirstName);
var_dump($newAge);
var_dump($newHeight);
