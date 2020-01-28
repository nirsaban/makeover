<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title>Extreme Makeover</title>
    <style>
        table {
            border-collapse: collapse;
            text-align: left;
            width: 100%;
        }
        table tr {
            background: white;
            border-bottom: 1px solid
        }
        table th, table td {
            padding: 10px 20px;
        }
        table td span {
            background: #eee;
            color: dimgrey;
            display: none;
            font-size: 10px;
            font-weight: bold;
            padding: 5px;
            position: absolute;
            text-transform: uppercase;
            top: 0;
            left: 0;
        }

        /* Simple CSS for flexbox table on mobile */
        @media(max-width: 800px) {
            table thead {
                left: -9999px;
                position: absolute;
                visibility: hidden;
            }
            table tr {
                border-bottom: 0;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                margin-bottom: 40px;
            }
            table td {
                border: 1px solid;
                margin: 0 -1px -1px 0;
                padding-top: 35px;
                position: relative;
                width: 50%;
            }
            table td span {
                display: block;
            }
        }

    </style>
{{--    <style>--}}
{{--        td, th, tr{--}}
{{--            border: 1px solid black;--}}
{{--        }--}}
{{--    </style>--}}
</head>
<body>
<main class="container" id="app">
    @include('partials.navbar')
    @yield('content')
</main>
<script src="{{mix('js/app.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@yield('js')
</body>
</html>
