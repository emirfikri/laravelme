<style type="text/css">
.center {
    text-align: center;
    border: 2px;
   }
.img {
    display: block;
    margin:  auto;
} 
</style>
@extends('layouts.master')

@section('title')
    Welcome!
@endsection



<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
<body style="margin-bottom: 30px;">

@section('content')
    @include('inc.message-block')
    <div class="row">

    <div class="col-md-6">
        <div class="form-box">
         <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" alt=""  style="height:80% width:80%" />
                </a>
    </div>
     </div>  
    <div class="col-md-6">
        <div class="form-box" id="login-box">
        
            <div class="header">Sign In</div>
            <form action="{{ route('login') }}" method="post">
                <input type="hidden" value="login" name="tab" />
    {{ csrf_field() }}

                <div class="body bg-gray">
                    <div class="form-group">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                     <label for="email" class="control-label">E-Mail Address</label>
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i> </span>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}" placeholder="E-Mail" required>
                </div>
            </div>
            </div>
                
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                     <label for="email" class="control-label">Password</label>
                        <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i> </span>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}" placeholder="Password" required>
                </div>
                </div>

                
            <div class="form-group">
                <input id="checkbox2" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="checkbox2">
                    Remember Me
                </label>
            </div>
        

            

                <button type="submit" class="btn bg-olive btn-block">Sign In</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div>
                    <a href="/register" class="text-center">Register a new membership</a>
                </div>
                 <div>                                                               
                    <a href="{{ route('admin.password.request') }}">
                    Forgot Your Password?</a> 
                
                

        </div>

                

            </form>
        </div>
        </div>

        </div>
          


    


  




    <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script> 








          

@endsection

</body>
