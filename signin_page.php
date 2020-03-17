<!DOCTYPE html>
<head>   
<meta charset="utf-8">
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
<?php 
      include_once "nav.php"; 
?>
       <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-sm mt-5">         
            </div>
            <div class="col-sm mt-5 text-center">               

                <form name="member" method="post" action="member_insert.php">

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label text-white">이메일</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" id="staticEmail" value="email@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label text-white">비밀번호</label>
                        <div class="col-sm-8">
                            <input type="password" name="pw" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label text-white">이름</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" readonly class="form-control" id="staticEmail" value="홍길동">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label text-white">학과</label>
                        <div class="col-sm-8">
                            <input type="text" name="major" class="form-control" id="staticEmail" value="동양어문학과">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label text-white">입학년도</label>
                        <div class="col-sm-8">
                            <input type="number" name="year" class="form-control" id="staticEmail" value="2020">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label text-white">성별</label>
                        <div class="col-sm-8">
                            <select name="gender" class="form-control">
                                <option value="1">남자</option>
                                <option value="2">여자</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label text-white">연락처</label>
                        <div class="col-sm-8">
                            <input type="number" name="phone" class="form-control" id="staticEmail" value="01012341234">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label text-white">학년</label>
                        <div class="col-sm-8">
                            <select name="degree" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label text-white">복전/부전</label>
                        <div class="col-sm-8">
                            <input type="text" name="doublemajor" readonly class="form-control" id="staticEmail" value="기계공학과">
                        </div><br><br>
                        <div style="border: 1px solid #fff; border-radius: 5px; height: 300px; overflow: scroll; font-size: 10px; padding: 17px; line-height:1.9em ;background-color: white;">
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
                        ○ 수집항목 : 성명, 아이디, 비밀번호, 연락처, 이메일주소, 전공, 누적학기, 희망면접일
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
                    <label class="custom-control-label" for="jb-checkbox">개인정보 수집 및 이용에 동의합니다.</label><br><br>    
                             <!--제출 버튼-->
                    <div style="cursor:pointer" onclick="check_input()"><p>회원가입</p></div>
                </form>       
            </div>           
        </div>
        <div class="col-sm mt-5">         
        </div> 
    </div>
</div>
</body>
</html>


