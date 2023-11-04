<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Главная страница</title>
</head>
<body>
    <section class="header_wrap">
        <header class="header">
            <a href="#">
                <img src="img/logo.png" class="logo" width="80px" height="80px"> 
            </a>
            <nav>
                <ul class="menu">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
        </header>
    </section>
    <section class="registration-info__wrap">
        <div class="registration-info wrap">
            <p class="registration-info__text">Онлайн-магазин одежды</p>
            <h1 class="registration-info__title">Гарантия качества</h1>
            <h2 class="registration-info__subtitle">Для оформления заказ нужно войти в аккаунт. Если у вас уже есть аккаунт нажмите кнопку "Войти"</h2>
            <form action="testreg.php" method="post">
                <p>
                    <label>Ваш номер телефона:<br></label>
                    <input name="login" type="text" size="15" maxlength="11">
                </p>
                <p>
                    <label>Ваш пароль:<br></label>
                    <input name="password" type="password" size="15" maxlength="15">
                </p>
                <p>
                    <label>Ваша фамилия:<br></label>
                    <input name="lastname" type="text">
                </p>
                <p>
                    <label>Ваш адрес проживания:<br></label>
                    <input name="adress" type="text">
                </p>
                <p>
                    <input type="submit" name="submit" value="Войти">
                    <br>
                    <a href="reg.php">Зарегистрироваться</a>
                </p>
            </form>
            <br>
            <?php 
            if(empty($_SESSION['login']) or empty($_SESSION['id'])){
                echo "Вы вошли на сайт как гость, заказы пока не доступны.";
            } else {
                echo "Вы вошли на сайт<br>";
            }
            ?>
        </div>
    </section>
    <section class="assortment__wrap">
        <div class="assortment wrap">
            <table border="1" class="table assort" width="100%">
                <thead>
                    <tr>
                        <td>Номер товара</td>
                        <td>Название</td>
                        <td>Цена</td>
                        <td>Поставщик</td>
                        <td>Фото</td>
                        <td>Оформить заказ</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "connect.php";
                    
                    $sql_assortment = "SELECT * FROM Assortment";
                    $result_assortment = mysqli_query($link, $sql_assortment);
                    while($row = mysqli_fetch_array($result_assortment)) {
                    ?>
                    <tr>
                        <td><?php echo $row['Product_Id']?></td>
                        <td><?php echo $row['ProductName']?></td>
                        <td><?php echo $row['Price']?></td>
                        <td><?php echo $row['ProviderId']?></td>
                        <td><img src="img/<?php echo $row['Photo']?>" alt="Empty" width="200px" height="200px"></td>
                        <td><button type="submit" class="butn assort_butn butn--red">Заказать</button></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <section class="footer__wrap">
        <footer class="footer wrap">
            <a href="#">
                <img src="img/logo.png" alt="" width="50px" height="50px">
            </a>
            <p>Anishchenko PrI-301</p>
        </footer>
    </section>
</body>
</html>