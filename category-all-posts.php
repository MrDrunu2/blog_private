<? require "includes/config.php"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? echo $config["nameSite"] ?></title>
    <link rel="stylesheet" href="../style/index.min.css">

    <!-- jquery -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <!-- ------ -->
</head>
<body>
    <!-- <video autoplay muted loop class="body">
        <source class="body-bg" src="data/video/city-bg.mp4" type="video/mp4">
    </video> -->

    <!-- MENU -->
    <? include_once "includes/templates/__nav-bar.php"; ?>
    <!-- ---------------- -->
    <div class="container" >
        <div class="container-content">
            <div class="container-content-all_post">
                <div class="container-content-all_post-post">
                    <?
                        //добавление просмотра
                        $cat = mysqli_query($connect, 'SELECT * FROM `category` WHERE `id` = '.$_GET['id']);
                        $cats = mysqli_fetch_assoc($cat);
                        mysqli_query($connect, 'UPDATE `category` SET `views` = `views` + 1 WHERE `id` = '.$_GET['id']);
                        // вывожу статьи только из этой категории
                        $cat_post = mysqli_query($connect, 'SELECT * FROM `post` WHERE `category_id` = '. $_GET['id']);
                    ?>
                    <h3 class="container-content-all_post-post-h3">Все темы категории: <? echo $cats['cat_name']; ?></h3>
                    <ul>
                    <?
                        while ($posts = mysqli_fetch_assoc($cat_post)) {
                    ?>
                        <li>
                            <div class="container-content-all_post-post-card">
                                <img src="../data/img/js.png" alt="JS.images">
                                <div>
                                    <h3><a href=""><? echo $posts['title']; ?></a></h3>
                                    <p><? echo '...'.mb_substr(strip_tags($posts["text"]), random_int(0,70),115, 'UTF-8').'...' ?></p>
                                </div>
                                <span><ion-icon name="eye-sharp"></ion-icon><p>5</p></span>
                            </div>
                        </li>
                    <?
                        }
                    ?>
                    </ul>
                </div>
            </div>
            <!-- Задний план -->
            <? include_once "includes/templates/__top-list.php"; ?>
        </div>
        
    </div>
    <!-- --------------- -->
    <!-- link script icon "ioicon" -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- ------------------------- -->
    <!-- LINK COMPONENTS -->
    <script src="../data/js/main.js"></script>
</body>
</html>