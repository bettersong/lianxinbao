
<div class="B_main_left">
    <div class="BL_head"> <span>大数据监督</span> </div>
    <!--<div class="BL_one active ripple-effect ripple-red"><a href="/bigData/shiyongjiandu">实用监督功能</a></div>-->
    <!--<div class="BL_two ripple-effect ripple-red"><a href="/bigData/shujudiaoyong">数据调用功能</a></div>-->
    <ul id="accordion" class="accordion">
    <?php foreach($gongBaoYearArr as $value){?>
      <li>
        <div class="link ripple-effect ripple-red <?=$value['gongbaoYear']?>"><?=$value['gongbaoYear']?>年中国党内统计公报<span class="menu_more">☰</span></div>
        <ul class="submenu">
          <li><a href="dangneigongbao_detail&year=<?=$value['gongbaoYear']?>&type=dydwqk">党员队伍情况</a></li>
          <li><a href="dangneigongbao_detail&year=<?=$value['gongbaoYear']?>&type=fzdyqk">发展党员情况</a></li>
          <li><a href="dangneigongbao_detail&year=<?=$value['gongbaoYear']?>&type=dnbzqk">党内表彰情况</a></li>
          <li><a href="dangneigongbao_detail&year=<?=$value['gongbaoYear']?>&type=sqrdqk">申请入党情况</a></li>
          <li><a href="dangneigongbao_detail&year=<?=$value['gongbaoYear']?>&type=dzzqk">党组织情况</a></li>
        </ul>
      </li>
    <?php }?>
    </ul>
    
<script>

//自动高亮左侧当前的菜单
var year = "<?=$_GET['year']?>";///<,?=$controller.'/'.$action?>
var type = "<?=$_GET['type']?>";
//alert(year);
$(".ripple-effect").each(function(index, element) {
	 
    if(year==""){
		$(this).addClass("active");//$(".ripple-effect a").eq(0).addClass("active");//如果没有匹配的子菜单，则默认高亮第一个
		return false;
	}
	else{
		//var class = $(this).attr("class"));
		if( $(this).hasClass(year) ){
			  $(this).addClass("active");
			  $(this).next("ul.submenu").css("display","block");
			  //alert("22");
			  $(this).next("ul.submenu").find("a").each(function(index, element) {
				  //alert("111");
                var href = $(this).attr("href");
				if( href.indexOf(type) >= 0 ){
					  $(this).addClass("active");
					  return false;
				}
				 
            });
			  return false;
		}
		 
	}
});
</script>