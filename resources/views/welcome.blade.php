<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Laravel</title>
    <style>
        #logo {
            cursor: pointer;
            border: none;
        }
        #navbar {
            color: white;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); 
        }
        .seperator {
          width: 150px;
        }
        a {
          cursor: pointer;
          color: black;
          font-weight: bold;
        }
        .sep {
          width: 100px;
        }
        .sep1{
            height:500px;
        }
    </style>
</head>
<body>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
        <div class="sep"></div>
        <img src="{{ asset('storage/road.jpg') }}" alt="Image" class="img-thumbnail" id="logo" width="130" height="150">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <div class="seperator"></div>
                <li class="nav-item">
                    <a class="nav-link" href="#">l'Occasion <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">le Neuf</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">le Rachat Expres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">la Cote</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">l'Electrique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">les Fiches Tech</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">le Financement</a>
                </li>
            </ul>
        </div>
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </nav>
    <style>
    .image-container {
      position: relative;
      border-radius:36px;
    }

    .overlay-text {
      position: absolute;
      top: 30%;
      left: 70%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 24px;
      text-align: center;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    .container1{
      width:100%;
      height:360px;
      background-color:white;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
      border-radius:36px;
      
    }
    p{
      color:blue,
    }
    #h{
      padding:20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="image-container">
        <img src="{{ asset('storage/voiture2.jpg') }}" alt="Image" class="img-thumbnail" >
          <div class="overlay-text">
            <h3>Road Star </h3>
            <h4>Find the best car  </h4>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="container1">
<center>
   <h1 id="h"> Vendeur ou Acheteur </h1>
   <p> Nous sommes ici pour satisfaire vos besoins </p>
</center>
<center>
<p> Nous sélectionnons les meilleures voitures d'occasion pour vous. </p>
<img src="https://www.lacentrale.fr/fragments/recherche-fragment-front/media/claims_landing_search_desktop.a7bae0d0.png" alt="Image">
</center>

        </div>
      </div>
      <div class="sep1"></div>
      <div class="col-md-12">
        <div class="container1">
<center>
   <h1 id="h"> Vendeur ou Acheteur </h1>
   <p> Nous sommes ici pour satisfaire vos besoins </p>
</center>
<center>
<p> Nous sélectionnons les meilleures voitures d'occasion pour vous. </p>
<img src="https://www.lacentrale.fr/static/fragment-landing/media/usp_index.5b88ddd5.png" alt="Image">
</center>

        </div>
      </div>
    </div>
    
  </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-Ky0f7vB1Jb8e1cRXjy9UWf1Y3X5tCDHG3QnJ7y2GXGfC3E0pb2U4Q1c8VXcHtj1i" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-SifrR4zO3g2+SwHY5+LB6X9yLXz1jk6x5L8p7Jf9vW/ul+Tf7fjV1k3oI6zD9eB" crossorigin="anonymous"></script>
</body>
</html>
    