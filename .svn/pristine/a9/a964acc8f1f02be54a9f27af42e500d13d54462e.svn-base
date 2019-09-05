var questions= QuestionJosn;
	var itemList=["A","B","C","D"];//选项
	var activeQuestion=0; //当前操作的考题编号
	var questioned = 0; //
	var checkQues = []; //已做答的题的集合
	//展示考卷信息
    function showQuestion(id){
    $(".questioned").text(id+1);
    questioned = (id+1)/questions.length
    if(activeQuestion!=undefined){
        $("#ques"+activeQuestion).removeClass("question_id").addClass("active_question_id");
    }
    activeQuestion = id;
    $(".question").find(".question_info").remove();
    var question = questions[id];
    $(".question_title").html("<strong>第 "+(id+1)+" 题 、</strong>"+question.questionTitle);
    var items = question.questionItems.split(";");
    var item="";
    for(var i=0;i<items.length;i++){
        item ="<li class='question_info' onclick='clickTrim(this)' id='item"
                +i+"'><input type='radio' name='item' value='"+itemList[i]+"'>&nbsp;"+itemList[i]+"."+items[i]+"</li>";
        $(".question").append(item);
    }
    $(".question").attr("id","question"+id);
    $("#ques"+id).removeClass("active_question_id").addClass("question_id");
    for(var i=0;i<checkQues.length;i++){
        if(checkQues[i].id==id){
            $("#"+checkQues[i].item).find("input").prop("checked","checked");
            $("#"+checkQues[i].item).addClass("clickTrim");
            $("#ques"+activeQuestion).removeClass("question_id").addClass("clickQue");
        }
    }
    progress();
}
/*答题卡*/
function answerCard(){
    $(".question_sum").text(questions.length);
    for(var i=0;i<questions.length;i++){
        var questionId ="<li id='ques"+i+"'onclick='saveQuestionState("+i+")' class='questionId'>"+(i+1)+"</li>";
        $("#answerCard ul").append(questionId);
    }
}

/*选中考题*/
var Question;
var m=0;
function clickTrim(source){
    var id = source.id;
    $("#"+id).find("input").prop("checked","checked");
    $("#"+id).addClass("clickTrim");
    $("#ques"+activeQuestion).removeClass("question_id").addClass("clickQue");
    var ques =0;
    for(var i=0;i<checkQues.length;i++){
       if( checkQues[i].id==activeQuestion&&checkQues[i].item!=id){
           ques = checkQues[i].id;
           checkQues[i].item = id;//获取当前考题的选项ID
           checkQues[i].answer =$("#"+id).find("input[name=item]:checked").val();//获取当前考题的选项值
           return(checkQues[i].answer);
       }
    }
    if(checkQues.length==0||Question!=activeQuestion&&activeQuestion!=ques){
        var check ={};
        check.id=activeQuestion;//获取当前考题的编号
        check.item = id;//获取当前考题的选项ID
        check.answer =$("#"+id).find("input[name=item]:checked").val();//获取当前考题的选项值
        checkQues.push(check);
    }
    $(".question_info").each(function(){
        var otherId =$(this).attr("id");
        if(otherId!=id){
            $("#"+otherId).find("input").prop("checked",false);
            $("#"+otherId).removeClass("clickTrim");
        }
    })
    Question = activeQuestion;
    //console.log(Question);
    
    if(check.answer==QuestionJosn[activeQuestion].questionAnswer){
            m++;
            console.log(m);
            }
}
//console.log(m);
/*设置进度条*/
function progress(){
    var prog = ($(".active_question_id").length+1)/questions.length;
    var pro = $(".progress").parent().width() * prog;
    $(".progres").text((prog*100).toString().substr(0,5)+"%")
    $(".progress").animate({
        width: pro
    }, 1000);
}

/*保存考题状态 已做答的状态*/
function saveQuestionState(clickId){
    showQuestion(clickId)
}

$(function(){
    $(".middle-top-left").width($(".middle-top").width()-$(".middle-top-right").width())
    $(".progress-left").width($(".middle-top-left").width()-200);
    progress();
    answerCard();
    showQuestion(0);
    /*alert(QuestionJosn.length);*/
    var str = '';
    /*答题卡的切换*/
    $("#openCard").click(function(){
        $("#closeCard").show();
        $("#answerCard").slideDown();
        $(this).hide();
    })
    $("#closeCard").click(function(){
        $("#openCard").show();
        $("#answerCard").slideUp();
        $(this).hide();
    })

    
    //进入下一题
    $("#nextQuestion").click(function(i){
        if((activeQuestion+1)!=questions.length){
            var answerNum=0;

        //check.answer =$("#"+id).find("input[name=item]:checked").val();//获取当前考题的选项值  
        console.log(QuestionJosn[activeQuestion].questionAnswer);
        //console.log(check.answer);
        //console.log(activeQuestion);
        showQuestion(activeQuestion+1);
        } 
        else alert("已经是最后一题了！");
        showQuestion(activeQuestion)
    })
    //提交试卷
    $("#submitQuestions").click(function(i){
        /*alert(JSON.stringify(checkQues));*/
        if((activeQuestion+1)!=questions.length){
            var answerNum=0;
        alert("【未答完，请继续做题】已做答："+($(".clickQue").length)+"/"+(questions.length-($(".clickQue").length)));
    }else if(m<6){alert("加油哦,你的得分是："+m*10+"分");}
     else if(6<m<=9){alert("成绩比较理想，得分为："+m*10+"分")}
     else if(m==10){alert("太棒了,全部答对了！")}
    })
})