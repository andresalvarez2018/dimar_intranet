/*"use strict";
(function ($) {
  $(document).ready(function(){
    	if($('.whites-mega-menu').length){
      	$('.whites-mega-menu').each(function(){
        		var menu_content = $(this).children('ul').html();
        		$(this).children('ul').remove();
        		//console.log(menu_content);
        		//$(this).children('ul.dropdown-menu').empty();
        		//$(this).addClass('yamm-fw');
        		//console.log(menu_content);
        		$(this).append('<div class="mega-menu dropdown-menu multi-level row bg-menu"><div class="tab-box" data-tab-anima="fade-left"><div class="panel active"></div></div></div>');
        		//$(this).children('ul.dropdown-menu > li > .yamm-content > .row > li.dropdown')
        		$(this).children('.mega-menu.dropdown-menu.multi-level').children('.tab-box').children('.panel').html(menu_content);
        		
        		
        		$(this).children('.mega-menu.dropdown-menu.multi-level').children('.tab-box').children('.panel').children('li.dropdown.dropdown-submenu').each(function(){
        			var item_html = $(this).html();
        			$(this).replaceWith('<div class="col">'+item_html+'</div>');
        		});
     
     		});
    	}

  });
}(jQuery));*/