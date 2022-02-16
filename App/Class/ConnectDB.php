<?php
    class ConnectDB {
        private $host = 'localhost', $username = 'root', $password = '', $db = 'db_penghitungkalori';

        public function connect() {
            $dsn = 'mysql:host=' . $this -> host . '; dbname=' . $this -> db;
            $pdo = new PDO($dsn, $this -> username, $this -> password);
            $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
            return $pdo; 
        }
    }
?>