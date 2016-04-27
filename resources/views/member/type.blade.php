<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>CSS3 side panel with menu</title>
    
        <link rel="stylesheet" href="menubar-admin(viewmenu)/css/style.css">
        <link rel="stylesheet" href="css/Style-TypeMenu2.css">
        <!--<link rel="stylesheet" href="slides.css">-->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dancing+Script">

        <!-- img list menu-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  </head>

  <body>

    <div class="container">
      <header> <!-- buttom 3 line MENU -->
        <div class="menu-toggle">
          <span class="menu-toggle-grippy">Toggle</span>
          <span class="menu-toggle-label">Menu</span>
        </div>
      </header>

      <div class="center"> <!--  -->
        <center>
        <h1> Welcome! </h1>
        <span><i> U S E R </i></span>
        <img class="imgline" src="../pic/line.png">
        <div class="subcenter">
            <p class="head-box">Noodles.</p>
            <center>
              <div class="w3-row-padding w3-margin-top" color="#000000";>

              <div class="w3-third">
              <div class="w3-card-2">
              <img src="http://amazingthaifood.tourismthailand.org/food_photo/m4_01.jpg" style="width:100%" >
              <div class="w3-container">
              <h5><i>Pad thai</i></h5>
              <img src="http://www.arborviewdentalgroup.com/wp-content/uploads/2013/09/5-Gold-Stars1.jpg" style="width:30%">
              <p><i>60 Bath</i></p>
              </div>
              </div>
              </div>

              <div class="w3-third">
              <div class="w3-card-2">
              <img src="http://www.jjdelivery.com/new/images/product/00241.jpg" style="width:100%">
              <div class="w3-container">
              <h5><i>Fried thin noodles with soy sauce</i></h5>
              <img src="https://upic.me/i/4p/5-gold-sta13.jpg" style="width:20%">
              <p><i>40 Bath</i></p>
              </div>
              </div>
              </div>

              <div class="w3-third">
              <div class="w3-card-2">
              <img src="http://www.xn--72cfaa1dsag3b5bk2c2ad9bbe6drh8dc25bwa.com/uploads/filecenter/images/Food/Knowledge/040%20(1).jpg" style="width:100%">
              <div class="w3-container">
              <h5><i>Noodles</i></h5>
              <p><i>40 Bath</i></p>
              <img src="https://upic.me/i/wa/5-gold-stars12.jpg" style="width:13%">
              </div>
              </div>
              </div>

              </div>
              <div class="w3-row-padding w3-margin-top">

              <a href="User-View.php">
              <div class="w3-third">
              <div class="w3-card-2">
              <img src="pic/view-kj1.jpg" style="width:100%">
              <div class="w3-container">
              <h5><i>Rice noodles</i></h5>
              <p><i>40 Bath</i></p>
              <img src="https://upic.me/i/tk/5-gold-sta14.jpg" style="width:20%">
              </div>
              </div>
              </div>
            </a>

              <div class="w3-third">
              <div class="w3-card-2">
              <img src="http://2.bp.blogspot.com/-uFNwd8x8q2U/U5m4w3WomcI/AAAAAAAAFcA/omSqjWBRDcg/s1600/spaghetti-carbonara5.jpg" style="width:100%">
              <div class="w3-container">
              <h5><i>Spaghetti</i></h5>
              <p><i>50 Bath</i></p>
              <img src="https://upic.me/i/tk/5-gold-sta14.jpg" style="width:27%">
              </div>
              </div>
              </div>

              <div class="w3-third">
              <div class="w3-card-2">
              <img src="http://sv5.postjung.com/imgcache/data/783/783642-img-1404095451-3.jpg" style="width:100%">
              <div class="w3-container">
              <h5><i>Fried noodle with pork and broccoli</i></h5>
              <p><i>40 Bath</i></p>
              <img src="https://upic.me/i/wa/5-gold-stars12.jpg"style="width:13%">
              </div>
              </div>
              </div>
            </div>
          </center>
        </div>
      </center>
      </div>
      <!----------------------------------------------------------------------->
      <div class="hidden-panel"> <!-- menubar of right -->

      <span class="hidden-panel-close">x</span> <!-- buttom close -->
      <div class="hidden-panel-content">
        <nav class="hidden-panel-nav">
          <h3>FOODS TU</h3> <!-- (1) buttom of memubar -->
          <ul>
            <li><a href="homenew.php" title="Home"><img src="pic/14.png"></a></li> <!-- buttom 'HOME' -->
            <!-- buttom 'MENU' -->
            <li> <!-- List type of menu = main courses , noodles , soup od curry , dished , dessert -->
              <?php
                include 'menubar/menu/index.html';
              ?>
            </li>
            <li><a href="homenew.php" title="About"><img src="pic/4.png"></a></li> <!-- buttom 'About' -->
            <li><a href="homenew.php" title="Contact"><img src="pic/5.png"></a></li> <!-- buttom 'CONTACT' -->
          </ul>
        </nav>

        <div class="hidden-panel-text"> <!-- (2) User -->
          <img src="pic/icon-user.png"><br><span>Username</span>
          <br><a href=""><span>Change Password |</span</a>
          <a href="index.php"><span> Logout</span></a>
        </div>

        <div class="hidden-panel-credits"> <!-- (1) Foot -->
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
