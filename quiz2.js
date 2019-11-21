// Question-1

score=0;
var added1, ques1=0;
var added2, ques2=0;
var added3; ques3 = 0;
var added4; ques4 = 0;
var added5; ques5 = 0;
var added6; ques6 = 0;
var added7; ques7 = 0;
var added8; ques8 = 0;
var added9; ques9 = 0;
var added10; ques10 = 0;
var t1 = document.getElementsByClassName('ques1');
for(var i=0;i<t1.length;i++)
{
    t1[i].addEventListener('click',q1,false);
}
function q1(e)
{
    console.log($(this).html());
    if($(this).html()=="True"){ //Line 2
      ques1=1; //Line 3
      score=score+1;
      added1=true;
      console.log(score);
    }
    else{
      if(added1){ //Line 4
      ques1=0; //Line 5
      score=score-1;
      added1=false;
      }
      console.log(score);

    }
    var ele = document.getElementById("q1");
    ele.style.background = "rgb(129, 164, 230)";
    var s1 = document.getElementsByClassName('ques1');
    for(var i=0;i<t1.length;i++)
    {
        s1[i].style.background = "white";
    }
    this.style.background = "rgb(154, 181, 231)";
}

// Question-2
var t2 = document.getElementsByClassName('ques2');
for(var i=0;i<t2.length;i++)
{
    t2[i].addEventListener('click',q2,false);
}
function q2(e)
{
  if($(this).html()=="One"){
    ques2=1;
    score=score+1;
    added2=true;
    console.log(score);
  }
  else{
    if(added2){
    ques2=0;
    score=score-1;
    added2=false;
    }
    console.log(score);
  }
    var ele = document.getElementById("q2");
    ele.style.background = "rgb(129, 164, 230)";
    var s2 = document.getElementsByClassName('ques2');
    for(var i=0;i<t2.length;i++)
    {
        s2[i].style.background = "white";
    }
    this.style.background = "rgb(154, 181, 231)";
}

// Question-3
var t3 = document.getElementsByClassName('ques3');
for(var i=0;i<t3.length;i++)
{
    t3[i].addEventListener('click',q3,false);
}
function q3(e)
{
  if($(this).html()=="No"){
    ques3=1;
    score=score+1;
    added3=true;
    console.log(score);
  }
  else{
    if(added3){
    ques3=0;
    score=score-1;
    added3=false;}
    console.log(score);
  }
    var ele = document.getElementById("q3");
    ele.style.background = "rgb(129, 164, 230)";
    var s3 = document.getElementsByClassName('ques3');
    for(var i=0;i<t3.length;i++)
    {
        s3[i].style.background = "white";
    }
    this.style.background = "rgb(154, 181, 231)";
}

// Question-4
var t4 = document.getElementsByClassName('ques4');
for(var i=0;i<t4.length;i++)
{
    t4[i].addEventListener('click',q4,false);
}
function q4(e)
{
  if($(this).html()=="Yes"){
    ques4=1;
    score=score+1;
    added4=true;
    console.log(score);
  }
  else{
    if(added4){
    ques4=0;
    score=score-1;
    added4=false;}
    console.log(score);
  }
    var ele = document.getElementById("q4");
    ele.style.background = "rgb(129, 164, 230)";
    var s4 = document.getElementsByClassName('ques4');
    for(var i=0;i<t4.length;i++)
    {
        s4[i].style.background = "white";
    }
    this.style.background = "rgb(154, 181, 231)";
}

// Question-5
var t5 = document.getElementsByClassName('ques5');
for(var i=0;i<t5.length;i++)
{
    t5[i].addEventListener('click',q5,false);
}
function q5(e)
{
  if($(this).html()=="K-means clustering algorithm"){
    ques5=1;
    score=score+1;
    added5=true;
    console.log(score);
  }
  else{
    if(added5){
    ques5=0;
    score=score-1;
    added5=false;}
    console.log(score);
  }
    var ele = document.getElementById("q5");
    ele.style.background = "rgb(129, 164, 230)";
    var s5 = document.getElementsByClassName('ques5');
    for(var i=0;i<t5.length;i++)
    {
        s5[i].style.background = "white";
    }
    this.style.background = "rgb(154, 181, 231)";
}

// Question-6
var t6 = document.getElementsByClassName('ques6');
for(var i=0;i<t6.length;i++)
{
    t6[i].addEventListener('click',q6,false);
}
function q6(e)
{
  if($(this).html()=="1,2 and 4"){
    ques6=1;
    score=score+1;
    added6=true;
    console.log(score);
  }
  else{
    if(added6){
    ques6=0;
    score=score-1;
    added6=false;}
    console.log(score);
  }
    var ele = document.getElementById("q6");
    ele.style.background = "rgb(129, 164, 230)";
    var s6 = document.getElementsByClassName('ques6');
    for(var i=0;i<t6.length;i++)
    {
        s6[i].style.background = "white";
    }
    this.style.background = "rgb(154, 181, 231)";
}

// Question-7
var t7 = document.getElementsByClassName('ques7');
for(var i=0;i<t7.length;i++)
{
    t7[i].addEventListener('click',q7,false);
}
function q7(e)
{
  if($(this).html()=="Imputation with Expectation Maximization algorithm"){
    ques7=1;
    score=score+1;
    added7=true;
    console.log(score);
  }
  else{
    if(added7){
    ques7=0;
    score=score-1;
    added7=false;}
    console.log(score);
  }
    var ele = document.getElementById("q7");
    ele.style.background = "rgb(129, 164, 230)";
    var s7 = document.getElementsByClassName('ques7');
    for(var i=0;i<t7.length;i++)
    {
        s7[i].style.background = "white";
    }
    this.style.background = "rgb(154, 181, 231)";
}

// Question-8
var t8 = document.getElementsByClassName('ques8');
for(var i=0;i<t8.length;i++)
{
    t8[i].addEventListener('click',q8,false);
}
function q8(e)
{
  if($(this).html()=="10"){
    ques8=1;
    score=score+1;
    added8=true;
    console.log(score);
  }
  else{
    if(added8){
    ques8=0;
    score=score-1;
    added8=false;}
    console.log(score);
  }
    var ele = document.getElementById("q8");
    ele.style.background = "rgb(129, 164, 230)";
    var s8 = document.getElementsByClassName('ques8');
    for(var i=0;i<t8.length;i++)
    {
        s8[i].style.background = "white";
    }
    this.style.background = "rgb(154, 181, 231)";
}

// Question-9
var t9 = document.getElementsByClassName('ques9');
for(var i=0;i<t9.length;i++)
{
    t9[i].addEventListener('click',q9,false);
}
function q9(e)
{
  if($(this).html()=="1 only"){
    ques9=1;
    score=score+1;
    added9=true;
    console.log(score);
  }
  else{
    if(added9){
    ques9=0;
    score=score-1;
    added9=false;}
    console.log(score);
  }
    var ele = document.getElementById("q9");
    ele.style.background = "rgb(129, 164, 230)";
    var s9 = document.getElementsByClassName('ques9');
    for(var i=0;i<t9.length;i++)
    {
        s9[i].style.background = "white";
    }
    this.style.background = "rgb(154, 181, 231)";
}

// Question-10
var t10 = document.getElementsByClassName('ques10');
for(var i=0;i<t10.length;i++)
{
    t10[i].addEventListener('click',q10,false);
}
function q10(e)
{
  if($(this).html()=="In distance calculation it will give the same weights for all features"){
    ques10=1;
    score=score+1;
    added10=true;
    console.log(score);
  }
  else{
    if(added10){
    ques10=0;
    score=score-1;
    added10=false;}
    console.log(score);
  }
    var ele = document.getElementById("q10");
    ele.style.background = "rgb(129, 164, 230)";
    var s10 = document.getElementsByClassName('ques10');
    for(var i=0;i<t10.length;i++)
    {
        s10[i].style.background = "white";
    }
    this.style.background = "rgb(154, 181, 231)";
}




$('#submit_button').on('click',function(e){
  e.preventDefault();
  $('.scorenow').show();
  $('#scorehere').html(score);
  // $.get('/tutscorner/Scoreboard.php/?score='+score,function(){
    // window.location.href = "/tutscorener/Classification_Quiz/?score="+score;
  // });
  // $.post('/tutscorner/Scoreboard.php/',score,function(){
  //   console.log('post successful', score);
  // });

   $.ajax({
    type: "POST",
    url: '/tutscorner/Classification_Quiz.php',
    data: {score: score},

    success: function (data) {
                  console.log(parseInt(data));
                  // if( !('error' in obj) ) {
                  //     yourVariable = obj.result;
                  // }
                  // else {
                  //     console.log(obj.error);
                  // }

                  // For question 1
                  if(ques1==1)
                  document.getElementById("q1").style.background = "rgb(0, 255, 0)";
                  else
                  document.getElementById("q1").style.background = "rgb(255, 0, 0)";

                  // For question 2
                  if(ques2==1)
                  document.getElementById("q2").style.background = "rgb(0, 255, 0)";
                  else
                  document.getElementById("q2").style.background = "rgb(255, 0, 0)";

                  if(ques3==1)
                  document.getElementById("q3").style.background = "rgb(0, 255, 0)";
                  else
                  document.getElementById("q3").style.background = "rgb(255, 0, 0)";

                  if(ques4==1)
                  document.getElementById("q4").style.background = "rgb(0, 255, 0)";
                  else
                  document.getElementById("q4").style.background = "rgb(255, 0, 0)";


                  if(ques5==1)
                  document.getElementById("q5").style.background = "rgb(0, 255, 0)";
                  else
                  document.getElementById("q5").style.background = "rgb(255, 0, 0)";

                  if(ques6==1)
                  document.getElementById("q6").style.background = "rgb(0, 255, 0)";
                  else
                  document.getElementById("q6").style.background = "rgb(255, 0, 0)";


                  if(ques7==1)
                  document.getElementById("q7").style.background = "rgb(0, 255, 0)";
                  else
                  document.getElementById("q7").style.background = "rgb(255, 0, 0)";


                  if(ques8==1)
                  document.getElementById("q8").style.background = "rgb(0, 255, 0)";
                  else
                  document.getElementById("q8").style.background = "rgb(255, 0, 0)";


                  if(ques9==1)
                  document.getElementById("q9").style.background = "rgb(0, 255, 0)";
                  else
                  document.getElementById("q9").style.background = "rgb(255, 0, 0)";


                  if(ques10==1)
                  document.getElementById("q10").style.background = "rgb(0, 255, 0)";
                  else
                  document.getElementById("q10").style.background = "rgb(255, 0, 0)";

                  $('#submit_button').hide();
                  $('#scoretotal').html(score+'/10');


            }
    });
});
