<script>
    function go_login(){
        location.href = 'login_page.php';
    }
    function go_signin(){
        location.href = 'signin_page.php';
    }
</script>
<?include_once "header.php"?>

<button onclick="go_login()">로그인</button>
<button onclick="go_signin()">회원가입</button>
