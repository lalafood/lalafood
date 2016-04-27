<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>C H A N G E    P A S S W O R D</title>
        <link rel="stylesheet" href="{{asset('menubar/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/Style-Changepass.css')}}">
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
        <span><i> U S E R </i></span>
        <img src="pic/line2.png">

        <div class="subcenter"> <!-- Contain Manage User and Food -->
          <p class="head-box">Change Password.</p><br>
          <div class="center-top">
              <form role="form" method="POST" action="{{ url('/member/changepassworde/action') }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  @if (session('error'))
                          <div class="alert alert-error">
                              {{ session('error') }}
                          </div>
                        @endif
                      <span class="tip tip-left"></span>
                      <div class="field">
                          <label for='foodname'>E-mail |
                          <input type="text" name="email" id="foodname" autocomplete="off" placeholder="Old Password . ."></label>
                          {!!$errors->first('oldpassword', '<span class="control-label color-red" for="oldpassword">*:message</span>')!!}
                      </div>
                      <div class="field">
                          <label for='foodname'>New Password |
                          <input type="password" name="newpassword" id="foodname" autocomplete="off" placeholder="New Password . ."></label>
                          {!!$errors->first('newpassword', '<span class="control-label color-red" for="newpassword">*:message</span>')!!}
                      </div>
                      <div class="field">
                          <label for='foodname'>Rety Password |
                          <input type="password" name="password_confirmation" id="foodname" autocomplete="off" placeholder="Rety Password . ."></label>
                          {!!$errors->first('password_confirmation', '<span class="control-label color-red" for="password_confirmation">*:message</span>')!!}

                      </div>
                      <div class="field">
                            <button type="submit">Submit</button>
                      </div>
          </form>
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
            <li><a href="member/index" title="Home"><img src="pic/14.png"></a></li> <!-- buttom 'HOME' -->
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
                <div class="hidden-panel-text"> <!-- (2) User -->
                  <img src="pic/icon-user.png"><br><span>{{$user->name}}</span>
                  <br><a href="{{url('member/changepassword')}}"><span>Change Password |</span</a>
                  <a href="{{url('member/index/logout')}}"><span> Logout</span></a>
                </div>
        @endif
        @if(!$user)
              <a href={{ url('admin/login')}}><button type="submit">L O G I N</button></a>
              <img src="pic/center.png">
      @endif

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
