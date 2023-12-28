<!-- MUC DICH -->
<!--1. ket noi CSDL
2.THUC HIEN CAC PT DE TRUY VAN -->
<?php include_once "../config/config.php" ?>
<?php
class database
{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $dbname = DB_NAME;

    public $link;
    //luu tru thong so ket noi
    public $error;
    //luu tru khi bi loi

    //pt khoi tao
    public function __construct()
    {
        $this->connectDB();
    }
    //Phương thức kết nối CSDL
    public function connectDB()
    {
        //su dung huong doi tuong mysqli
        //khoi tao doi tuong 
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if (!$this->link) {
            $this->error = "ket noi that bai:" . $this->link->connect_error;
            return false;
        }
    }
    //Phương thức dùng để Select dữ liệu
    public function select($query)
    {
        $result = $this->link->query($query);
        //num_rows: so luong dong(ban ghi) tra ve
        if ($result->num_rows > 0) return $result;
        else return false;
    }
    //Phương thức dùng để Insert, Update, Delete dữ liệu
    public function exec($query)
    {
        $result = $this->link->query($query);
        if ($result) return $result;
        else return false;
    }
}
?>