$(document).ready(function () {
    $(".preloader").fadeOut();

    // AUDIO PART //
    var audio = new Audio("./assets/sound/reading-song.m4a"); 
    audio.volume = 0.35;
    var volume = $(".volume");

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
        $("html,body").css("overflow","hidden");
        audio.play();  
        
    });

    $(document).on("click",".showcontent",function(event){
        var content = $(this).data("target");
        $(this).hide();
        $("[data-content='"+content+"']").fadeIn();
        
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
        
        audio.pause(); 
        volume.removeClass("muted");
    });

    $(document).on("click",".volume",function(event){ 
        if(volume.hasClass("muted")){
            audio.play(); 
            volume.removeClass("muted")
        }else{
            audio.pause(); 
            volume.removeClass("muted").addClass("muted");
        }
    });
    

});
