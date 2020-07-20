/*
$(function() {
    var nav = $('nav');
    //表示位置
    var navTop = nav.offset().top+100;
    //ナビゲーションの高さ（シャドウの分だけ足してます）
    var navHeight = nav.height()+10;
    var showFlag = false;
    nav.css('top', -navHeight+'px');
    //ナビゲーションの位置まできたら表示
    $(window).scroll(function () {
        var winTop = $(this).scrollTop();
        if (winTop >= navTop) {
            if (showFlag == false) {
                showFlag = true;
                nav
                    .addClass('fixed')
                    .stop().animate({'top' : '0px'}, 300);
            }
        } else if (winTop <= navTop) {
            if (showFlag) {
                showFlag = false;
                nav.stop().animate({'top' : -navHeight+'px'}, 300, function(){
                    nav.removeClass('fixed');
                });
            }
        }
    });
});
*/
/*$(function(){
var contactBtn=$('#contact-link');
contactBtn.hide();
 
//◇ボタンの表示設定
$(window).scroll(function(){
  if($(this).scrollTop()>100){
    //---- 画面を80pxスクロールしたら、ボタンを表示する
    contactBtn.fadeIn();
  }else{
    //---- 画面が80pxより上なら、ボタンを表示しない
    contactBtn.fadeOut();
  } 
});
 
// ◇ボタンをクリックしたら、スクロールして上に戻る
topBtn.click(function(){
  $('body,html').animate({
  scrollTop: 0},300);
  return false;
});

});*/

$(function() {
     $("#menu-trigger").click(function() {
           $("#overlay").fadeIn();
 });
     $("#close,#overlay li").click(function() {
           $("#overlay").fadeOut();
 });
});

/*
$(function(){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight){
                $(this).addClass('scrollin');
            }
        });
    });
});
*/
