<?php

    class DBAccess {

        public $mysqli;

        public function __construct(){
            $this->mysqli = new mysqli('localhost', 'spacious', 'spacious', 'workflow');
        }

    }

    $db_access = new DBAccess();
    $__conn = $db_access->mysqli; // подключение к БД присвоено переменной $__conn
                                  // через создание экземпляра $db_access z класса DBAccess

?>
