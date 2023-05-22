<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

    <meta name="generator" content="Hugo 0.84.0">

    <title>首页 – 原神✨交流群</title>



    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">



    



    <!-- Bootstrap core CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <style>

      .bd-placeholder-img {

        font-size: 1.125rem;

        text-anchor: middle;

        -webkit-user-select: none;

        -moz-user-select: none;

        user-select: none;

      }



      @media (min-width: 768px) {

        .bd-placeholder-img-lg {

          font-size: 3.5rem;

        }

      }

    </style>



    

    <!-- Custom styles for this template -->

    <link href="carousel.css" rel="stylesheet">

  </head>

  <body class="pt-2 px-2 pb-0">

    

<!--<header>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

    <div class="container-fluid">

      <a class="navbar-brand" href="#">Carousel</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">

        <ul class="navbar-nav me-auto mb-2 mb-md-0">

          <li class="nav-item">

            <a class="nav-link active" aria-current="page" href="#">Home</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="#">Link</a>

          </li>

          <li class="nav-item">

            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>

          </li>

        </ul>

        <form class="d-flex">

          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

          <button class="btn btn-outline-success" type="submit">Search</button>

        </form>

      </div>

    </div>

  </nav>

</header> -->



<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators" id="btnnxpv1">

      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>

      <!--<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>-->

    </div>

    <div class="carousel-inner" >

      <div class="carousel-item active " >

            <?php 
                include_once "db.php";
                $sqlsplash = "SELECT * FROM dcsplash";
                $resultsplash = mysqli_query($conn, $sqlsplash);
                $rowsplash = mysqli_fetch_assoc($resultsplash);
            ?>

        <img  id="imgUNcover" src="<?php echo $rowsplash["splashlink"]; ?>?size=2048"  alt="">



        <div class="container ">

          <div class="carousel-caption">

            <?php 
                include_once "db.php";
                $sql1 = "SELECT * FROM dcavatar";
                $result1 = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_assoc($result1);

            ?>

            <img class="rounded-circle " src="<?php echo $row1["avatarlink"]; ?>" alt="">

            <p class="fs-2 fw-light">原神✨交流群</p>

            <p class="pb-4"><a class="btn btn-lg btn-light fw-bold py-3 px-4 fs-6" href="https://discord.gg/xDcCVNs9B7" id="btnJoinDc"><img src="asset/dcIcon.svg" width="30px"> Discord</a></p>

          </div>

        </div>

      </div>

     

      <!--<div class="carousel-item">

        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>



        <div class="container">

          <div class="carousel-caption">

            <h1>Another example headline.</h1>

            <p>Some representative placeholder content for the second slide of the carousel.</p>

            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>

          </div>

        </div>

      </div>

      <div class="carousel-item">

        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>



        <div class="container">

          <div class="carousel-caption text-end">

            <h1>One more for good measure.</h1>

            <p>Some representative placeholder content for the third slide of this carousel.</p>

            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>

          </div>

        </div>

      </div> -->

    </div>

    <button class="carousel-control-prev btnnxpv" id="btnnxpv2" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">

      <span class="carousel-control-prev-icon" aria-hidden="true"></span>

      <span class="visually-hidden">Previous</span>

    </button>

    <button class="carousel-control-next" id="btnnxpv" type="button" data-bs-target="#myCarousel" data-bs-slide="next">

      <span class="carousel-control-next-icon" aria-hidden="true"></span>

      <span class="visually-hidden">Next</span>

    </button>

  </div>

  <!-- Marketing messaging and featurettes

  ================================================== -->

  <!-- Wrap the rest of the page in another container to center all the content. -->



  <div class="container marketing">



    <!-- Three columns of text below the carousel -->

    <div class="row">

      <div class="col-lg-4" >

        <a href="https://genshindc.com/abyss/abyss.php"><img class="bd-placeholder-img rounded " width="100" height="100" style="margin-bottom: 1.5px;" src="asset/pic_001.png"></a>     



        <p><a class="btn btn-secondary " href="https://genshindc.com/abyss/abyss.php">深渊小帮手 &raquo;</a></p>

      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4" >

       <a href="https://genshinwishsimulator.genshindc.com/"><img class="bd-placeholder-img rounded" width="100" height="100" src="asset/gacha.png"></a>     

           

        <p><a class="btn btn-secondary " href="https://genshinwishsimulator.genshindc.com/">祈愿模拟器 &raquo;</a></p>

      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4" >

        <a href="https://genshin.pub/relic"><img class="bd-placeholder-img rounded " width="100" height="100" src="asset/圣遗物.png" ></a>     

           

        <p><a class="btn btn-secondary " href="https://genshin.pub/relic">圣遗物评分 &raquo;</a></p>

      </div><!-- /.col-lg-4 -->

    </div><!-- /.row --> 


    <!-- /END THE FEATURETTES -->
    
  </div><!-- /.container -->

  

</main>

<!-- FOOTER -->

<footer class="container-fluid p-0">

<div class="text-center btnscrolldwn" onmouseover="bigImg(this)" onmouseout="normalImg(this)" style="border:transparent;">
   
    <i class="bi bi-caret-down-fill"></i>   

  <hr class="featurette-divider">

 <!-- <p class="float-end"><a href="#">Back to top</a></p>-->

  <p class="text-center">Managed by <a href="https://discord.gg/xDcCVNs9B7" id="dcServer" >原神✨交流群 </a> | Developed by MING @2022</p>
</div>
</footer>



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script>

      if(document.getElementsByClassName('carousel-item').length < 2){

        document.getElementById("btnnxpv").style.display = "none";

        document.getElementById("btnnxpv1").style.display = "none";

        document.getElementById("btnnxpv2").style.display = "none";        

      }     

    </script>

    <script>

        window.onresize = displayWindowSize;
        window.onload = displayWindowSize;

        function displayWindowSize() {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        };

        function bigImg(x) {
          if(myWidth>992 && myHeight>733){
            window.scrollTo(0,document.body.scrollHeight);
          }          
        }

        function normalImg(x) {
          if(myWidth>992 && myHeight>733){
            window.scrollTo(0, 0);
          }
        }

    </script>     

    <!--<script>
      if(screen.width>=1500 && screen.width<2000){ document.write("<style>body{zoom:125%}.btnscrolldwn i{display:block}</style>");}
      if(window.innerWidth>=1500 && window.innerHeight>=1000 && window.innerHeight<1040){ document.write("<style>body{zoom:135%}.btnscrolldwn i{display:block}</style>");}
      if(screen.width>=2000){ document.write("<style>body{zoom:135%}</style>");}
      if(window.innerWidth>=2000 && window.innerHeight>=1000 && window.innerHeight<1040){ document.write("<style>body{zoom:135%}.btnscrolldwn i{display:block}</style>");}
      if(screen.width>=2500){ document.write("<style>body{zoom:150%}.btnscrolldwn i{display:block}</style>");}
    </script>-->

  </body>

  

</html>

