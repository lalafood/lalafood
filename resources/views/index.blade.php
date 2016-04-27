<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>home</title>
        <link rel="stylesheet" href="{{ URL::asset('menubar/css/style.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/Style-index.css') }}" />
        <!--<link rel="stylesheet" href="slides.css">-->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dancing+Script">
        <!-- css slider-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Food TU</title>
        <meta name="description" content="An image crossfade animation done with CSS3">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('slide-index/css/main.css') }}" />




  </head>

  <body>

    <div class="container">
      <header>
        <div class="menu-toggle">
          <span class="menu-toggle-grippy">Toggle</span>
          <span class="menu-toggle-label">Menu</span>
        </div>
      </header>
      <div class="header">
        <div class="crossfade">
          <figure></figure>
          <figure></figure>
          <figure></figure>
          <figure></figure>
          <figure></figure>
        </div>

        <div class="header-text">
            <h1 style="color: #000000;">Welcome!</h1>
            <span><i>M e n u &nbsp; f r o m &nbsp; R e s o r t &nbsp; P a t t a y a</i></span>
        </div>
      </div>


      <div class="center"> <!-- content under Slider -->
        <div class="center-top">
          <div class="center-top-text">
            <h1> Hello!</h1>
            <img src="pic/line.png">
            <p> Welcome! to website "Menu" from Learning Resort Pattya.</p>
            <p>This website show a comment and ratting which foods</p>
            <p>at Learning Resort,Thammasat University Pattaya Campus.</p>
          </div>
        </div>

        <div class="center-content"> <!-- type of menu -->
            <div class="center-subcontent"> <!-- pictire = main courses -->
              <a href="1main.html">
                <div> <!-- text = main courses -->
                  <h1>Main courses</h1>
                  <span><i>M e n u &nbsp; o f &nbsp; t y p e </i></span>
                </div>
              </a>
                <img src="pic/type1.png">
            </div>


            <div class="center-subcontent">
              <a href="1main.html">
                <div> <!-- text = Noodles -->
                  <h1>Noodles</h1>
                  <span><i>M e n u &nbsp; o f &nbsp; t y p e </i></span>
                </div>
              </a>
              <img src="pic/type2.png">
            </div>

            <div class="center-subcontent">
              <a href="1main.html">
                <div> <!-- text = Soup or Curry -->
                  <h1>Soup or Curry</h1>
                  <span><i>M e n u &nbsp; o f &nbsp; t y p e </i></span>
                </div>
              </a>
              <img src="pic/type3.png">
            </div>

            <div class="center-subcontent">
              <a href="1main.html">
                <div> <!-- text = Dished -->
                  <h1>Dished</h1>
                  <span><i>M e n u &nbsp; o f &nbsp; t y p e </i></span>
                </div>
              </a>
              <img src="pic/type4.png">
            </div>


            <div class="center-subcontent-wood">
                <div>
                    <h1>Type of Menu!</h1>
                    <span><i>W e l c o m e &nbsp; t o &nbsp;&nbsp; <br>w e b s i t e &nbsp; f o r &nbsp; M e n u </i></span>
                </div>

                      <a href={{ url('admin/login')}}><button type="submit">L O G I N</button></a>
                      <img src="pic/center.png">

            </div>


            <div class="center-subcontent">
              <a href="1main.html">
                <div> <!-- text = Dessert -->
                  <h1>Dessert</h1>
                  <span><i>M e n u &nbsp; o f &nbsp; t y p e </i></span>
                </div>
              </a>
              <img src="pic/type5.png">
            </div>
        </div>
      </div>

      <!----------------------------------------------------------------------->
      <div class="hidden-panel"> <!-- menubar of right -->

      <span class="hidden-panel-close">x</span>
      <div class="hidden-panel-content">
        <nav class="hidden-panel-nav">
          <h3>FOODS TU</h3>
          <ul>
            <li><a href="homenew.php" title="Home"><img src="pic/14.png"></a></li>
            <li>
                <?php
                        include 'menubar/menu/index.html';
                 ?>

            </li>
            <li><a href="homenew.php" title="About"><img src="pic/4.png"></a></li>
            <li><a href="homenew.php" title="Contact"><img src="pic/5.png"></a></li>
          </ul>
        </nav>

        <div class="hidden-panel-text">
          <a href={{ url('admin/login')}}><p> L O G I N ! </p></a>
        </div>

        <div class="hidden-panel-credits">
  				<span>(c) Software Engineering</span>
  				<span>Faculty of Engineering,</span>
          <span>Thammasat University Pattaya Campus</span>
          <form> <!--from search-->
            <input style="font-family:Arial;" type="text-search" name="search" placeholder="Search..">
          </form>
        </div>
      </div>
      </div>
    </div>



  </body>
</html>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="menubar/js/index.js"></script>
  </body>
</html>
