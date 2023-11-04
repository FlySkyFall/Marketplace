<?php
    session_start();
    if(isset($_POST['login'])) {
        $login = $_POST['login'];
        if($login == ''){
            unset($login);
        }
    }
    if(isset($_POST['password'])) {
        $password = $_POST['password'];
        if($password == ''){
            unset($password);
        }
    }
    if(isset($_POST['lastname'])) {
        $lastname = $_POST['lastname'];
        if($lastname == ''){
            unset($lastname);
        }
    }
    if(isset($_POST['adress'])) {
        $adress = $_POST['adress'];
        if($adress == ''){
            unset($adress);
        }
    }
    if(empty($login) or empty($password) or empty($lastname) or empty($adress)){
        exit ("Вы ввели не все данные, для авторизации необходио заполнить все поля!");
    }
    $login = trim($login);
    $password = trim($password);
    $lastname = trim($lastname);
    $adress = trim($adress);
    include ("connect.php");
    $sql_auth = "SELECT * FROM Customers WHERE Phone_number='$login'";
    $result_auth = mysqli_query($link, $sql_auth);
    $myrow = mysqli_fetch_array($result_auth);
    if(empty($myrow['Phone_number'])){
        exit ("Пароль или логин введены неверно.");
    } else{
        if($myrow['Password']==$password) {
            $_SESSION['login']=$myrow['Phone_number'];
            $_SESSION['id']=$myrow['Customer_Id'];
            echo "Вы успешно вошли на сайт!<a href='index.php'>Главная страница</a>";

        } else {
            exit ("Пароль введен неверно.");
        }
    }
?>