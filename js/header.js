$("#nav-button").click(function() { 
    $('#navigation').slideToggle(300)
  })
  $(document).ready(function(){
    const $imgLogo = $('.logo')
    $imgLogo.data('src-orig', $imgLogo.attr('src'))
    const $imgPhone = $('.phone-header')
    $imgPhone.data('src-orig', $imgPhone.attr('src'))
        var hWindow = jQuery(window).height()

        jQuery(window).scroll(function() {
            if ($(window).width() > 970) {
                hScroll = jQuery(this).scrollTop() + hWindow;
                if (jQuery(this).scrollTop() >= 220) {
                    $("#header").css("background-color", "#2C3E50")
                    $(".link").css("color", "#fff")
                    $("#p-header").css("color", "#fff")
                    $("#nav-button").css("color", "#fff")
                    $("#phone-header").css("color", "#fff")
                    $(".button-header").css("color", "#fff").css("border-color", "#fff")
                    $("#catalog-header").css("color", "#fff")
                    $imgLogo.attr('src', $imgLogo.data('white-logo'))
                    $imgPhone.attr('src', $imgPhone.data('white-phone'))
                } else {
                    $("#header").css("background-color", "rgba(255, 255, 255, 0.5)")
                    $(".link").css("color", "#2c3e50")
                    $("#p-header").css("color", "#2c3e50")
                    $("#nav-button").css("color", "#2c3e50")
                    $("#phone-header").css("color", "#2c3e50")
                    $(".button-header").css("color", "#2c3e50").css("border-color", "#2c3e50")
                    $("#catalog-header").css("color", "#2c3e50")
                    $imgLogo.attr('src', $imgLogo.data('src-orig'))
                    $imgPhone.attr('src', $imgPhone.data('src-orig'))
                }
            } else {
            }
           
        })
})
    