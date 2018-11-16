function like() {
    $.ajax({
            type: 'post',
            url: "php/add_like.php", //Путь к обработчику
            type: 'json',
            data: $('#addlike').serialize()
       })
}
