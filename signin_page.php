<!Doctype html>
<html>



<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<title>회원가입</title>

</head>

<body>
   <div class="p-3 mb-2 bg-dark text-white">


<h1>회원가입</h1>
<hr></hr>
<form>
   <!--색상 class="text-warning"-->
   <!--이름-->
   <div class="form-group">
      
      <label for="exampleFormControlInput1" class="text-warning">이름</label>
      <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="홍길동">
     </div>
     <!--이메일-->
   <div class="form-group">

     <label for="exampleFormControlInput1"class="text-warning">이메일</label>
     <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
   </div>

   <!--성별-->
   <div class="form-group">
     <label for="exampleFormControlSelect1"class="text-warning">성별</label>
     <select class="form-control" id="exampleFormControlSelect1">
      <option>남자</option>
      <option>여자</option>
     </select>
   </div>

<!--연락처-->
   <div class="form-group">

      <label for="exampleFormControlInput1"class="text-warning">연락처</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="010-xxxx-xxxx">
     </div>
<!--학년-->
     <div class="form-group">
      <label for="exampleFormControlSelect1"class="text-warning">학년</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>1학년</option>
        <option>2학년</option>
        <option>3학년</option>
        <option>4학년</option>
      </select>
     </div>
<!--질문 텍스트에리어 3개(서희요청)-->
<!--1번질문-->
   <div class="form-group">
     <label for="exampleFormControlTextarea1"class="text-warning">주량은?</label>
     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
   </div>
  </form>
<!--2번질문-->
<div class="form-group">
   <label for="exampleFormControlTextarea1"class="text-warning">여자일시 남자친구있어요?</label>
   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
<!--3번질문-->
<div class="form-group">
   <label for="exampleFormControlTextarea1"class="text-warning">남자일시 안받아요</label>
   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
배경어두움 <!--배경어두움은 삭제--></div>





</body>



</html>