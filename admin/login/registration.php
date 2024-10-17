<?php
require_once('../config.php');

if (
    isset($_POST['gender']) &&
    isset($_POST['username']) &&
    isset($_POST['email']) &&
    isset($_POST['password']) &&
    isset($_POST['passwordRepeate']) &&
    isset($_POST['language'])
    ) {
    $gender = strip_tags( trim($_POST['gender']) );
    $username = strip_tags( trim($_POST['username']) );
    $email = strip_tags( trim($_POST['email']) );
    $password = strip_tags( trim($_POST['password']) );
    $passwordRepeate = strip_tags( trim($_POST['passwordRepeate']) );
    $language = strip_tags( trim($_POST['language']) );

    if($gender != 'Männlich' && $gender != 'Weiblich' && $gender != 'Divers'){
        $hasError = true;
        $errorMessages['gender'] = 'Bitte wähle ein Geschlecht';
    }

    if (strlen($username) < 4 || strlen($username) > 16) {
        $hasError = true;
        $errorMessages['username'] = 'The username needs to be between 4 to 16 characters long';
    } elseif (str_contains($username, ' ')){
        $hasError = true;
        $errorMessages['username'] = 'The username cannot contain any spaces';
    }

    if(empty($email)){
        $hasError = true;
        $errorMessages['email'] = "Please enter you're E-Mail";
    } else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false ){
        $hasError = true;
        $errorMessages['email'] = "you're Email is invalid";
    }

    $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])(?!.*\s).{8,}$/';
    if (!preg_match($passwordPattern, $password)) {
        $hasError = true;
        $errorMessages['password'] = "Password is invalid. It must meet the following requirements:<br>
                - At least 8 characters<br>
                - At least one lowercase letter<br>
                - At least one uppercase letter<br>
                - At least one number<br>
                - At least one special character<br>
                - No spaces allowed";
    } elseif ($password !== $passwordRepeate) {
        $hasError = true;
        $errorMessages['passwordRepeate'] = "You're Password doesn't Match";
    }

    if (empty($language)) {
        $hasError = true;
        $errorMessages['language'] = "Please select a language";
    }

    if (empty($_POST['terms'])) {
        $hasError = true;
        $errorMessages['terms'] = "Please accept the our terms to continue";
    }

} else {
    $hasError = true;
    $errorMessages['form'] = "Plaese fill out the entire form";
}

if ($hasError == false && empty($errorMessages)) {
    $query = "SELECT * FROM users WHERE `name` = '$username' OR `email` = '$email'";
    $resultat = $db->query($query); // Anfrage senden (bei select werden daten bereitgestellt)
    $daten = $resultat->fetchAll(PDO::FETCH_ASSOC); // Daten in Assoziativen Arrays zurückgeben

    if (count($daten) == 0) {
        $query = 'INSERT INTO `users`(`name`, `email`, `passwort`, `geschlecht`, `sprache`, `userSatus`) VALUES (:username,:email,:password,:gender,:language,:status)';
        $statement = $db->prepare($query);
        $values = array(
            'username' => $username, 
            'email' => $email, 
            'password' => password_hash($password, PASSWORD_DEFAULT), 
            'gender' => $gender, 
            'language' => $language, 
            'status' => false, 
        );
        $statement->execute( $values );

        $errorMessages['form'] = "REGISTRATION SUCCESSFULL";
    } else {
        $hasError = true;
        $errorMessages['form'] = "Username or E-Mail already exists";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/base.css">
    <title>Login</title>
    <style>
        .errorMessage{
            color: red;
        }
    </style>
</head>
<body>
<section>
<?php if (!$isLoggedIn): ?>
    <h1>LOGIN</h1>
    <?php 
            if(isset($errorMessages['form'])) { 
                echo '<div class="errorMessage">'.$errorMessages["form"].'</div>';
            }
        ?>
    <form action="" method="POST">
        <?php 
            if(isset($errorMessages['gender'])) { 
                echo '<div class="errorMessage">'.$errorMessages["gender"].'</div>';
                echo $gender;
                echo $_POST['gender'];
            }
        ?>
        <label for="gender">Geschlecht:</label>
        <input type="radio" id="Männlich" name="gender" value="Männlich" > Männlich
        <input type="radio" id="Weiblich" name="gender" value="Weiblich"> Weiblich
        <input type="radio" id="Divers" name="gender" value="Divers"> Divers
        <br>
        <?php 
            if(isset($errorMessages['username'])) { 
                echo '<div class="errorMessage">'.$errorMessages["username"].'</div>';
            }
        ?>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" >
        <br>
        <?php 
            if(isset($errorMessages['email'])) { 
                echo '<div class="errorMessage">'.$errorMessages["email"].'</div>';
            }
        ?>
        <label for="email">E-Mail</label>
        <input type="text" id="email" name="email" >
        <br>
        <?php 
            if(isset($errorMessages['language'])) { 
                echo '<div class="errorMessage">'.$errorMessages["language"].'</div>';
            }
        ?>
        <label for="language">Bevorzugte Sprache:</label>
        <select id="language" name="language">
            <option value="">Bitte wählen</option>
            <option value="Deutsch">Deutsch</option>
            <option value="Englisch">Englisch</option>
        </select>
        <br>
        <?php 
            if(isset($errorMessages['password'])) { 
                echo '<div class="errorMessage">'.$errorMessages["password"].'</div>';
            }
        ?>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" >
        <br>
        <?php 
            if(isset($errorMessages['passwordRepeate'])) { 
                echo '<div class="errorMessage">'.$errorMessages["passwordRepeate"].'</div>';
            }
        ?>
        <label for="passwordRepeate">Password*2</label>
        <input type="password" id="passwordRepeate" name="passwordRepeate" >
        <br>
        <?php 
            if(isset($errorMessages['terms'])) { 
                echo '<div class="errorMessage">'.$errorMessages["terms"].'</div>';
            }
        ?>
        <label for="terms">AGB akzeptieren:</label>
        <input type="checkbox" id="terms" name="terms"> Ich akzeptiere die AGB
        <br>
        <button type="submit">Sign in</button>
    </form>
</section>
</body>
</html>
<?php else: header("Location: $baseUrl"); ?>

<?php endif; ?>


