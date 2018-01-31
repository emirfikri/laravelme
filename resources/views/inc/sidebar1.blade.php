<!DOCTYPE html>
<html>
<head>
<style>
body {
    font-family: "Lato", sans-serif;
   
}

.sidenav {
    height: 100%;
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}
.navbar-fixed-left {
  @media (min-width: @screen-sm-min) {
    right: auto !important;
    left: 0 !important;
    border-width: 0 1px 0 0 !important;

    .dropdown {

      .dropdown-menu {
        left: 100%;
        right: auto;
        border-radius: 0 @border-radius-base @border-radius-base 0;
      }

      .dropdown-toggle {
        .caret {
          border-top: @caret-width-base solid transparent;
          border-left: @caret-width-base solid;
          border-bottom: @caret-width-base solid transparent;
          border-right: none;
        }
      }
    }


  }
}
.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}
.sidenav p{
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 15px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

/*.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    /*font-size: 28px;  Increased text to enable scrolling  */
/*    padding: 0px 10px;
} */

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
.center {
    text-align: center;
    border: 2px;
</style>
</head>
<body>
<div class="navbar-fixed-left">
<div class="sidenav">
   <a href="#"></a>
  
  <a href="#"></a>
  <a href="#"></a>
    <a href="#"></a>
     <a href="#"></a>

  <div class="center">
           <img class="img-circle @if($user->sex == 1){{ 'female' }}@endif" src="{{ Auth::user()->getPhoto(80,80) }}"  alt="" />
       </div>
   <br>
       
        <div >
    

        


           <a href="{{ url('/'.Auth::user()->username) }}" class="username"><p>{{ '@'.Auth::user()->username }}</p></a>
          <!-- Status -->
          
          
        </div>
      
     
        <!-- Optionally, you can add icons to the links -->
       

         
         <a href="{{ url('/') }}" ><i class="fa fa-home"></i> Home</a>

       
            <a href="{{ url('/nearby') }}" class="menu-nearby">
                <i class="fa fa-map-marker"></i>
                Nearby
            </a>
       

       
          
            
        
       
            <a href="{{ url('/direct-messages') }}" class="menu-dm">
                <i class="fa fa-commenting"></i>
               Direct Messages
            </a>
         
            
           <a href="{{ url('/'.Auth::user()->username) }}"><i class="fa fa-btn fa-user"></i><span>Profile</span></a>



           
           
         
         
        
          
              <a href="{{ url('/settings') }}">
                                    <i class="fa fa-cog"></i> 
                                      Settings
                                </a>
                             

           
              <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i>

                                      Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                             
          
       
    
</div>

</div>
     
</body>
</html> 