<!doctype html>
<html lang="en" data-layout="twocolumn" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none"
      data-preloader="disable">
<head>
    <meta charset="utf-8"/>
    <title>Admin - Forex Việt Nam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin - Forex Việt Nam" name="description"/>
    <meta content="Themesbrand" name="author"/>
    @include('admin.components.css')
</head>
<body>
<div id="layout-wrapper">
    @include('admin.components.header')
    @yield('content')
</div>
@include('admin.components.themesetting')
@include('admin.components.js')
</body>
</html>
