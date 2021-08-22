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
    <div class="container" >
        <div class="container-content">

        <?
            $article = mysqli_query($connect, "SELECT * FROM `post` WHERE `id` = ". (int) $_GET['id']); 
            $articles = mysqli_fetch_assoc($article);  
            mysqli_query($connect, 'UPDATE `post` SET `views` = `views` + 1 WHERE `id` = '.$articles['id']); 
        ?>

            <div class="container-content-article">
                <h1><? echo $articles["title"]; ?></h1>
                <img src="/data/img/js.png" alt="img">
                <p><? echo $articles['text']; ?></p>
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
    <script src="data/js/main.js"></script>
</body>
</html>