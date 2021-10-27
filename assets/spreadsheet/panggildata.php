<?php
    class DbConn {
        private $host = 'localhost';
        private $username = 'root';
        private $password = '';
        private $db_name = 'ormawa';
        private $conn;

        public function __construct() {
            $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db_name) or die('Connection failed.');
        }

        public function getConn() {
            return $this->conn;
        }
    }

    class Users {
        private $table = 'users';

        public function __construct($username = null, $password = null) {
            $this->username = $username;
            $this->password = $password;

            $conn = new DbConn();

            $this->conn = $conn->getConn();
        }

        public function insert() {
            $sql = 'INSERT INTO '.$this->table.' (username, password) 
                    VALUES ("'.$this->username.'", "'.$this->password.'")';
            
            return mysqli_query($this->conn, $sql);
        }

        public function read() {}

        public function update($id) {
            $sql = 'UPDATE '.$this->table.' SET username = "'.$this->username.'", 
                    password = "'.$this->password.'" WHERE id_users = "'.$id.'"';

            return mysqli_query($this->conn, $sql);
        }

        public function delete($id) {
            $sql = 'DELETE FROM '.$this->table.' WHERE id_users = "'.$id.'"';

            return mysqli_query($this->conn, $sql);
        }

        public function last_id() {
            return mysqli_insert_id($this->conn);
        }
    }

    class akt_login {
        private $table = 'tbl_akt_login';

        public function __construct($nama = null, $username = null, $status = null,  $waktu_akses = null) {
            $conn = new DbConn();
            
            $this->conn = $conn->getConn();

            // $this->id = $id;
            $this->nama = $nama;
            $this->username = $username;
            $this->status = $status;
            $this->waktu_akses = $waktu_akses;
        }

        public function insert() {  
            $user = new Users($this->username, $this->password);

            $user->insert();
            
            $sql = 'INSERT INTO '.$this->table.' (nama, username, status, waktu_akses) 
            VALUES ("'.$this->nama.'", "'.$this->username.'", "'.$this->status.'", "'.$this->waktu_akses.'", "'.$user->last_id().'")';

            return mysqli_query($this->conn, $sql);
        }

        public function read() {
            $sql = 'SELECT * FROM '.$this->table;

            $result = mysqli_query($this->conn, $sql);

            $data = [];

            while($row = mysqli_fetch_object($result)) {
                $data[] = $row;
            }

            return $data;
        }
		
		public function read_spec_data($id){
			$sql = 'SELECT * FROM '.$this->table;
            $result = mysqli_query($this->conn, $sql);
            $data = mysqli_fetch_object($result);
			return $data;
		}
		
        
    }
?>