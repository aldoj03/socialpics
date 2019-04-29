

var url = 'http://proyecto-laravel.com.devel'
window.addEventListener("load", function(){
    $('.btn-like').css('cursor','pointer');
    $('.btn-dislike').css('cursor','pointer');
    

    $(document).on("click", ".btn-like", function(){
        $(this).addClass("btn-dislike").removeClass("btn-like");
        $(this).attr("src" , "img/heart-gray.png");


        $.ajax({
            url: url+'/dislike/'+$(this).data('id'),
            type: 'GET',
            success: function(response){
                if(response.like){
                    console.log(response)
                }
            }
        });

    } );
    
    $(document).on("click", ".btn-dislike", function(){
        $(this).addClass("btn-like").removeClass("btn-dislike");
        $(this).attr("src" , "img/heart-red.png");
        
        $.ajax({
            url: url+'/like/'+$(this).data('id'),
            type: 'GET',
            success: function(response){
                if(response.like){
                    console.log(response)
                }
            }
        });
    } ); 
    
})