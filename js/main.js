// SPとTabのとき
// Menuをクリックしたら画面が暗くなり右からサイドバーがスライドしてくる。
// バツ印を押したらサイドバーが右にスライドして画面が明るくなる。

jQuery(function($){

    //Menuをクリックしたら
    $(".js-sidebar-menu").on("click",function(){
        //画面が暗くなる
        // $(".l-body__overlay").removeClass("display","none");
        $(".l-body__overlay").toggleClass("is-open");
        //bodyが固定される
        $("#body").css("position","fixed");
        //右からサイドバーがスライドしてくる
        $(".l-sidebar").toggleClass("is-open");
    })
    //バツをクリックしたら
    $(".js-icon__close").on("click",function(){
        //サイドバーが戻り
        $(".l-body__overlay").removeClass("is-open");
        //bodyの固定がなくなる
        $("#body").css("position","");
        //画面が明るくなる
        $(".l-sidebar").removeClass("is-open");

    })
    // 画面幅が変更されたときに実行させたい処理内容
    $(window).resize(function(){
        $(".l-body__overlay").removeClass("is-open");
        $("#body").css("position","");
        $(".l-sidebar").removeClass("is-open");

    })

    //画面幅がタブレット以上のとき、js-single__listのクラスc-margin__leftを外す
    $(window).resize(function(){
        if ($(window).width()< 499 ){
            $(".js-single__list").removeClass("c-margin--left50");
            $(".js-single__list02").removeClass("c-margin--left68");
        } else {
            $(".js-single__list").addClass("c-margin--left50");
            $(".js-single__list02").addClass("c-margin--left68");

        }
    })
})
