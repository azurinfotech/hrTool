<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASS', '');
define('DB', 'hrtool');
class database
{
    public $link;

    function  __construct()
    {
        //connect to the database
        $this->link = mysqli_connect(HOST, USERNAME, PASS,DB);
        if (!$this->link) {
            die('Could not connect to the server:' . mysqli_error($this->link));
        }
    }
    public function query_execute($query)
    {
       $stmt = mysqli_stmt_init($this ->link);
        mysqli_stmt_prepare($stmt,$query);
        mysqli_stmt_execute($stmt);
    }
    public function select_num_rows($query){
        $stmt = mysqli_stmt_init($this ->link);
        mysqli_stmt_prepare($stmt,$query);
        var_dump($query);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $count = mysqli_stmt_num_rows($stmt);
        return $count;
    }
    public function select_data($query){
        $stmt = mysqli_stmt_init($this->link);
        mysqli_stmt_prepare($stmt, $query);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        return $result;
    }
    public function get_data_rows($query){
        if(mysqli_multi_query($this->link,$query)){
            $result = mysqli_store_result($this->link);
            while($row[] = mysqli_fetch_row($result));
            return $row;
        }
    }
    function __destruct()
    {
        mysqli_close($this->link);
    }
}