<?php
require_once('./authentication.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/base.css">
    <title>LOGGED IN</title>
</head>
<body>
    <article>
        <h1>LOGGED IN</h1>
        <?php
            echo '<pre>';
            echo var_dump($_SESSION);
            echo '</pre>';
        ?>
    </article>
</html>