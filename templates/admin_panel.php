<section class="news-creation">
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <h2>Создать новости</h2>
        <label for="news_description">Заголовок новости:</label>
        <textarea required name="news_description" id="news_description" cols="30" rows="10"></textarea>

        <label for="news_text">Текст новости:</label>
        <textarea required name="news_text" id="news_text" cols="30" rows="10"></textarea>

        <label for="news_date">Дата новости:</label>
        <input required id="news_date" name="news_date" type="date">

        <label for="news_place">Место новости (вкратце):</label>
        <input required id="news_place" name="news_place" type="text">

        <label for="news_img">Изображение:</label>
        <input required name="news_img" id="news_img" type="file">

        <button type="submit">Опубликовать новость</button>
    </form>
</section>

<section class="news-creation">
    <form action="index.php" method="POST">
        <h2>Создать событие</h2>
        <label for="events_description">Заголовок события:</label>
        <textarea required name="events_description" id="events_description" cols="30" rows="10"></textarea>

        <label for="events_name">Текст события:</label>
        <textarea required name="events_name" id="events_name" cols="30" rows="10"></textarea>

        <label for="events_date">Дата события:</label>
        <input required id="events_date" name="events_date" type="date">

        <label for="events_slogan">Слоган события:</label>
        <input required id="events_slogan" name="events_slogan" type="text">

        <label for="events_city">Город, где будет проходить событие:</label>
        <input required id="events_city" name="events_city" type="text">
        
        <label for="events_adress">Адресс события (без города):</label>
        <input required id="events_adress" name="events_adress" type="text">

        <label for="events_time">Время события (формат: чч:мм):</label>
        <input required id="events_time" name="events_time" type="text">

        <button type="submit">Опубликовать новость</button>
    </form>
</section>