function like() {
    $.ajax({
            type: 'post',
            url: "../php/add_like.php", //Путь к обработчику
            data: {'referal':this.value},
            response: 'text',
            success: function(data){
                $(".search_result").html(data).fadeIn(); //Выводим полученые данные в списке
           }
       })
}
