<?php

include '../classes/DBAccess.php';

class DBRequest {

    public function fetchAll($link, $tab_name){        //выберает всю информацию из указаной таблицы
        $query = mysqli_query($link, "SELECT * FROM `$tab_name`");
        $data = mysqli_fetch_all($query, 1);
        return $data;
    }

    public function fetchOne($link, $tab_name){
        $query = mysqli_query($link, "SELECT * FROM `$tab_name` WHERE `user_id` = 2");
        $data = mysqli_fetch_row($query);                                   // перевести простой массив в ассоциативный
        return $data;
    }

    public function registration($login, $email, $role, $password,){
      $query= mysqli_query($link, "INSERT");
    }
}

    echo "<pre>";
    print_r(DBRequest::fetchOne($__conn, 'users'));
    echo "</pre>";

?>
