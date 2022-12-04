<?php
    include_once("functions.php");

    $con = mysqli_connect('localhost', 'root', '', 'cluv');

    if (!$con) {
        print("Ошибка подключения: " . mysqli_connect_error());
    } else {
        $sql = "SELECT * FROM news";
        $result = mysqli_query($con, $sql);
        $news_data = [];

        if($result) {
            $news_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            print('fail');
        }
        
        $sql = "SELECT * FROM events";
        $result = mysqli_query($con, $sql);
        $events_data = [];

        if($result) {
            $events_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            print('fail');
        }

        render_template("templates/main.php", ['user' => false, 'news' => $news_data, 'events' => $events_data]);
    }
?>