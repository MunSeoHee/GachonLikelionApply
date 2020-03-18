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
				background-image: url(\lion.jpg);
				min-height: 100%;
				background-position: center;
				background-size: cover;
			}
			
			@font-face { font-family: 'GmarketSansBold'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansBold.woff') format('woff'); font-weight: normal; font-style: normal; }
			@font-face { font-family: 'yg-jalnan'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_four@1.2/JalnanOTF00.woff') format('woff'); font-weight: normal; font-style: normal; }
			h1{
				color:rgba(243, 212, 73, 0.904);
				font-family:'GmarketSansBold'; 
			}
			p{
				font-size: 120%;
				color:rgba(243, 212, 73, 0.904);
				font-family: 'yg-jalnan'; 
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
				color:rgb(243, 212, 73);
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
  background:rgba(248, 73, 73, 0.5);
  border-radius: 0.5rem;
  padding: 0 .5rem 0 .5rem;
  font-size: 0.75rem;
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
        if(!document.written.name.value){
            alert("이름을 입력하세요");
            document.written.name.focus();
            return;
        }
        if(!document.written.major.value){
            alert("학과를 입력하세요");
            document.written.major.focus();
            return;
        }
		if(!document.written.year.value){
            alert("입학년도를 입력하세요");
            document.written.year.focus();
            return;
        }
		if(!document.written.gender.value){
            alert("성별을 입력하세요");
            document.written.gender.focus();
            return;
        }
		if(!document.written.phone.value){
            alert("전화번호를 입력하세요");
            document.written.phone.focus();
            return;
        }
		if(!document.written.dgree.value){
            alert("학년을 입력하세요");
            document.written.dgree.focus();
            return;
        }
		if(!document.written.question1.value){
            alert("질문 문항 1을 작성하세요");
            document.written.question1.focus();
            return;
        }
		if(!document.getElementById('question2').value){
            alert("질문 문항 2을 작성하세요");
            document.getElementById('question2').focus();
            return;
        }
		if(!document.getElementById('question3').value){
            alert("질문 문항 3을 작성하세요");
            document.getElementById('question3').focus();
            return;
        }
        document.written.submit();
    };

// 스펠링카운터 함수   1
$(function(){
$("textarea#question1").keyup(function(){
bytesHandler(this);
});
});

function getTextLength(str) {
var len = 0;

for (var i = 0; i < str.length; i++) {
if (escape(str.charAt(i)).length == 6) {
len++;
}
len++;
}
return len;
}

function bytesHandler(obj){
var text = $(obj).val();
$(".byte").text(getTextLength(text));
}
// 스펠링카운터 함수   2
$(function(){
$("textarea#question2").keyup(function(){
bytesHandler(this);
});
});

function getTextLength(str) {
var len = 0;

for (var i = 0; i < str.length; i++) {
if (escape(str.charAt(i)).length == 6) {
len++;
}
len++;
}
return len;
}

function bytesHandler(obj){
var text = $(obj).val();
$('.bytes').text(getTextLength(text));
}
// 스펠링카운터 함수   3
$(function(){
$("textarea#question3").keyup(function(){
bytesHandler(this);
});
});

function getTextLength(str) {
var len = 0;

for (var i = 0; i < str.length; i++) {
if (escape(str.charAt(i)).length == 6) {
len++;
}
len++;
}
return len;
}

function bytesHandler(obj){
var text = $(obj).val();
$('.bytes').text(getTextLength(text));
}
// 스펠링카운터 함수   4
$(function(){
$("textarea#question4").keyup(function(){
bytesHandler(this);
});
});

function getTextLength(str) {
var len = 0;

for (var i = 0; i < str.length; i++) {
if (escape(str.charAt(i)).length == 6) {
len++;
}
len++;
}
return len;
}

function bytesHandler(obj){
var text = $(obj).val();
$('.bytes').text(getTextLength(text));
}
// 스펠링카운터 함수  5 
$(function(){
$("textarea#question5").keyup(function(){
bytesHandler(this);
});
});

function getTextLength(str) {
var len = 0;

for (var i = 0; i < str.length; i++) {
if (escape(str.charAt(i)).length == 6) {
len++;
}
len++;
}
return len;
}

function bytesHandler(obj){
var text = $(obj).val();
$('.bytes').text(getTextLength(text));
}

// 스펠링카운터 함수   6
$(function(){
$("textarea#question6").keyup(function(){
bytesHandler(this);
});
});

function getTextLength(str) {
var len = 0;

for (var i = 0; i < str.length; i++) {
if (escape(str.charAt(i)).length == 6) {
len++;
}
len++;
}
return len;
}

function bytesHandler(obj){
var text = $(obj).val();
$('.bytes').text(getTextLength(text));
}
// 스펠링카운터 함수   8
$(function(){
$("textarea#question8").keyup(function(){
bytesHandler(this);
});
});

function getTextLength(str) {
var len = 0;

for (var i = 0; i < str.length; i++) {
if (escape(str.charAt(i)).length == 6) {
len++;
}
len++;
}
return len;
}

function bytesHandler(obj){
var text = $(obj).val();
$('.bytes').text(getTextLength(text));
}
// 스펠링카운터 함수  



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
		?>
			<div class="row d-flex justify-content-center">
				
				<div class="col-lg-4">
					<h1>가천대학교 멋쟁이 사자처럼</h1>
					<hr></hr>
					<form name="written" method="post" action="form_insert.php">
						<!--색상 class="text-warning"-->
						<!--이름-->
		
					<!--1번질문-->
						<div class="form-group mb-4 wrap">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>지원동기 (1000자)</p></label>
              <textarea name="question1" class="form-control" id="question1"  maxlength="1000" id="input_text1" rows="3"></textarea>
              <span id="counter" class="bytes">0</span>  
            </div>
            
            <!--2번질문-->
            <div class="form-group mb-4 wrap">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>만들고 싶은 서비스</p></label>
              <textarea name="question2" id="question2" class="form-control" maxlength="1000" id="input_text2" rows="3"></textarea>
              <span id="counter" class="bytes">0</span>
            </div>
            
            <!--3번질문-->
            <div class="form-group mb-4 wrap">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>현재 다뤄 본 프로그래밍 언어 / 실력(상중하)</p></label>
              <textarea name="question3" id="question3" class="form-control" maxlength="1000" id="input_text3" rows="3" placeholder="EX) C/상, JAVA/중, Python/하"></textarea>
              <span id="counter" class="bytes">0</span>
            </div>

 <!--4번질문-->
            <div class="form-group mb-4 wrap">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>현재 다뤄 본 디자인툴 / 실력(상중하)</p></label>
              <textarea name="question4" id="question4" class="form-control" maxlength="1000" id="input_text3" rows="3" placeholder="EX) 포토샵/하, 프리미어/상"></textarea>
              <span id="counter" class="bytes">0</span>
            </div>
 <!--5번질문-->
            <div class="form-group mb-4 wrap">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>현재 활동중인 중앙동아리, 아르바이트 대외활동 및 프로젝트는 무엇이 있는지?</p></label>
              <textarea name="question5" id="question5"  class="form-control" maxlength="1000" id="input_text3" rows="3" placeholder="              중동: 어플레이
              아르바이트: 주말 아르바이트13~15
              격전: 토요일오전 9~"></textarea>
              <span id="counter" class="bytes">0</span>
            </div>
 <!--6번질문-->
            <div class="form-group mb-4 wrap">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>목요일 5시이후, 토요일 3시이후 일정이 있나요?</p></label>
              <textarea name="question6" id="question6" class="form-control" maxlength="1000" id="input_text3" rows="3" placeholder="목x, 토 알바13~15시"></textarea>
              <span id="counter" class="bytes">0</span>
            </div>
 <!--7번질문-->

  <div class="form-group mb-4">
    <label for="exampleFormControlSelect1"class="text-warning"><p>면접희망 날짜</p></label>
    <select name="gender" class="form-control" id="exampleFormControlSelect1">
      <option value="1">4월1일</option>
      <option value="2">4월2일</option>
      <option value="2">4월3일</option>
    </select>
    </div>
 <!--8번질문-->
             <div class="form-group mb-4 wrap">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>깃허브 주소</p></label>
              <textarea name="question8" id="question8" class="form-control" maxlength="1000" id="input_text3" rows="1" placeholder="https://github.com/닉네임"></textarea>
              <span id="counter" class="bytes">0</span>
            </div>
 <!--그외질문-->
            <p>그 외 포트폴리오는 아래 메일로 보네주세요 <br>nansh9815@likelion.org
            </p>
<!--박스 카운팅-->

            <ul class="handler-ul">

              <li><p class="bytes">0</p></li>
              
              <li><textarea class="content"></textarea></li>
              
              </ul>
<!--박스 이쁜거-->
              <div class="wrap">
                <textarea id="content" class="content"1000"></textarea>
                <span id="counter"class="bytes">0</span>
            </div>
<!--박스 설명-->
            <div class="form-group mb-4 wrap">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>목요일 5시이후, 토요일 3시이후 일정이 있나요?</p></label>
              <textarea name="quest3" id="question3" class="form-control  content counter"  maxlength="1000" id="input_text3" rows="3" placeholder="목x, 토 알바13~15시"></textarea>
              <span id="counter" class="bytes">0</span>
            </div>



              <!--제출버튼-->
              <div class ="row">
              <div class="col"></div>
              <div class="col">
              <div class="btn btn-secondary btn-lg" onclick="check_input()">제출</div>
              </div>
              <div class="col"></div>
              </div>
            </div>
</div>
        
					</form>	
      
          
				
			</div>

	</div><!--배경사진-->
	</body>



			
</html>