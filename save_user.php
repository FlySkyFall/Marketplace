<?php
    if(isset($_POST['login'])){
        $login = $_POST['login'];
        if($login == '') {
            unset($login);
        }
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
        if($password == '') {
            unset($password);
        }
    }
    if(isset($_POST['lastname'])){
        $lastname = $_POST['lastname'];
        if($lastname == '') {
            unset($lastname);
        }
    }
    if(isset($_POST['adress'])){
        $adress = $_POST['adress'];
        if($adress == '') {
            unset($adress);
        }
    }
    if(empty($login) or empty($password) or empty($lastname) or empty($adress)) {
        exit ("Вы заполнили не все поля, для подтверждения регистрации все поля должны быть заполнены!");
    }
    $login = trim($login);
    $password = trim($password);
    $lastname = trim($lastname);
    $adress = trim($adress);
    include ("connect.php");
    $sql_login = "SELECT Customer_Id FROM Customers WHERE Phone_number='$login'";
    $result_login = mysqli_query($link, $sql_login);
    $myrow = mysqli_fetch_array($result_login);
    if(!empty($myrow['Customer_Id'])) {
        exit ("Пользователь с таким номером телефона уже есть.");
    }
    $sql_final = "INSERT INTO Customers (Lastname, Adress, Phone_number, Password) VALUES ('$lastname', '$adress', '$login', '$password')";
    $result_final = mysqli_query($link, $sql_final);
    if ($result_final=='TRUE'){
        echo "Регистрация проведена успешно! Вам доступна возможность оформлять заказы. <a href='index.php'>Главная страница</a>";
    } else {
        echo "Ошибка! Регистрация не выполнена.";
    }
?>