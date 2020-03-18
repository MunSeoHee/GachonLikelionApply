<!Doctype html>
<html>

<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<!-- 모바일 뷰포트 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, 
		maximum-scale=1.0, minimum-scale=1.0">
	<title>Gachon Likelion Apply</title>

	<script>

    function apply(){
        location.href = 'index.php';
    };
  
    $(document).ready(function(){
        $("#my-btn").trigger("click");
    });

  
  function check(){
    var text = $(".text");
 
    text.removeClass("hidden");
  
  };


//서버시간 표시
var srv_time = "<?php print date('F d, Y H:i:s', time()); ?>";
var now = new Date(srv_time);
setInterval("server_time()", 1000);
function server_time()
{
    now.setSeconds(now.getSeconds()+1);
    var year = now.getFullYear();
    var month = now.getMonth() + 1;
    var date = now.getDate();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
    if (month < 10){
        month = "0" + month;
    }
    if (date < 10){
        date = "0" + date;
    }
    if (hours < 10){
        hours = "0" + hours;
    }
    if (minutes < 10){
        minutes = "0" + minutes;
    }
    if (seconds < 10){
        seconds = "0" + seconds;
    }
    document.getElementById("server_time").innerHTML = "현재 서버시간 : " + year + "-" + month + "-" + date + " " + hours + ":" + minutes + ":" + seconds;
}
</script>
<style>

/* 배경사진 */
.bgimg {
				border: 0;
				padding: 0; 
				background-image: url(hack.png);
				min-height: 100%;
				background-position: center;
				background-size: cover;
        background-color: rgb(0, 0, 0);
			}
      @font-face { font-family: 'MapoHongdaeFreedom'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/MapoHongdaeFreedomA.woff') format('woff'); font-weight: normal; font-style: normal; }
     	@font-face { font-family: 'GmarketSansBold'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansBold.woff') format('woff'); font-weight: normal; font-style: normal; }
    	@font-face { font-family: 'yg-jalnan'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_four@1.2/JalnanOTF00.woff') format('woff'); font-weight: normal; font-style: normal; }
	li{
    font-size:15rem;
		color:rgba(243, 212, 73, 0.904);
    font-family: 'GmarketSansBold';
	}
	p{
		font-size: 130%;
		color:rgba(230, 207, 105, 0.945);
		font-family: 'yg-jalnan'; 
	}

* {
  margin: 0;
  padding: 0;
}
body {
  background-color: #000;
  height: 101vh;
  font-family:'GmarketSansBold'; 
}

.text {
 
  list-style: none;
  border-bottom: 0;	
}


.text li {
  display: inline-block;
  float: left;
  font-weight: 700;
  font-size: 4rem;
  color:rgb(243, 212, 73, 0.904);
  opacity: 1;
  transition: all 2.3s ease-in-out;
  max-width: 2em;
}
.text.hidden li.spaced {
  padding-left: 1rem;
}
.text li.spaced {
  padding-left: 0.5rem;
}

.text.hidden li.ghost {
  opacity: 0;
  max-width: 0;
}
.gachon{
  font-size:200%!important;
}
.time{
  max-width: none!important;
  font-size:150%!important;
}
</style>

</head>

<body>
<body class="bgimg" id="my-btn" onclick ="check()"><!-- onload="startScroll(0) ">-->
  <div class="row" style="height:20vh"></div>
<div style="overflow:auto" class="mt-5">
  <!-- 깐지글자 -->
      <ul class="text hidden container mt-5">
        <div class="row d-flex justify-content-center">
          <li class="ghost gachon text-warning">가</li>
          <li class="ghost gachon text-warning">천</li>
          <li class="ghost gachon text-white">대</li>
          <li class="ghost gachon text-white">학</li>
          <li class="ghost gachon text-white">교</li>
        </div>
       <div class="row d-flex justify-content-center">
        <li class="text-white ">멋</li>
        <li class="ghost text-white">쟁</li>
        <li class="ghost text-white">이</li>
        <li class="ghost text-white">  &nbsp;</li>
        <li class="text-white">사</li>
        <li class="ghost text-white">자</li>
        <li class="ghost text-white">처</li>
        <li class="ghost text-white">럼</li>
        <li class="ghost">  &nbsp;</li>
        <li class="ghost text-warning">8</li>
        <li class="ghost text-warning">기</li>
        <li class="ghost">  &nbsp;</li>
        <li class="ghost text-white">모</li>
        <li class="ghost text-white">집</li>
       </div>
       <div class="row justify-content-center">
        <li class="ghost time text-white">지원까지 남은 시간</li>
       </div>
       <div class="row justify-content-center">
        <li class="ghost time text-white"><div id="server_time"><?php echo date("Y-m-d H:i:s", time()); ?></div></li>
       </div>
       <div class="row d-flex justify-content-center">
        <li class="ghost"> <button type="button"  class="btn btn-warning ghost text-white"onclick="apply()">APPLY</button></li>
       </div>
      </ul>
      
     
    </div>



</body>
<?php 
      include_once "footer.html"; 
?>
</html>