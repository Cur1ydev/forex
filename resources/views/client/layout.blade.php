<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    @include('client.components.css')
    <title>{{__('FOREX VIET NAM – Tin tức về Forex, ngoại hối dành cho các trader chuyên nghiệp')}}</title>
</head>
<body>
@include('client.components.header')
@yield('content')
@include('client.components.footer')
@include('client.components.js')
</body>
</html>
