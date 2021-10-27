<?php
    class DbConn {
        private $host = 'localhost';
        private $NIP = 'root';
        private $password = '';
        private $db_name = 'ormawa';
        private $conn;

        public function __construct() {
            $this->conn = mysqli_connect($this->host, $this->NIP, $this->password, $this->db_name) or die('Connection failed.');
        }

        public function getConn() {
            return $this->conn;
        }
    }

    class Users {
        private $table = 'users';

        public function __construct($NIP = null, $password = null) {
            $this->NIP = $NIP;
            $this->password = $password;

            $conn = new DbConn();

            $this->conn = $conn->getConn();
        }

        public function insert() {
            $sql = 'INSERT INTO '.$this->table.' (NIP, password) 
                    VALUES ("'.$this->NIP.'", "'.$this->password.'")';
            
            return mysqli_query($this->conn, $sql);
        }

        public function read() {}

        public function update($id) {
            $sql = 'UPDATE '.$this->table.' SET NIP = "'.$this->NIP.'", 
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

    class profil {
        private $table = 'tbl_profil';

        public function __construct($NIK = null, $NIP = null, $nama_lengkap = null, $username = null,$email = null,$status = null) {
            $conn = new DbConn();
            
            $this->conn = $conn->getConn();

            // $this->id = $id;
            $this->NIK = $NIK;
            $this->NIP = $NIP;
            $this->nama_lengkap = $nama_lengkap;
            $this->username = $username;
            $this->email = $email;
            $this->status = $status;
        }

        public function insert() {  
            $user = new Users($this->user, $this->password);

            $user->insert();
            
            $sql = 'INSERT INTO '.$this->table.' (NIK, NIP, nama_lengkap,username,email,status) 
            VALUES ("'.$this->NIK.'", "'.$this->NIP.'", "'.$this->nama_lengkap.'","'.$this->username.'", "'.$this->email.'", "'.$this->status.'","'.$user->last_id().'")';

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