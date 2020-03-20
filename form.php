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
if (escape(str.charAt(i)).length == 6) {
len++;
}
len++;
}
return len;
}

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
return len;
}

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
if (escape(str.charAt(i)).length == 6) {
len++;
}
len++;
}
return len;
}

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
if (escape(str.charAt(i)).length == 6) {
len++;
}
len++;
}
return len;
}

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
if (escape(str.charAt(i)).length == 6) {
len++;
}
len++;
}
return len;
}

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
if (escape(str.charAt(i)).length == 6) {
len++;
}
len++;
}
return len;
}

function bytesHandler6(obj){
var text = $(obj).val();
$('.bytes6').text(getTextLength6(text));
}
// 스펠링카운터 함수   8
$(function(){
$("textarea#question8").keyup(function(){
bytesHandler8(this);
});
});

function getTextLength8(str) {
var len = 0;

for (var i = 0; i < str.length; i++) {
if (escape(str.charAt(i)).length == 6) {
len++;
}
len++;
}
return len;
}

function bytesHandler8(obj){
var text = $(obj).val();
$('.bytes8').text(getTextLength8(text));
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
              <label for="exampleFormControlTextarea1"class="text-warning"><p>지원동기 (1000자)</p></label>
              <textarea name="question1" class="form-control question1" maxlength="1000" id="input_text1" rows="6"><?=$row['question1']?></textarea>
              <span id="counter" class="bytes1">0</span>  
            </div>
            
            <!--2번질문-->
            <div class="form-group mb-4 wrap mt-5">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>만들고 싶은 서비스</p></label>
              <textarea name="question2" class="form-control question2" maxlength="1000" id="input_text2" rows="6"><?=$row['question2']?></textarea>
              <span id="counter" class="bytes2">0</span>
            </div>
            
            <!--3번질문-->
            <div class="form-group mb-4 wrap mt-5">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>현재 다뤄 본 프로그래밍 언어 / 실력(상중하)</p></label>
              <textarea name="question3" id="question3" class="form-control" maxlength="1000" id="input_text3" rows="6" placeholder="EX) C/상, JAVA/중, Python/하">
              <?=$row['question3']?>
              </textarea>
              <span id="counter" class="bytes3">0</span>
            </div>

 <!--4번질문-->
            <div class="form-group mb-4 wrap mt-5">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>현재 다뤄 본 디자인툴 / 실력(상중하)</p></label>
              <textarea name="question4" id="question4" class="form-control" maxlength="1000" id="input_text3" rows="6" placeholder="EX) 포토샵/하, 프리미어/상">
              <?=$row['question4']?>
              </textarea>
              <span id="counter" class="bytes4">0</span>
            </div>
 <!--5번질문-->
            <div class="form-group mb-4 wrap mt-5">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>현재 활동중인 중앙동아리, 아르바이트 대외활동 및 프로젝트는 무엇이 있는지?</p></label>
              <textarea name="question5" id="question5"  class="form-control" maxlength="1000" id="input_text3" rows="6"  placeholder="              중동: 어플레이
              아르바이트: 주말 아르바이트13~15
              격전: 토요일오전 9~"><?=$row['question5']?></textarea>
              <span id="counter" class="bytes5">0</span>
            </div>
 <!--6번질문-->
            <div class="form-group mb-4 wrap mt-5">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>목요일 5시이후, 토요일 3시이후 일정이 있나요?</p></label>
              <textarea name="question6" id="question6" class="form-control" maxlength="1000" id="input_text3" rows="6" placeholder="목x, 토 알바13~15시">
              <?=$row['question6']?>
              </textarea>
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
              <label for="exampleFormControlTextarea1"class="text-warning"><p>깃허브 주소</p></label>
              <textarea name="question8" id="question8" class="form-control" maxlength="1000" id="input_text3" rows="1" placeholder="https://github.com/닉네임">
                <?=$row['question8']?>
              </textarea>
              <span id="counter" class="bytes8">0</span>
            </div>
 <!--그외질문-->
           <label mt-5 mb-5 style="color: white; font-family: 'yg-jalnan'; font-size: 80%;">그 외 포트폴리오는 아래 메일로 보네주세요 <br>nansh9815@likelion.org</label>
           

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