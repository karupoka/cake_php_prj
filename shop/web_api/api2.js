$(function() {
    $('body').on('click', 'button[data-btn-type=pokemon-ajax]', function(e) {
        console.log('poke-btn');

        var send_data;
        send_data = {
            pokemon : $('input[name="pokemon"]').val()
        };
        console.log(send_data);


        $.ajax({
            url: 'users2.php',
            dataType: 'Json',
            data: send_data,
        })
        .done(function(responce) {   
            //  レスポンス成功時の処理
            // console.log(responce);
             if (responce.result === "OK") {
                console.log(responce);
               $('div[data-result2=""]').html(JSON.stringify(responce));
             } else {
               console.log(responce);
               $('div[data-result2=""]').html(JSON.stringify(responce));
             }
             return false;
           }
         )
        .fail(function(XMLHttpRequest, textStatus, errorThrown) {
            $('div[data-result2=""]').html(XMLHttpRequest.status + ':' + errorThrown);
            return false;
        });
    
    $('input').focus();
    return false;
    })
})