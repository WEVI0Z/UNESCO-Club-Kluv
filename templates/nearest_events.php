<section class="nearest-events">
        <div class="nearest-events__upper-part">
            <h2>Близжайшие события:</h2>
            <a href="#">Все события клуба</a>
        </div>
        <?php
            $events = $data['events'];

            foreach($events as $key => $value) {
                render_template("templates/nearest_events_card.php", [
                    'date' => $value['date'],
                    'name' => $value['name'],
                    'slogan' => $value['slogan'],
                    'city' => $value['city'],
                    'adress' => $value['adress'],
                    'time' => $value['time'],
                ]);
            }
        ?>
</section>