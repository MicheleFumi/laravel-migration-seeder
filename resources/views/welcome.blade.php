<!doctype html>
<html lang="en">

<head>
    <title>trains</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@400..700&family=Share+Tech+Mono&display=swap"
        rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <header>

    </header>
    <main>
        <div class="container-fluid bg-danger text-white p-3 mb-4">
            <div class="d-flex justify-content-center align-items-center">
                <h3 class="m-0">INFO TRENI STAZIONE MILANO CENTRALE</h3>
            </div>
        </div>

        <div class="container">
            @foreach ($trains as $train)
                @if (!$train['canceled_train'])
                    <div class="train-info card shadow-lg mb-4 border-light">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between align-items-center">
                                <span>{{ $train['company'] }} - {{ $train['train_code'] }}</span>
                                <span class="badge bg-success">In servizio</span>
                            </h5>
                            <p class="card-text">
                                <strong>Stazione di partenza:</strong> {{ $train['leaving_station'] }}<br>
                                <strong>Stazione di arrivo:</strong> {{ $train['arriving_station'] }}<br>
                                <strong>Partenza:</strong> {{ $train['leaving_hour'] }}<br>
                                <strong>Arrivo:</strong> {{ $train['arriving_hour'] }}
                            </p>
                            @if ($train['delay'])
                                <div class="train-delay-info alert alert-warning d-flex align-items-center">
                                    <i class="fas fa-clock me-2"></i> Ritardo: {{ $train['delay_time'] }} minuti
                                </div>
                            @endif
                        </div>
                    </div>
                @else
                    <div class="train-info card shadow-lg mb-4 border-danger canceled">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $train['company'] }} - {{ $train['train_code'] }}</h5>
                            <p class="card-text">
                                <strong>Stazione di partenza:</strong> {{ $train['leaving_station'] }}<br>
                                <strong>Stazione di arrivo:</strong> {{ $train['arriving_station'] }}
                            </p>
                            <div class="train-canceled text-danger">
                                <h3 class="display-6">🚫 TRENO CANCELLATO 🚫</h3>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach


        </div>
    </main>
    <footer>

    </footer>

</body>

</html>
