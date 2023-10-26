@extends('layout')

@section('content')

<div class="container mt-5">
    <h2 class="my-text2">Weather Data</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>
    @if(isset($data))
    <div class="card mt-3 grad">
        <div class="row">
            <div class="col">
                <h5 class="card-title">Information</h5>
                <p class="card-text">Humidity: {{ $data['data']['values']['humidity'] }}%</p>
                <p class="card-text">Cloud Cover: {{ $data['data']['values']['cloudCover'] }}%</p>
                <p class="card-text">Location: {{ $data['location']['name'] }}</p>
            </div>
            <div class="col">
                <h6 class="card-title">Time: {{ $data['data']['time'] }}</h6>
                <p class="card-text">Temperature: {{ $data['data']['values']['temperature'] }}%</p>
                <p class="card-text">Humidity: {{ $data['data']['values']['humidity'] }}%</p>
                <p class="card-text">Freezing Rain Intensity: {{ $data['data']['values']['freezingRainIntensity'] }}%</p>
                <!-- Tambahkan lebih banyak field data di sini -->
            </div>
        </div>

    </div>
    @endif
</div>
@endsection