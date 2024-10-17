<?php
    $errorMessages = array(); // container für alle Fehlermeldungen
    $email = '';
    $vorname = '';
    $nachname = '';
    $nachricht = '';
    
    if (!isset($_POST['email']) || !isset($_POST['vorname']) || !isset($_POST['nachname']) || !isset($_POST['nachricht'])) {
        $errorMessages[] = 'Bitte fülle alle markierten Felder korrekt aus';
    } else {
        $email = strip_tags( trim($_POST['email']) );
        $vorname = strip_tags( trim($_POST['vorname']) );
        $nachname = strip_tags( trim($_POST['nachname']) );
        $nachricht = strip_tags( trim($_POST['nachricht']) );

        if(empty($email)){
            $errorMessages['email'] = 'Bitte gib deine Email an';
        } else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false ){
            $errorMessages['email'] = 'Deine Email ungültig';
        } 
        
        if(empty($vorname)) {
            $errorMessages['vorname'] = 'Bitte gib deinen Vornamen an';
        }
        
        if(empty($nachname)) {
            $errorMessages['nachname'] = 'Bitte gib deinen Nachnamen an';
        } 
        
        if(empty($nachricht)) {
            $errorMessages['message'] = 'Bitte schreibe mir eine Nachricht';
        }
    }
?>

<div class="formModal <?php if(isset($errorMessages['email']) || isset($errorMessages['vorname']) || isset($errorMessages['nachname']) || isset($errorMessages['message']) ) { echo 'active'; } ?>">
    <div class="wrapper">
        <div class="formModalTrigger formCross">
        <svg xmlns="http://www.w3.org/2000/svg" width="32.121" height="32.121">
            <g data-name="Gruppe 261" fill="none" stroke="currentColor" stroke-width="3">
                <path data-name="Linie 62" d="m1.061 1.061 30 30" />
                <path data-name="Linie 63" d="m31.061 1.061-30 30" />
            </g>
        </svg>
        </div>
        <form action="" method="POST">
        <span>
            <select name="anrede">
                <option value="">Anrede</option>
                <option value="herr">Herr</option>
                <option value="frau">Frau</option>
                <option value="divers">Divers</option>
            </select>
        </span>
        <span>
            <label for="firma">Firma</label>
            <input placeholder=" " type="text" name="firma">
        </span>
        <span>
            <label for="vorname">Vorname*</label>
            <input class="required nameValidation" placeholder=" " type="text" name="vorname">
            <?php 
                if(isset($errorMessages['vorname'])) { 
                    echo '<div class="errorMessage">'.$errorMessages["vorname"].'</div>';
                }
            ?>
        </span>
        <span>
            <label for="nachname">Nachname*</label>
            <input class="required nameValidation" placeholder=" " type="text" name="nachname">
            <?php 
                if(isset($errorMessages['nachname'])) { 
                    echo '<div class="errorMessage">'.$errorMessages["nachname"].'</div>';
                }
            ?>
        </span>
        <span>
            <label for="ort">Ort</label>
            <input class="placeValidation" placeholder=" " type="text" name="ort">
        </span>
        <span>
            <label for="addresse">Addresse</label>
            <input class="adressValidation" placeholder=" " type="text" name="addresse">
        </span>
        <span>
            <label for="email">E-Mail*</label>
            <input class="required mailValidation" placeholder=" " type="text" name="email">
            <?php 
                if(isset($errorMessages['email'])) { 
                    echo '<div class="errorMessage">'.$errorMessages["email"].'</div>';
                }
            ?>
        </span>
        <span>
            <label for="telefon">Telefon</label>
            <input class="phoneValidation" placeholder=" " type="tel" name="telefon">
        </span>
        <span>
            <label for="nachricht">Nachricht*</label>
            <textarea class="required" placeholder=" " name="nachricht"></textarea>
            <?php 
                if(isset($errorMessages['message'])) { 
                    echo '<div class="errorMessage">'.$errorMessages["message"].'</div>';
                }
            ?>
        </span>
        <span>
            <p class="formInfo">Felder mit * sind Pflichtfelder und müssen korrekt ausgefüllt werden.</p>
            <button type="submit" class="button" aria-label="Formular senden">Senden</button>
        </span>
        </form>
    </div>
</div>