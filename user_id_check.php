<h1>아이디 중복 체크<h1>
<p>
    <?php
        $id = $_GET["id"];
        if(!$id){
            echo("아이디를 입력해주세요");
        }
        else{
            $con = mysqli_connect(
                '18.224.229.40',
                'admin',
                'admin',
                'sys',
                '3306'
            );
            $sql = "select * from user where id='$id'";
            $resutl = mysqli_query($con, $sql);
            if($result){
                echo "쿼리성공";
              }else{
                echo "쿼리실패";
              }
            $res = mysqli_num_rows($result);

            if($res){
                echo "아이디가 중복됩니다<br>다른 아이디를 사용해주세요";
            }
            else{
                echo "아이디 사용이 가능합니다";
            }
        }
    ?>
<div>
    <div onclick="javascript:self.close()">close</div>
</div>