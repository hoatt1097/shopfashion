<?php 
    class Database{
        private $conn =  null;
        private $host = 'localhost';
        private $user = 'root';
        private $pass = 'root';
        private $data = 'shopfashion';
        private $result = null;

        //Phuong thuc ket noi co so du lieu
        private function connect(){
            $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->data) 
            or die ('Kết nối thất bại!');
            $this->conn->query('SET NAMES UTF8');
        }

        //Phương thức select dữ liệu
        public function select($sql)
        {
            $this->connect();
            $this->result = $this->conn->query($sql);
        }

        //Phương thức lấy dữ liệu các bảng
        public function fetch()
        {
            if($this->result->num_rows > 0)
            {
                $rows = $this->result->fetch_assoc();
            }
            else
            {
                $rows=0;
            }
            return $rows;
        }

        //Phương thức Update, Delete, Add dữ liệu
        public function command($sql)
        {
            $this->connect();
            $this->conn->query($sql);
        }
    }
?>