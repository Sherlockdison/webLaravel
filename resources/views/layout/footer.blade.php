<footer>
    <section class="footer-info">
      <h6>info@cenit.com</h6>
       <br>
        <h2>Newslleter</h2>
        <a href="#"><img src="/images/newsletter.png" alt="newslleter"></a>
        </section>

        <section class="link-footer1">
          <ul>
            <li><a class="link-nav-" href="{{ route('home') }}">inicio</a></li>
            <li><a class="link-nav" href="{{ route('profile') }}">perfil</a></li>
            <li><a class="link-nav" href="{{ route('products.index')}}">tienda</a></li>
          </ul>
        </section>

        <section class="link-footer2">
          <ul>
            <li><a class="" href="{{ route('faq')}}">preguntas frecuentes</a></li>
            <li><a class="" href="{{ route('login')}}">logueate</a></li>
            <li><a class="" href="{{ route('register')}}">registráte</a></li>
          </ul>
        </section>

        <section class="social-footer">
          <ul>
            <li><a href="https://www.instagram.com/"><img src="/images/icon_instagram.png"></a></li>
            <li><a href="https://www.facebook.com/"><img src="/images/icon_facebook.png"></a></li>
            <li><a href="https://twitter.com/"><img src="/images/icon_twitter.png"></a></li>
            <li><a href="https://www.youtube.com/"><img src="/images/icon_youtube.png"></a></li>
          </ul>
        </section>
        <div class="copyright">
          <h6><strong>by Camila & Edison - FullStacks - DigitalHouse @2018.</strong> Todos los derechos reservados.</h6>
        </div>
      </footer>

      <script src="js/jquery-3.3.1.min.js"></script>
			   <script>
				     $(".toggle-nav").click(function () {
					          $(".navbar-nav ul").slideToggle(350);
              });
        </script>
