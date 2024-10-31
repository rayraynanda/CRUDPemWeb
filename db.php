<?php
    $host = 'localhost';
    $dbusername = 'root';
    $dbpassword = 'password';
    $dbname = 'kelas_paw';

    $mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if ($mysqli->connect_errno) {
        die('Database connection failure');
    }