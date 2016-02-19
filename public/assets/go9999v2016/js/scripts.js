
/*
$(document).ready(function(){
    $(".news_title").children().hover(function(){
        $(this).animate({
            opacity:1
        },200);
        $(this).siblings().animate({
            opacity:0.7
        },200);
        $(".news_main ul").hide().eq($(this).index()).show();
    });
});
*/



$(document).ready(function(){
    var index=0;
    var play=null;
    $(".news_title").children().mouseover(function(){
        clearInterval(play);
        index=$(this).index();
        $(this).animate({
            opacity:1
        },200);
        $(this).siblings().animate({
            opacity:0.7
        },200);

        $(".news_main ul").eq(index).siblings().hide();
        $(".news_main ul").eq(index).fadeIn();

    }).mouseout(function(){
        autoplay();
    });
    function autoplay(){
        play=setInterval(function(){
            index++
            if(index>1){index=0;}
            $(".news_title").children().eq(index).animate({
                opacity:1
            },200);
            $(".news_title").children().eq(index).siblings().animate({
                opacity:0.7
            },200);
            $(".news_main ul").eq(index).siblings().hide();
            $(".news_main ul").eq(index).fadeIn();

        },2000)
    }
    autoplay();
});