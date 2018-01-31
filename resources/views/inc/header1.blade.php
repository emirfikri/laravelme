 <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>i</b>SL</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>iStudent</b>Lounge</span>
    </a>
 

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      

                  
 <div class="navbar-form navbar-left">
                    <form id="custom-search-input" method="get" action="{{ url('/search') }}">
                        <div class="input-group col-md-12">
                            <input type="text" class="form-control input-lg" name="s" placeholder="search..." />
                            <span class="input-group-btn">
                                <button type="submit" >
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>



      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
 




            <li class="dropdown direct-messages-notification">
    <a href="#" class="dropdown-toggle parent" data-toggle="dropdown" role="button" aria-expanded="false">
        <i class="fa fa-envelope-o"></i>
    </a>
</li>
</li>



            
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">{{ count(sHelper::notifications()) }}</span>
            </a>

            <ul class="dropdown-menu">


              <li>

                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                   
                        @if(count(sHelper::notifications()) == 0)
            <li style="padding: 10px"><a href="javascript:;">There is no notification.</a></li>
        @else
            @foreach(sHelper::notifications() as $notification)
                <li>
                    <a href="{{ $notification['url'] }}">
                        <i class="fa {{ $notification['icon'] }}"></i> {{ $notification['text'] }}
                    </a>
                </li>
            @endforeach
        @endif
                    
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              
            </ul>
          </li>
          

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="/account" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img class="img-circle @if($user->sex == 1){{ 'female' }}@endif" alt="User Image" src="{{ Auth::user()->getPhoto(30, 30) }}">
            

    
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ Auth::user()->name }} </span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                
                
                 <img class="img-circle @if($user->sex == 1){{ 'female' }}@endif" alt="User Image" src="{{ Auth::user()->getPhoto(90, 90) }}">
        
        
                <p>

                {{ Auth::user()->name }}
                  <small>{{ '@'.Auth::user()->username }}</small>
                </p>
              </li>

              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">



                    <a class="purple" href="{{ url('/'.Auth::user()->username.'/followers') }}">Followers</a>

                   <div  class="row"> {{ Auth::user()->follower()->where('allow', 1)->count() }} </div>
                  </div>
                  
                  <div class="col-xs-4 text-center">
                    <a class="green" href="{{ url('/'.Auth::user()->username.'/following') }}">Following</a>
                   <div  class="row"> {{ Auth::user()->following()->where('allow', 1)->count() }}</div>

                  </div>
                  
                  <div class="col-xs-4 text-center">
                    <a class="blue" href="{{ url('/'.$user->username) }}">Post      </a>
                   <div  class="row">  {{ Auth::user()->posts()->count() }} </div>

                  </div>
                
                </div>
                <!-- /.row -->
              </li>

              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="row">
                  

                  <div class="col-xs-4 text-center">

                    <a href="{{ url('/'.Auth::user()->username) }}">
                                    <i class="fa fa-user"></i> 
                                    <div  class="row">  My Profile</div>
                                </a>
                   </div>
                  
                  <div class="col-xs-4 text-center">
                    <a href="{{ url('/settings') }}">
                                    <i class="fa fa-cog"></i> 
                                    <div  class="row">  Settings</div>
                                </a>

                  </div>
                  
                  <div class="col-xs-4 text-center">
                    <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i>

                                    <div  class="row">  Logout</div>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                  </div>
                
                </div>
                  
                   
                 
                 
               
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>