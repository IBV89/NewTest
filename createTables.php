<?php

require __DIR__ . '/autoload.php';

$sql1 = 'CREATE TABLE IF NOT EXISTS news (
        id SERIAL NOT NULL,
        title VARCHAR (100) NOT NULL,
        content TEXT NOT NULL 
)';

$sql2 = 'CREATE TABLE IF NOT EXISTS users (
        id SERIAL NOT NULL,
        email VARCHAR (255),
        name VARCHAR (100)
)';



