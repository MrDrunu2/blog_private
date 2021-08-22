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
                <?
                    $res = 0; // Для подсчета блоков в контейнере
                    $post_q = mysqli_query($connect, "SELECT * FROM `post` ORDER BY `id` DESC LIMIT 120");
                    $post = array();
                    while($posts = mysqli_fetch_assoc($post_q)){
                        $post[] = $posts;
                    }

                    $category = mysqli_query($connect, "SELECT * FROM `category`");

                    while ($cat = mysqli_fetch_assoc($category)){
                ?>
                    <h2><? echo $cat["cat_name"] ?></h2>
                    <div class="container-content-news-card">
                        <!-- Карточки с новостями -->
                        <?
                            foreach($post as $key => $posts){ 
                                if($posts["category_id"] == $cat["id"]){
                                    $res += $posts["category_id"] == $cat["id"];
                                    if($res <= 4){
                        
                        ?>
                                    <div class="container-content-news-card-grid">
                                            <img src="../data/img/js.png" alt="JS.images">
                                            <div>
                                                <h3><a href="/articles.php?id=<? echo $posts["id"]; ?>"><? echo $posts["title"] ?></a></h3>
                                                <p><? echo $posts["text"] ?></p>
                                            </div>
                                            <span><ion-icon name="eye-sharp"></ion-icon><p><? echo $posts["views"] ?></p></span>
                                        </div>
                        <?                                        
                                    }else{
                                        $res = 0;
                                        break;
                                    }
                                }
                            }
                        ?> 
                        <!-- -------------------- -->
                    </div>
                <? 
                    }
                ?>
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