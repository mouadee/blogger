<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
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
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <script>
                        const imdb = require('imdb-api');

                        imdb.get('The Toxic Avenger', {apiKey: 'foo', timeout: 30000}).then(console.log).catch(console.log);
                        imdb.getById('tt0090190', {apiKey: 'foo', timeout: 30000}).then(console.log).catch(console.log);
                        imdb.getReq({ name: 'The Toxic Avenger', opts: {apiKey: 'foo', timeout: 30000} }).then(console.log).catch(console.log);
                    
                        console.log(movie);
                         
                        Movie {
                          title: 'The Toxic Avenger',
                          _year_data: '1984',
                          rated: 'R',
                          released: '1986-04-11T08:00:00.000Z',
                          runtime: '82 min',
                          genres: 'Action, Comedy, Horror',
                          director: 'Michael Herz, Lloyd Kaufman',
                          writer: 'Lloyd Kaufman (story), Joe Ritter (screenplay), Lloyd Kaufman (additional material), Gay Partington Terry (additional material), Stuart Strutin (additional material)',
                          actors: 'Andree Maranda, Mitch Cohen, Jennifer Babtist, Cindy Manion',
                          plot: 'This is the story of Melvin, the Tromaville Health Club mop boy, who inadvertently and naively trusts the hedonistic, contemptuous and vain health club members, to the point of accidentally ending up in a vat of toxic waste. The devastating results then have a transmogrification effect, his alter ego is released, and the Toxic Avenger is born, to deadly and comical results. The local mop boy is now the local Superhero, the saviour of corruption, thuggish bullies and indifference. Troma classic with good make-up effects and stunts, a pleasant surprise indeed.',
                          languages: 'English',
                          country: 'USA',
                          awards: '1 nomination.',
                          poster: 'http://ia.media-imdb.com/images/M/MV5BNzViNmQ5MTYtMmI4Yy00N2Y2LTg4NWUtYWU3MThkMTVjNjk3XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg',
                          metascore: 'N/A',
                          rating: '6.2',
                          votes: '19,306',
                          imdbid: 'tt0090190',
                          type: 'movie',
                          response: 'True',
                          series: false,
                          imdburl: 'https://www.imdb.com/title/tt0090190'
                        }


                    </script>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
