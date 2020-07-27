<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
       
   @include('partials/header')
   @include('partials/navbar')
    <body>
     
          @yield('container')
     
    </body>
   @include('partials/footer')
   @include('partials/script')
</html>
