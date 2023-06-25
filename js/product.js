$('form').submit(function(event) {
   event.preventDefault()
   let name = $("#name").val()
   let email = $("#email").val()
   let phone = $("#phone").val()
   let date = $("#date").val()
   let quantity = $(".quantity").val()
   let price = $("#price").val()
   let sum =  $("#sum").val();
   let name_tool = $("#tov").val()
   $.ajax({
     type: 'POST',
     url: '../../php/order.php',
     data: {"name":name, "email":email, "phone":phone, "date":date, "quantity":quantity, "price":price, "sum":sum, "name_tool":name_tool}, 
     success: function() {
       $('form')[0].reset()
       $("#air").css("display", "none")
       $("#main").css("display", "block")
       const $item = $('<div class="success">Заказ успешно отправлен</div>');
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
 
   $(".send-btn").on("click", function() {
     $('.success').delay(2000).slideUp(200, function(){
     })
    })

    let showForm = false;
    $(".button-order").on("click",()=>{
      if(showForm){
         $("#quantity").on('change', ()=>{
            let quantity = $(".quantity").val()
            let price = $("#price").val()
            $("#sum").val(parseInt(quantity) * parseFloat(price))
         })
         let name_tool = $("#name-tool").html()
         $("#tov").val(name_tool)
         let price = $("#price-on-ed").html()
         $("#price").val(price)
         $("#air").css("display", "block")
         $("#main").css("display", "none") 
      }else{
         $("#air").css("display", "none")
         $("#main").css("display", "block")
      }
      showForm = !showForm
})