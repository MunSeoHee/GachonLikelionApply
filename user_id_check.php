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
            $resutl = mysqli_query($con, $sql);
            $res = mysqli_num_rows($result);

            if($res){
                echo $res;
                echo "아이디가 중복됩니다<br>다른 아이디를 사용해주세요";
            }
            else{
                echo $res;
                echo "아이디 사용이 가능합니다";
            }
        }
    ?>
<div>
    <div onclick="javascript:self.close()">close</div>
</div>