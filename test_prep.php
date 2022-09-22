<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
  </head>
<body>
    <nav class="navbar bg-light" style="z-index:100">
    <div class="container">
    <a class="navbar-brand" href="#">
      <img src="https://www.ucertify.com/layout/themes/bootstrap4/images/logo/ucertify_logo.png" class="align-middle w-100 h-100"  alt="Ucertify logo" width="30" height="24">
    </a>
    <div class="d-flex mx-auto"><h1>uCertify Test Prep</h1></div>
    </div>
    </nav>
    <div class="container" style="height:60vh;width:100vw;margin:50px 150px 0 120px">
    <form action="">
   <p class="font-lg">There are seven stages of internal consulting that a HR Professional must be familiar with. Which one of the following is not one of the seven stages of internal consulting?</p>
   <input type="radio" id="html" name="fav_language" value="HTML">
   <label for="html"  class="font-lg">Exploring the situation</label><br>
   <input type="radio" id="css" name="fav_language" value="CSS">
   <label for="css"  class="font-lg">CSS</label><br>
   <input type="radio" id="javascript" name="fav_language"   value="JavaScript">
   <label for="javascript"  class="font-lg">JavaScript</label>
    </form>
    </div>

    <footer class="container d-flex flex-wrap justify-content-end align-items-center py-3 my-4 border-top">
    <div class="col-md-2 justify-content-end d-flex align-items-center">
      <span class="mb-3 mb-md-0  fw-bold font btns" id="timer"></span>
    </div>

    <ul class="nav col-md-6 justify-content-between d-flex">
    <button type="button" class="btn btn-light font btns border">List</button>
    <button type="button" class="btn btn-light font btns  border">Previous</button>
    <div class="fw-bold font btns">1 of 10</div>
    <button type="button" class="btn btn-light font btns border">Next</button>
    <button type="button" class="btn btn-light font btns border">End Test</button>
    </ul>
  </footer>
  <script type="text/javascript">

  var countDownDate = new Date("Sep 23, 2022 15:37:25").getTime();
  var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  //var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
 if(minutes === 4 ){
    window.location.href = "result.php";
 }
 else{
 var a =  document.getElementById("timer").innerHTML =   minutes +" : " +seconds;
    }
  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "EXPIRED";
  }
}, 1000);


  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>