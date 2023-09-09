<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/js/app.js'])
</head>

<body style="padding: 60px 0;">
    @include('layouts.header')

    <main>
        <article>
            <div class="container">
                <h1 class="fs-2 my-3">@yield('title')</h1>
                @yield('content')
            </div>
        </article>
    </main>

    @include('layouts.footer')
</body>

</html>