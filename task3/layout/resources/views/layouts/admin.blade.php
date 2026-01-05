<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
     @include('layouts.partials.head')

    <body class="sb-nav-fixed">
          
        @include('layouts.partials.navbar')

        <div id="layoutSidenav">

                <div id="layoutSidenav_nav">
               @include('layouts.partials.sidebar')
                </div>


                 <div id="layoutSidenav_content">

                <main>
                <div class="container-fluid px-4">

                     @yield('content')

                </div>
                </main>

                 @include('layouts.partials.footer')

                </div>

        </div>

    </body>
</html>
