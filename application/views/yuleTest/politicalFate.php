<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>廉心宝</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" href="/public/css/style<?=$_m?>.css?v=<?=rand(1,999999) ?>" type="text/css" />
<link rel="stylesheet" href="/public/css/question.css?v=<?=rand(1,999999) ?>" type="text/css" />
<link rel="stylesheet" href="/public/css/Others<?=$_m?>.css?v=<?=rand(1,999999) ?>" type="text/css" />
<script src="/public/js/jquery-1.8.3.min.js"></script>
<script src="/public/js/QuestionJson.js?v=<?=rand(1,999999) ?>"></script>
<script src="/public/js/questionScore.js?v=<?=rand(1,999999) ?>"></script>
</head>
<body>
<!--头部-->
<?php include APP_PATH."/application/views/header".$_m.".php"; //包含公共的头部 ?>

<!--中间部分main-->
<div class="B_main">
  <?php include APP_PATH."/application/views/yuleTest/left".$_m.".php"; //包含本栏目的公共左侧 ?>
  <div class="B_main_right">
    <div class="BR_head">
      <div class="BR_head_left"></div>
      <span>你当前的位置：廉政娱乐测试-职业前程（安全指数）测试</span> </div>
    <div class="right2_main">
    	<div class="col-md-10">
    <div class="content">
      <div style="width: 100%;height:auto;display: inline-block;margin-top:10px;">
        <div style="width: 100%;">
          <div style="width: 100%;margin: 0px auto">
            <div style="width: 100%;height:90px;border-bottom:none;">
              <div class="middle-top">
                <div class="middle-top-left pull-left" style="color:#FFF;">
                  <div class="text-center pull-left progress-left title-left">
                    <div class="progress pull-left" style="background:#5cb85c;opacity:0.9; width: 0px;height:20px;position:absolute;left: 0px;"></div>
                    <div class="pro-text" style="left: 0px;color: #609E53;position:absolute;top:0px;width:100%;"> 进度<span class="progres"></span></div>
                  </div>
                  <div class="pull-left title-right"> 
                    <!--已做答的数量和考题总数--> 
                    当前第<span class="questioned"></span>题/共<span class="question_sum"></span>题 </div>
                </div>
                
              </div>
              <div style="width: 100%;height: 50px;font-size:15px;color: #000;line-height: 50px;padding-left: 20px;">
                [单选题] </div>
            </div>
            <div style="width: 100%;height:auto;display: inline-block;border-bottom:1px dashed #ffeacb;">
              <div style="width: 90%;height: 90%;margin:0px auto;padding:5px 20px 0px 20px;"> 
                <!--试题区域-->
                <ul class="list-unstyled question" id="" name="">
                  <li class="question_title"></li>
                </ul>
                <!--考题的操作区域-->
                <div class="operation" style="margin-top: 20px;">
                  
                  <div class="text-right" style="margin-right: 20px;">
                    <div class="form-group" style="color: #FFF;">
                      <button class="btn btn-success" id="submitQuestions">提交试卷</button>
                      <button class="btn btn-info" id="nextQuestion">下一题</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div style="width: 100%;height:auto;display: inline-block;border-top:none;">
              <div style="width: 100%;padding:20px;">
                <div class="panel-default">
                  <div class="panel-heading" class="panel-heading" id="closeCard" style="color: #DCE4EC;font-size: 15px;display: none;background: none;">
                  <span>收起答题卡</span> <span class="glyphicon glyphicon-chevron-up"></span> </div>
                <div class="panel-heading" id="openCard" style="font-size: 15px;"> <span style="color: #094;">答题卡</span> <span class="glyphicon glyphicon-chevron-down"></span> </div>
                <div id="answerCard" style="display: ;">
                  <div class="panel-body form-horizontal" style="padding: 0px;">
                    <ul class="list-unstyled">
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
