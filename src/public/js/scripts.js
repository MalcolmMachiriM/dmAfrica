jQuery(document).ready(function(){
    jQuery('.element').click(function(event){
        //remove all pre-existing active classes
        jQuery('.active-tab').removeClass('active-tab');

        //add the active class to the link we clicked
        jQuery(this).addClass('active-tab');

        //Load the content
        //e.g.
        //load the page that the link was pointing to
        //$('#content').load($(this).find(a).attr('href'));      

        event.preventDefault();
    });
});