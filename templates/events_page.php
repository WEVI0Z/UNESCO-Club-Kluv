<section class="nearest-events">
        <div class="nearest-events__upper-part">
            <h2>Cобытия клуба:</h2>
        </div>
        <ul class="nearest-events__list">
            <?php
                $events = $data['args'];
                
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
        </ul>
</section>