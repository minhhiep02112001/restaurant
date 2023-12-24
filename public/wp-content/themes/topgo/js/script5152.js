$( function(){

    //javasctipt 
    //load more click function: improved to prevent double click and fire funciton only after content has been loaded (good for slow internet connection)
    //var ppp = 3; // Post per page
    //var cat = $('#more_posts').data('category');
    //var $content = $('#ajax_posts');
    //var $loader = $('#more_posts');
    var cat = $('#more_posts').data('category');
    var ppp = 22;
    var pageNumber = 1;
    
    
    function load_posts(){
        pageNumber++;
        var str = '&cat=' + cat + '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
        $.ajax({
            type: "POST",
            dataType: "html",
            url: headJS.ajaxurl,
            data: str,
            success: function(data){
                var $data = $(data);
                if($data.length){
                    $("#ajax-posts").append($data);
                    $("#more_posts").attr("class",false);
                } else{
                    $("#more_posts").attr("class",true);
                }
            },
            error : function(jqXHR, textStatus, errorThrown) {
                $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }
    
        });
        return false;
    }
    
    $("#more_posts").on("click",function(e){ // When btn is pressed.
		e.preventDefault();
        $("#more_posts").attr("class",true); // Disable the button, temp.
        load_posts();
    });

})
