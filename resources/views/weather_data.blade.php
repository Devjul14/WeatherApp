<!DOCTYPE html>
<html>
<head>
    <title>Weather Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Weather Data</h1>
                
        @if(isset($data))
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Weather Information</h5>
                <p class="card-text">Time: {{ $data['data']['time'] }}</p>
                <p class="card-text">Location: {{ $data['location']['name'] }}</p>
                <p class="card-text">Cloud Cover: {{ $data['data']['values']['cloudCover'] }}%</p>
                <p class="card-text">Temperature: {{ $data['data']['values']['temperature'] }}%</p>
                <!-- Tambahkan lebih banyak field data di sini -->
            </div>
        </div>
        @endif
    </div>
</body>
</html>
