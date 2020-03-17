<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
    <meta charset="utf-8">
  <style>
      /* FAQ */
.faq{border-bottom:0px solid #ddd;margin:1em 0;}
.faq .faqHeader{position:relative;zoom:1}
.faq .faqHeader .showAll{position:absolute;bottom:0;right:0;border:0;padding:0;overflow:visible;background:none;cursor:pointer}
.faq .faqBody{margin:0;padding:0}
.faq .faqBody .article{list-style:none}
.faq .q{margin:}
.faq .q a{display:block;text-align:left; 
    background:url("faq1_icon_q.png") no-repeat 0 0;
    padding:0 0 0 35px;
    font-size:18px;
    color:#5e5e5e;
    font-weight:bold;
    line-height: 27px;
    cursor:pointer;
    margin: 10px 0; !important}
.faq .q a:hover, .faq .q a:active, .faq .q a:focus{}
.faq .a{background:#f8f8f8 url("faq1_icon_a.png") no-repeat 40px 10px;padding: 10px 75px 10px 75px;
    font-size: 16px;
    color: #444444;
    line-height: 22px;
    border-top: 1px solid #bdbdbd;
    margin:5px 0 0 0;}
    .bgimg {
    border: 0;
    padding: 0; 
    background-color: black;
    min-height: 100%;    
		}
     @font-face { font-family: 'GmarketSansBold'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansBold.woff%27') format('woff'); font-weight: normal; font-style: normal; }
        @font-face { font-family: 'yg-jalnan'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_four@1.2/JalnanOTF00.woff%27') format('woff'); font-weight: normal; font-style: normal; }
        h2,label,h1{
            color:rgba(243, 212, 73, 0.904);
            font-family:'GmarketSansBold'; 
        }
        p{
            font-size: 120%;
            color:rgba(243, 212, 73, 0.904);
            font-family: 'yg-jalnan'; 
        }
        #videobcg
        {
          position:absolute;
          top:0px;
          left:0px;
          width:100%;
          min-height:50%;    
          
          z-index:-1000;

          overflow:hidden;
        }
              </style> 
              <script>
                  jQuery(function($){
    // Frequently Asked Question
    var article = $('.faq>.faqBody>.article');
    article.addClass('hide');
    article.find('.a').hide();
    article.eq(0).removeClass('hide');
    article.eq(0).find('.a').show();
    $('.faq>.faqBody>.article>.q>a').click(function(){
        var myArticle = $(this).parents('.article:first');
        if(myArticle.hasClass('hide')){
            article.addClass('hide').removeClass('show');
            article.find('.a').slideUp(100);
            myArticle.removeClass('hide').addClass('show');
            myArticle.find('.a').slideDown(100);
        } else {
            myArticle.removeClass('show').addClass('hide');
            myArticle.find('.a').slideUp(100);
        }
        return false;
    });
    $('.faq>.faqHeader>.showAll').click(function(){
        var hidden = $('.faq>.faqBody>.article.hide').length;
        if(hidden > 0){
            article.removeClass('hide').addClass('show');
            article.find('.a').slideDown(100);
        } else {
            article.removeClass('show').addClass('hide');
            article.find('.a').slideUp(100);
        }
    });
});
              </script>
       
</head>
<body class="bgimg">
<div class="container-fluid" style="height:100vh">
<?php 
      include_once "nav.php"; 
?>          

<div class="row" style="height:50vh">
  <video width="10%" height="10%" id="videobcg" preload="auto" autoplay="true" loop="loop"muted="muted">
    <source src="video1.mp4" >
  </video>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm">      
    </div>
    <div class="col-sm text-center">
      <a href="form.php" class="btn btn-warning text-light">지원하기</a>
    </div>
    <div class="col-sm">      
    </div>
  </div>
  <div class="row">
  <div class="pl-md-5 py-3 ml-md-5 mt-5 ml-4" style="font-weight: bold;">
        <h2 style="font-weight: bold; color:#707070;">FAQ</h2>
        <div class="border-bottom mr-5" style="max-width: 600px; height: 10px;"></div>
    </div>
<div class="faq">
    <div class="faqHeader">
        <!--button type="button" class="showAll">답변 모두 여닫기</button-->
    </div>
    <ul class="faqBody">
        <li class="article" id="a1">
            <p class="q"><a href="#a1">지원일정을 알려주세요</a></p>
            <p class="a">
                지원 접수 기간은 3/23(월) 부터 3/27(금)까지입니다.<br>
                ●3.23 - 3.27 서류접수기간<br>
                ●3.29 서류합격발표<br>
                ●4. 1 - 4. 3 면접<br>
                ●4. 5 최종 합격 발표<br>
            </p>
        </li>
        <li class="article" id="a2">
            <p class="q"><a href="#a2">지원자격을 알고싶어요</a></p>
            <p class="a">
                특별한 지원 자격은 없습니다.<br>
                <br>
                나이와 학년, 전공에 상관없이 모두 지원이 가능합니다.<br>
                두 학기 동안 진행되는 교육 세션 및 팀 프로젝트 활동참여와 필수 행사에 참가가 가능한 분들을 모집합니다.<br>
            </p>
        </li>
        <li class="article" id="a3">
            <p class="q"><a href="#a3">활동 일정을 알고싶어요</a></p>
            <p class="a">
                매주 목요일엔 오후 6시 부터 9시 까지 스터디형태의 교육 세션이 있고<br>
                매주 토요일엔 오후 3시 부터 7시 까지 실전 코딩연습 세션이 있을 예정입니다.<br>
                방학 중에는 팀프로젝트와 중간 발표 등 각종 행사가 진행됩니다.<br>
                자세한 행사 및 활동 개요는 이후 전파하겠습니다.<br>
            </p>
        </li>
    </ul>
</div>
  </div>
</div>

</body>
</html>


