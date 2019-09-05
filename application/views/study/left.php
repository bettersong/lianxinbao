<div class="B_main_left" style="height:470px">
  <div class="BL_head"> <span>学习资料</span> </div>
  <ul id="accordion" class="accordion">
    <li>
      <div class="link ripple-effect ripple-red">十九大精神<span class="menu_more">☰</span></div>
      <ul class="submenu">
        <li><a href="/study/index&type1=sjdjs&type2=sjdbg">十九大报告</a></li>
        <li><a href="/study/index&type1=sjdjs&type2=sjdzywj">十九大重要文件</a></li>
        <li><a href="">十九大报告解读</a></li>
        <li><a href="">十九届一中全会公报（二中、三中）</a></li>
      </ul>
    </li>
    <li>
      <div class="link ripple-effect ripple-red">政策法规<span class="menu_more">☰</span></div>
      <ul class="submenu">
        <li><a href="/study/index&type1=zcfg&type2=dnfgzd">党内法规制度</a></li>
        <li><a href="/study/index&type1=zcfg&type2=gjflfg">国家法律法规</a></li>
        <li><a href="">党务工作实务</a></li>
      </ul>
    </li>
    <li>
      <div class="link ripple-effect ripple-red">政治理论<span class="menu_more">☰</span></div>
      <ul class="submenu">
        <li><a href="">马克思相关（《马克思是对的》《不朽的马克思》）</a></li>
      </ul>
    </li>
    <li>
      <div class="link ripple-effect ripple-red">文化素养<span class="menu_more">☰</span></div>
      <ul class="submenu">
        <li><a href="">中国传统文化</a></li>
        <li><a href="">儒家文化</a></li>
        <li><a href="">国学</a></li>
        <li><a href="">传统礼法</a></li>
      </ul>
    </li>
    <li>
      <div class="link ripple-effect ripple-red">红色书院</div>
    </li>
    <li>
      <div class="link ripple-effect ripple-red">红色影院</div>
    </li>
  </ul>
</div>
<script>

//自动高亮左侧当前的菜单
var type1 = "<?=$_GET['type1']?>";///<,?=$controller.'/'.$action?>
var type2 = "<?=$_GET['type2']?>";
//alert(type1);
$("ul.submenu li a").each(function(index, element) {
	 
	var href = $(this).attr("href");
	if( href.indexOf(type1) >= 0 && href.indexOf(type2) >= 0 ){
		  $(this).addClass("active");
		  $(this).parents("ul.submenu").css("display","block");
		  return false;
	}
    
	
	
	if(type1==""){
		$(this).addClass("active");//$(".ripple-effect a").eq(0).addClass("active");//如果没有匹配的子菜单，则默认高亮第一个
		return false;
	}
	else{
		//var class = $(this).attr("class"));
		if( $(this).hasClass(type1) ){
			  $(this).addClass("active");
			  $(this).next("ul.submenu").css("display","block");
			  //alert("22");
			  $(this).next("ul.submenu").find("a").each(function(index, element) {
				  //alert("111");
                var href = $(this).attr("href");
				if( href.indexOf(type2) >= 0 ){
					  $(this).addClass("active");
					  return false;
				}
				 
            });
			  return false;
		}
		 
	}
});
</script>