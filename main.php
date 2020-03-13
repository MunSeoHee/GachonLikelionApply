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
	<script>
    function apply(){
        location.href = 'login_page.php';
    }
	
   $(function() {
  var text = $(".text");
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll>200) {
      text.removeClass("hidden");
    } else {
      text.addClass("hidden");
    }
  });
});
</script>
<style>
   @font-face { font-family: 'GmarketSansBold'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansBold.woff') format('woff'); font-weight: normal; font-style: normal; }
   @font-face { font-family: 'yg-jalnan'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_four@1.2/JalnanOTF00.woff') format('woff'); font-weight: normal; font-style: normal; }
   h1{
      color:rgba(243, 212, 73, 0.904);
      font-family:'GmarketSansBold'; 
   }
   p{
      font-size: 120%;
      color:rgba(243, 212, 73, 0.904);
      font-family: 'yg-jalnan'; 
   }
   @import url('https://fonts.googleapis.com/css?family=Muli:300,400,700');

* {
  margin: 0;
  padding: 0;
}
body {
  background-color: #000;
  height: 130vh;
  font-family:'GmarketSansBold'; 
}
.text {
  position: fixed;
  top: 30%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  list-style: none;
  border-bottom: 0;   
}

.text li {
  display: inline-block;
  float: left;
  font-weight: 700;
  font-size: 3rem;
  color:rgba(243, 212, 73, 0.904);
  opacity: 1;
  transition: all 2.3s ease-in-out;
  max-width: 2em;
}
.text.hidden li.spaced {
  padding-left: 1rem;
}
.text li.spaced {
  padding-left: 0.5em;
}

.text.hidden li.ghost {
  opacity: 0;
  max-width: 0;
}

</style>

</head>

<body>
<div class>

  <!--깐지글자-->
  
      <ul class="text hidden">
        <li>멋</li>
        <li class="ghost">쟁</li>
        <li class="ghost">이</li>
        <li>사</li>
        <li class="ghost">자</li>
        <li class="ghost">처</li>
        <li class="ghost">럼</li>
        <br>
        <li class="ghost ml-5 pl-3"><button type="button" class="btn btn-dark ghost ml-5" onclick="apply()">APPLY</button></li>
       
      </ul>

    </div>

</body>

</html>