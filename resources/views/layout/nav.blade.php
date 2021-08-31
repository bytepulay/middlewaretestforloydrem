<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <ul class="navbar-nav">
        <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Member
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              @if (Auth::check())
              <a class="dropdown-item" href="#">Logout</a>
               @else
              <a class="dropdown-item" href="#">Login</a>
               <a class="dropdown-item" href="{{url('users/register')}}">Register</a>
              @endif
          
          </div>
        </li>
      </ul>
    </div>
  </nav>