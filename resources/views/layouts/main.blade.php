<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/asset/Laravel_Icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: #6EA8FE;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #0D6EFD;
        }

        .img-description {
            width: 50%;
            margin: auto;
        }

        li.nav-item>a {
            font-size: 2em;
        }

        @media only screen and (max-width: 992px) {
            .mainPost>h2 {
                font-size: 1em;
            }

            .mainPost>p {
                font-size: 0.75em;
            }
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    <div class="container">
        @yield('section')
        <div class="row row-cols-lg-4 row-cols-sm-2">
            @yield('container')
        </div>
    </div>
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
