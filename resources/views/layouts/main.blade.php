<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>{{ $title }}</title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

--> 

    <link rel="shortcut icon" href="assets/images/ico.png">  
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

    </head>

    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">Sportouriz<em></em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="{{ ($title === "Home | Sportouriz") ? 'active' : '' }}">Home</a></li>
                            @auth
                                <li class="scroll-to-section"><a href="/location" class="{{ ($title === "Location | Sportouriz") ? 'active' : '' }}">Location</a></li>
                            @endauth
                            <!-- <li class="scroll-to-section"><a href="#our-classes">Classes</a></li> -->
                            <!-- <li class="scroll-to-section"><a href="/schedule" class="{{ ($title === "Schedule | Sportouriz") ? 'active' : '' }}">Schedules</a></li> -->
                            <li class="scroll-to-section"><a href="/contact" class="{{ ($title === "Contact | Sportouriz") ? 'active' : '' }}">Contact</a></li>
                            @auth
                                <li class="dropdown">
                                    <a class="btn main-button dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="main-button dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @else
                                <li class="main-button"><a href="{{ route('login') }}">Sign In</a></li>
                            @endauth
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('content')

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2022 Sportouriz
                    
                    - Designed by <a rel="nofollow" href="" class="tm-text-link" target="_parent">Kelompok B-6</a><br>

                Distributed by <a rel="nofollow" href="" class="tm-text-link" target="_blank">Kelompok B-6</a>
                
                </p>
                    
                    <!-- You shall support us a little via PayPal to info@templatemo.com -->
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>