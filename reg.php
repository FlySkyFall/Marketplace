<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Регистрация</title>
</head>
<body>
    <h2>Регистрация</h2>
    <form action="save_user.php" method="post">
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
            <input type="submit" name="submit" value="Зарегистрироваться">
        </p>
    </form>
</body>
</html>