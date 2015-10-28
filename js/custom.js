$(document).ready(function(){

    var height = $(document).height();
    $('#user_section').css("height", height);


    $(".folder").mouseover(function(){

    	$(this).find(".folder_img").stop().animate({ marginTop: "-5px" }, 200);
        

    });
    $(".folder").mouseout(function(){


    	$(this).find(".folder_img").stop().animate({ marginTop: "5px" }, 200);

    });
    $(".file").mouseover(function(){


    	$(this).find(".file_img").stop().animate({ marginTop: "-5px" }, 200);

    });
    $(".file").mouseout(function(){


    	$(this).find(".file_img").stop().animate({ marginTop: "5px" }, 200);
         
    });


});