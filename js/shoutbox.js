$('form').submit(function(event) {
    event.preventDefault()
    $.ajax({
      type: 'POST',
      url: '../../php/shout.php',
      data: $(this).serialize(), 
      success: function() {
        $('form')[0].reset()
        setTimeout(function(){
          location.reload()
        }, 3000);
        const $item = $('<div class="success">Отзыв успешно отправлен</div>');
        $item.appendTo($('.message-box')).delay(3000).slideUp(200, function(){
          $item.remove()
        })
      },
      error: function() {
        alert("Ошибка при отправке сообщения");
        setTimeout(function(){
          location.reload()
        }, 3000)
      }
    })
  })

  $("#shoutbox-btn").on("click", function() {
    $('.success').delay(2000).slideUp(200, function(){
    })
   })




