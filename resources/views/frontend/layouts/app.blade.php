@include('frontend.layouts.header')
@include('frontend.layouts.navbar')
@yield('content')
@include('frontend.layouts.footer')
   @vite(['resources/css/app.css', 'resources/js/app.js'])
  
