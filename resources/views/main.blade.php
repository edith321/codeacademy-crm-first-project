    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>@yield('title')</title>
        @include('meta')
        @include('css')
        @include('fonts')
    </head>
    <body>
        @include('header')
        <h1>@yield('title')</h1>
        @yield('content')

        @include('footer')
    </body>
        @include('js')
        @include('scripts')
    </html>
