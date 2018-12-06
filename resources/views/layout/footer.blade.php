<!-- LAYOUT BLADE FOOTER CONFIG -->
<footer>
  <!-- left -->
        <section class="footer-info">
            <h6>cenit.indumento@gmail.com</h6>
             <br>
              <h2>Newsletter</h2>
              <a href= "mailto:cenit.indumento@gmail.com"><img src="images/newsletter.png" alt="newsletter"></a>
        </section>
<!-- center -->
        <section class="link-footer1">
          <ul>
            <li><a class="link-nav-" href="{{ route('home') }}">inicio</a></li>
            <li><a class="link-nav" href="{{ route('profile') }}">perfil</a></li>
            <li><a class="link-nav" href="{{ route('products.index')}}">tienda</a></li>
          </ul>
        </section>
<!-- right -->
        <section class="link-footer2">
          <ul>
            <li><a class="" href="{{ route('faq')}}">preguntas frecuentes</a></li>
          @guest
            <li><a href="{{ route('login')}}">{{__('logueate')}}</a></li>
            <li>
              @if (Route::has('register'))
                <a class="" href="{{ route('register')}}">registráte</a>
              @endif
            </li>
          @endguest

          </ul>
        </section>
<!-- social -->
        <section class="social-footer">
          <ul>
            <li><a href="https://www.instagram.com/_cenit"><img src="images/icon_instagram.png"></a></li>
            <li><a href="https://www.facebook.com/cenit.arg"><img src="images/icon_facebook.png"></a></li>
            <li><a href="https://twitter.com/"><img src="images/icon_twitter.png"></a></li>
            <li><a href="https://www.youtube.com/"><img src="images/icon_youtube.png"></a></li>
          </ul>
        </section>
<!-- copyright -->
        <div class="copyright">
          <h6><strong>by Camila & Edison - FullStacks - DigitalHouse @2018.</strong> Todos los derechos reservados.</h6>
        </div>
</footer>
