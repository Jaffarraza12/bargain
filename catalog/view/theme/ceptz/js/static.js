$(document).ready(function () {
    $('.tab').click(function(){
        var tab = $(this).data('tab')
        $(".tabContent").hide()
        $("#"+tab).fadeIn()
    })
})