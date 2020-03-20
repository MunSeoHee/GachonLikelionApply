<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
    <title>Gachon Likelion</title>
    <meta charset="utf-8">
    <!-- 모바일 뷰포트 -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, 
		maximum-scale=1.0, minimum-scale=1.0">
  <style>
      /* FAQ */
     .faq{border-bottom:0px solid #ddd;margin:1em 0;}
    /*.faq .faqHeader{position:relative;zoom:1}
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
    margin: 10px 0!important;}
.faq .q a:hover, .faq .q a:active, .faq .q a:focus{}
.faq .a{background:#f8f8f8 url("faq1_icon_a.png") no-repeat 40px 10px;padding: 10px 75px 10px 75px;
    font-size: 16px;
    color: #444444;
    line-height: 22px;
    border-top: 1px solid #bdbdbd;
    margin:5px 0 0 0;} */
    p > a:link { color: black; text-decoration: none;}
    p > a:visited { color: black; text-decoration: none;}
    p > a:hover { color: black!important; text-decoration: none!important;}
    .bg {
    border: 0;
    padding: 0; 
    background-color: black!important;
    min-height: 100%;    
		}
     @font-face { font-family: 'GmarketSansBold'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansBold.woff%27') format('woff'); font-weight: normal; font-style: normal; }
        @font-face { font-family: 'yg-jalnan'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_four@1.2/JalnanOTF00.woff%27') format('woff'); font-weight: normal; font-style: normal; }
        ul{
   list-style:none;
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
<body class="bg">
<div class="container-fluid" style="height:100vh">
    <?php 
        include_once "nav.php"; 
        // include_once "servertimecheck.php";
    ?>          

    <div class="row" style="height:50vh">
        <video width="10%" height="10%" id="videobcg" preload="auto" autoplay="true" loop="loop"muted="muted">
            <source src="video1.mp4" >
        </video>
    </div>

    <div class="row">
        <div class="col-sm">      
        </div>
        <div class="col-sm text-center">
        <a href="form.php" class="btn btn-warning text-light">지원하기</a>
        </div>
        <div class="col-sm">      
        </div>
    </div>
    <div class="row bg-white mt-5">
        <div class="container mt-5">
            <div class="row ml-5">
                <div class="" style="font-weight: bold;">
                    <h2 style="font-weight: bold; color:black;">멋쟁이 사자처럼 8기에 대해</h2>
                </div>
            </div>
            <div class="row">   
                <div class="faq container-fluid">
                    <div class="faqHeader">
                        <!--button type="button" class="showAll">답변 모두 여닫기</button-->
                    </div>
                    <ul class="faqBody ml-5 p-0">
                        <li class="article" id="a1">
                            <p class="q row text-body border-bottom pb-3"><a href="#a1" class="text-body" style="font-weight: bold;">01. 회비</a></p>
                            <p class="a container-fluid row bg-light text-muted p-4" style="font-size:90%; line-height:200%;">
                                공식적인 회비는 존재하지 않습니다.<br>
                                그러나 팀프로젝트 및 세션 진행을 하면서 카페, 식비, 스터디룸 대여비 등의 지출이 있을 수 있습니다.<br>
                                해커톤 및 타 대학과의 연합 행사 또는 뒤풀이, 가천대 멋사 자체 행사와 같은 행사 참여에 대한 지출 또한 발생 할 수 있습니다.
                            </p>
                        </li>
                        <li class="article" id="a2">
                            <p class="q row text-body border-bottom pb-3"><a href="#a2" class="text-body" style="font-weight: bold;">02. 전반적인 활동 및 코딩 교육에 대하여</a></p>
                            <p class="a container-fluid row bg-light text-muted p-4" style="font-size:90%; line-height:200%;">
                                8기는 '창업' 위주의 동아리로 진행되는 만큼 많은 팀 프로젝트를 진행할 예정입니다<br>
                                매주 2회의 세션이 진행되며 목요일은 교육 세션을, 토요일은 팀 프로젝트 활동으로 진행합니다<br><br>
                                1년이라는 짧은 기간 동안 기획부터 코딩 교육 및 프로젝트까지 진행되기 때문에 운영진이 아기 사자들에게 모든 것을 일일이 가르치기는 힘든 상황입니다:(<br>
                                따라서 제공되는 강의와 자료를 가지고 적극적으로 스스로 공부하고 배  우려는 의지가 가장 중요할 것이라 생각합니다!<br>
                                학습에 대한 강한 의지와 능동적인 자세의 아기사자 여러분들께 많은 도움을 드릴 수 있도록 운영진들도 열심히 노력하도록 하겠습니다:)
                            </p>
                        </li>
                        <li class="article" id="a3">
                            <p class="q row text-body border-bottom pb-3"><a href="#a3" class="text-body" style="font-weight: bold;">03. 멋쟁이 사자처럼 8기 혜택</a></p>
                            <p class="a container-fluid row bg-light text-muted p-4" style="font-size:90%; line-height:200%;">
                                구글 g suite 계정, 아마존 aws 크레딧 swit Pro 계정이 제공될 예정입니다<br>
                                창업 강의 및 멋쟁이 사자처럼 OB 창업가들의 이야기를 들을 수 있는 자리 또한 마련될 예정입니다<Br>
                                멋쟁이 사자처럼 전국 48개 대학과 함께하는 즐거운 해커톤에 참여 할 수 있으며<br>
                                각종 강의자료 및 아이디어 공유 및 다양한 연합 행사의 기회가 아기사자 여러분들을 기다리고 있습니다! 
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row ml-5">
                <div class="" style="font-weight: bold;">
                    <h2 style="font-weight: bold; color:black;">FAQ</h2>
                </div>
            </div>
            <div class="row">   
                <div class="faq container-fluid">
                    <div class="faqHeader">
                        <!--button type="button" class="showAll">답변 모두 여닫기</button-->
                    </div>
                    <ul class="faqBody ml-5 p-0">
                        <li class="article" id="a1">
                            <p class="q row text-body border-bottom pb-3"><a href="#a1" class="text-body" style="font-weight: bold;">Q. 지원일정은 어떻게 되나요?</a></p>
                            <p class="a container-fluid row bg-light text-muted p-4" style="font-size:90%; line-height:200%;">
                                지원 접수 기간은 3/23(월)부터 3/27(금)까지입니다.<br>
                                ● 3.23 - 3.27 서류접수 기간<br>
                                ● 3.29 서류합격발표<br>
                                ● 4.01 - 4.03 면접<br>
                                ● 4.05 최종 합격 발표<br>
                            </p>
                        </li>
                        <li class="article" id="a2">
                            <p class="q row text-body border-bottom pb-3"><a href="#a2" class="text-body" style="font-weight: bold;">Q. 특별한 지원 자격이 있을까요?</a></p>
                            <p class="a container-fluid row bg-light text-muted p-4" style="font-size:90%; line-height:200%;">
                                특별한 지원 자격은 없습니다.<br>
                                <br>
                                나이와 학년, 전공에 상관없이 모두 지원이 가능합니다.<br>
                                두 학기 동안 진행되는 교육 세션 및 팀 프로젝트 활동 참여와 필수 행사에 참여가 가능한 분들을 모집합니다.<br>
                            </p>
                        </li>
                        <li class="article" id="a3">
                            <p class="q row text-body border-bottom pb-3"><a href="#a3" class="text-body" style="font-weight: bold;">Q. 활동 일정을 알고싶어요</a></p>
                            <p class="a container-fluid row bg-light text-muted p-4" style="font-size:90%; line-height:200%;">
                                매주 목요일엔 오후 6시부터 9시까지 스터디 형태의 교육 세션이 있고<br>
                                매주 토요일엔 오후 3시부터 7시까지 실전 코딩연습 세션이 있을 예정입니다.<br>
                                방학 중에는 팀 프로젝트와 중간발표 등 각종 행사가 진행됩니다.<br>
                                자세한 행사 및 활동 개요는 이후 전파하겠습니다.<br>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="container mt-5">
            <div class="row ml-5">
                <div class="" style="font-weight: bold;">
                    <h2 style="font-weight: bold; color:black;">활동안내</h2>
                </div>
            </div>
            <div class="row">   
                <div class="faq container-fluid">
                    <div class="faqHeader">
                        <!--button type="button" class="showAll">답변 모두 여닫기</button-->
                    </div>
                    <ul class="faqBody ml-5 p-0">
                        <li class="article" id="a1">
                            <p class="q row text-body border-bottom pb-3"><a href="#a1" class="text-body" style="font-weight: bold;">01. 주요 활동 및 일정</a></p>
                            <p class="a container-fluid row bg-light text-muted p-4" style="font-size:90%; line-height:200%;">
                                정규 세션 : 매주 목(오후 6시 ~ 9시), 토(오후 3시 ~ 7시)<br>
                                OT 및 첫 세션 : 4/9 (목) 오후 6시<br>
                                중앙 해커톤 : 9월 말 예정<br>
                                중앙 VC 피칭 : 12월 초 예정<br><br>
                                멋쟁이 사자처럼 8기 활동은 1년 단위로 이루어집니다<br>
                                2주에 1번씩 팀 프로젝트 진행하여 아이디어 회의 및 기획, 간단한 개발을 진행할 예정입니다
                            </p>
                        </li>
                        <li class="article" id="a2">
                            <p class="q row text-body border-bottom pb-3"><a href="#a2" class="text-body" style="font-weight: bold;">02. 활동 규칙</a></p>
                            <p class="a container-fluid row bg-light text-muted p-4" style="font-size:90%; line-height:200%;">
                                1. 모든 회원은 정규 세션 및 중앙 공식 행사에 참여해야 합니다<br>
                                2. 모든 회원은 4회 이상 결석 시 제명되며, 제명당한 회원은 멋쟁이 사자처럼 가천대학교의 활동에 참여가 제한됩니다<br>
                                3. 결석 사유에 대한 인정은 가천대학교 학칙에서 인정하는 결석 사유만 인정합니다<br>
                                4. 병원 방문의 경우 '진단서' 혹은 '진료 확인서'를 운영진에게 확인 시켜 줄 경우, 결석 사유로 인정합니다<br>
                                5. 지각에 대한 패널티가 부가될 수 있습니다
                            </p>
                        </li>
                        <li class="article" id="a3">
                            <p class="q row text-body border-bottom pb-3"><a href="#a3" class="text-body" style="font-weight: bold;">03. 팀 프로젝트에 대하여</a></p>
                            <p class="a container-fluid row bg-light text-muted p-4" style="font-size:90%; line-height:200%;">
                                매주 토요일은 팀 프로젝트를 진행하는 날입니다<br>
                                팀은 2주에 한 번씩 랜덤으로 매칭되며, 함께하는 운영진 또한 매번 변경됩니다<br>
                                2주 동안 팀별로 모여 아이디어 회의 및 기획을 진행하고 기획한 아이디어를 간단한 코딩을 이용해 구체화하는 활동을 진행할 예정입니다<br>
                                목요일에 특별한 스터디 교육이 없으면 목요일에도 팀 프로젝트를 진행 할 수 있습니다
                            </p>
                        </li>
                        <li class="article" id="a4">
                            <p class="q row text-body border-bottom pb-3"><a href="#a4" class="text-body" style="font-weight: bold;">04. 커리큘럼에 대하여</a></p>
                            <p class="a container-fluid row bg-light text-muted p-4" style="font-size:90%; line-height:200%;">
                                기존의 멋쟁이 사자처럼은 코딩 교육 동아리였다면, 이번 8기는 스타트업 사관학교를 지향하고 있습니다<br>
                                코딩 교육과 더불어 간단한 디자인, 아이디어 및 기획, 창업과 관련된 교육도 진행될 예정입니다<br><br>
                                코딩의 경우<br>
                                Python 언어 기반의 프레임워크인 Django를 사용하여 웹서비스를 제작하는 교육을 받게 됩니다<br>
                                html, css, JS 등의 웹 프로그래밍 기초와 git, github, 협업에 관한 내용을 간단히 다루게 되며<br>
                                웹 서비스를 실질적으로 사용 할 수 있도록 aws를 이용한 배포 방식에 대한 수업도 진행될 예정입니다<br>
                                <br>
                                스타트업 사관학교를 지향하는 만큼 아이디어 및 기획과 네트워킹을 중심으로 운영됩니다<br>
                                코딩 교육이 존재는 하지만, 팀 프로젝트가 더욱 중요시 될 것이며<br>
                                아이디어를 실현하기 위한 기본적인 코딩 교육을 제공해드리고, 더 나은 서비스를 개발하기 위한 개개인의 노력이 필요하리라 생각합니다
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        
  </div>
  <footer>
  <div class="row d-flex justify-content-end p-3 container-fluid" style="background-color: black; font-family: none;">
    <div class="text-white text-right">Copyright 2020. GachonLikelion, All Rights Reserved.<br>video by 멋쟁이사자처럼 한국항공대학교</div>
    </div>
</footer>
</div>


</body>

</html>


