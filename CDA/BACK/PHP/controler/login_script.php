<?php
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password_hash = '$2y$10$EFleepQhtif0VGGLqkqyXucutiT5x19jUlsThjFrDVJnpIWUHmeJ.';
    if($username === 'admin' && password_verify($_POST['password'] , $password_hash)){
        $_SESSION['auth'] = 'ok';
        $_SESSION['username'] = $username;
        echo 'Hello '. $_SESSION['username'];
    } else{
        if (ini_get("session.use_cookies"))
        {
            setcookie(session_name(), '', time()-42000);
        }
    session_destroy();
    echo 'authentification failed';
    }
}
