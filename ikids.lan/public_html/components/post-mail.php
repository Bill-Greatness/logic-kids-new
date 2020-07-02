<?php

$server_name = 'localhost';
$username = 'bgreatness';
$password = 'Gre@nes$_1';
$db_name = 'sub';

$conn = new mysqli($server_name, $username, $password, $db_name);

if(!$conn){
    echo('<h3>Connection Error<h3>');
};

if(!$_POST['email']){
// $query = 'INSERT INTO mails values'.('e_mail='$_POST['email']);
}

