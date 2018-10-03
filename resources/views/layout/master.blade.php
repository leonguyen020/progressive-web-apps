<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.inc.head')
    @yield('extraCSS')
</head>
<body>
    <aside id="left-panel" class="left-panel">
        @include('layout.inc.leftPanel')
    </aside>
    <div id="right-panel" class="right-panel">
        @include('layout.inc.topNav')
        
        @yield('content')
    </div>
    

    @include('layout.inc.js')
    @yield('extraJS')
</body>
</html>