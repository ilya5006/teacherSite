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
    <link rel="stylesheet" href="./css/postWriting.css">
    <title>Написать пост</title>
</head>
<body>
    
    <form action="./php/sendPost.php" method="POST">
        <input type="text" name="post_title" placeholder="Заголовок поста" required>
        <input type="text" name="post_tags" placeholder="Теги поста" required>
        <textarea name="post_text" placeholder="Текст поста" required></textarea>
        <input type="submit" name="post_send" value="Послать пост">
    </form>
    <a href="./admin.php">Вернуться в админку</a>
</body>
</html>