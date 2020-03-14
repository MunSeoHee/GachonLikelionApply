
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />

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
     @font-face { font-family: 'GmarketSansBold'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansBold.woff%27') format('woff'); font-weight: normal; font-style: normal; }
        @font-face { font-family: 'yg-jalnan'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_four@1.2/JalnanOTF00.woff%27') format('woff'); font-weight: normal; font-style: normal; }
        h2,label{
            color:rgba(243, 212, 73, 0.904);
            font-family:'GmarketSansBold'; 
        }
        p{
            font-size: 120%;
            color:rgba(243, 212, 73, 0.904);
            font-family: 'yg-jalnan'; 
        }
      </style> 
      
      <script>
    function check_input(){
        if(!document.login.id.value){
            alert("아이디를 입력하세요");
            document.login.id.focus();
            return;
        }
        if(!document.login.pw.value){
            alert("비밀번호를 입력하세요");
            document.login.pw.focus();
            return;
        }
        document.login.submit();
    }
</script>
</head>

<body>
<div class="bgimg container-fluid">
    <?php include_once "nav.php"; ?>
  <div class="container">
    <div class="row">
      <div class="col-sm">
       
      </div>
      <div class="col-sm">
        <h2>
            멋쟁이 사자처럼 <br> 지원하기전에
        </h2>
        <h1>
        ㅡ
        </h1>
      </div>
      <div class="col-sm">
        
      </div>
    </div>
  </div>
  <div>
      <p>
        지원 시 유의사항 <br>
      </p>  
      <p>
          1. 회원가입 시 본인의 학교 및 개인 정보를 정확하게 기입한다. <br>
          2. 학교 별로 입력해야하는 질문 내용 및 요구 사항이 다르므로, 잘 확인 후 지원서를 작성한다. <br>
          * 학교 별로 문항 별 글자 수 제한, 첨부파일이 필요한 곳이 있으니 확인한다. <br>
          3. 최종 제출 후에는 수정이 불가능하니, 제출 전 꼼꼼히 확인한다. <br>
      </p>
      <p>
          선발 절차 <br>
      </p>
      <p>
          1. 지원서를 체줄하면 학교 운영진이 확인 후 합격여부를 지원자에게 전달합니다. <br>
          2. 학교 별로 2차 면접을 진행하는 곳도 있습니다 <br>
          3. 최종 선발 이후에는 멋쟁이 사자처럼 공식 OT 이후 정식 활동을 시작합니다. <br>
      </p>
      <p>
          일정 <br>
      </p>
      <p>
            모집 : 2020.00.00~2020.00.00 00:00 <br>
            서류 및 면접 : 2020.00.00~2020.00.00 <br>
            공식 오리엔테이션 :2020.00.00 
      </p>
    </div>
    <?php
      if($id==""){
    ?>
      <div class="container">
        <div class="row">
          <div class="col-sm">          
          </div>
          <div class="col-sm text-center">
            <form name="login" method="post" action="login.php">
              <div class="form-group">
                <label for="exampleInputEmail1">아이디</label>
                <input  type="text" class="form-control" name="id" placeholder="아이디">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">비밀번호</label>
                <input type="password" name="pw" placeholder="비밀번호" class="form-control">
              </div>              
              <div class="btn btn-dark" style="cursor:pointer" onclick="check_input()">로그인</div>
              <a href="signin_page.php" class="btn btn-dark">회원가입</a>
            </form> 
          </div>
          <div class="col-sm">          
          </div>
        </div>
      </div>
      <?php 
      }
      else{
        ?>
        <div class="container">
        <div class="row">
          <div class="col">
          </div>
          <div class="col">
          <a href="form.php" class="btn btn-dark">지원서 작성하기</a>
          </div>
          <div class="col">
          </div>
        </div>
          
      </div>
      <?php
    }
    ?>
    </div>     
</body>
</html>



