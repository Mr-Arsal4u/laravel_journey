<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>

    <div class="wrapper">

        @include('partials.sidebar')

        <div class="main">

            @include('partials.navbar')

            <main class="content">
                <div class="container-fluid p-0">
                    @yield('content')
                </div>
            </main>
            @include('partials.footer')
        </div>
    </div>

    @include('partials.scripts')

</body>

</html>
