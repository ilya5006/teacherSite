<?
    session_start();

    require_once './php/connection.php';

    if (isset($_POST['submit']))
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $query = 'SELECT * FROM user';
        $queryResult = mysqli_query($link, $query);

        list($loginDb, $passwordDb) = mysqli_fetch_row($queryResult);

        if ($login == $loginDb && $password == $passwordDb)
        {
            $_SESSION['isLogin'] = true;
            header('Location: admin.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Вход</title>
</head>
<body>
    <form action="" method="POST">
        <input type="input" name="login" placeholder="Логин">
        <input type="input" name="password" placeholder="Пароль">
        <input type="submit" name="submit" value="ВОЙТИ">
    </form>
</body>
</html>