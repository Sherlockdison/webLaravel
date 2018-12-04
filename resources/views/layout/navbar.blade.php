<header class=header-container>
 <section class=header-brand>
    <a class="navbar-brand" href="/home"> <img src="/storage/stylePage/images/logo.jpg" alt="logotipo"></a>
 </section>

<nav class="navbar-nav">

  <a href="#" class="toggle-nav"> </a>

  <ul>
    <li><a class="link-nav-" href="{{ route('home') }}">Inicio</a></li>
    <li><a class="link-nav" href="{{ route('faq') }}">Preguntas Frecuentes</a></li>
    <li><a class="link-nav" href="{{ route('products.index')}}">Tienda</a></li>
      @guest
        <li><a href="{{ route('login')}}">{{__('Logueate')}}</a></li>
          <li>
          @if (Route::has('register'))
            <a href="{{ route('register')}}">{{__('Registráte')}}</a>
          @endif
          </li>
      @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
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
        </li>
      @endguest
        <li	class="li-img"><a href="#"><img	class="shop-car"	src="/storage/stylePage/images/bag.svg"	alt="shop-car"></a></li>
  </ul>
</nav>
</header>
