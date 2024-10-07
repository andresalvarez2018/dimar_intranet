jQuery(document).ready(function($){
    $('.p-display-2-link a').addClass('anima-button btn btn-border btn-sm');
    $('.p-display-2-link a').prepend('<i class="im-right"></i>');
    if($('.whites-bg-img').length){
        $('.whites-bg-img').each(function(){
            var image_url = $(this).data('bg-img');
            $(this).css('background-image', 'url('+image_url+')');
        });
       
    }
    $('#anima-layer-a2').pan({ fps: 30, speed: 0.7, dir: 'left', depth: 30 });
    $('#anima-layer-b2').pan({ fps: 30, speed: 1.2, dir: 'left', depth: 70 });


});
