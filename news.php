<?
    require_once './php/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/news.css">
    <title>Новости</title>
</head>
<body>
    <div id="news">
        <?
            $query = "SELECT * FROM posts";
            $queryResult = mysqli_query($link, $query);
            
            while ($post = mysqli_fetch_assoc($queryResult))
            {
                list($postId, $postTitle, $postTags, $postText) = $post;

                $postTitle = $post['post_title'];
                $postTags = $post['post_tags'];
                $postText = $post['post_text'];
                
                echo '<div id="post">';
                    echo '<p id="post_title">' . $postTitle . '</p>';
                    echo '<p id="post_tags">' . $postTags . '</p>';
                    echo '<p id="post_text">' . $postText . '</p>';
                echo '</div>';
            }
        ?>
    </div>
</body>
</html>