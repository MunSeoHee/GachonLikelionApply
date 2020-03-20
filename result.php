<Doctype html>
  <html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>



@font-face { font-family: 'CookieRun-Regular'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/CookieRun-Regular.woff') format('woff'); font-weight: normal; font-style: normal; }
	@font-face { font-family: 'GmarketSansBold'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansBold.woff') format('woff'); font-weight: normal; font-style: normal; }
  @font-face { font-family: '양진체'; src: url('https://cdn.jsdelivr.net/gh/supernovice-lab/font@0.9/yangjin.woff') format('woff'); font-weight: normal; font-style: normal; }
  @font-face { font-family: 'fromdamiM'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_ten@1.0/fromdamiM.woff') format('woff'); font-weight: normal; font-style: normal; }    	@font-face { font-family: 'yg-jalnan'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_four@1.2/JalnanOTF00.woff') format('woff'); font-weight: normal; font-style: normal; }
  @font-face { font-family: 'BBTreeGB'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_nine_@1.1/BBTreeGB.woff') format('woff'); font-weight: normal; font-style: normal; }
      /* thankyou */ 
      h1{
				color:hsla(214, 87%, 70%, 0.932);
        font-family: 'GmarketSansBold';
        margin: auto;
        font-size: 5rem;
			}
      /* 세부내용 */
			p{
				font-size: 100%;
				color:rgb(255, 255, 255);
        font-family: '양진체';
        margin-top:1rem
			}
/* 지원이완료되었습니다 */
      h2{
        font-weight: bold;
				font-size: 2rem;
				color:rgb(231, 159, 77);
        font-family: 'BBTreeGB';  
        padding:1rem 1rem 1rem 1rem;
        margin: auto;
        
			}
      /* 지원설명 */
      h3{
        font-weight: bold;
				font-size: 0.8rem;
        line-height: 300%;
				color:rgba(255, 255, 255, 0.904);
      
        font-family: 'BBTreeGB'; 
        padding-bottom: 2rem;
        padding:1rem 1rem 1rem 1rem;
        
			}
.base
{
  background-color: black;
}


.middle
{
  border-style: solid;
  border-color: rgba(255, 255, 255, 0.986);
  border-width: 0.1rem;
  padding-top: 2rem;
  padding-bottom:1rem;
border-radius: 1rem;

}
.middle-1
{
  border-style: solid;
  border-color: rgba(252, 252, 252, 0.986);

  border-right: rgba(255, 255, 255, 0);
  border-left: rgba(255, 255, 255, 0);
  border-width: 0.06rem;

}

.middle-2
{
  border-style: solid;
  border-color: rgba(252, 252, 252, 0.986);
border-top:rgba(255, 255, 255, 0);
border-bottom:rgba(255, 255, 255, 0);
  border-left: rgba(255, 255, 255, 0);


  border-width: 0.06rem;
  box-sizing: border-box;

}



</style>
		<!-- 모바일 뷰포트 -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, 
		maximum-scale=1.0, minimum-scale=1.0">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<!--페이스북-->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : 'your-app-id',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v6.0'
    });
  };
</script>
<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
<!--바디시작-->
<body class="base bgimg">
<?php 
        include_once "nav.php"; 
        $sql = "select phone, name, email from user where email='$email'";
        include_once "settings.php";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
    ?>  
<div class="row" style="height:20vh;"></div>


<div class="row">
<div class="col"></div>


<div class="col-lg-5 middle">
  <div class="row"><h1>THANKYOU</h1></div>


  <div class="row"><h2>지원이 완료되었습니다</h2></div>


  <div class="row middle-1">
    <div class="col middle-2"><p>이름</p></div>
    <div class="col middle-2"><p><?=$row['name']?></p></div>
  </div>
  <div class="row middle-1" style="border-top-width: 0;">
  <div class="col middle-2"><p>연락처</p> </div>
  <div class="col middle-2"><p><?=$row['phone']?></p> </div>
  </div>
  <div class="row middle-1" style="border-top-width: 0;">
  <div class="col middle-2"><p>이메일</p></div>
  <div class="col middle-2"><p><?=$row['email']?></p> </div>
  </div>


  <div class="row"><h3>1. 지원서를 체줄하면 학교 운영진이 확인 후 합격여부를 지원자에게 전달합니다.<br>
    2. 학교 별로 2차 면접을 진행하는 곳도 있습니다 <br>
    3. 최종 선발 이후에는 멋쟁이 사자처럼 공식 OT 이후 정식 활동을 시작합니다. <br></h3></div>

  <div class="row  container-fluid">
    <div class="fb-page  container-fluid"  
    data-href="https://www.facebook.com/likeliongachon"
    data-width="1000" 
    data-hide-cover="false"
    data-show-facepile="false"></div>  
  </div>


</div>


<div class="col"></div>


</div>

<div class="row mt-5 mb-5">
  <div class="col" ></div>
  <div class="col-lg-5">
    <div class="row">
      <div class="col">
        <a href="index.php" class="btn btn-warning text-white container-fluid">FAQ 및 8기 안내</a>
      </div>
      <div class="col">
        <a href="form.php" class="btn btn-warning text-white container-fluid">지원서 수정</a>
      </div>
    </div>
  </div>
  <div class="col" ></div>
</div>



</body>

<footer>
  <?php
    include_once 'footer.html';
  ?>

</footer>

</html>