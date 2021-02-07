<!DOCTYPE html>
<html lang="en">
@include('frontend.templates.partials.head')
    <!-- Compiled and minified JavaScript -->
  
<body>
@include('frontend.templates.partials.navigation')





  <div class="container">

@yield('content')


 
            
 </div>
 @include('frontend.templates.partials.scripts')
 @include('frontend.templates.partials.toast')


         
</body>
</html>