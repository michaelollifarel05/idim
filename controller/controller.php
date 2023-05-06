<?php

    class Database{
        private $host = "localhost";
        private $username = "rppt";
        private $password = "";
        private $dbname = "k3";
        public function connect()
        {
            $conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);

            if (!$conn) {
                die("Koneksi gagal: " . mysqli_connect_error());
            }

            return $conn;
        }
    }


    class controller {


    }

?>