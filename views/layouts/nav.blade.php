<nav class="navbar navbar-expand-lg navbar-light ">
        <!-- Change Logo Img Here -->
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/gcc_logo_final.png') }}" style="height: 75px; width:75px;" alt="gcc logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <div class="interactive-menu-button">
            <a href="#">
              <span>Menu</span>
            </a>
          </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="{{ url('/') }}">Home<span class="sr-only">(current)</span></a>
            </li>

             <li class="nav-item dropdown">
              <!-- Lang Dropdown Link -->
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Coding</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- Lang Dropdown Choice -->
                <a class="dropdown-item" href="{{ url('dependent-dropdown')}}">Dependent Dropdown </a>
                <!-- Lang Dropdown Choice -->
                <a class="dropdown-item" href="{{ url('track-user')}}">Track User Location</a>
              </div>
            </li>

            <li class="nav-item">

              <a class="nav-link" data-scroll href="#portfolio">Portfolio</a>
            </li>

             <li class="nav-item">

              <a class="nav-link" data-scroll href="#blog">Blog</a>
            </li>

            <li class="nav-item">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="#about-us">About Us</a>
            </li>

          </ul>
          <form data-scroll href="#contact-us" class="contact-btn form-inline my-2 my-lg-0">
            <!-- Contacgt Us Button -->
            <button>Contact Us</button>
          </form>
        </div>
      </nav>
