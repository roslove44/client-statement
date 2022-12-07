<?php

class DatabaseConnexion {
    public ?PDO $database = null;

    public string $hostname = '217.21.77.51';
    public string $dbname = 'u627428193_account';
    public string $username = 'u627428193_rds';
    public string $password = 'u627428193_Rds@@';

    public function getConnexion():PDO {
        if($this->database === null) {
            $this->database = new PDO(
                'mysql:host='.$this->hostname.'; dbname='.$this->dbname.';',
                ''.$this->username.'',
                ''.$this->password.''
            );
        }
        return $this->database;

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