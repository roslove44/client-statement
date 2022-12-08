<?php

class DatabaseConnexion {
    public static   $database = null;

    private static  string $hostname = '217.21.77.51';
    private static  string $dbname = 'u627428193_account';
    private static  string $username = 'u627428193_rds';
    private static  string $password = 'u627428193_Rds@@';

    public static function getConnexion() {

        if(self::$database === null) {
            self::$database = new mysqli(self::$hostname, self::$username, self::$password, self::$dbname);
        }
        return self::$database;

    }
}


class Security {
    public static function text_checker(string $data):string {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
}