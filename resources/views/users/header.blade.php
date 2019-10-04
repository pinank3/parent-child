<style>
  .dropdown{
    margin-top:15px!important;
   margin-right:20px!important;
    border-color:blue!important;

  }
  a{
    color:#1e282c;
  }
  .dropdown-menu{
    color:black;
    background-color:white;
  }

</style>
<header class="main-header">
    <!-- Logo -->
    <a href="dashboard" class="logo">
      <span class="logo-mini"> <b>PMS</b></span>
      <span class="logo-lg"><b>Project Management System</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="nav-item dropdown">
              <a id="navbarDropdown" class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;"><span class="glyphicon glyphicon-plus"></span></a>
                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="">abc</a>
              </div>
      <div class="navbar-custom-menu">
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
            @endif

            @else
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;">

                  <b>{{ ucfirst(Auth::user()->name) }}</b><span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
              </div>
            </div>
        @endguest
      </ul>
    </div>
  </nav>
</header>
{{-- <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 --}}
