<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <title>@yield('title')LC</title>
  
    <!-- Latest compiled and minified CSS  ::this must be inside body {{ Auth::check() ? "Logged In" : "Logged Out"}}-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::to('/css/style.css') }}">   
    @yield('styles')

    </head>
 
        <body background="images/company.jpg" style="background-size:cover"> 
      
        @include('partials.header')
      

         <div class="container">
         @yield('content')
         </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/41adea890f.js"></script>
          @yield('scripts')

      </body>
     


     <script src="{{ asset('js/app.js') }}"></script>

    </html>