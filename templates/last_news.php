<section class="last-news">
    <div class="last-news__upper-part">
        <h2>Последние новости:</h2>
        <a href="index.php?newspage=true">Все новости клуба</a>
    </div>
    <ul class="last-news__list">
        <?php $news = $data['args'];
            foreach($news as $key => $value) {
                if($key < 3) {
                    render_template("templates/last_news_card.php", [
                        'img_path' => $value['img_path'],
                        'description' => $value['description'],
                        'place' => $value['place'],
                        'date' => $value['date'],
                        'id' => $value['id']
                    ]);
                }
            }
        ?>  
    </ul>
</section>