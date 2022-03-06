<!doctype html>
<html lang="en">
  <head>

   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="app.css">
   <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@include('layouts.style')
    <title>@yield('title')</title>
</head>
  <body>

      {{-- set the header  --}}
    @include('layouts.header')
    <header class="hero-section">
        <div class="hero-text-container">
          <h1>Humanizing<br />Your Insurance.</h1>
          <p
            >Get your life insurance coverage easier and faster. We blend our
            expertize<br />
            and technology to help you find the plan that's right for you.Ensure
            you<br />
            and your loved ones are protected.</p>
        </div>
        <div class="hero-img-container">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY73KVR4_cWOoY4_UUodQsSj95lWkPg1gfhQ&usqp=CAU" >
        </div>
      </header>


    @yield('section')

{{-- set the footer  --}}

@include('layouts.footer')

 </body>
</html>
