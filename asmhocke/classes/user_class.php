<?php include_once "../lib/database.php"; ?>
<?php
class user_class
{
    public $db;
    public function __construct()
    {
        //tao doi tuong db la the hien cua lop database
        $this->db = new database();
    }
    //chuc nang dang nhap
    public function login($adminEmail, $adminPass)
    {
        $query = "select * from tbl_users where adminEmail='$adminEmail' and adminPass='$adminPass' limit 1";
        $result = $this->db->select($query);
        if ($result) {
            $row = $result->fetch_assoc();
            header("location:user_list.php");
        } else {
            return "sai email hoac mat khau";
        }
    }
}
?>