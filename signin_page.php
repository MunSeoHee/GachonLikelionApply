<script>
    function check_input(){
        if(!document.member.id.value){
            alert("아이디를 입력해주세요");
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

<!--회원가입 정보 입력 란-->
<form name="member" method="post" action="member_insert.php">
    <!--id 입력 칸-->
    <input type="text" name="id">
    <!--비밀번호 입력 칸-->
    <input type="password" name="pw">
    <!--제출 버튼-->
    <div style="cursor:pointer" onclick="check_input()">제출</div>
</form>