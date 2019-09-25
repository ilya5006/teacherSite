<? require_once './php/connection.php'; ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обо мне</title>
    <link rel="stylesheet" href="./css/index.css">
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
                    <h1>Овчинников Антон Викторович</h1>
                    <p>Какой преподаватель чего кто</p>
                </div>
            </div>
        </header>

        <div id="block_one">
            <div class="content">
                <h2>Повышение квалификации/проф. подготовка</h2>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                </ul>
            </div>
        </div>

        <div id="block_two">
            <div class="content">
                <img src="./img/temp_bumaga.jpg" alt="certificate" title="За то-то" class="item">
                <img src="./img/temp_bumaga.jpg" alt="certificate" title="За это" class="item">
                <img src="./img/temp_bumaga.jpg" alt="certificate" title="За и за то" class="item">
                <img src="./img/temp_bumaga.jpg" alt="certificate" title="За за вот это" class="item">
            </div>
        </div>

        <div id="block_three">
            <div class="content">
                <h2>Новости / блог / буквы</h2> 
                <div class="posts">
                <?
                    $query = "SELECT * FROM posts ORDER BY id_post DESC LIMIT 3";
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
                                echo '<a class="post_tag" href="./news.php?tag='.$value.'"> '.$value.'</a>'; 
                            }
                        ?> 
                        </div>
                    </div>
                    <?
                    }
                    ?>
                </div>
                <a href="./news.php">ПОСМОТРЕТЬ ВСЕ НОВОСТИ</a>
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