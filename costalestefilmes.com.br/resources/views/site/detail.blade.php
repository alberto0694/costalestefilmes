<!DOCTYPE HTML>
<html>
  <head>
    <title>Costa leste filmes - {{ $material->titulo }}</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ asset('images/logo-costa-leste.png') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{  asset('assets/css/main.css') }}" />
  </head>
  <iframe style="width: 480px; height: 360px; margin: 0 auto; display: block" src="{{ $material->video }}"></iframe>
  <body>
    <!-- Header -->
      <header id="header" class="preview">
        <div class="inner">
          <div class="content">
          </div>
          <a href="{{route('site.index')}}" class="button hidden"></a>
        </div>
      </header>

    <!-- Main -->
    <div id="preview">
      <div class="inner">
        <div class="content">
          <header>
            <h2>{{ $material->titulo }}</h2>
          </header>
          <p>{{ $material->texto }}</p>
        </div>
      </div>
{{--       <a href="detail1.html" class="nav previous"><span class="fa fa-chevron-left"></span></a>
      <a href="detail2.html" class="nav next"><span class="fa fa-chevron-right"></span></a> --}}
    </div>

    <!-- Footer -->
      <footer id="footer">
        <a href="#" class="info fa fa-info-circle"><span>About</span></a>
        <div class="inner">
          <div class="content">
            <h3>Vestibulum hendrerit tortor id gravida</h3>
            <p>In tempor porttitor nisl non elementum. Nulla ipsum ipsum, feugiat vitae vehicula vitae, imperdiet sed risus. Fusce sed dictum neque, id auctor felis. Praesent luctus sagittis viverra. Nulla erat nibh, fermentum quis enim ac, ultrices euismod augue. Proin ligula nibh, pretium at enim eget, tempor feugiat nulla.</p>
          </div>
          <div class="copyright">
            <h3>Follow me</h3>
            <ul class="icons">
              <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
              <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
              <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
              <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
            </ul>
          </div>
        </div>
      </footer>

    <!-- Scripts -->
      <script src="{{asset('assets/js/jquery.min.js') }}"></script>
      <script src="{{asset('assets/js/skel.min.js') }}"></script>
      <script src="{{asset('assets/js/util.js') }}"></script>
      <script src="{{asset('assets/js/main.js') }}"></script>

  </body>
</html>
