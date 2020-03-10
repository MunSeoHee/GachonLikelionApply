
<h1>아이디 중복 체크<h1>
<p>
    <?php
        include_once 'settings.php';
        $id = $_GET["id"];
        if(!$id){
            echo("아이디를 입력해주세요");
        }
        else{
            $sql = "select * from user where id='$id'";
            $result = mysqli_query($con, $sql);
            $res = mysqli_num_rows($result);

            if($res){
                echo "아이디가 중복됩니다<br>다른 아이디를 사용해주세요";
            }
            else{
                echo "아이디 사용이 가능합니다";
            }
        }
    ?>
    <script>
    function useID(v){
        opener.document.all.checkid.value=1;
        opener.document.all.userid.value=v;
        window.close();
    }
</script>
<div>
    <a href="#" onClick="useID('<?=$id?>')">사용하기</a>
    <div onclick="javascript:self.close()">close</div>
</div>