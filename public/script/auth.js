'use strict';

$('.login-btn').click(function (event){
    event.preventDefault();
    $(`input`).removeClass('error');
    let login = $('input[name="login"]').val();
    let password = $('input[name="password"]').val();
    $.ajax({
        url: 'signin.php',
        method: 'POST',
        dataType: 'json',
        data: {
            login: login,
            password: password
        },
        success (data){
            if(data.status){
                document.location.href = 'private.php';
            } else {
                if(data.type === 1){
                    data.fields.forEach(function (field){
                        $(`input[name="${field}"]`).addClass('error');
                    })
                }
                $('.msg').removeClass('none').text(data.message);
            }
        }
    })
});