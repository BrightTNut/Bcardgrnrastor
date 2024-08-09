<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Templates</title>
    <style>
        body{
            text-align: center;
            align-items: center;
        }
        #container{
            margin: 10%;
            gap: 2rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        #container img{
            width: 20rem;
            height: 30rem;
            cursor: pointer;
        }
        #container img:hover{
            opacity: 40%;
        }
    </style>
</head>
<body>
    <h1>Select</h1>
    <div class="card-section">
    <div id="container">
    <a href="{{ route('account.template1') }}">
        <img src="{{ asset('images/temp 1.png') }}" alt="demo"/>
    </a>
    <a href="{{ route('account.template1') }}">
        <img src="{{ asset('images/temp 1.png') }}" alt="demo"/>
    </a>
    <a href="{{ route('account.template1') }}">
        <img src="{{ asset('images/temp 1.png') }}" alt="demo"/>
    </a>
    <a href="{{ route('account.template1') }}">
        <img src="{{ asset('images/temp 1.png') }}" alt="demo"/>
    </a>
    <a href="{{ route('account.template1') }}">
        <img src="{{ asset('images/temp 1.png') }}" alt="demo"/>
    </a>
</div>

    </div>
    <script>
        function navigateToTemplate(url) {
            window.location.href = url;
        }
    </script>
</body>
</html>
