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
    function check_id(){
        window.open("user_id_check.php?id="+document.member.id.value, "IDcheck", "left=700, top=300, width=350, height=200, scrollbars=no, resizable=yes");
    }
</script>

<form name="member" method="post" action="member_insert.php">
    <input type="text" name="id">
    <div onclick="check_id()">중복체크</div>
    <input type="password" name="pw">
    <div style="cursor:pointer" onclick="check_input()">제출</div>
</form>