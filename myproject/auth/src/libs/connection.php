<?php 
//here i define the db() function that connects the database once and return a new PDO object.
//the db() function usses the database configuration defined in the config/database.php file

function db(): PDO
{
    static $pdo;
    if (!$pdo) {
        return new PDO(
            sprintf("mysql:host=%s;dbname=%s;charset=UTF8", DB_HOST, DB_NAME),
            DB_USER,
            DB_PASSWORD,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    }
    return $pdo;
}

?>