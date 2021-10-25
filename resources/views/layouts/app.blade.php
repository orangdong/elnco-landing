<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')

    <title>@yield('title') | El&co Cloud Consulting</title>

    {{-- Favicon --}}
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/favicon.png')}}" rel="apple-touch-icon">
    
    @stack('before-style')

    {{-- style --}}
    @include('includes.style')

    @stack('after-style')
</head>
<body>
    @include('includes.header')
        @yield('content')
    @include('includes.footer')

    @stack('before-script')

    {{-- script --}}
    @include('includes.script')

    @stack('after-script')
</body>
</html>