<li class="last-news__item">
    <img width="398" height="457" class="card__picture" src="<?=$data['img_path'] ?>" alt="Картинка новости">
    <div class="card__descrpition">
        <a href="#" class="card__news-name">
            <?=$data['description']?>
        </a>
        <div class="card__additional-info">
            <p class="card__place">
                <?=$data['place']?>
            </p>
            <p class="card__date">
                <?=$data['date']?>
            </p>
        </div>
        <?php if ($_SESSION['admin']) {
                $path = '"index.php?delete_news=true&index=' . $data['id'] . '"';
            ?>
            <a href=<?=$path?>>
                Удалить событие
            </a>
        <?php } ?>
    </div>
</li>