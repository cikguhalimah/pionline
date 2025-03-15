$(document).ready(function () {
    $(".preloader").fadeOut();
    // $(document).on("click",".act",function(event){
    //     event.stopPropagation(); // Prevent click from bubbling up
    //     var act = $(this).data("act");
    //     var target=$(this).data("target");
        
    //     if(act == "loadlist"){        
    //         $("[target='"+target+"']").fadeIn();    
    //     }
    // });
    // $(document).on("mouseleave",".act",function(event){
    //     $(this).stop();    
    //     var act = $(this).data("act");
    //     var target=$(this).data("target");

    //     if(act == "loadlist"){    
    //         $("[target='"+target+"']").fadeOut();    
    //     }
    // });


    function activateClass(stat,targetclass){        
        if(stat===false){ $("."+targetclass).removeClass("actived");}
        if(stat===true){  $("."+targetclass).addClass("actived"); }
    }

    $(document).on("click",".btnsound",function(event){
        var clickSound = new Audio('assets/sound/btn1.mp3'); 
        clickSound.play();
    });
    $(document).on("click",".act",function(event){
        
        event.stopPropagation(); // Prevent click from bubbling up
        $(this).addClass("actived");
        var act = $(this).data("act");
        var target=$(this).data("target");
        $("[target='"+target+"']").fadeIn(); 
         
    });

    $(document).on("click", function (event) {
        if (!$(event.target).closest(".act, .modallist .modal_content").length) {            
            $(".modallist").fadeOut(); // Hide the div if clicked outside
            activateClass(false,"act");
        }
    });
    $(document).on("click",".close_modal",function(event){  $(".modallist").fadeOut(); activateClass(false,"act"); });
    $(document).on("keydown",function(event){ if (event.key === "Escape") { $(".modallist").fadeOut();} activateClass(false,"act"); });



    // CONTENT NAVIGATION
    // Open content
    $(document).on("click",".browse",function(event){
        var type = $(this).data("browse");
        $("[data-content='main']").hide();
        $("[data-content='"+type+"']").fadeIn();        
    });

    $(document).on("click",".showcontent",function(event){
        var content = $(this).data("target");
        $(this).hide();
        $("[data-content='"+content+"']").fadeIn();
        $("html,body").css("overflow","hidden");
    });

    $(document).on("click",".nextpage",function(event){
        var target = $(this).data("target");
        var cat = $(this).data("cat");

        $("[data-"+cat+"]").hide();
        $("[data-contentpage='"+target+"']").fadeIn();
    });

    // close content
    $(document).on("click",".close_content",function(event){ 
        var target=$(this).data("target");  $("[data-content='"+target+"']").fadeOut();  $("[data-content='main']").fadeIn();  
        $("html,body").css("overflow","");
    });

});
