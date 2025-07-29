<?php

$host = getenv('DB_HOST') ?: 'mysql';
$dbname = getenv('DB_NAME') ?: 'sample';
$username = getenv('DB_USER') ?: 'sampleuser';
$password = getenv('DB_PASS') ?: 'samplepass';

return new PDO("mysql:host=$host;dbname=$dbname", $username, $password, [PDO::ATTR_PERSISTENT => true]);