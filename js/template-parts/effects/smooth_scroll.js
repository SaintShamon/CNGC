function scrollToAnchor(){

    jQuery('a[href^="#"]:not(.slider-arrow, .quote--button)').click(function(e){
        e.preventDefault();
        let href = jQuery(this).attr('href');    
        jQuery('html, body').animate({ scrollTop: jQuery(href).offset().top - 100}, 500);
    })
        
}

export{scrollToAnchor};