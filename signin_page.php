<!DOCTYPE html>
<head>   
<meta charset="utf-8">
<title>Gachon Likelion</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, 
		maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
    function check_input(){
        if(!document.member.email.value){
            alert("이메일을 입력해주세요");
            document.member.id.focus();
            return;
        }
        if(!(document.member.pw.value == document.member.pw_check.value)){
            alert("비밀번호와 비밀번호 확인이 일치하지 않습니다");
            document.member.pw.focus();
            return;
        }
        if(document.member.email.value == "admin"){
            alert("다른 이메일을 사용해주세요!");
            document.member.id.focus();
            return;
        }
        if(!document.member.pw.value){
            alert("비밀번호를 입력해주세요");
            document.member.pw.focus();
            return;
        }
        if(!document.member.pw_check.value){
            alert("비밀번호 확인을 입력해주세요");
            document.member.pw.focus();
            return;
        }
        if(!document.member.name.value){
            alert("이름을 입력해주세요");
            document.member.name.focus();
            return;
        }
        if(!document.member.major.value){
            alert("학과를 입력해주세요");
            document.member.major.focus();
            return;
        }
        if(!document.member.year.value){
            alert("입학년도를 입력해주세요");
            document.member.year.focus();
            return;
        }
        if(!document.member.gender.value){
            alert("성별을 입력해주세요");
            document.member.gender.focus();
            return;
        }
        if(!document.member.phone.value){
            alert("전화번호를 입력해주세요");
            document.member.phone.focus();
            return;
        }
        if(!document.member.degree.value){
            alert("학년을 입력해주세요");
            document.member.degree.focus();
            return;
        }
        if($("input:checkbox[name=check]").is(":checked") == false) {
            alert("개인정보 수집 및 이용 약관에 동의해주세요");
            document.member.check.focus();
            return;
        }

        document.member.submit();
    };
    
    var bDisplay = true;
    function doDisplay(){
        var con = document.getElementById("myDIV");
        if(con.style.display=='none'){
            con.style.display = 'block';
        }else{
            con.style.display = 'none';
        }
    }
    </script>
<style>
    .bgimg {
    border: 0;
    padding: 0; 
    background-color:black;
    /* background-image: url(\lion.jpg); */
    min-height: 100%;
    background-position: center;
    background-size: cover;
		}
        @font-face { font-family: 'MapoHongdaeFreedom'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/MapoHongdaeFreedomA.woff') format('woff'); font-weight: normal; font-style: normal; }
     	@font-face { font-family: 'GmarketSansBold'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansBold.woff') format('woff'); font-weight: normal; font-style: normal; }
    	@font-face { font-family: 'yg-jalnan'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_four@1.2/JalnanOTF00.woff') format('woff'); font-weight: normal; font-style: normal; }
	 h2{
                color:#B49920;
                font-family:'GmarketSansBold'; 
            }
    </style>  
</head>
<body class="bgimg">
<div class="container-fluid" style="height:100vh">
<?php 
      include_once "nav.php"; 
?>
       <div class="container-fluid mt-5">
        <div class="row mt-5">
            <div class="col-sm mt-5">         
            </div>
            <div class="col-sm mt-5 text-center container-fluid ml-5 mr-5 ">
                <div class="row container-fluid d-flex justify-content-center m-0">
                    <div class="row">
                        <img src="https://startup.likelion.org/img/logo.png" class="container">
                      </div>
                      <h2 class="mt-3 text-white">
                          Sign in
                      </h2>
                </div>
                <form name="member" method="post" action="member_insert.php" class="container-fluid mt-5">
                    <div class="form-group row ">
                        <div class="container-fluid">
                            <input type="email" name="email" class="form-control" id="staticEmail" placeholder="이메일">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="container-fluid">
                            <input type="password" name="pw" class="form-control" id="inputPassword" placeholder="비밀번호">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="container-fluid">
                            <input type="password" name="pw_check" class="form-control" id="inputPassword" placeholder="비밀번호 확인">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="container-fluid">
                            <input type="text" name="name" class="form-control" id="staticEmail" placeholder="이름">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="container-fluid">
                            <input type="text" name="major" class="form-control" id="staticEmail" placeholder="학과">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="container-fluid"> 
                            <input type="number" name="year" class="form-control" id="staticEmail" placeholder="입학년도 (20XX)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="container-fluid">
                            <select name="gender" class="form-control">
                                <option value="1">남자</option>
                                <option value="2">여자</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="container-fluid">
                            <input type="text" name="phone" class="form-control" id="staticEmail" placeholder="전화번호 (01012341234)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="container-fluid">
                            <select name="degree" class="form-control">
                                <option value="1">1학년</option>
                                <option value="2">2학년</option>
                                <option value="3">3학년</option>
                                <option value="4">4학년</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="container-fluid">
                            <input type="text" name="doublemajor" class="form-control" id="staticEmail" placeholder="복부전 학과 (없을 경우 공백)">
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check" name="check">
                            <label class="text-white"><a href="javascript:doDisplay();" class="border-bottom">개인정보 수집 및 이용</a>에 동의합니다.</label>
                        </div>
                    </div>
                    <div class="form-group row " id="myDIV" style="display: none; ">
                        <div style="border: 1px solid #ced4da; border-radius: 5px; height: 300px; overflow: scroll; font-size: 10px; padding: 17px; line-height:1.9em;" class="bg-white text-left">
                            멋쟁이사자처럼 가천대학교는 「정보통신 이용촉진 및 정보보호등에 관한 법률」, 「개인정보보호법 제15조」 등 법령상의 개인정보보호 규정을 준수하며,
                            <br>
                            관련 법령에 의거에 의거하여, 아래와 같은 내용으로 개인정보를 수집하고 있습니다.
                            <br>
                            지원자는 아래 내용을 자세히 읽어 보시고, 모든 내용을 이해하신 후에 동의 여부를 결정해 주시기 바랍니다.
                            <br>
                            이용자가 제공한 모든 정보는 다음의 목적을 위해 활용되며, 하기 목적 이외의 용도로는 사용되지 않습니다.
                            <br><br>
                            1. 개인정보의 수집방법 및 이용목적
                            <br><br>
                            ○ 수집방법 : "주소" 신규가입 및 기존사용자를 통한 수집
                            <br>
                            ○ 이용목적 : "주소"의 회원가입 및 개인정보 관리, 지원서 작성과 수정 등 서비스 이용에 필요한 최소한의 정보를 수집합니다.
                            <br>
                            ○ 시스템목록 : 멋쟁이사자처럼 8기 가천대학교 신입회원 선발
                            <br><br>
                            2. 개인정보의 수집항목
                            <br><br>
                            멋쟁이사자처럼 가천대학교에서는 기본적인 회원 서비스 제공을 위한 필수정보와,
                            <br>
                            정보주체 각각의 기호와 필요에 맞는 서비스를 제공하기 위한 선택정보로 구분하여 다음의 정보를 수집하고 있습니다.
                            <br>
                            ○ 수집항목 : 이메일, 비밀번호, 이름, 학과, 입학년도, 성별, 전화번호, 학년, 복부전학과
                            <br>
                            ○ "주소"을 이용할 경우 접속IP, 방문일시 등의 정보는 시스템을 통하여 자동적으로 수집·저장 됩니다.
                            <br><br>
                            3. 개인정보의 보유 및 이용기간
                            <br><br>
                            멋쟁이사자처럼 가천대학교에서는 정보주체의 회원 가입일로부터 서비스를 제공하는 기간 동안에 한하여
                            <br>
                            멋쟁이사자처럼 가천대학교 리크루팅 서비스를 이용하기 위한 최소한의 개인정보를 보유 및 이용하게 됩니다.
                            <br>
                            ○ 회원가입 등을 통해 개인정보의 수집·이용, 제공 등에 대해 동의하신 내용은 언제든지 철회 할 수 있습니다.
                            <br>
                            ○ 회원 탈퇴를 요청하거나 개인정보의 수집 및 이용에 대한 동의를 철회하는 경우, 보유/이용기간이 종료한 경우 등의 사유발생시 당해 개인정보를 지체없이 파기합니다.
                            <br><br>
                            4. 동의 거부 권리 안내
                            <br><br>
                            ○ 정보주체는 개인정보 수집·이용 동의를 거부 할 수 있으며, 이 경우 "주소"에서 제공하는 서비스를 이용하는데 제한이 있을 수 있습니다.
                        </div>
                    </div>
                    <div class="row text-white mb-3 mt-5 text-left">
                    <p>회원가입 시 유의 사항</p>
                    <p>1. 회원 정보는 수정이 불가능하며, 모든 정보는 8기 모집 종료 후 일괄 삭제됩니다.</p>
                    <p>2. 수정이 불가능하니, 모든 정보를 정확하게 입력해주세요.</p>
                    <p>3. 연락처와 이메일은 합불 통보에 이용 될 수 있습니다. 정확히 기입되었는지 확인해주세요.</p>
                </div>
                    <div class="form-group row d-flex justify-content-center mb-5">
                        <div class="row container-fluid">
                            <div style="cursor:pointer" class="btn btn-warning text-light  container-fluid" onclick="check_input()">회원가입</div>
                        </div>
                    </div>

                    
                </form>

            </div>
            
       
        <div class="col-sm mt-5">         
        </div> 
    </div>
</div>
<?php 
      include_once "footer.html"; 
?>

</body>
</html>


