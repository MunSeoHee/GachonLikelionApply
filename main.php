<!Doctype html>
<html>

<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	<title>MAiN</title>

	<script>

    function apply(){
        location.href = 'login_page.php';
    };
 //자동스크롤함수//
 function startScroll(interval) {
    setInterval("autoScroll()", interval);
}
 
function autoScroll() {
    window.scrollBy(0,20); // 20픽셀 위로 스크롤
}
  //자동스크롤함수//



//스크롤펼치는함수//
$(function() {
  var text = $(".text");
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll) {
      text.removeClass("hidden");
    } else {
      text.addClass("hidden");
    }
  });
});
//스크롤펼치는함수//

//서버시간 표시
var srv_time = "<?php print date("F d, Y H:i:s", time()); ?>";
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
				background-image: url(\wal.jpg);
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
  position: fixed;
  top: 30%;
  left: 50%;
  transform: translateX(-40%) translateY(10%);
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


</style>

</head>

<body>
<body class="bgimg" onload="startScroll(0) ">
<div id="scrollDiv" style="overflow:auto" >
  <!-- 깐지글자 -->
      <ul class="text hidden">
        <li>멋</li>
        <li class="ghost">쟁</li>
        <li class="ghost">이</li>
        <li>사</li>
        <li class="ghost">자</li>
        <li class="ghost">처</li>
        <li class="ghost">럼</li>
        <br><br><br><br>
        <a id="server_time"><?php echo date("Y-m-d H:i:s", time()); ?></a>
        <li class="ghost pl-5 ml-5"> <button type="button"  class="btn btn-dark ghost ml-5"onclick="apply()">APPLY</button></li>
        
    <br> <br> <br><br><br>
    
    <p  font-size: 5em; >
      모집 : 2020.00.00~2020.00.00 00:00 <br>
      서류 및 면접 : 2020.00.00~2020.00.00 <br>
      공식 오리엔테이션 :2020.00.00 
   </p>
      </ul>

    </div>


</body>

</html>