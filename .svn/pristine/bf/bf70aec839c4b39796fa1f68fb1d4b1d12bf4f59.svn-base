<?php  session_start(); //开启session


//手机访问，则跳转到手机页面
if($ism){
	//echo $_SERVER["SERVER_NAME"];
	header("Location: http://".$_SERVER["SERVER_NAME"].":8082/index/index_m");
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>廉心宝</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="/public/css/style<?=$_m?>.css?v=<?=rand(1,999999) ?>" type="text/css" />
    <link rel="stylesheet" href="/public/css/banner<?=$_m?>.css?v=<?=rand(1,999999) ?>" type="text/css" />
</head>
<body>
<!--头部-->
       <?php include APP_PATH."/application/views/header".$_m.".php"; //包含公共的头部 ?>


       <!--中间部分main-->
       <div class="main">
            <div class="m_top_title">
                 <span class="span_left">廉政头条</span>
                 <span class="span_right">不负党中央重托 &nbsp;打开工作新局面</span>
            </div>
            <div class="m_top">
            <div class="m_banner">
             <div class="banner" id="b04">
    <ul>
        <li class="slider-item"><a href="#"><img src="/public/images/lunbo1.png" alt=""><span class="slider-title"><em>廉政为民廉政为民廉政为民廉政为民</em></span></a></li>
        <li class="slider-item"><a href="#"><img src="/public/images/lunbo2.png" alt=""><span class="slider-title"><em>中华人民共和国第十三届全国人民代表大会</em></span></a></li>
        <li class="slider-item"><a href="#"><img src="/public/images/lunbo3.png" alt=""><span class="slider-title"><em>李总理李总理李总理李总理</em></span></a></li>
        <li class="slider-item"><a href="#"><img src="/public/images/lunbo4.png" alt=""><span class="slider-title"><em>会议会议会议会议会议会议</em></span></a></li>
        <li class="slider-item"><a href="#"><img src="/public/images/lunbo6.png" alt=""><span class="slider-title"><em>国务院国务院国务院国务院</em></span></a></li>
    </ul>
    <div class="progress"></div>
    <a href="javascript:void(0);" class="unslider-arrow04 prev"><img class="arrow" id="al" src="/public/images/arrowl.png" alt="prev"></a>
    <a href="javascript:void(0);" class="unslider-arrow04 next"><img class="arrow" id="ar" src="/public/images/arrowr.png" alt="next"></a>
</div>

            </div>
            <div class="m_top_right">
                <div class="m_top_right_title">
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;恢复重建之初，在党中央的领导下，中央纪委严格履行党章赋予的职责，一方面，推动拨乱反正，全面平反冤假错案，落实各项政策，审查林彪、“四人帮”两个反革命集团&nbsp;&nbsp;<a href="">[详情]</a></p>
                </div>

                <div class="right_text_mid">
                    <div class="mid_hot">
                        <span>热点关注</span>
                    </div>
                    <ul>
                       <?php foreach( $news_rdgz as $index => $value){?>
                       		 <li><a href="/lianzhengNews/detailText&type=rdgz&id=<?=$value['lzInfoId']?>" target="_blank"><?=$value['lzInfoTitle']?></a>
                                <?php if($index<3)echo '<div class="hot"></div>';//显示热点图标?>
                                <span><?=$value['lzInfoTime']?></span>
                            </li>
                       <?php }?>
                         
                        <div style="float:right;margin:-5px 0 0"><a href="/lianzhengNews/catloglistImg&type=rdgz">更多》</a></div>
                    </ul>
                    
                </div>
            </div>
            </div>
            <div class="top_img">
                <div class="top_img_inner"></div>
            </div>
            <div class="mid">
                <div class="mid_one">
                    <div class="mid_one_head">
                        <div class="mid_one_head_left">
                        <span>廉心沙龙</span>
                        <div class="mid_one_head_right"><a href="/lianxinshalong/catloglistVideo&type=lzgkk">更多》</a></div>
                        </div>

                        <div class="mid_one_head_center">
                            <ul>
                              <?php foreach( $shalongArr as $index => $value){?>
                                  <li><a href="/lianxinshalong/detailVideo&type=lzgkk&id=<?=$value['lianxinshalongId']?>" target="_blank"><?=$value['lianxinshalongTitle']?></a>
                                    <span class="pushtime"><?=$value['lianxinshalongTime']?></span>
                                  </li>
                               <?php }?>
                                 
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mid_two">
                    <div class="mid_two_head">
                        <div class="mid_two_head_left">
                        <span>廉心讲堂</span>
                        <div class="mid_one_head_right"><a href="/lianxinjiangtang/expertAppearance">更多》</a></div>
                        </div>
                        <div class="mid_two_head_center">
                            <ul>
                              <?php foreach( $jiangtangArr as $index => $value){?>
                                  <li><a href="/lianxinjiangtang/detailVideo&type=jszjxt&id=<?=$value['jtVideoPushId']?>" target="_blank"><?=$value['jtVideoPushTitle']?></a>
                                    <span class="pushtime"><?=$value['jtVideoPushTime']?></span>
                                  </li>
                               <?php }?>
                                 
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mid_three">
                   <div class="mid_three_main">
                    <div style="position: absolute;bottom: 12px;left: 9px;font-size: 12px;"><a href="#">更多》</a></div>
                    <ul>
                        <li>
                            <div class="mid_three_li">
                                <i></i><p>7月25日，中央第二巡视组向中国</p>
                            </div>
                            <span>[2018-08-26]</span>
                        </li>
                        <li>
                            <div class="mid_three_li">
                                <i></i><p>7月25日，中央第二巡视组向中国</p>
                            </div>
                            <span>[2018-08-26]</span>
                        </li>
                        <li>
                            <div class="mid_three_li">
                                <i></i><p>7月25日，中央第二巡视组向中国</p>
                            </div>
                            <span>[2018-08-26]</span>
                        </li>
                        <li>
                            <div class="mid_three_li">
                                <i></i><p>7月25日，中央第二巡视组向中国</p>
                            </div>
                            <span>[2018-08-26]</span>
                        </li>
                        <li>
                            <div class="mid_three_li">
                                <i></i><p>7月25日，中央第二巡视组向中国</p>
                            </div>
                            <span>[2018-08-26]</span>
                        </li>
                        <li style="border:none">
                            <div class="mid_three_li">
                                <i></i><p>7月25日，中央第二巡视组向中国</p>
                            </div>
                            <span>[2018-08-26]</span>
                        </li>
                    </ul>
                   </div>
                </div>
            </div>
            <div class="bottom">
                 <div class="bottom_left">
                     <a href="/study/shijiuda" class="bottom_left_more">更多>></a>
                     <div class="bottom_left_ul">
                         <ul>
                             <li><a href="">十九大精神</a></li>
                             <li><a href="">政策法规</a></li>
                             <li><a href="">政治理论</a></li>
                             <li><a href="">文化素养</a></li>
                             <li><a href="">红色书院</a></li>
                             <li><a href="">红色影院</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="bottom_right">

                      <div class="bottom_right_title">
                          <span>廉心先锋</span>
                          <a href="/lianxinxianfeng/catloglistVideo&type=xfgs">更多》</a>
                      </div>
                      <div class="bottom_right_main">
                       <p>【王传喜：用“公心”赢“民心”】王传喜，山东兰陵县卞庄街道代村社区党委书记、村委会主任。他十九年如一日，190多本工作笔记，记录了山东兰陵县卞庄街道.....</p>
                       <ul>
                              <?php foreach( $xianfengArr as $index => $value){?>
                                  <li><a href="/lianxinxianfeng/detailVideo&type=xfgs&id=<?=$value['xianfengPushId']?>" target="_blank"><?=$value['xianfengPushTitle']?></a>
                                    <span class="pushtime"><?=$value['xianfengPushTime']?></span>
                                  </li>
                               <?php }?>
                                 
                            </ul>
                      </div>
                 </div>
            </div>

       </div>
       <div class="backTop" id="backTop"></div>
       <script src="/public/js/unslider.min.js"></script>
<script>
//轮播图
$(document).ready(function(e) {
    var progress = $(".progress"),li_width = $("#b04 li").length;
    var unslider04 = $('#b04').unslider({
        dots: true,
        complete:function(index){
            progress.animate({"width":(100/li_width)*(index+1)+"%"});
        }
    }),

    data04 = unslider04.data('unslider');
    $('.unslider-arrow04').click(function() {
        var fn = this.className.split(' ')[1];
        data04[fn]();
    });
});
</script>

