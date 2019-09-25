<?
require_once './php/connection.php'; 

if (isset($_GET['tag']))
{ 
    $tag = $_GET['tag'];
}
else
{
    $tag = '';
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/news.css">
    <style>
        header { min-height: unset; }
        header .content .text h1 { text-align: center; }
    </style>
</head>

<body>
    <div id="wrapper">
        <header>
            <div class="content">
                <div class="nav">
                    <a href="index.php" class="logo">Овчинников</a>
                    <ul>
                        <li><a href="index.php">Обо мне</a></li>
                        <li><a href="news.php">Блог</a></li>
                        <li><a href="contact.html">Контакты</a></li>
                    </ul>
                </div>

                <div class="text">
                    <h1>Новостой блог</h1>
                </div>
            </div>
        </header>

        <div id="block_three">
            <div class="content">
                <h2>Новости / блог / буквы</h2> 
                <div class="posts">
                <?
                    $query = "SELECT * FROM posts WHERE post_tags LIKE '%".$tag."%' ORDER BY id_post DESC";
                    $queryResult = mysqli_query($link, $query);

                    while ($post = mysqli_fetch_assoc($queryResult))
                    {
                        $postTitle = $post['post_title'];
                        $postTags = $post['post_tags'];
                        $postText = $post['post_text'];
                    ?>
                    <div class="post">
                        <p class="post_title"> <? echo $postTitle ?> </p>
                        <hr>
                        <p class="post_text"> <? echo $postText ?> </p>
                        <hr>
                        <div class="post_tags">
                        <?
                            $tags = explode(', ', $postTags);
                            foreach ($tags as &$value) 
                            {
                                if (isset($_GET['tag']))
                                {
                                    echo '<a class="post_tag" href="./news.php"> Показать все </a>'; 
                                }
                                echo '<a class="post_tag" href="./news.php?tag='.$value.'"> '.$value.'</a>'; 
                            }
                        ?> 
                        </div>
                    </div>
                    <?
                    }
                    ?>
                </div>
            </div>
        </div>

        <footer>
            <div class="content">
                <p>КОПИРАЙТ </p>
                <a href="./contact.html">КОНТАКТЫ</a>
            </div>
        </footer>
    </div>
</body>

</html>