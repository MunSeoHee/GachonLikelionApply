<script>
    function check_input(){
        if(!document.member.id.value){
            alert("아이디를 입력해주세요");
            document.member.id.focus();
            return;
        }
    }
</script>

<form name="member" method="post" action="member_insert.php">
    <input type="text" name="id">
    <input type="password" name="pw">
    <button type="submit">제출</button>
</form>