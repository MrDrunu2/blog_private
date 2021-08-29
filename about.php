<? require "includes/config.php"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? echo $config['nameSite'] ?></title>
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
            <div class="container-content-about">
                <h1>О себе</h1>
                <p><? echo $config['about']['text']; ?></p>
                <div class="container-content-about-photo">
                    <img class="container-content-about-photo-img" src="<? echo $config['about']['img']; ?>" alt="img">
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