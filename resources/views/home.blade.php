<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="profile" href="{{('img/logo.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{asset('asset/style.css')}}" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
    <!-- navbar start -->
        <div id="navbar">
            <nav class="navbar navbar-expand-sm " id="navbarSupportedContent">
                <div class="container-fluid">
                    <div class="navbar-brand ">
                        <img src="{{('img/logo.png')}}"  class="gambar ">
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item mainMenu-itemLevel1">
                                <a class="nav-link active " aria-current="page" href="home">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Produk
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="brownies">Brownies</a></li>
                                    <li><a class="dropdown-item" href="#">Bolu</a></li>
                                    <li><a class="dropdown-item" href="#">Pastry</a></li>
                                </ul>
                            </li>
                            <li class="nav-item mainMenu-itemLevel1">
                            <a class="nav-link" href="tentang-kami">Tentang Kami</a>
                            </li>
                        </ul>
                        <div class="me-5" >
                            <a href="login"class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                            <a href="" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline do">Register</a>
                        </div>
                    </div>
                </div>
            </nav>   
        </div>   
    <!-- navbar end -->
    <!-- carousel start -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 557px;" >
                    <img src="{{('img/gambar.jpg')}}" alt="Brownies" class="d-block w-100 picture h-100">
                </div>
                <div class="carousel-item" style="height: 557px;">
                    <img src="{{('img/gambar2.jpg')}}" alt="brownnies" class="d-block w-100 picture h-100">
                </div>
                <div class="carousel-item" style="height: 557px;">
                    <img src="{{('img/gambar3.jpg')}}" alt="brownnies" class="d-block w-100 picture h-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    <!-- caraosel end -->
    <!-- produk start -->
        <div>
            <h1 class="text-center my-5">Featured Products</h1>
            <p class="text-center my-5 mx-auto col-lg-7">JoBrownies offers the best products in Indonesia. Selected ingredients, balanced texture, rich taste, and delicious presentation are used to make each product perfect.</p>
            <div class="main">
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('brownies')"> Brownies</button>
  <button class="btn" onclick="filterSelection('bolu')"> Bolu</button>
  <button class="btn" onclick="filterSelection('pastry')"> Pastry</button>
</div>
<div class="row">
  <div class="column brownies">
    <div class="content">
      <img src="" alt="pastry" style="width:100%">
      <h4></h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column brownies">
    <div class="content">
    <img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
      <h4>Lights</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column brownies">
    <div class="content">
    <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
      <h4>Forest</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  
  <div class="column bolu">
    <div class="content">
      <img src="/w3images/bolu1.jpg" alt="Car" style="width:100%">
      <h4>Retro</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column bolu">
    <div class="content">
    <img src="/w3images/bolu2.jpg" alt="Car" style="width:100%">
      <h4>Fast</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column bolu">
    <div class="content">
    <img src="/w3images/cars3.jpg" alt="Car" style="width:100%">
      <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column pastry">
    <div class="content">
      <img src="{{('img/pastry1.webp')}}" alt="Car" style="width:100%">
      <h4>Choco banana puff pastry</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column pastry">
    <div class="content">
    <img src="/w3images/pastry2.jpg" alt="Car" style="width:100%">
      <h4>Man</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column pastry">
    <div class="content">
    <img src="/w3images/pastry3.jpg" alt="Car" style="width:100%">
      <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>
        </div>
    <!--footer start -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h6>About</h6>
                        <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <h6>Categories</h6>
                        <ul class="footer-links">
                        <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
                        <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
                        <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
                        <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                        <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                        <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <h6>Quick Links</h6>
                        <ul class="footer-links">
                        <li><a href="http://scanfcode.com/about/">About Us</a></li>
                        <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                        <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
                        <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                        <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
                            <a href="#">Scanfcode</a>.
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    <!-- footer end -->
    <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-242px";
    }
    prevScrollpos = currentScrollPos;
    }
    </script>
    <script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</body>
</html>