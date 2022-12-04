<section class="last-news">
    <div class="last-news__upper-part">
        <h2>Новости клуба:</h2>
    </div>
    <ul class="last-news__list">
        <?php $news = $data['args'];
            foreach($news as $key => $value) {
                    render_template("templates/last_news_card.php", [
                        'img_path' => $value['img_path'],
                        'description' => $value['description'],
                        'place' => $value['place'],
                        'date' => $value['date']
                    ]);
            }
        ?>  
    </ul>
</section>