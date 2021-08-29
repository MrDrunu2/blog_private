<? require "includes/config.php"; ?>
    
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? echo $config["nameSite"] ?></title>
    <link rel="stylesheet" href="style/index.min.css">

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
    <!-- HeaderBG -->
    <div class="header_bg">
        <img src="../data/img/header_bg.jpg" alt="Header background">
    </div>
    <!-- ------------- -->
    <div class="container">
        <div class="container-content">
            <div class="container-content-news">
                <h2>Новинки</h2>
                <div class="container-content-news-card">
                    <?
                        $category = mysqli_query($connect, 'SELECT * FROM `category`');
                        $cat = array();
                        while($cats = mysqli_fetch_assoc($category)){
                            $cat[] = $cats;
                        };
                        $post_q = mysqli_query($connect, 'SELECT * FROM `post` ORDER BY `date` DESC LIMIT 6');
                        while($post = mysqli_fetch_assoc($post_q)){
                            foreach($cat as $key => $cats){
                                if($cats['id'] == $post['category_id']){
                    ?>
                    <!-- Карточки с новостями -->
                                    <div class="container-content-news-card-grid">
                                        <img src="../data/img/js.png" alt="JS.images">
                                        <div>
                                            <h3><a href="/articles.php?id=<? echo $post["id"]; ?>"><? echo $post["title"]; ?></a></h3>
                                            <p><? echo '...'.mb_substr(strip_tags($post["text"]), random_int(0,70),115, 'UTF-8').'...' ?></p>
                                        </div>
                                        <span><ion-icon name="eye-sharp"></ion-icon><p><? echo $post["views"]; ?></p></span>
                                    </div>
                    <?          break;
                                };
                            };
                        };
                    ?>
                    <!-- -------------------- -->
                </div>
                <h2>Новости блога</h2>
                <div class="container-content-news-card">
                    <?
                        $category = mysqli_query($connect, 'SELECT * FROM `category` ');
                        $cat = array();
                        while($cats = mysqli_fetch_assoc($category)){
                            $cat[] = $cats;
                        };
                        $post_q = mysqli_query($connect, 'SELECT * FROM `post` WHERE `category_id` = 1 ORDER BY `date` DESC LIMIT 4');
                        while($post = mysqli_fetch_assoc($post_q)){
                            foreach($cat as $key => $cats){
                                if($cats['id'] == $post['category_id']){
                    ?>
                    <!-- Карточки с новостями -->
                                    <div class="container-content-news-card-grid">
                                        <img src="../data/img/js.png" alt="JS.images">
                                        <div>
                                            <h3><a href="/articles.php?id=<? echo $post["id"]; ?>"><? echo $post["title"]; ?></a></h3>
                                            <p><? echo '...'.mb_substr(strip_tags($post["text"]), random_int(0,70),115, 'UTF-8').'...' ?></p>
                                        </div>
                                        <span><ion-icon name="eye-sharp"></ion-icon><p><? echo $post["views"]; ?></p></span>
                                    </div>
                    <?          break;
                                };
                            };
                        };
                    ?>
                    <!-- -------------------- -->
                </div>
                <h2>Технология сайтостроения</h2>
                <div class="container-content-news-card">
                    <?
                        $category = mysqli_query($connect, 'SELECT * FROM `category` ');
                        $cat = array();
                        while($cats = mysqli_fetch_assoc($category)){
                            $cat[] = $cats;
                        };
                        $post_q = mysqli_query($connect, 'SELECT * FROM `post` WHERE `category_id` = 4 ORDER BY `date` DESC LIMIT 4');
                        while($post = mysqli_fetch_assoc($post_q)){
                            foreach($cat as $key => $cats){
                                if($cats['id'] == $post['category_id']){
                    ?>
                    <!-- Карточки с новостями -->
                                    <div class="container-content-news-card-grid">
                                        <img src="../data/img/js.png" alt="JS.images">
                                        <div>
                                            <h3><a href="/articles.php?id=<? echo $post["id"]; ?>"><? echo $post["title"]; ?></a></h3>
                                            <p><? echo '...'.mb_substr(strip_tags($post["text"]), random_int(0,70),115, 'UTF-8').'...' ?></p>
                                        </div>
                                        <span><ion-icon name="eye-sharp"></ion-icon><p><? echo $post["views"]; ?></p></span>
                                    </div>
                    <?          break;
                                };
                            };
                        };
                    ?>
                    <!-- -------------------- -->
                </div>
            </div>
            <!-- Top-list -->

            <? include_once "includes/templates/__top-list.php"; ?>

            <!-- ---------- -->
        </div>
        
    </div>


    <!-- LINK COMPONENTS -->
    <script src="../data/js/main.js"></script>
    <!-- --------------- -->
    <!-- link script icon "ioicon" -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- ------------------------- -->
</body>
</html>