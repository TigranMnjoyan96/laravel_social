
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning mb-3">
        @if (Auth::check())
        <a class="navbar-brand" href="{{route('home')}}">Social</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>

            <li class="nav-item ml-4">
                <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('search') }}">
                    <input name="user" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
            </li>
          </ul>



          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{ route('profile', ['username' => Auth::user()->username]) }}" class="nav-link">{{ Auth::user()->getNameOrUserName() }}</a>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link">Update Profile</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('signout') }}" class="nav-link">Sign Out</a>
            </li>
          </ul>
          @else
          <a class="navbar-brand" href="{{route('home')}}">Social</a>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="{{ route('signup') }}" class="nav-link">Sign Up</a>
          </li>
          <li class="nav-item">
              <a href="{{ route('signin') }}" class="nav-link">Sign In</a>
          </li>
          </ul>

          @endif

        </div>

      </nav>

