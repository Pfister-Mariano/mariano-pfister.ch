mobileNavTrigger.onclick = function () {
    document.body.classList.toggle('mobileNavActive')
}

let formTrigger = document.querySelectorAll('.formModalTrigger');
formTrigger.forEach(function (elem) {
    elem.addEventListener('click', function () {
        document.querySelector('.formModal').classList.toggle('active')
    })
});