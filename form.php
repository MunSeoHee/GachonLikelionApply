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
		
		</script>
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
    }
////
<textarea style="width:600px;" class="DOC_TEXT" name="DOC_TEXT" placeholder="선택하신 서류사항 항목에 대한 내용을 200자 이내로 기재해주세요.">
</textarea>
<br />
<span style="color:#aaa;" id="counter">(0 / 최대 200자)</span>

//서류사항 textarea 체크
$('.DOC_TEXT').keyup(function (e){
    var content = $(this).val();
    $('#counter').html("("+content.length+" / 최대 200자)");    //글자수 실시간 카운팅

    if (content.length > 200){
        alert("최대 200자까지 입력 가능합니다.");
        $(this).val(content.substring(0, 200));
        $('#counter').html("(200 / 최대 200자)");
    }
});
////



	</script>


	<title>회원가입</title>

	</head>

	<body class="bgimg">
		<!--배경이미지-->
		<div class=" container-fluid">
		<?php 
			include_once "nav.php"; 
			if(!$_SESSION["email"]){
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
					<h1>회원가입</h1>
					<hr></hr>
					<form name="written" method="post" action="form_insert.php">
						<!--색상 class="text-warning"-->
						<!--이름-->
						<div class="form-group mb-4">
							
							<label for="exampleFormControlInput1" class="text-warning"><p>이름</p></label>
							<input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="홍길동">
							
						</div>
						<div class="form-group mb-4">
							<label for="exampleFormControlInput1" class="text-warning"><p>학과</p></label>
							<input type="text" name="major" class="form-control" id="exampleFormControlInput1" placeholder="학과">
						</div>
						
						<!--입학년도-->
						<div class="form-group mb-4" >
				
						<label for="exampleFormControlInput1"class="text-warning"><p>입학년도</p></label>
						<input type="number" name="year" class="form-control" id="exampleFormControlInput1" placeholder="입학년도">
						</div>
				
						<!--성별-->
						<div class="form-group mb-4">
						<label for="exampleFormControlSelect1"class="text-warning"><p>성별</p></label>
						<select name="gender" class="form-control" id="exampleFormControlSelect1">
							<option value="1">남자</option>
							<option value="2">여자</option>
						</select>
						</div>
				
					<!--연락처-->
						<div class="form-group mb-4">
				
							<label for="exampleFormControlInput1"class="text-warning"><p>연락처</p></label>
							<input name="phone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="010xxxxxxxx">
            </div>
            
					<!--학년-->
						<div class="form-group mb-4">
							<label for="exampleFormControlSelect1"class="text-warning"><p>학년</p></label>
							<select name="dgree" class="form-control" id="exampleFormControlSelect1">
							<option value="1">1학년</option>
							<option value="2">2학년</option>
							<option value="3">3학년</option>
							<option value="4">4학년</option>
							</select>
						</div>
					<!--1번질문-->
						<div class="form-group mb-4">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>지원동기 (1000자)</p></label>
              <textarea name="question1" class="form-control" id="exampleFormControlTextarea1"  maxlength="1000" id="input_text1" rows="3"></textarea>
              </div>
            
            <!--2번질문-->
            <div class="form-group mb-4">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>만들고 싶은 서비스</p></label>
              <textarea name="que2" id="question2" class="form-control" maxlength="1000" id="input_text2" rows="3"></textarea>
            </div>
            
            <!--3번질문-->
            <div class="form-group mb-4">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>현재 다뤄 본 프로그래밍 언어 / 실력(상중하)</p></label>
              <textarea name="quest3" id="question3" class="form-control" maxlength="1000" id="input_text3" rows="3" placeholder="EX) C/상, JAVA/중, Python/하"></textarea>
            </div>

 <!--4번질문-->
            <div class="form-group mb-4">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>현재 다뤄 본 디자인툴 / 실력(상중하)</p></label>
              <textarea name="quest3" id="question3" class="form-control" maxlength="1000" id="input_text3" rows="3" placeholder="EX) 포토샵/하, 프리미어/상"></textarea>
            </div>
 <!--5번질문-->
            <div class="form-group mb-4">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>현재 활동중인 중앙동아리, 아르바이트 대외활동 및 프로젝트는 무엇이 있는지?</p></label>
              <textarea name="quest3" id="question3" class="form-control" maxlength="1000" id="input_text3" rows="3" placeholder="              중동: 어플레이
              아르바이트: 주말 아르바이트13~15
              격전: 토요일오전 9~"></textarea>
            </div>
 <!--6번질문-->
            <div class="form-group mb-4">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>목요일 5시이후, 토요일 3시이후 일정이 있나요?</p></label>
              <textarea name="quest3" id="question3" class="form-control" maxlength="1000" id="input_text3" rows="3" placeholder="목x, 토 알바13~15시"></textarea>
            </div>
 <!--7번질문-->
 <p>면접희망날짜<p>
            <div class="">
              <div class="row d-inline-flex p-3 bd-highlight mr-5 "><input type="radio" name="IDATE" value="4월1일"><p>4월1일(수)</div>
                <div class="row d-inline-flex p-3 bd-highlight mr-5"><input type="radio" name="IDATE" value="4월1일"><p>4월1일(수)</div>
                  <div class="row d-inline-flex p-3 bd-highlight mr-2"><input type="radio" name="IDATE" value="4월1일"><p>4월1일(수)</div>    
             </div>
 <!--8번질문-->
             <div class="form-group mb-4">
              <label for="exampleFormControlTextarea1"class="text-warning"><p>깃허브 주소</p></label>
              <textarea name="quest3" id="question3" class="form-control" maxlength="1000" id="input_text3" rows="1" placeholder="https://github.com/닉네임"></textarea>
            </div>
 <!--8번질문-->
            <p>그 외 포트폴리오는 아래 메일로 보네주세요 <br>nansh9815@likelion.org
            </p>

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