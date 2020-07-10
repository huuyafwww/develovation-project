<?php

/**
 * Now ORM Wrapper Developing Debug Info
 */

// DataBase Name
define("DB_NAME",$_ENV["DB_NAME"]);

// DataBase Host
define("DB_HOST",$_ENV["DB_HOST"]);

// DataBase User Name
define("DB_USER",$_ENV["DB_USER"]);

// DataBase Password
define("DB_PASSWORD",$_ENV["DB_PASSWORD"]);

// "mysqldump" Command Path
define("MYSQL_DUMP",$_ENV["MYSQL_DUMP"]);

// DataBase Config
define(
    "DB_CONFIG",
    [
        "driver" => 'mysql',
        "host" => DB_HOST,
        "database" => DB_NAME,
        "username" => DB_USER,
        "password" => DB_PASSWORD,
        "charset" => 'utf8mb4',
        "collation" => 'utf8mb4_general_ci',
    ]
);

/**
 * /Now ORM Wrapper Developing Debug Info
 */