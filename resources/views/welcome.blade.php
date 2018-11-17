<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{('css/aeg.css')}}" rel="stylesheet" type="text/css">
       
          
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
               <h1> Main Content</h1>
           </div><!-- .aeg-content -->
           <footer>
               <p>All righs reserved &copy; <?php echo date('Y');?></p>
           </footer><!-- .footer -->
        </div><!-- .aeg-container -->
    </body>
</html>
