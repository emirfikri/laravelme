

@extends('layouts.master')



<head>
 
        <meta charset="UTF-8">
        <title>Registration Page</title>
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
    </head>

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
    <div class="row">
        
            <div class="header">Register New Membership</div>
            <div class="body bg-gray">
                <form class="register" role="form" method="POST" action="{{ route('register') }}">
    <input type="hidden" value="register" name="tab" />
    {{ csrf_field() }}
                
           
                <input type="hidden" value="register" name="tab" />
    {{ csrf_field() }}

                   <label for="email" class="control-label">E-Mail Address</label>

                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i> </span>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}" placeholder="Email" class="form-control" required />                    
            </div>



                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                   
                    <label for="name" class="control-label"> Name </label>
                    <div class="input-group">

                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i> </span>

                    <input id="name" type="text" placeholder="John Doe" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                </div>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
                </div>




                 <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} ">
            <label for="username" class="control-label">Username</label>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i> </span>

                    <input id="username" type="text" class="form-control" placeholder="example" name="username" value="{{ old('username') }}" required>

                </div>
                @if ($errors->has('username'))
                    <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
                @endif
            </div>


        </div>



                
            <label for="password" class="control-label">Password</label>

                <div class="form-group  { $errors->has('password') ? ' has-error' : '' }} ">
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock-alt"></i> </span>
                    <input id="password" type="password" placeholder="********" class="form-control" name="password" required />

                </div>
                @if ( $errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                   </div>

                               <label for="confirm password" class="control-label">Confirm Password</label>

                <div class="form-group">
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock-alt"></i> </span>

                    <input id="password-confirm" type="password" placeholder="********" class="form-control" name="password_confirmation" required />
                </div>
            </div>
                
                <button type="submit" class="btn bg-olive btn-block">Sign me up</button>
               
                <a href="/" class="text-center">I already have a membership</a>
            </form>
            </div>

             


        
    </div>
</div>
</div>
</div>
</div>
</body>
 <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>



   

    @endsection
