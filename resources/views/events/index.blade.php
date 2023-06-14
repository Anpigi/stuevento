    <style>
        body {
            font-family: "Arial Rounded MT", Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .title {
            color: #ff5a5f;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff5a5f;
            color: white;
            font-size: 16px;
            text-decoration: none;
            border: none;
            border-radius: 4px;
        }

        .btn-primary:hover {
            background-color: #ff3a3f;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            color: #ff5a5f;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
<body>
    <div class="container">
        <h1 class="title">Eventos</h1>
        <a href="{{ route('events.create') }}" class="btn btn-primary">Crear evento</a>
        <h1 class="title">Lista de Eventos</h1>
        <ul>
            @foreach($events as $event)
            <li>
                <a href="{{ route('events.show', $event->id) }}">{{ $event->name }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</body>

