window.onload = function () {
    document.querySelector('.close').onclick = function()
    {
        alert('press');
        sendHideRequest();
    }
}
function sendHideRequest() {
    xhr = new XMLHttpRequest();
    xhr.open('GET', '../php/include/function.php?hideSQLrow=15', true);
    xhr.send();
}