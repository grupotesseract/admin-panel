<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin Panel Grupo Tesseract</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img style="height: 45px;" src="https://res.cloudinary.com/tesseract/image/upload/q_auto/v1534552051/portfolio/logo-tesseract-preto-simples.png" alt="Logo Grupo Tesseract">
                    Admin Panel<br>
                    Grupo Tesseract
                </div>

                <div class="links">
                    <a target="_blank" href="https://docs.google.com/document/d/1xivqhrpZphWdxDrEj3tVFj7AJr1o0DgR2mM-sfjZJ98/edit?usp=sharing">Documentação</a>
                    <a target="_blank" href="https://github.com/grupotesseract/admin-panel">GitHub</a>
                    @auth
                        <a target="_blank" href="{{ url('/home') }}">Home</a>
                    @else
                        <a target="_blank" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a target="_blank" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </body>
</html>
