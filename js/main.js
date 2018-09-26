window.onload = function (){
    document.querySelector('#send_form').onclick = function () {
        ajaxGet();

    }
}
function ajaxGet() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var comments = document.getElementById('comments').value;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../php/validator.php?name='+ name + "&email=" + email + "&comments=" + comments , true);
    xhr.send();
    xhr.onreadystatechange = function () {
        if(xhr.readyState != 4 )return;
        if (xhr.status != 200)
        {
            console.log(xhr.status + ": " + xhr.statusText);
        } else {
            console.log(xhr.responseText)
        }
    }
    
}
/*
function sendForm() {
    $.ajax({
        url: '../php/validator.php',
        data: "hiwertwertwert",
        type: 'POST', //data format
        success: function (data) {
            alert(data);
        }
    });
}*/
