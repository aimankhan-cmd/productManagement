<!-- inside any navigation bar will come  -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">PM</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">LATEST PRODUCTS</a></li>
        @if(!(isset(Auth::user()->email)))
        <li><a href="{{route('auth')}}">LOGIN</a></li>
        @endif
        @if(isset(Auth::user()->email))
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a></li>
        @endif
        <!-- <li><a href="#contact">CONTACT</a></li> -->
      </ul>
    </div>
  </div>
</nav>
