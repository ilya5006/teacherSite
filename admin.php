<?
    session_start();
    if (!$_SESSION['isLogin'])
    {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Панель администратора</title>
</head>
<body>
    <header>
        <h1>Панель администратора</h1>
    </header>
    
    <a class="function" href="./index.php">Вернуться на главную</a>
    <a class="function" href="./postWriting.php">Написать пост</a>

</body>
</html>