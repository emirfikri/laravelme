<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" >

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar"  >

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        
        

    
    <div class="pull-left image">
           <img class="img-circle @if($user->sex == 1){{ 'female' }}@endif" src="{{ Auth::user()->getPhoto(45,45) }}"  alt="" />
        </div>
   
       
        
    

        <div class="pull-left info">


           <a href="{{ url('/'.Auth::user()->username) }}" class="name"><p>{{ Auth::user()->name }}</p></a>
            <a href="{{ url('/'.Auth::user()->username) }}" class="username">{{ '@'.Auth::user()->username }}</a>
          <!-- Status -->
          
          
        </div>
      </div>

      <!-- search form (Optional) -->
      
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree" >
        <li class="header" >Main Navigation</li>
        <!-- Optionally, you can add icons to the links -->
       

         
         <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>


        <li>
            <a href="{{ url('/nearby') }}" class="menu-nearby">
                <i class="fa fa-map-marker"></i>
                <span>Nearby</span>
            </a>
        </li>

        <li>
            <a href="{{ url('/groups') }}" class="menu-groups">
                <i class="fa fa-users"></i>
               <span> Groups </span>
            </a>
            
        </li>
        <li>
            <a href="{{ url('/direct-messages') }}" class="menu-dm">
                <i class="fa fa-commenting"></i>
               <span> Direct Messages</span>
            </a>
          </li>
            
            <li><a href="{{ url('/'.Auth::user()->username) }}"><i class="fa fa-btn fa-user"></i><span>Profile</span></a></li>



            <li role="separator" class="divider"></li>
           
         
         
        <li class="treeview" >
          <a href="#"><i class="fa fa-link"></i> <span>My Account</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="{{ url('/settings') }}">
                                    <i class="fa fa-cog"></i> 
                                      Settings
                                </a>
                              </li>

            <li>
              <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i>

                                      Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                              </li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>