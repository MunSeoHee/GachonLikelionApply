<!DOCTYPE html>
<head>   
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
    function check_input(){
        if(!document.member.id.value){
            alert("아이디를 입력해주세요");
            document.member.id.focus();
            return;
        }
        if(document.member.id.value == "admin"){
            alert("다른 아이디를 사용해주세요!");
            document.member.id.focus();
            return;
        }
        if(!document.member.pw.value){
            alert("비밀번호를 입력해주세요");
            document.member.pw.focus();
            return;
        }
        document.member.submit();
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
		}
    @font-face { font-family: 'Arita-buri-SemiBold'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_one@1.0/Arita-buri-SemiBold.woff%27') format('woff'); font-weight: normal; font-style: normal; }
            @font-face { font-family: 'GmarketSansBold'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansBold.woff%27') format('woff'); font-weight: normal; font-style: normal; }
            h2{
                color:#B49920;
                font-family:'GmarketSansBold'; 
            }
            p{
                color:#B49920;
                font-family:'Arita-buri-SemiBold';
            }
    </style>  
</head>
<body>
<div class="bgimg container-fluid" style="height:100vh">
    <nav class="navbar navbar-light" style="background-color: black;">
        <a class="navbar-brand" href="main.php"><img src="https://startup.likelion.org/img/logo.png" width="120" height="30"/></a>
      </nav>
       <div class="container mt-5">
        <div class="row mt-5">
          <div class="col-sm mt-5">         
          </div>
        <div class="col-sm mt-5 text-center">
             <!--회원가입 정보 입력 란-->
            <form name="member" method="post" action="member_insert.php">
                <!--id 입력 칸-->
                <p class="mt-5">아이디</p>
                <input class="border-warning" type="text" name="id"><br><br>
                <!--비밀번호 입력 칸-->
                <p>비밀번호</p>
                <input class="border-warning" type="password" name="pw">
                <!--제출 버튼-->
                <div style="cursor:pointer" onclick="check_input()"><p>회원가입</p></div>                   
                                                     
            </form>            
        </div>
        <div class="col-sm mt-5">         
        </div> 
        </div>
    </div>
</div>
</body>
</html>


