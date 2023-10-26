@extends('layout')

@section('content')

<div class="container mt-5">

    <h2 class="my-text">A task for Scicom MSC Berhad</h2>
    <p>Get weather information for a location:</p>
    <form method="post" action="/get-weather">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location" required>
        </div>
        <button type="submit" class="btn" style="background-color: #64CCC5;">Submit</button>
    </form>
</div>

@endsection