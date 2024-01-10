<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Quiz')</title>
    <!-- Include your stylesheets, scripts, etc. here -->
</head>
<body>
    @include('sidebar') <!-- Include the sidebar -->

    <div class="content">
        @yield('content') <!-- This is where the content of individual views will be inserted -->
    </div>

    <!-- Include your scripts, footer, etc. here -->
</body>
</html>
