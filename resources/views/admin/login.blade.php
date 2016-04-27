<!DOCTYPE html>
<html>
  <head>

   <link rel="stylesheet" href="{{asset('css/styles-login.css')}}">
  </head>

  <body>
    <br><br><br><br><br><br><br>
        <center><h1 class="toplogin">LOGIN</h1></center> <!--head login*/-->
        <div class="login">
            @if(Session::has('message'))
            <div class="panel-body bg-danger color-red">
            {{Session::get('message')}}
            </div>
            @endif
          <form role="form" method="POST" action="{{ url('/admin/login/process')}}">

                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <fieldset>
                         <div class="form-group">
                            <input type="text-login" placeholder="Username" name="username" type="text" autofocus value="{{old('username')}}">  <!--box username-->
                            {!!$errors->first('username', '<span
                    class="control-label color-red" for="username">*:message</span>')!!}
                        </div>

                        <div class="form-group">
                            <input type="password" placeholder="Password" name="password"  value="">
                            {!!$errors->first('password', '<span
                    class="control-label error" for="password">*:message</span>')!!}
                        </div>


                            <button  type="submit" >S I G N   I N</button><!--buttom sign in-->
            </fieldset>
          </form>
        </div>
  </body>
</html>
