jQuery(document).ready(function() {

    jQuery("#anasayfa").sortable({
        placeholder: "tasima-yardimci",
        //item: ".liste",
        handle: ".liste-ust",
        cancel: ".liste-toggle",
        cursor: "move",
        forcePlaceholderSize: true
    });
    jQuery("#anasayfa ul").disableSelection();

    jQuery(".liste-toggle").click(function() {
        jQuery(this).closest(".liste").toggleClass('acik');
    });
    
   /* 
    jQuery("#save-order").bind( "click", function() {
        
        jQuery("html, body").animate({ scrollTop: 0 }, "fast");
        
        jQuery.post( ajaxurl, { action:'update-custom-type-order', order:jQuery("#sortable").sortable("serialize") }, function() {
            jQuery("#ajax-response").html('<div class="message updated fade"><p><?php _e('Items Order Updated', 'cpt') ?></p></div>');
            jQuery("#ajax-response div").delay(3000).hide("slow");
        });
    });*/
});