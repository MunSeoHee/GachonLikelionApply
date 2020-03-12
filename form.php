<!Doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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


<title>회원가입</title>

</head>

<body>
	<!--배경이미지-->
	<div class="bgimg container-fluid">
		<div class="row">
			<div class="col">
				margin:10%;
			</div>
			<div class="col">
				<h1>회원가입</h1>
				<hr></hr>
				<form>
					<!--색상 class="text-warning"-->
					<!--이름-->
					<div class="form-group mb-4">
						
						<label for="exampleFormControlInput1" class="text-warning"><p>이름</p></label>
						<input type="name" class="form-control" id="exampleFormControlInput1" placeholder="홍길동">
						
					</div>
					
					<!--이메일-->
					<div class="form-group mb-4" >
			
					<label for="exampleFormControlInput1"class="text-warning"><p>이메일</p></label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
					</div>
			
					<!--성별-->
					<div class="form-group mb-4">
					<label for="exampleFormControlSelect1"class="text-warning"><p>성별</p></label>
					<select class="form-control" id="exampleFormControlSelect1">
						<option>남자</option>
						<option>여자</option>
					</select>
					</div>
			
				<!--연락처-->
					<div class="form-group mb-4">
			
						<label for="exampleFormControlInput1"class="text-warning"><p>연락처</p></label>
						<input type="number" class="form-control" id="exampleFormControlInput1" placeholder="010-xxxx-xxxx">
					</div>
				<!--학년-->
					<div class="form-group mb-4">
						<label for="exampleFormControlSelect1"class="text-warning"><p>학년</p></label>
						<select class="form-control" id="exampleFormControlSelect1">
						<option>1학년</option>
						<option>2학년</option>
						<option>3학년</option>
						<option>4학년</option>
						</select>
					</div>
				<!--질문 텍스트에리어 3개(서희요청)-->
				<!--1번질문-->
					<div class="form-group mb-4">
					<label for="exampleFormControlTextarea1"class="text-warning"><p>주량은</p></label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
				</form>
				<!--2번질문-->
				<div class="form-group mb-4">
					<label for="exampleFormControlTextarea1"class="text-warning"><p>여자일시 남친 유무</p></label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
				</form>
				<!--3번질문-->
				<div class="form-group mb-4">
					<label for="exampleFormControlTextarea1"class="text-warning"><p>남자일시 가세요</p></label>
					<textarea class="form-control" 
					id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
				
				<!--제출버튼-->
				<div class ="row">
				<div class="col"></div>
				<div class="col">
				<button type="button" class="btn btn-secondary btn-lg">제출</button>
				</div>
				<div class="col"></div>
				</div>

				</form>	
			</div>
			<div class="col">
				
			</div>
		</div>

</div><!--배경사진-->
</body>



		
</html>
