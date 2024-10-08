/*
 * Copyright (C) 2009 Joel Sutherland
 * Licenced under the MIT license
 * http://www.newmediacampaigns.com/page/jquery-flickr-plugin
 *
 * Available tags for templates:
 * title, link, date_taken, description, published, author, author_id, tags, image*
 */
jQuery(document).ready(function($){
    var id_data = $('#flickr_badge_wrapper').attr('data-id');
    var count_data = $('#flickr_badge_wrapper').attr('data-count');
    var count_data_n = Number(count_data);
    $.getJSON('http://api.flickr.com/services/feeds/photos_public.gne?ids='+id_data+'&lang=en-us&format=json&jsoncallback=?', function(data){
        $.each(data.items, function(index, item){
            if(index >= count_data_n){
                return false;
            }
            $('<img/>').attr({'src':item.media.m.replace('_m','_s'),'alt':id_data}).appendTo('#flickr_badge_wrapper > ul')
              .wrap('<li><a class="flicker-popup-link" target="_blank" href="' + item.media.m.replace('_m','_b') + '"></a></li>');
                /*
                $('.flicker-popup-link').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    closeBtnInside: false,
                    fixedContentPos: true,
                    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
                    image: {
                        verticalFit: true
                    },
                    gallery: {
                        enabled: true
                    },
                    zoom: {
                        enabled: true,
                        duration: 600, // duration of the effect, in milliseconds
                        easing: 'ease', // CSS transition easing function
                        opener: function(element) {
                            return element.find('img');
                        }
                    }
                });*/
        });
    });
});