<?php

$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$mobile = $_POST['mobile'];

if (empty($login) || empty($pass) || empty($repeatpass) || empty($mobile)){
    echo "Заполните все поля!"
} else
{
    if($pass != $repeatpass){
        echo "Пароли не совпадают!";
    } else {
        $sql = "INSERT INTO 'users' (login,pass,mobile) VALUES ('$login', '$pass', 'mobile')";
       if ($conn -> query($sql) === TRUE){
        echo "Успешная регистрация!";
       }
       else {
        echo "Ошибка: " . $conn->error;
       }

    }
}
