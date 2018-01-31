   <div class="box box-primary">
    <div class="box-body box-profile">
       @if (Auth::check())
      
        
       <div class="user-panel"></div> 
        <ul class="list-group list-group-unbordered">
        <li class="list-group-item">
          <a data-fancybox="group" href="{{ $user->getPhoto() }}">
               
         <img class="img-circle @if($user->sex == 1){{ 'female' }}@endif" alt="User Image" src="{{ $user->getPhoto(90, 90) }}">
       </a>
         <div class="info pull-right">
      <small><a href="{{ url('/'.$user->username) }}" class="name">{{ $user->name }}</a></small>
      <p>
      <small >{{ '@'.$user->username }}</small></p>
    
      </div>
    </li>
      </ul>

      <ul class="list-group list-group-unbordered">
        <li class="list-group-item">
          <b>Followers</b> <a class="pull-right"  href="{{ url('/'.$user->username.'/followers') }}">{{ $user->follower()->where('allow', 1)->count() }}
            </a>
        </li>
        <li class="list-group-item">
          <b>Following</b> <a class="pull-right" href="{{ url('/'.$user->username.'/following') }}">{{ $user->following()->where('allow', 1)->count() }}</a>
        </li>
        <li class="list-group-item">
          <b>Posts</b> <a class="pull-right" href="{{ url('/'.$user->username) }}">{{ $user->posts()->count() }}</a>
        </li>
      </ul>
       @endif
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

 

    