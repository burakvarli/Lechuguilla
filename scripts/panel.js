jQuery(document).ready(function() {

    jQuery("#anasayfa").sortable({
        placeholder: "tasima-yardimci",
        handle: ".liste-ust",
        cancel: ".liste-toggle",
        cursor: "move",
        forcePlaceholderSize: true
    });
    jQuery("#anasayfa ul").disableSelection();

    jQuery(".liste-toggle").click(function() {
        jQuery(this).closest(".liste").toggleClass('acik');
    });
});