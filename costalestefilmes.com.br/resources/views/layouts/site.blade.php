<!DOCTYPE HTML>
<html>
    <head>
        <title>Costa Leste Filmes</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
        <link rel="shortcut icon" href="{{ asset('images/logo-costa-leste.png') }}" type="image/x-icon">
    </head>
    <body>

        <!-- Header -->
        <header id="header">
            <div class="inner">
                <div class="content">
                    <h1><img class="logo-popup" src="images/logo-costa-leste.png"></h1>
                    <a href="#" class="button big alt"><span>Conheça nosso trabalho!</span></a>
                </div>
                <a href="#" class="button hidden"><span>Conheça nosso trabalho!</span></a>
            </div>
        </header>
        @yield('content')
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
                    &copy; Costa Leste Filmes: Todos os diretos reservados.
                </div>
            </div>
        </footer>

    <!-- Scripts -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/skel.min.js') }}"></script>
        <script src="{{ asset('assets/js/util.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

    </body>
</html>