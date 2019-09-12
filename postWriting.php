<?
    require_once './php/connection.php';

    session_start();

    if (!$_SESSION['isLogin'])
    {
        header('Location: index.html');
    }

    if (isset($_POST['post_send']))
    {
        $postTitle = $_POST['post_title'];
        $postTags = $_POST['post_tags'];
        $postText = $_POST['post_text'];
        $query = "INSERT INTO posts VALUES (NULL, '$postTitle', '$postTags', '$postText')";
        mysqli_query($link, $query);
        echo '<p>Пост отправлен</p>';
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
    <a href="./admin.php">Вернуться в админку</a>
    <form action="" method="POST">
        <input type="input" name="post_title" placeholder="Заголовок поста">
        <input type="input" name="post_tags" placeholder="Теги поста">
        <textarea name="post_text" placeholder="Текст поста"></textarea>
        <input type="submit" name="post_send" value="Послать пост">
    </form>
</body>
</html>