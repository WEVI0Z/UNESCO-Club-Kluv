<a class="last-news__card">
    <img class="card__picture" src="<?=$data['img_path'] ?>" alt="Картинка новости">
    <div class="card__descrpition">
        <p class="card__news-name">
            <?=$data['description']?>
        </p>
        <div class="card__additional-info">
            <p class="card__place">
                <?=$data['place']?>
            </p>
            <p class="date">
                <?=$data['date']?>
            </p>
        </div>
    </div>
</a>