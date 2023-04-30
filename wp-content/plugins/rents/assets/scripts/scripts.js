// JavaScript file
// console.log( 'hi, the file loads' );

jQuery(document).ready(function($) {
    $('.like-button').on('click', function(e){
        e.preventDefault();
         console.log( 'clicked' ); // just to be sure

        let rent_id = jQuery(this).attr('id') // we'll need this later
        console.log (rent_id)
        // AJAX Magic
        jQuery.ajax({
            type: 'post',
            dataType: 'json',
            url: my_ajax_object.ajax_url,
            data: {
                action:'rent_like', // PHP function
                rent_id: rent_id // we need to make this dynamic
            },
            success: function(msg){
                console.log(msg);
                
            }
        });
    });
});
