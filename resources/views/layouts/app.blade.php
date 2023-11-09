<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 h-full w-full">
    <div id="alert" class="fixed bg-green-500 text-green-800 top-0 h-20 z-10"></div>
    <nav class="bg-blue-500 w-full text-white p-4">
        <div class="container">
            <a href="{{ route('notes.index') }}" class="text-2xl font-semibold">MyNotes</a>
        </div>
    </nav>

    <main class="container mx-auto my-32 p-4 mt-8">
        @yield('content')
    </main>   
</body>
</html>
