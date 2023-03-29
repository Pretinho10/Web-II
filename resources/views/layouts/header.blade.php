<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    {{-- Chama o css na pasta public --}}
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    </link>
</head>

<body>
    <header>
        {{-- Menu Topo --}}

        <div class="menu">

            <ul>
                <li><a href="" class="underline-center">Menu</a></li>
                <li><a href="https://www.infowester.com/introhtml5.php" class="underline-center">Html5</a></li>
                <li><a href="https://developer.mozilla.org/pt-BR/docs/Web/CSS" class="underline-center">Css</a></li>
                <li><a href="https://developer.mozilla.org/pt-BR/docs/Web/JavaScript"
                        class="underline-center">JavaScrip</a></li>
                <li><a href="https://laravel.com/" class="underline-center">Laravel</a></li>

            </ul>

        </div>

        <div class="container">
            {{-- É o local onde eu quero inserir o conteudo de cada página --}}
            @yield('menu')
        </div>

        {{-- Chama o javascript na pasta public --}}
        <script src="{{ asset('js/header.js') }}"></script>
    </header>
</body>

</html>
