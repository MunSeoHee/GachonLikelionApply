<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<!-- 모바일 뷰포트 -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, 
		maximum-scale=1.0, minimum-scale=1.0">
		
		<style>
			.bgimg {
				border: 0;
				padding: 0; 
			
				min-height: 100%;
				background-position: center;
				background-size: cover;
        background-color: black;
			}
			
			@font-face { font-family: 'GmarketSansBold'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansBold.woff') format('woff'); font-weight: normal; font-style: normal; }
			@font-face { font-family: 'yg-jalnan'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_four@1.2/JalnanOTF00.woff') format('woff'); font-weight: normal; font-style: normal; }
			h1{
				color:rgb(255, 255, 255);
				font-family:'GmarketSansBold'; 
        
			}
			p{
				font-size: 90%;
				color:rgb(250, 250, 250);
				font-family: 'yg-jalnan';
        border-bottom: coral;
        border-top: rgba(255, 255, 255, 0);
        border-left:  rgba(255, 255, 255, 0);
        border-right:  rgba(255, 255, 255, 0);;
        border-style: solid;
        border-width: 0.15rem;
      padding-bottom:0.2rem;
      border-radius: 0.5rem;
			}
      
			#exampleFormControlInput1
			{
				margin:0;
			}
		
			.text-warning
			{
				margin:0;
			}
			.hr
			{
				color:#F39926
			}
   
/* 박스 스펠링카운터 */
      .wrap {
    position: relative;
            }
.wrap span {
    position: absolute;
    bottom: 0.5rem;
    right: 0.5rem;
            }

#counter {
  background-color:rgba(245, 163, 163, 0.637);
  border-radius: 0.5rem;
  padding: 0 .5rem 0 .5rem;
  font-size: 0.75rem;
  color: black;
}


/* 박스 스펠링카운터 */
  </style>
  

	<script>
		$(document).ready(function(){ 
			$('#input_text1').keyup(function(){ 
				if ($(this).val().length > $(this).attr('maxlength')) { 
					$(this).val($(this).val().substr(0, $(this).attr('maxlength'))); 
				} 
			}); 
		});
		$(document).ready(function(){ 
			$('#input_text2').keyup(function(){ 
				if ($(this).val().length > $(this).attr('maxlength')) { 
					$(this).val($(this).val().substr(0, $(this).attr('maxlength'))); 
				} 
			}); 
		});
		$(document).ready(function(){ 
			$('#input_text3').keyup(function(){ 
				if ($(this).val().length > $(this).attr('maxlength')) { 
					$(this).val($(this).val().substr(0, $(this).attr('maxlength'))); 
				} 
			}); 
		});


		function check_input(){
 
		if(!document.written.question1.value){
            alert("질문 문항 1을 작성하세요");
            document.written.question1.focus();
            return;
        }
		if(!document.written.question2.value){
            alert("질문 문항 2을 작성하세요");
            document.written.question2.focus();
            return;
        }
		if(!document.written.question3.value){
            alert("질문 문항 3을 작성하세요");
            document.written.question3.focus();
            return;
        }

        if(!document.written.question4.value){
            alert("질문 문항 4을 작성하세요");
            document.written.question4.focus();
            return;
        }

        if(!document.written.question5.value){
            alert("질문 문항 5을 작성하세요");
            document.written.question5.focus();
            return;
        }

        if(!document.written.question6.value){
            alert("질문 문항 6을 작성하세요");
            document.written.question6.focus();
            return;
        }
        if(!document.written.question7.value){
            alert("질문 문항 7을 작성하세요");
            document.written.question7.focus();
            return;
        }
 
        document.written.submit();
    };

// 스펠링카운터 함수   1
$(function(){
$("textarea#input_text1").keyup(function(){
bytesHandler1(this);
});
});

function getTextLength1(str) {
var len = 0;

for (var i = 0; i < str.length; i++) {
len++;
}
return len;
};

function bytesHandler1(obj){
var text = $(obj).val();
$(".bytes1").text(getTextLength1(text));
}


// 스펠링카운터 함수   2
$(function(){
$("textarea#input_text2").keyup(function(){
bytesHandler2(this);
});
});

function getTextLength2(str) {
var len = 0;

for (var i = 0; i < str.length; i++) {
len++;
}
return len;
};

function bytesHandler2(obj){
var text = $(obj).val();
$('.bytes2').text(getTextLength2(text));
}
// 스펠링카운터 함수   3
$(function(){
$("textarea#question3").keyup(function(){
bytesHandler3(this);
});
});

function getTextLength3(str) {
var len = 0;

for (var i = 0; i < str.length; i++) {
len++;
}return len;
};

function bytesHandler3(obj){
var text = $(obj).val();
$('.bytes3').text(getTextLength3(text));
}
// 스펠링카운터 함수   4
$(function(){
$("textarea#question4").keyup(function(){
bytesHandler4(this);
});
});

function getTextLength4(str) {
var len = 0;

for (var i = 0; i < str.length; i++) {
len++;
}return len;};

function bytesHandler4(obj){
var text = $(obj).val();
$('.bytes4').text(getTextLength4(text));
}
// 스펠링카운터 함수  5 
$(function(){
$("textarea#question5").keyup(function(){
bytesHandler5(this);
});
});

function getTextLength5(str) {
var len = 0;

for (var i = 0; i < str.length; i++) {
len++;
}return len;};

function bytesHandler5(obj){
var text = $(obj).val();
$('.bytes5').text(getTextLength5(text));
}

// 스펠링카운터 함수   6
$(function(){
$("textarea#question6").keyup(function(){
bytesHandler6(this);
});
});

function getTextLength6(str) {
var len = 0;

for (var i = 0; i < str.length; i++) {
len++;
}return len;};

function bytesHandler6(obj){
var text = $(obj).val();
$('.bytes6').text(getTextLength6(text));
}



	</script>


	<title>회원가입</title>

	</head>

	<body class="bgimg">
		<!--배경이미지-->
		<div class=" container-fluid">
		<?php 
			include_once "nav.php"; 
			if($name==""){
				echo("
					<script>
						alert('지원서 작성은 로그인 후 해주세요!');
						history.go(-1);
					</script>
				");
				exit;
      }
      $sql = "select * from written where email='$email'";
      include_once "settings.php";
      $result = mysqli_query($con, $sql);
      $res = mysqli_num_rows($result);
      $row = mysqli_fetch_array($result);
    ?>
			<div class="row d-flex justify-content-center">
				
				<div class="col-lg-5 mt-5 ">
          <div class="row d-flex justify-content-center">
            <img src="https://startup.likelion.org/img/logo.png" style="width:80%; text-align: center;">
          </div>
          <div class="row d-flex justify-content-center mb-4 mt-2">	<h1 style="margin-top: 2rem; margin-bottom: 3rem;">멋쟁이 사자처럼 8기</h1>
          </div>
          
					<form name="written" method="post" action="form_insert.php">
						<!--색상 class="text-warning"-->
						<!--이름-->
		
					<!--1번질문-->
						<div class="form-group mb-4 wrap">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>지원동기 (700자 이내)</p></label>
              <textarea name="question1" class="form-control question1" maxlength="700" id="input_text1" rows="6"><?=$row['question1']?></textarea>
              <span id="counter" class="bytes1">0</span>  
            </div>
            
            <!--2번질문-->
            <div class="form-group mb-4 wrap mt-5">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>만들고 싶은 서비스를 적어주세요 (1000자 이내)</p></label>
              <textarea name="question2" class="form-control question2" maxlength="1000" id="input_text2" rows="6" placeholder="ex) 코로나 확진자 안내 서비스 등"><?=$row['question2']?></textarea>
              <span id="counter" class="bytes2">0</span>
            </div>
            
            <!--3번질문-->
            <div class="form-group mb-4 wrap mt-5">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>다뤄본 컴퓨터 언어를 실력 상, 중, 하를 포함하여 모두 적어주세요.<br>또한 디자인에 대한 경험이 있으실 경우, 그에 대한 내용과 다뤄본 디자인 툴을 실력 상, 중, 하를 포함하여 모두 적어주세요</p></label>
              <textarea name="question3" id="question3" class="form-control" maxlength="1000" id="input_text3" rows="6" placeholder="ex) python 하, C 상, html 중, css 중 / 포토샵 상, 프리미어 중 등"><?=$row['question3']?></textarea>
              <span id="counter" class="bytes3">0</span>
            </div>

 <!--4번질문-->
            <div class="form-group mb-4 wrap mt-5">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>멋사에서 활동하게 된다면 멋사를 통해 얻어가고 싶은 것과 팀을 위해 어떤 노력 및 기여를 할 수 있는지 적어주세요 (1000자 이내)</p></label>
              <textarea name="question4" id="question4" class="form-control" maxlength="1000" id="input_text3" rows="6" placeholder=""><?=$row['question4']?></textarea>
              <span id="counter" class="bytes4">0</span>
            </div>
 <!--5번질문-->
            <div class="form-group mb-4 wrap mt-5">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>2020년 한 해 동안 참여하거나 참여할 예정인 동아리, 아르바이트, 대외활동 및 프로젝트, 인턴쉽 프로그램, 공모전 등을 적어주세요</p></label>
              <textarea name="question5" id="question5"  class="form-control" maxlength="1000" id="input_text3" rows="6"  placeholder="ex) 2020년 2학기 졸업 프로젝트 및 p 실무 프로젝트, 화 수 목 저녁 6시 강남 카페 아르바이트 등"><?=$row['question5']?></textarea>
              <span id="counter" class="bytes5">0</span>
            </div>
 <!--6번질문-->
            <div class="form-group mb-4 wrap mt-5">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>가천대학교 멋쟁이 사자처럼 8기는 매주 2회, 목요일 6시 및 토요일 3시 이후에 정규 스터디 및 팀 프로젝트를 진행할 예정입니다. 목요일, 토요일 정기 세션에 참여가 가능하신가요? 해당 요일에 일정이 있거나 일정이 생길 수도 있다면 이에 대한 내용을 적어주세요</p></label>
              <textarea name="question6" id="question6" class="form-control" maxlength="1000" id="input_text3" rows="6" placeholder="ex) 목요일 1~5시 학교 수업, 이후 일정 없음 / 토요일 1~3시 학교 주변 카페 아르바이트 등"><?=$row['question6']?></textarea>
              <span id="counter" class="bytes6">0</span>
            </div>
 <!--7번질문-->

  <div class="form-group mt-5">
    <label for="exampleFormControlSelect1"class="text-warning"><p>면접희망 날짜</p></label>
    <select class="form-control" id="exampleFormControlSelect1" name="question7">
      <option value="4/1" <?php if($row['question7'] == "4/1") echo "SELECTED";?>>4월1일</option>
      <option value="4/2" <?php if($row['question7'] == "4/2") echo "SELECTED";?>>4월2일</option>
      <option value="4/3" <?php if($row['question7'] == "4/3") echo "SELECTED";?>>4월3일</option>
    </select>
    </div>
 <!--8번질문-->
             <div class="form-group mb-4 wrap mt-5">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>깃허브 주소가 있으신 분은 적어주세요 (없더라도 불이익은 없습니다)</p></label>
              <textarea name="question8" id="question8" class="form-control" maxlength="1000" id="input_text3" rows="1" placeholder="https://github.com/닉네임"><?=$row['question8']?></textarea>
            </div>
 <!--그외질문-->
           <label mt-5 mb-5 style="color: white; font-family: 'yg-jalnan'; font-size: 80%;">그 외 포트폴리오 및 만들고 싶은 서비스 기획안을 제출하고 싶으신 분은 아래 메일로 보내주세요<br>nansh9815@likelion.org</label>
           

              <!--제출버튼-->
              <div class ="row">
              <div class="col"></div>
              <div class="col">
                
                <?php
                  if(!$res){
                ?>
              <div class="btn btn-warning text-white btn-lg container-fluid mt-5" onclick="check_input()">제출</div>
              <?php
                  }else{
              ?>
                <div class="btn btn-warning text-white btn-lg container-fluid mt-5" onclick="check_input()">수정하기</div>
              <?php }?>
              </div>
              <div class="col"></div>
              </div>
            </div>
</div>
        
					</form>	
      
          
				
			</div>

	</div><!--배경사진-->
  </body>
  <footer>
         <?php
          include_once 'footer.html';
         ?>     
</footer>



			
</html>