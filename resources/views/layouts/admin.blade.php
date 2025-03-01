<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fundacja Głos Młodych')</title>
    <link rel="icon" type="image/x-icon" href="/images/cropped-logo-32x32.webp">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/d96bec4722.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .clamp {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .clamp.one-line {
            -webkit-line-clamp: 1;
        }

        /* Style dla formularzy */
        .form-container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-container input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #4fd1c5; /* Kolor teal-300 */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #38b2ac; /* Ciemniejszy odcień teal */
        }

        .form-container .error {
            color: red;
            font-size: 14px;
            margin-top: -8px;
            margin-bottom: 16px;
        }

        .form-container .link {
            text-align: center;
            margin-top: 16px;
        }

        .form-container .link a {
            color: #4fd1c5; /* Kolor teal-300 */
            text-decoration: none;
        }

        .form-container .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body style="font-family: Open Sans, sans-serif">
    <!-- Nagłówek -->
    <header class="max-w-full bg-white cursor-pointer">
        <div class="flex justify-center items-center">
            <a href="{{ url('/') }}">
                <img class="h-42" src="https://fundacjaglosmlodych.org/images/cropped-logo_fgm-2-1.png" alt="Logo Fundacji">
            </a>
        </div>
    </header>

    

    <!-- Główna zawartość strony -->
    <div class="px-2 lg:px-9">
        <main class="flex flex-col justify-center items-center w-full">
            @yield('content')
        </main>
    </div>
</body>
</html>