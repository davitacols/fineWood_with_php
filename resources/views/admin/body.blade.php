<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags, title, stylesheets, etc. -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Include your stylesheets and other head elements here -->
</head>

<body>
    <div id="app">
        <!-- Navigation Bar -->
        @include('admin.header')

        <div class="container mt-4">
            <div class="row">
                <!-- Sidebar (if you have one) -->
                {{-- @include('admin.sidebar') --}}

                <!-- Main Content -->
                <div class="col-md-12">
                    <!-- Page Content -->
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Include your scripts at the end of the body tag -->
</body>

</html>
