<?php  session_start(); //开启session

//手机访问，则跳转到手机页面
if(!$ism){
	//echo $_SERVER["SERVER_NAME"];
	header("Location: http://".$_SERVER["SERVER_NAME"].":8082/index/index");
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
       <?php include APP_PATH."/application/views/header_m.php"; //包含公共的头部 ?>


       <!--中间部分main-->
       <div class="main">
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
                    <div class="m_inner">廉政要闻</div>
                    <div class="m_inner_right"><a href="">更多》</a></div>
                </div>
                <div class="right_text_top">

                    <a href="">6月7日下午，廉政活动************廉心宝廉心教育工程廉政活动************
                    廉政活动************
                    </a>

                </div>
                <div class="right_text_mid">
                    <ul>
                        <li><a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                            <div class="hot"></div>
                            <span>06-01</span>
                        </li>
                        <li>
                            <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                            <div class="hot"></div>
                            <span>06-01</span>
                        </li>
                        <li>
                            <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                            <div class="hot"></div>
                            <span>06-01</span>
                        </li>
                        <li>
                            <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                            <div class="hot"></div>
                            <span>06-01</span>
                        </li>
                        <li>
                            <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                            <div class="hot"></div>
                            <span>06-01</span>
                        </li>
                        <li>
                            <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                            <div class="hot"></div>
                            <span>06-01</span>
                        </li>
                        <li>
                            <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                            <div class="hot"></div>
                            <span>06-01</span>
                        </li>
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
                        <div class="mid_one_head_right"><a href="">更多》</a></div>
                        </div>

                        <div class="mid_one_head_center">
                            <ul>
                                <li>
                                    <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                                    <span>[06-01]</span>
                                </li>
                                <li>
                                    <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                                    <span>[06-01]</span>
                                </li>
                                <li>
                                    <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                                    <span>[06-01]</span>
                                </li>
                                <li>
                                    <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                                    <span>[06-01]</span>
                                </li>
                                <li>
                                    <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                                    <span>[06-01]</span>
                                </li>
                                <li>
                                    <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                                    <span>[06-01]</span>
                                </li>
                                <li>
                                    <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                                    <span>[06-01]</span>
                                </li>
                                <li>
                                    <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                                    <span>[06-01]</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mid_two">
                    <div class="mid_two_head">
                        <div class="mid_two_head_left">
                        <span>廉心讲堂</span>
                        <div class="mid_one_head_right"><a href="">更多》</a></div>
                        </div>
                        <div class="mid_two_head_center">
                            <ul>
                                <li>
                                    <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                                    <span>[06-01]</span>
                                </li>
                                <li>
                                    <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                                    <span>[06-01]</span>
                                </li>
                                <li>
                                    <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                                    <span>[06-01]</span>
                                </li>
                                <li>
                                    <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                                    <span>[06-01]</span>
                                </li>
                                <li>
                                    <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                                    <span>[06-01]</span>
                                </li>
                                <li>
                                    <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                                    <span>[06-01]</span>
                                </li>
                                <li>
                                    <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                                    <span>[06-01]</span>
                                </li>
                                <li>
                                    <a href="">廉心宝廉心教育工程，廉心宝廉心教育工程。</a>
                                    <span>[06-01]</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mid_three">
                    <div class="mid_three_head"><span>公告栏</span></div>
                    <p>7月31日，在三星电子公布2018年第二季度报后，苹果也公布了其第二季度（自然季度即2018年4月1日至6月30日，以下同）财报。在这篇文章中，镝数将带你拨开迷雾，用独特的数据角度看苹果与三星财报后的故事。</p>
                </div>
            </div>
            <div class="bottom">
                 <div class="bottom_head"><span>图片资讯</span></div>
                 <div class="bottom_main">
                     <ul>
                         <li>
                             <div class="bottom_img">
                                 <img src="/public/images/xijinping.png" alt="">
                             </div>
                             <span>八论全面从严治党系列</span>
                         </li>
                         <li>
                             <div class="bottom_img">
                                 <img src="/public/images/xijinping.png" alt="">
                             </div>
                             <span>八论全面从严治党系列</span>
                         </li>
                         <li>
                             <div class="bottom_img">
                                 <img src="/public/images/xijinping.png" alt="">
                             </div>
                             <span>八论全面从严治党系列</span>
                         </li>
                         <li>
                             <div class="bottom_img">
                                 <img src="/public/images/xijinping.png" alt="">
                             </div>
                             <span>八论全面从严治党系列</span>
                         </li>
                     </ul>
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

