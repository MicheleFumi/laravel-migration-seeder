<!doctype html>
<html lang="en">

<head>
    <title>trains</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


</head>

<body>
    <header>

    </header>
    <main>
        @foreach ($trains as $train)
            @if (!$train['canceled'])
                <div>{{ $train['company'] }}</div>
                <div>{{ $train['train_code'] }}</div>
                <div>{{ $train['leaving_station'] }}</div>
                <div>{{ $train['ariving_station'] }}</div>
                <div>{{ $train['leaving_hour'] }}</div>
                <div>{{ $train['arriving_hour'] }}</div>
                @if ($train['delay'])
                    <div>{{ $train['delay_time'] }}</div>
                @endif
            @else
                <div>{{ $train['company'] }}</div>
                <div>{{ $train['train_code'] }}</div>
                <div>{{ $train['leaving_station'] }}</div>
                <div>{{ $train['ariving_station'] }}</div>
                <H3>CANCELED TRAIN</H3>
            @endif
        @endforeach

    </main>
    <footer>

    </footer>

</body>

</html>
