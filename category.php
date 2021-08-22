<? require "includes/config.php"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <div class="container-content-category">
                <ul>
                    <?
                        $cat_page = mysqli_query($connect, "SELECT * FROM `category` ORDER BY `id`");
                        while($cat = mysqli_fetch_assoc($cat_page)){
                    ?>
                        <li>
                            <a href=""><span><? echo $cat['cat_name']; ?></span><? echo $cat["icon"]; ?></a>
                            <p><? echo $cat['descript']; ?></p>
                            <span><ion-icon name="eye"></ion-icon><p><? echo $cat['views']; ?></p></span>
                        </li>
                    <?
                        }
                    ?>
                </ul>
            </div>
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