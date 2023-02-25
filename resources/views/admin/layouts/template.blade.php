<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Head Meta --}}
    @include('admin.layouts.meta')
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Styles -->
    @include('admin.layouts.styles')

    <!-- Title -->
    <title>{{ $title ?? 'Title' }} | System</title>
</head>

<body>
    <div class="app horizontal-menu align-content-stretch d-flex flex-wrap">
        <div class="app-container">
            {{-- Menu --}}
            @include('admin.layouts.menu')

            <div class="app-content">
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Javascripts -->
    @include('admin.layouts.scripts')
</body>

</html>
