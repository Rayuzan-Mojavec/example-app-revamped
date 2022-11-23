<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('kjhJDAS.svg') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/Trix.css') }}">
    <script type="text/javascript" src="{{ asset('js/Trix.js') }}"></script>

    <title>{{ $title }}</title>
    <style>
        /* Tailwind Override */
        .trix-editor {
            width: 100%;
        }

        .trix-editor h1 {
            font-size: 1.25rem !important;
            line-height: 1.25rem !important;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .trix-editor a:not(.no-underline) {
            text-decoration: underline;
        }

        .trix-editor a:visited {
            color: green;
        }

        .trix-editor ul {
            list-style-type: disc;
            padding-left: 1rem;
        }

        .trix-editor ol {
            list-style-type: decimal;
            padding-left: 1rem;
        }

        .trix-editor pre {
            display: inline-block;
            width: 100%;
            vertical-align: top;
            font-family: monospace;
            font-size: 1.5em;
            padding: 0.5em;
            white-space: pre;
            background-color: #eee;
            overflow-x: auto;
        }

        .trix-editor blockquote {
            border: 0 solid #ccc;
            border-left-width: 0px;
            border-left-width: 0.3em;
            margin-left: 0.3em;
            padding-left: 0.6em;
        }
    </style>
</head>

<body class="font-japanese">
    @include('core.navbar')
    @yield('content')
    @include('core.footer')
</body>

</html>
