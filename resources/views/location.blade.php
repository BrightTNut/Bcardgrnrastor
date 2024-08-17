<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Location</h1>
    @if($position)
        <p><strong>IP Address:</strong> {{ $position->ip }}</p>
        <p><strong>Country:</strong> {{ $position->countryName }}</p>
        <p><strong>Region:</strong> {{ $position->regionName }}</p>
        <p><strong>City:</strong> {{ $position->cityName }}</p>
        <p><strong>Latitude:</strong> {{ $position->latitude }}</p>
        <p><strong>Longitude:</strong> {{ $position->longitude }}</p>
    @else
        <p>Location information is not available.</p>
    @endif
</body>
</html>