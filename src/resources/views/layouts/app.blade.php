<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <header>
        <!-- Navigation bar -->
        <nav>
            <!-- Navbar content -->
        </nav>
    </header>

    <main>
        <!-- Page content -->
        @yield('content')
    </main>

    <footer>
        <!-- Footer content -->
    </footer>
</body>
</html>
