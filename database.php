    <?php

    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */
    //Define database constants
    define('HOST','localhost');
    define('USERNAME','root');
    define('PASS','');
    define('DB','php_test');
    class database{
        public $link;

       function  __construct(){
           //connect to the database
        $this ->link = mysql_connect(HOST,USERNAME,PASS);
        if(!$this ->link){
            die('Could not connect to the server:'. mysql_error());
        }
           else{
               $this -> select_db();
           }
    }

        public function select_db(){
            $db_sel = mysql_select_db(DB,$this ->link);
            if(!$db_sel){
                die('Could not connect to Database'.mysql_error());
            }
        }

        public function query_execute($query){
            $result = mysql_query(mysql_real_escape_string($query),$this -> link);
            return $result;
        }

        function __destruct(){
            mysql_close();
        }
    }