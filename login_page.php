<script>
    function check_input(){
        if(document.login.id.value){
            alert("아이디를 입력하세요");
            document.login.id.focus();
            return;
        }
        if(document.login.pw.value){
            alert("비밀번호를 입력하세요");
            document.login.pw.focus();
            return;
        }
        documeny.login.submit();
    }
</script>

<form name="login" method="post" action="login.php">
    <input type="text" name="id" placeholder="아이디">
    <input type="password" name="pw" placeholder="비밀번호">
    <div><button onclick="check_input()">로그인</button></div>
<form>