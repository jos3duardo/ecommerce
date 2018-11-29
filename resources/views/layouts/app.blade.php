<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @component('components.head')
    @endcomponent
       
<body class="hold-transition register-page">
    <div id="app">
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
