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

        <div class="col-md-8 col-md-offset-2">
        <div class="form-box">
            <div class="panel panel-default">
                <div class="header">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="body bg-gray">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                     <label for="email" class="control-label">E-Mail Address</label>
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i> </span>

                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}" placeholder="E-Mail" required>
                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>
            
                           
                        </div>

                        
                            
                                 <button type="submit" class="btn bg-olive btn-block"> Send Password Reset Link</button>
                         
                        </div>
                    </form>
                </div>
        </div>
     </div>  
 </div>
    <div class="col-md-6">
        <div class="form-box" id="login-box">
        
            
            <form action="{{ route('admin.password.email') }}" method="post">
                <input type="hidden" value="login" name="tab" />
    {{ csrf_field() }}

                
                   
                
              

           
        

            

               
                
                

        </div>

                

            </form>
        </div>
        </div>

        </div>