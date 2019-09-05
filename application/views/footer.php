<div class="bottom_banner">
  <div class="bottom_banner_inner"></div>
</div>
<div class="footer"> <span>廉心宝--廉心教育工程</span>
  <div class="footer_ask">
    <p>© 2018 江西廉心宝文化有限责任公司.  赣ICP备 XXXXXXXX号-XX</p>
  </div>
</div>
<script src="/public/js/main.js?v=<?=rand(1,999999) ?>"></script>
<script>
//自动高亮左侧当前的菜单
var type = "<?=$_GET['type']!="" ? $_GET['type'] : $action?>".toLowerCase();///<,?=$controller.'/'.$action?>
//alert(type);
$(".ripple-effect a").each(function(index, element) {
    if(type==""){
		$(this).addClass("active");//$(".ripple-effect a").eq(0).addClass("active");//如果没有匹配的子菜单，则默认高亮第一个
		return false;
	}
	else{
		href = $(this).attr("href").toLowerCase();
		if( href.indexOf(type) >= 0 ){
			  $(this).addClass("active");
			  return false;
		}
	}
});
</script>

