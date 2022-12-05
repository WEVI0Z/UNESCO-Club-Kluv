<?php
    include_once("functions.php");
    include_once("data.php");

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
        $email = '';

        session_start();

        if(empty($_POST)) {
            unset($_POST);
        }
        
        if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['news_place'])) {
            $date = substr($_POST['news_date'], 8, 2) . '.' . substr($_POST['news_date'], 5, 2) . '.' . substr($_POST['news_date'], 0, 4);
            $name = $_FILES['news_img']['tmp_name'];
            $path = $_FILES['news_img']['name'];

            move_uploaded_file($name, 'images/' . $path);

            $sql = "INSERT INTO news
                    SET img_path= 'images/" . $path .
                        "', description='" . $_POST['news_description'] .
                        "', place='" . $_POST['news_place'] .
                        "', text='" . $_POST['news_text'] .
                        "', date='" . $date . "'"
                    ;

            mysqli_query($con, $sql);
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['events_city'])) {
            $date = substr($_POST['events_date'], 8, 2) . '.' . substr($_POST['events_date'], 5, 2) . '.' . substr($_POST['events_date'], 0, 4);
            move_uploaded_file($name, 'images/' . $path);
            $sql = "INSERT INTO events
                    SET     date='" . $date .
                        "', name='" . $_POST['events_name'] .
                        "', slogan='" . $_POST['events_slogan'] .
                        "', city='" . $_POST['events_city'] .
                        "', adress='" . $_POST['events_adress'] .
                        "', time='" . $_POST['events_time'] .
                        "', description='" . $_POST['events_description'] . "'"
                    ;

            mysqli_query($con, $sql);
            print(mysqli_error($con));
        }

        if(!$_SESSION['logged'] && $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
            if(isset($_POST)) {
                $sql = "SELECT * FROM users WHERE email = '" . $_POST['email'] . "'";
                $result = mysqli_query($con, $sql);
    
                if($result) {
                    $user_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    
                    if($user_data[0]['password'] == $_POST['password']) {
                        $_SESSION['logged'] = true;
                        $_SESSION['email'] = $_POST['email'];

                        if($user_data[0]['admin']) {
                            $_SESSION['admin'] = true;
                        }
                    }
                }
            }
        }

        $error = false;

        if(!$_SESSION['logged'] && $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reg_email'])) {
            if(isset($_POST)) {
                $sql = "SELECT * FROM users WHERE email = '" . $_POST['reg_email'] . "'";
                $result = mysqli_query($con, $sql);
                
    
                if(empty($result)) {
                    print(1);
                    $error = true;
                } else {
                    print(2);
                    $_SESSION['logged'] = true;
                    $_SESSION['email'] = $_POST['reg_email'];

                    $sql = "INSERT INTO users SET email='" . $_POST['reg_email'] . "', password='" . $_POST['reg_password'] . "'";
                    mysqli_query($con, $sql);
                    print(mysqli_error($con));
                }
            }
        }

        if($_GET['exit'] == true) {
            $_SESSION['logged'] = false;
            $_SESSION['email'] = '';
            $_SESSION['admin'] = false;
        }

        if(isset($_GET['delete_event'])) {
            $sql = "DELETE FROM events WHERE id='" . $_GET['index'] . "'";
            mysqli_query($con, $sql);
        }

        if(isset($_GET['delete_news'])) {
            $sql = "DELETE FROM news WHERE id='" . $_GET['index'] . "'";
            mysqli_query($con, $sql);
        }
        
        if($_GET['admin'] and $_SESSION['admin']) {
            render_template("templates/main.php", [
                'pages' => [
                    [
                        'path' => 'templates/admin_panel.php',
                        'args' => []
                    ]
                ]
            ]);
        } else if (isset($_GET['newspage'])) {
            render_template("templates/main.php", [
                'pages' => [
                    [
                        'path' => 'templates/news_page.php',
                        'args' => $news_data
                    ]
                ]
            ]);
        } else if (isset($_GET['eventspage'])) {
            render_template("templates/main.php", [
                'pages' => [
                    [
                        'path' => 'templates/events_page.php',
                        'args' => $events_data
                    ]
                ]
            ]);
        } else {
            render_template("templates/main.php", [
                'pages' => [
                    [
                        'path' => 'templates/last_news.php',
                        'args' => $news_data
                    ],
                    [
                        'path' => 'templates/nearest_events.php',
                        'args' => $events_data
                    ]
                ]
            ]);
        }
    }
?>