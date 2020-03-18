
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
    function check_input(){
        if(!document.user.email.value){
            alert("이메일을 입력해주세요");
            document.user.email.focus();
            return;
        }
        if(!document.user.pw.value){
            alert("비밀번호를 입력해주세요");
            document.user.pw.focus();
            return;
        }
        document.user.submit();
    }
    </script>
  <style>
    .bgimg {
    border: 0;
    padding: 0; 
    background-image: url(\lion.jpg);
    min-height: 100%;
    background-position: center;
    background-size: cover;
    background-repeat : no-repeat;
		}
    @font-face { font-family: 'MapoHongdaeFreedom'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/MapoHongdaeFreedomA.woff') format('woff'); font-weight: normal; font-style: normal; }
     	@font-face { font-family: 'GmarketSansBold'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansBold.woff') format('woff'); font-weight: normal; font-style: normal; }
    	@font-face { font-family: 'yg-jalnan'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_four@1.2/JalnanOTF00.woff') format('woff'); font-weight: normal; font-style: normal; }
	h2,label,h1{
            color:rgba(243, 212, 73, 0.904);
            font-family:'GmarketSansBold'; 
        }
        p{
            font-size: 120%;
            color:rgba(243, 212, 73, 0.904);
            font-family: 'yg-jalnan'; 
        }
      </style>  
</head>

<body class="bgimg">
<div class="container-fluid" style="height:100vh">
<?php 
      include_once "nav.php"; 
?>
  <div class="container">
    <div class="row">
      <div class="col-sm">
       
      </div>
      <div class="col-sm text-center">
        <h2>
            로그인
        </h2>
        <h1>
        ㅡ
        </h1>
        <form name="user" method="post" action="login.php">
          <div class="form-group text-center">
            <label for="exampleInputEmail1 text-white">이메일</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group" class="badge badge-warning"></span>
            <label for="exampleInputPassword1 text-white">비밀번호</label>
            <input name="pw" type="password" class="form-control" id="exampleInputPassword1">
          </div>              
          <a onclick="check_input()" class="btn btn-warning text-light">로그인</a>
          <a href="signin_page.php" class="btn btn-warning text-white">회원가입</a>
        </form>
      </div>
      <div class="col-sm">        
      </div>
    </div>
  </div>           
</body>
</html>


