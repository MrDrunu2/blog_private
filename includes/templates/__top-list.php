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
                <?
                        $top_post = mysqli_query($connect, "SELECT * FROM `post` ORDER BY `views` DESC LIMIT 3");
                        while($top_posts = mysqli_fetch_assoc($top_post)){ 
                            if($top_posts['views'] <= 0){
                    ?>
                        <li>
                            <div class="card">
                                <span class="card-header"><a href="">Свободное место!</a></span>
                                <span class="card-title">Нет достойной кандидатуры на данное место!</span>
                            </div>
                        </li>
                    <? 
                            }else{
                    ?>
                        <li>
                            <div class="card">
                                <span class="card-header"><a href="/articles.php?id=<? echo $top_posts["id"]; ?>"><? echo $top_posts["title"] ?></a></span>
                                <span class="card-title"><? echo '...'.mb_substr(strip_tags($top_posts["text"]), random_int(0,20),50, 'UTF-8').'...' ?></span>
                                <span class="card-vievs"><ion-icon name="eye" class="vievs-eye"></ion-icon><p><? echo $top_posts["views"] ?></p></span>
                            </div>
                        </li>
                    <?
                            }
                        }
                    ?>
                </ul>
            </div>
            <!-- Самые просматриваемые категории сайта -->
            <div class="container-content-top-block-item-topCategory">
                <p><strong>Топ категорий</strong></p>
                <ul>
                    <?
                        $top_cat = mysqli_query($connect, "SELECT * FROM `category` ORDER BY `views` DESC LIMIT 3");
                        while($top_cats = mysqli_fetch_assoc($top_cat)){ 
                            if($top_cats['views'] <= 0){
                    ?>
                        <li>
                            <div class="card">
                                <span class="card-header"><a href="">Свободное место!</a></span>
                                <span class="card-title">Нет достойной кандидатуры на данное место!</span>
                            </div>
                        </li>
                    <? 
                            }else{
                    ?>
                        <li>
                            <div class="card">
                                <span class="card-header"><a href="/articles.php?id=<? echo $posts["id"]; ?>"><? echo $top_cats["cat_name"] ?></a></span>
                                <span class="card-title"><? echo mb_substr(strip_tags($top_cats["descript"]), 0,50, 'UTF-8').'...' ?></span>
                                <span class="card-vievs"><ion-icon name="eye" class="vievs-eye"></ion-icon><p><? echo $top_cats["views"] ?></p></span>
                            </div>
                        </li>
                    <?
                            }
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>