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


document.querySelector('button[type="submit"]').addEventListener('click', function (event) {
    event.preventDefault();
    validateForm(event);
});

document.querySelectorAll('.formModal input').forEach(function (elem) {
    elem.addEventListener('change', function (event) {
        document.querySelectorAll('.errorMessage').forEach(element => element.remove());
        let fieldError = [validateField(elem, elem.value)]
        if (fieldError[0] !== undefined) {
            displayErrors(fieldError);
        }
    })
})

function validateForm(event) {
    let data = {};
    let validationErrors = {};
    let allFields = document.querySelectorAll('input, textarea, select');

    for (let i = 0; i < allFields.length; i++) {
        let fieldName = allFields[i].getAttribute('name');
        let fieldValue = allFields[i].value;
        data[fieldName] = fieldValue;
        let resolvedError = validateField(allFields[i], fieldValue);

        if (resolvedError !== undefined) {
            validationErrors[fieldName] = validateField(allFields[i], fieldValue);
        }
        
    }

    if (Object.keys(validationErrors).length === 0) {
        console.log(data);
    } else {
        displayErrors(validationErrors);
    }
}

function validateCheck(fieldClasses, value) {
    if (fieldClasses.classList.contains('required') && value === "") {
        return false;
    } else if (value !== "") {
        return true;
    }
};

function validateField(element, fieldValue) {
    const nameRegex = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u;
    const mailRegex = /(.+)@(.+){2,}\.(.+){2,}/;
    const placeRegex = /^\d{4}[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,}.*$/;
    const adressRegex = /^[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,}$/;
    const phoneRegex = /(\b(0041|0)|\B\+41)(\s?\(0\))?(\s)?[1-9]{2}(\s)?[0-9]{3}(\s)?[0-9]{2}(\s)?[0-9]{2}\b/;

    let errorMessage = {
        element: element,
        message: ''
    }

    if (validateCheck(element, fieldValue) === false) {
        errorMessage.message = "This field is required";
        return errorMessage;
    }

    if (element.classList.contains('nameValidation') && validateCheck(element, fieldValue) && nameRegex.test(fieldValue) === false) {
        errorMessage.message = "Please only use letters and spaces";
        return errorMessage;
    }

    if (element.classList.contains('mailValidation') && validateCheck(element, fieldValue) && mailRegex.test(fieldValue) === false) {
        errorMessage.message = "Invalid email address";
        return errorMessage;
    }

    if (element.classList.contains('phoneValidation') && validateCheck(element, fieldValue) && phoneRegex.test(fieldValue) === false) {
        errorMessage.message = "Invalid phone number";
        return errorMessage;
    }

    if (element.classList.contains('placeValidation') && validateCheck(element, fieldValue) && placeRegex.test(fieldValue) === false) {
        errorMessage.message = "Enter the zip code followed by the place name";
        return errorMessage;
    }

    if (element.classList.contains('adressValidation') && validateCheck(element, fieldValue) && adressRegex.test(fieldValue) === false) {
        errorMessage.message = "Please enter a valid street name";
        return errorMessage;
    }
}

function displayErrors(validationErrors) {
    document.querySelectorAll('.errorMessage').forEach(element => element.remove());

    for (let error in validationErrors) {

        let errorElement = document.createElement('div');
        errorElement.classList.add('errorMessage');
        // console.log(validationErrors[error]);
        errorElement.innerText = validationErrors[error].message;

        if (validationErrors[error].element.parentElement.querySelector('.errorMessage') === null) {
            validationErrors[error].element.after(errorElement);
        }
    }
}