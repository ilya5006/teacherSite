<?
    require_once './connection.php';

    session_start();

    if (!$_SESSION['isLogin'])
    {
        header('Location: index.php');
    }

    if (isset($_POST['post_send']))
    {
        $postTitle = $_POST['post_title'];
        $postTags = $_POST['post_tags'];
        $postText = $_POST['post_text'];
        $query = "INSERT INTO posts VALUES (NULL, '$postTitle', '$postTags', '$postText')";
        mysqli_query($link, $query);
        header('Location: ../news.php');
    }
?>