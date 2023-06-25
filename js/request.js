$('form').submit(function(event) {
  event.preventDefault()
    $.ajax({
      type: 'POST',
      url: '../../php/request.php',
      data: $(this).serialize(), 
      success: function() {
        $('form')[0].reset()
        const $item = $('<div class="success">Заявка успешна отправлена</div>');
        $item.appendTo($('.message-box')).delay(3000).slideUp(200, function(){
          $item.remove()
        })
      },
      error: function() {
        alert("Ошибка при отправке сообщения");
      }
    })
  })

  $(".btn-form").on("click", function() {
    $('.success').delay(2000).slideUp(200, function(){
    })
   })
