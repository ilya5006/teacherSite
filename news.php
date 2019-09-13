<? require_once './php/connection.php'; ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <link rel="stylesheet" href="./css/index.css">
    <style>
        header { min-height: unset; }
        header #content .text h1 { text-align: center; }
    </style>
</head>

<body>
    <div id="wrapper">
        <header>
            <div id="content">
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
            <div id="content">
                <h2>Новости / блог / буквы</h2> 
                <div class="posts">
                <?
                    $query = "SELECT * FROM posts ORDER BY id_post DESC";
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
                        <?
                            $tags = explode(', ', $postTags);
                            foreach ($tags as &$value) 
                            {
                                echo '<p class="post_tags"> '.$value.'</p>'; 
                            }
                        ?>  
                    </div>
                    <?
                    }
                    ?>
                </div>
            </div>
        </div>

        <footer>
            <div id="content">
                <p>КОПИРАЙТ </p>
                <a href="./contact.html">КОНТАКТЫ</a>
            </div>
        </footer>
    </div>
</body>

</html>