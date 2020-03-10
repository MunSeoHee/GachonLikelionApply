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

<form name="member" method="post" action="member_insert.php">
    <input type="text" name="id">
    <input type="password" name="pw">
    <div onclick="check_input()">제출</div>
</form>