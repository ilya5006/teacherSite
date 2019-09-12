<?
    session_start();
    if (!$_SESSION['isLogin'])
    {
        header('Location: index.html');
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Написать пост</title>
</head>
<body>
    <form>
        <input type="input" name="post_name" placeholder="Заголовок поста">
        <input type="input" name="post_tags" placeholder="Теги поста">
        <textarea name="post_text" placeholder="Текст поста">
    </form>
</body>
</html>