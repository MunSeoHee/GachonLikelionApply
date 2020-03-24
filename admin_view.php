<?php
    include_once "settings.php";
    $email=$_GET["email"];
    $sql = "select * from written where email='$email'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $sql = "select * from user where email='$email'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_array($result);
?>

<!doctype html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="card container-fluid" style="width: 18rem;">
                    <div class="card-header">
                        개인정보
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">이름 : <?=$user['name']?></li>
                        <li class="list-group-item">학과 : <?=$user['major']?></li>
                        <?php
                                            if($user["gender"] == 1){
                                                echo "<li class='list-group-item'>성별 : 남자</li>";
                                            }else{
                                                echo "<li class='list-group-item'>성별 : 여자</li>";
                                            }
                                        ?>
                        <li class="list-group-item">복수전공 : <?=$user['doublemajor']?></li>
                        <li class="list-group-item">입학년도 : <?=$user['year']?></li>
                        <li class="list-group-item">학년 : <?=$user['degree']?></li>
                        <li class="list-group-item">연락처 : <?=$user['phone']?></li>
                        <li class="list-group-item">이메일 : <?=$user['email']?></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="card container-fluid">
                    <div class="card-header">
                    지원동기 (700자 이내)
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p><?=$row['question1']?></p>
                        </blockquote>
                    </div>
                </div>                   
            </div>
            <div class="row">
                <div class="card container-fluid">
                    <div class="card-header">
                    만들고 싶은 서비스를 적어주세요 (1000자 이내)
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p><?=$row['question2']?></p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card container-fluid">
                    <div class="card-header">
                    다뤄본 컴퓨터 언어를 실력 상, 중, 하를 포함하여 모두 적어주세요.<br>또한 디자인에 대한 경험이 있으실 경우, 그에 대한 내용과 다뤄본 디자인 툴을 실력 상, 중, 하를 포함하여 모두 적어주세요
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p><?=$row['question3']?></p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card container-fluid">
                    <div class="card-header">
                    멋사에서 활동하게 된다면 멋사를 통해 얻어가고 싶은 것과 팀을 위해 어떤 노력 및 기여를 할 수 있는지 적어주세요 (1000자 이내)
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p><?=$row['question4']?></p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card container-fluid">
                    <div class="card-header">
                    2020년 한 해 동안 참여하거나 참여할 예정인 동아리, 아르바이트, 대외활동 및 프로젝트, 인턴쉽 프로그램, 공모전 등을 적어주세요
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p><?=$row['question5']?></p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card container-fluid">
                    <div class="card-header">
                    가천대학교 멋쟁이 사자처럼 8기는 매주 2회, 목요일 6시 및 토요일 3시 이후에 정규 스터디 및 팀 프로젝트를 진행할 예정입니다. 목요일, 토요일 정기 세션에 참여가 가능하신가요? 해당 요일에 일정이 있거나 일정이 생길 수도 있다면 이에 대한 내용을 적어주세요
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p><?=$row['question6']?></p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card container-fluid">
                    <div class="card-header">
                    면접희망 날짜
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p><?=$row['question7']?></p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="card container-fluid">
                    <div class="card-header">
                    깃허브 주소
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p><?=$row['question8']?></p>
                        </blockquote>
                    </div>
                </div>
            </div>
 
        </div>
    </body>
</html>