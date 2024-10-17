<?php
require_once('../config.php');

session_set_cookie_params([
    'lifetime' => $session_lifetime,
]);

session_name(SESSIONCOOKIE_NAME); 
session_start();


if (isset($_POST['username']) && isset($_POST['password'])) {
    $query = 'SELECT * FROM `users` WHERE name = :username';
    $statement = $db->prepare($query);
    $values = array('username' => $_POST['username']);
    $statement->execute( $values );

    $user = $statement->fetch( PDO::FETCH_ASSOC );

    if($user === false){
        $hasError = true;
        $errorMessages[] = 'Benutzer nicht gefunden';
    }else{
        $passwortCheck = password_verify($_POST['password'], $user['passwort']);
        if($passwortCheck === false){
            $hasError = true;
            $errorMessages[] = 'Benutzername oder Passwort stimmt nicht';
        } else {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['logintime'] = time();
            $_SESSION['userip'] = $_SERVER['REMOTE_ADDR'];
            $_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];
        }
    }
}

$isLoggedIn = false;
if (isset($_SESSION['username']) && isset($_SESSION['logintime']) && isset($_SESSION['userip']) && isset($_SESSION['useragent'])) {
    if (time() - $_SESSION['logintime'] > $session_lifetime) {
        $loginError = true;
    } else {
        if ($_SESSION['userip'] === $_SERVER['REMOTE_ADDR'] && $_SESSION['useragent'] === $_SERVER['HTTP_USER_AGENT']) {
            $isLoggedIn = true;
            $username = $_SESSION['username'];
            $_SESSION['logintime'] = time();
        } else {
            $loginError = true;
        }
    }
}

if (isset($loginError) && $loginError) {
    session_unset();
    session_destroy();
    setcookie(session_name(), ''); 
}

if ($isLoggedIn) {
    session_regenerate_id(true);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/base.css">
    <title>Login</title>
</head>
<body>
<section>
<?php if (!$isLoggedIn): ?>
    <h1>LOGIN</h1>

    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Sign in</button>
    </form>
</section>
</body>
</html>
<?php else: header("Location: $baseUrl"); ?>

<?php endif; ?>


