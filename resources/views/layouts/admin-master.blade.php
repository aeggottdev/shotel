<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <title> Shotel Hotel administration</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{('css/aeg.css')}}" rel="stylesheet" type="text/css"> 
        @yield('custom-styles')
        <!-- Scripts -->
        @yield('custom-scripts')      
          
    </head>
    <body>
        <div class="aeg-container">
            <div class="aeg-logo">
               <img src="{{URL::asset('imgs/shotel-logo.png')}}"> 
            </div><!-- .aeg-logo -->
            <nav class="aeg-admin-menu">
               <ul>
                   <li> <a href="#home"> home</a> </li>
                   <li> <a href="#Users"> users</a> </li>
                   <li> <a href="#Rooms"> Habitaciones</a> </li>
                   
               </ul>
           </nav><!-- .aeg-admin-menu -->
           <div class="aeg-content">
               @yield('main-content')
               
           </div>
           <footer>
               <p>All righs reserved &copy; <?php echo date('Y');?></p>
           </footer><!-- .footer -->
        </div><!-- .aeg-container -->
    </body>
</html>