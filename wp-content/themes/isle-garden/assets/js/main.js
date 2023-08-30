$(window).on("load", function () {
    $("#loading").delay(0).fadeOut("fast"); //ローディング画面を0秒（0ms）待機してからフェードアウト
});
  
$(function (){
    function setFooter() {
        let heightDevice = document.documentElement.clientHeight;
        let header = $('#header').outerHeight();
        let footer = $("#footer").outerHeight();
        let mainContainer = $("#main").outerHeight();
        if(mainContainer + header + footer < heightDevice){
            $("#footer").addClass('position');
        }
        else{
            $("#footer").removeClass('position');
        }
    }
    setFooter();
    $(window).resize(function(){
        setFooter();
    });
    $("#header .icon-open-menu-mobile").click(function (){
        if ($(this).hasClass('fa-bars')){
            $("#header .nav-mobile").css({height: '200px' });
            $(this).addClass('fa-close');
            $(this).removeClass('fa-bars');
            if ($(window).scrollTop() <=1 ){
                $("#header").addClass('bg-white')
            }
        } else {
            $("#header .nav-mobile").css({height: 0});
            $(this).removeClass('fa-close');
            $(this).addClass('fa-bars');
            if ($(window).scrollTop() <=1 ){
                $("#header").removeClass('bg-white')
            }
        }


    });
    $(".close-menu-mobile").click(function (){
        $("#header .nav-mobile").css({left: '-100%'})
    });

    $(window).scroll(function (){
        if($(window).scrollTop() > 1){
            $("#header").removeClass('bg-blur')

            $("#header").addClass('bg-white')
        } else {
            $("#header").removeClass('bg-white')

            $("#header").addClass('bg-blur')

        }
    });


    $(window).on( 'scroll' , function(){
        if($(window).scrollTop() > 500){
            $("#back-to-top").fadeIn(200);
        } else{
            $("#back-to-top").fadeOut(200);
        }
    });

    $(document).on("click",'#back-to-top a',function() {
        $('html, body').animate({ scrollTop:0 },'slow');
        return false;
    });

});

