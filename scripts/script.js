mobileNavTrigger.onclick = function () {
    document.body.classList.toggle('mobileNavActive');
    if (document.querySelector('.formModal').classList.contains('active')) {
        document.querySelector('.formModalTrigger').click()
    }
}

let formTrigger = document.querySelectorAll('.formModalTrigger');
formTrigger.forEach(function (elem) {
    elem.addEventListener('click', function () {
        document.querySelector('.formModal').classList.toggle('active')

    })
});


//! Validation Übung


/*  

TODO: Fehlermeldungen bei falschen Feldern sollten verschwinden bei "keyup" 
TODO: - Keyup eventlistener
TODO: - validation mit ifs in eigene function nicht in loop
TODO: - keyup validiert momentanes Feld

*/


document.querySelector('button[type="submit"]').addEventListener('click', function (event) {
    event.preventDefault();
    validateForm(event);
});


function validateForm(event) {
    let data = {};
    let validationErrors = {};
    let allFields = document.querySelectorAll('input, textarea, select');

    const nameRegex = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u;
    const mailRegex = /(.+)@(.+){2,}\.(.+){2,}/;
    const phoneRegex = /(\b(0041|0)|\B\+41)(\s?\(0\))?(\s)?[1-9]{2}(\s)?[0-9]{3}(\s)?[0-9]{2}(\s)?[0-9]{2}\b/;

    function validateCheck(fieldClasses, value) {
        if (fieldClasses.classList.contains('required') && value === "") {
            return false;
        } else if (value !== "") {
            return true;
        }
    };

    for (let i = 0; i < allFields.length; i++) {
        let fieldName = allFields[i].getAttribute('name');
        let fieldValue = allFields[i].value;
        data[fieldName] = fieldValue;

        let errorMessage = {
            element: allFields[i],
            message: ''
        }

        if (validateCheck(allFields[i], fieldValue) === false) {
            errorMessage.message = "This field is required";
            validationErrors[fieldName] = errorMessage;
            continue;
        }

        if (allFields[i].classList.contains('nameValidation') && validateCheck(allFields[i], fieldValue) && nameRegex.test(fieldValue) === false) {
            errorMessage.message = "This name is invalid. Please only use letters and spaces";
            validationErrors[fieldName] = errorMessage;
            continue;
        }

        if (allFields[i].classList.contains('mailValidation') && validateCheck(allFields[i], fieldValue) && mailRegex.test(fieldValue) === false) {
            errorMessage.message = "Invalid email address";
            validationErrors[fieldName] = errorMessage;
            continue;
        }

        if (allFields[i].classList.contains('phoneValidation') && validateCheck(allFields[i], fieldValue) && phoneRegex.test(fieldValue) === false) {
            errorMessage.message = "Invalid phone number";
            validationErrors[fieldName] = errorMessage;
            continue;
        }
        
    }

    if (Object.keys(validationErrors).length === 0) {
        console.log(data);
    } else {
        displayErrors(validationErrors);
    }
}

function displayErrors(validationErrors) {
    document.querySelectorAll('.errorMessage').forEach(element => element.remove());

    for (let error in validationErrors) {
        
        let errorElement = document.createElement('div');
        errorElement.classList.add('errorMessage');
        errorElement.innerText = validationErrors[error].message;

        if (validationErrors[error].element.parentElement.querySelector('.errorMessage') === null) {
            validationErrors[error].element.after(errorElement);
        }
    }
}



/*
// eventListener dem Submit-Button hinzufügen
document.querySelector("button").addEventListener("click", validateForm);

function validateForm(event) {
    // Standardverhalten des Submit-Buttons unterbinden
    // weil sonst die Seite neu geladen wird
    event.preventDefault();

    // Definieren eines leeren Daten-Objekts für die Formulardaten
    let data = {};
    // Definieren eines leeren Daten-Objekts für die Fehlermeldungen
    let validationErrors = {};

    // Erstellen der properties im data-Objekt
    data.firstName = document.querySelector("#first-name").value;
    data.lastName = document.querySelector("#last-name").value;
    data.email = document.querySelector("#email").value;
    data.message = document.querySelector("#message").value;

    // firstName validieren
    if (!data.firstName) {
        validationErrors.firstName = "No first name provided";
    } else if (data.firstName.length <= 3) {
        validationErrors.firstName = "First name must be at least 3 characters long";
    }

    // lastName validieren
    if (!data.lastName) {
        validationErrors.lastName = "No last name provided";
    } else if (data.lastName.length <= 3) {
        validationErrors.lastName = "Last name must be at least 3 characters long";
    }

    // email validieren
    if (!data.email) {
        // console.error("Email is empty");
        validationErrors.email = "No email provided";
    } else {
        // E-Mail-Validierung
        // Um die E-Mail Validierung zu tätigen, greiffe wir
        // auf ein Regular Expression (RegEx) zurück
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        // wir können jetzt mit dem Regex prüfen, ob die E-Mail adresse valide ist
        // Überprüfen ob eine E-Mail Adresse nicht valide ist
        if (!emailRegex.test(data.email)) {
            //   console.error("Email is invalid");
            validationErrors.email = "Email is invalid, please check again";
        }
    }

    // Die Message ist optional
    // Aber wenn es nicht leer ist, dann sollte es mindestens 30 Zeichen lang sein
    if (data.message !== "" && data.message.length < 31) {
        // console.error("Not enough characters in the message");
        validationErrors.message = "The message must be at least 30 characters long";
    }

    if (Object.keys(validationErrors).length === 0) {
        console.log(data);
    } else {
        displayErrors(validationErrors);
    }
}

// Funktion zur Anzeige der Fehlermeldungen
function displayErrors(errors) {
    // Fehlermeldung des firstName auf der Webseite anzeigen
    if (errors.firstName && !document.querySelector("#first-name ~ span")) {
        // Erstellen eines neuen span-Elements für die Fehlermeldung
        const errContainer = document.createElement("span");
        // Hinzufügen des Textes zur Fehlermeldung
        errContainer.innerHTML = errors.firstName;
        // Wir fügen die Fehlermeldung nach dem Input-Feld ein
        document.querySelector("#first-name").after(errContainer);
    }

    if (errors.lastName && !document.querySelector("#last-name ~ span")) {
        // Erstellen eines neuen span-Elements für die Fehlermeldung
        const errContainer = document.createElement("span");
        // Hinzufügen des Textes zur Fehlermeldung
        errContainer.innerHTML = errors.lastName;
        // Wir fügen die Fehlermeldung nach dem Input-Feld ein
        document.querySelector("#last-name").after(errContainer);
    }

    if (errors.email && !document.querySelector("#email ~ span")) {
        // Erstellen eines neuen span-Elements für die Fehlermeldung
        const errContainer = document.createElement("span");
        // Hinzufügen des Textes zur Fehlermeldung
        errContainer.innerHTML = errors.email;
        // Wir fügen die Fehlermeldung nach dem Input-Feld ein
        document.querySelector("#email").after(errContainer);
    }

    if (errors.message && !document.querySelector("#message ~ span")) {
        // Erstellen eines neuen span-Elements für die Fehlermeldung
        const errContainer = document.createElement("span");
        // Hinzufügen des Textes zur Fehlermeldung
        errContainer.innerHTML = errors.message;
        // Wir fügen die Fehlermeldung nach dem Input-Feld ein
        document.querySelector("#message").after(errContainer);
    }
}

*/