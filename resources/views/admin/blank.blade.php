<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>CSS3 side panel with menu</title>
        <link rel="stylesheet" href="{{asset('menubar-admin/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/Style-AdminHome.css')}}">
        <!--<link rel="stylesheet" href="slides.css">-->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dancing+Script">
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
        <span><i> A D M I N I S T R A T O R</i></span>
        <img src="../pic/line2.png">

        <div class="subcenter"> <!-- Contain Manage User and Food -->
          <div class="center-top">
            <a href="{{url('admin/user/index')}}"><p class="User-box">User.</p></a>
            <a href="{{url('admin/upload/index')}}"><p class="Food-box">Food.</p></a>
          </div>
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
            <li><a href="{{url('admin/home')}}" title="Home"><img src="pic/14.png"></a></li><!--home admin is index user -->
			<!-- buttom 'HOME' -->
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






		  @if($user)
                  <div class="hidden-panel-text"> <!-- (2) Admin-->
					  <img src="pic/icon-user.png"><br><span>  {{$user->name}}</span><br>
					 <a href="{{url('admin/index')}}"><span>H O M E |</span></a>


                    <a href="{{url('admin/index/logout')}}"><span> Logout</span></a>
                  </div>
          @endif
          @if(!$user)
		  		<div class="hidden-panel-text"> <!-- (2) Admin-->
                <a href={{ url('admin/index/login')}}><button type="submit">L O G I N</button></a>
                <img src="pic/center.png">
        @endif
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
