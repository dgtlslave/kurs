<?php

//include "DBAccess.php";

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

    public static function reg_user($link, $data){
      $query = mysqli_query($link, "INSERT INTO `users` (`lastname`, `firstname`, `middlename`, `email`, `password`, `role_id`, `login`, `function`)
                                   VALUES ('".$data['lastname']."',
                                           '".$data['firstname']."',
                                           '".$data['middlename']."',
                                           '".$data['email']."',
                                           '".$data['password']."',
                                           '".$data['character']."',
                                           '".$data['login']."',
                                           '".$data['function']."')");
    }

    public static function loginCheck($link, $login) {
        $query = mysqli_query($link, "SELECT `login` FROM `users` WHERE `login` = '.$login.'");
        if (!empty($query)) return $query;
    }
}


?>



<!--
$req = new DBRequest();

echo "<pre>";
print_r(DBRequest::fetchOne($__conn, 'users'));
echo "</pre>";
 -->

<!-- "INSERT INTO `users` (`lastname`, `firstname`, `middlename`, `email`, `password`, `role_id`, `login`, `function`)
VALUES ($data['lastname'],
        $data['firstname'],
        $data['middlename'],
        $data['email'],
        $data['password'],
        $data['character'],
        $data['login'],
        $data['function'])" -->
