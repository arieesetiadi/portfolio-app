<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Meta --}}
    @include('web.layouts.meta')

    {{-- Styles --}}
    @stack('before-styles')
    @include('web.layouts.styles')
    @stack('after-styles')

    {{-- Title --}}
    <title>Arie Setiadi</title>
</head>

<body class="dark">
    {{-- Preloader --}}
    @include('web.layouts.preloader')

    {{-- Wrapper --}}
    <div class="edina_tm_all_wrap" data-magic-cursor="">
        {{-- Modalbox --}}
        @include('web.layouts.modalbox')

        {{-- Menu --}}
        @include('web.layouts.menu')

        {{-- Content --}}
        @yield('content')
    </div>

    {{-- Scripts --}}
    @stack('before-scripts')
    @include('web.layouts.scripts')
    @stack('after-scripts')
</body>

</html>
