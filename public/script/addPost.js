'use strict';


$('.addpost-btn').click(function (event) {
    event.preventDefault();
    let titleValue = $('input[name="title"]').val();
    let contentValue = $('textarea[name="content"]').val();

    let datePublic = $('input[name="datepublic"]').val();


    $.ajax({
        method: "POST",
        url: "addpost.php",
        data: {
            title: titleValue,
            content: contentValue,
            datepublic: datePublic
        },
    })

    $('input[name="title"]').val(" ");
    $('textarea[name="content"]').val(" ");
    $('input[name="datepublic"]').val(" ");
});



