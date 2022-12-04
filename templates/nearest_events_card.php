<a class="nearest-events__card">
    <ul class="nearest-events__list">
        <li class="nearest-events__month">
            <?php
                $time = strtotime($data['date']);
                $month = date("m", $time);

                if($month == 1) {
                    print('январь');
                } else if($month == 2) {
                    print('февраль');
                } else if($month == 3) {
                    print('март');
                } else if($month == 4) {
                    print('апрель');
                } else if($month == 5) {
                    print('май');
                } else if($month == 6) {
                    print('июнь');
                } else if($month == 7) {
                    print('июль');
                } else if($month == 8) {
                    print('август');
                } else if($month == 9) {
                    print('сентябрь');
                } else if($month == 10) {
                    print('октябрь');
                } else if($month == 11) {
                    print('ноябрь');
                } else if($month == 12) {
                    print('декабрь');
                }
            ?>
        </li>
        <li class="nearest-events__day">
            <?php
            $time = strtotime($data['date']);
            print(date("d", $time));
            ?>
        </li>
        <li class="nearest-events__event-name">
            <?=$data['name']?>
        </li>
        <li class="nearest-events__description">
            <?=$data['slogan']?>
        </li>
    </ul>
    <ul class="nearest-events__additional-info-list">
        <li class="nearest-events__city">
            <?=$data['city']?>
        </li>
        <li class="nearest-events__address">
            <?=$data['adress']?>
        </li>
        <li class="time">
            Начало - <?=$data['time']?>
        </li>
    </ul>
</a>