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
        $query = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '" . $login . "'");
        return !! $query->num_rows;
    }

    public static function emailCheck($link, $email) {
        $query = mysqli_query($link, "SELECT * FROM `users` WHERE `email` = '" . $email . "'");
        return !! $query->num_rows;
    }

    public static function signInCheck($link, $login, $password) {
        $query = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '" . $login . "' AND `password` = '" . $password . "'");
        $data = mysqli_fetch_assoc($query);
        return $data;
    }

    public static function dashbordFullData($link, $user_id) {
      $query = mysqli_query($link, "SELECT * FROM `application` 
                                    WHERE `user_id` = '" . $user_id . "' AND `app_status` != `5`");
      $data = mysqli_fetch_assoc($query);
      return $data;
    }

}

 // $r = new DBRequest();
 // $t = array();
 // $t = $r->singInCheck($__conn, "alex12", "355");
 // echo $t['login'];
 // echo $t['password'];


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
