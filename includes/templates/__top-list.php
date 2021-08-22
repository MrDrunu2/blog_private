<div class="container-content-top">
    <!-- Оболочка -->
    <div class="container-content-top-block">
        <!-- Оболочка блоков -->
        <div class="container-content-top-block-item">
            <!-- Сами блоки с новостями -->
            <div class="container-content-top-block-item-topView">
                <!-- Контейнер для самых просматриваемых новостей -->
                <p><strong>Топ статей</strong></p>
                <ul>
                    <li>
                    <?
                        $top_post = mysqli_query($connect, "SELECT * FROM `post` ORDER BY `views` DESC LIMIT 3");
                        while($top_posts = mysqli_fetch_assoc($top_post)){  
                    ?>
                            <div class="card">
                                <span class="card-header"><a href="/articles.php?id=<? echo $posts["id"]; ?>"><? echo $top_posts["title"] ?></a></span>
                                <span class="card-title"><? echo $top_posts["text"] ?></span>
                                <span class="card-vievs"><ion-icon name="eye" class="vievs-eye"></ion-icon><p><? echo $top_posts["views"] ?></p></span>
                            </div>
                    <?
                        }
                    ?>
                    </li>
                </ul>
            </div>
            <!-- Самые просматриваемые категории сайта -->
            <div class="container-content-top-block-item-topCategory">
                <p><strong>Топ категорий</strong></p>
                <ul>
                    <li>
                    <?
                        $top_cat = mysqli_query($connect, "SELECT * FROM `category` ORDER BY `views` DESC LIMIT 3");
                        while($top_cats = mysqli_fetch_assoc($top_cat)){ 
                            if($top_cats['views'] <= 0){
                    ?>
                            <div class="card">
                                <span class="card-header"><a href="">Свободное место!</a></span>
                                <span class="card-title">Нет достойной кандидатуры на данное место!</span>
                            </div>
                    <? 
                            }else{
                    ?>
                            <div class="card">
                                <span class="card-header"><a href="/articles.php?id=<? echo $posts["id"]; ?>"><? echo $top_cats["cat_name"] ?></a></span>
                                <span class="card-title"><? echo $top_cats['descript'] ?></span>
                                <span class="card-vievs"><ion-icon name="eye" class="vievs-eye"></ion-icon><p><? echo $top_cats["views"] ?></p></span>
                            </div>
                    <?
                            }
                        }
                    ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>