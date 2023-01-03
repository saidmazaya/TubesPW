<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/font-awesome.css">
    <link rel="stylesheet" href="css/category.css">
    <title>Menu</title>

    <style>
        .single-menu img , h5 , p {
            text-decoration: none;
        }

        a:hover, a:visited, a:link, a:active, a
{
    text-decoration: none;
    color: black;
}

 .single-menu img {
    background-color: #8BD9CA;
 }
    </style>

</head>
<body>

     <!-- NAVIGATION BAR -->
     <nav class="navbar navbar-expand-lg shadow-sm header_menu_1 pt-30 pb-30 mt-30 fixed-top" style="background-color: #FFF3E4;" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" id="brand" href="index.html">COFTEA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
              <li class="nav-item">
                <a class="nav-link" id="navbar-item" style="color: #483434;"  href="category.html">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" style="color: #483434;" href="#subscription">Bundle</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" style="color: #483434;" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" style="color: #483434;" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
              <li class="nav-item">
                <div class="search-box my-lg-0">
                      <input class="search-text mr-sm-2 " type="text" name="" placeholder="Search">
                      <a class="search-btn" href=""><i class="fas fa-search "></i></a>
                </div>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link active" style="color: #483434;" href="register.html"><i class="fa fa-user"></i> Login</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link active" style="color: #483434;" href="#cart"><i class="fa fa-shopping-cart"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #483434;" href="./login/register.php" >
                  <i class="fa fa-user"></i>
                  <span class="fs-6 mr-2 d-none d-lg-inline small" id="login" style="color: #483434;">Log In
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- NAVIGATION BAR END -->

    <div class="main">
        <div class="section-title">
            <h2>our menu</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, eum!</p>
        </div>
        <div class="menus">
            <div class="menu-column">
                <h4>Coffee</h4>
                <div class="single-menu">
                 <a href="ColdCoffee.html" ><img src="images/cold coffees/cold brew.png" alt="" >
                    <div class="menu-content">
                        <h5>Cold Coffee</h5>
                        <p>Lorem ipsum dolor sit amet.</p></a>
                    </div>
                </div>
                <div class="single-menu">
                    <a href="HotCoffee.html"><img src="images/hot cofees/honey almondmilk  flat white.png" alt="">
                    <div class="menu-content">
                        <h5>Hot Coffee</h5>
                        <p>Lorem ipsum dolor sit amet.</p></a>
                    </div>
                </div>
            </div>
            <div class="menu-column">
                <h4>Tea</h4>
                <div class="single-menu">
                    <a href="IcedTea.html"><img src="images/iced teas/iced earl grey tea.png" alt="">
                    <div class="menu-content">
                        <h5>Iced Tea</h5>
                        <p>Lorem ipsum dolor sit amet.</p></a>
                    </div>
                </div>

                <div class="single-menu">
                   <a href="HotTea.html"> <img src="images/hot tea/My project (72).png" alt="">
                    <div class="menu-content">
                        <h5>Hot Tea</h5>
                        <p>Lorem ipsum dolor sit amet.</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>