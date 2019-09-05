// if (typeof trueName == "undefined" || trueName == null || trueName == "") {
//   $(".header-login ul").eq(0).css("display","inline-block");
//   $(".header-login ul").eq(1).css("display","none");
// }
// else{
//   $(".header-login ul").eq(0).css("display","none");
//   $(".header-login ul").eq(1).css("display","inline-block");
//   console.log(trueName);
// }
// //   //退出登录
// $("#logout").click(function () {
//   $.ajax({
//     async: false,
//     data: {
//       "userName": userName,
//       "newPassword": newPassword
//     },
//     type: "POST",
//     dataType: 'json',
//     url: "<?=CURRENT_DIR?>/change_password_check.php",
//     success: function(data) {
//       alert("修改密码成功,请重新登录");
//       window.location.href = '/login/index';
//     },
//     error:function (data) {
//       // body...
//     }
//   });
//   alert(trueName+"被注销了");
// });

//点击个人中心时，判断是否登录
// $("#personalCenter").click(function () {
//   if (typeof trueName == "undefined" || trueName == null || trueName == "") {
//     window.location.href = "/login/index";
//   }
//   else{
//     window.location.href = "/userCenter/index";
//   }

// });

//动态固定顶部元素
var top_menu = $("#menu").offset().top;
$(window).scroll(function() {
  if($(window).scrollTop() > top_menu){
  	$("#menu").css({"position":"fixed","top":"25px","z-index":"99999"});//开始固定
  }else{
  	$("#menu").css({"position":"static"});//释放固定
  }
});

// //返回顶部
// /*var timer = null;
// backTop.onclick = function back(){
// cancelAnimationFrame(timer);
// timer = requestAnimationFrame(function fn(){
// var oTop = document.body.scrollTop || document.documentElement.scrollTop;
// if(oTop > 0){
// document.body.scrollTop = document.documentElement.scrollTop = oTop - 30;
// timer = requestAnimationFrame(fn);
// }else{
// cancelAnimationFrame(timer);
// }
// });
// };
// */
// //二级菜单
$(function(){
  $(".nav>li").hover(function(){
      $(this).children('ul').slideDown('400', function() {

      });('slow', function() {

      });(300);
  },function(){
      $(this).children('ul').slideUp('fast', function() {

      });('slow', function() {

      });(300);
  })
});
//获取时间显示
//var oTime=document.getElementById("time");
// var d = new Date()
//oTime.innerHTML=(Date());
// console.log(d.getHours());


//点击效果
$(document).ready(function() {
  $('.ripple-effect').rkmd_rippleEffect();

  //
  



});

(function($) {
  $.fn.rkmd_rippleEffect = function() {
    var btn, self, ripple, size, rippleX, rippleY, eWidth, eHeight;

    btn = $(this).not('[disabled], .disabled');

    btn.on('mousedown', function(e) {
      self = $(this);


      if(e.button === 2) {
        return false;
      }

      if(self.find('.ripple').length === 0) {
        self.prepend('<span class="ripple"></span>');
      }
      ripple = self.find('.ripple');
      ripple.removeClass('animated');

      eWidth = self.outerWidth();
      eHeight = self.outerHeight();
      size = Math.max(eWidth, eHeight);
      ripple.css({'width': size, 'height': size});

      rippleX = parseInt(e.pageX - self.offset().left) - (size / 2)-20;
      rippleY = parseInt(e.pageY - self.offset().top) - (size / 2);

      ripple.css({ 'top': rippleY +'px', 'left': rippleX +'px' }).addClass('animated');

      setTimeout(function() {
        ripple.remove();
      }, 800);

    });
  };
}(jQuery));


