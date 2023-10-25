<!DOCTYPE html>
<html>
<head>
    <title>Weather App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Welcome to the Weather App </h1>
        <p>A task for Scicom MSC Berhad</p>
        <p>Get weather information for a location:</p>
        <form method="post" action="/get-weather">
            @csrf
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="container mt-5">

        <footer>By:@julia</footer>
    </div>
</body>
</html>
