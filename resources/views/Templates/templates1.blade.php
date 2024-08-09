<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template 1</title>
    <style>
       body #container{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
       }
        #logo{

            padding: 3rem;
            text-align: center;
            border-radius: 50px;
background: linear-gradient(315deg, #f0f0f0, #cacaca);
box-shadow:  -20px -20px 60px #bebebe,
             20px 20px 60px #ffffff;
             width:40% ;

        }
        #data{
            align-items: center;
            width: 50%;
            display: flex;
            flex-direction: column;
            border-radius: 50px;
            background: #e0e0e0;
            box-shadow:  20px -20px 60px #5a5a5a,
             -20px 20px 60px #ffffff;
        }
        #persondata ul li{
            list-style: none;
            align-items: center;
        }
        #pic{

            display: absolute;
            margin-top: -9%;
            border-radius: 50px;
            background: linear-gradient(145deg, #f0f0f0, #cacaca);
            box-shadow:  20px 20px 60px #5a5a5a,
             -20px -20px 60px #ffffff;
             width: 300px;
             height: 200px;
             overflow: hidden;
             padding: 10px;
        }
        #social-media a img{
            width: 100px;
            height: 100px;
        }

        /* //For mobie css */
        .mobile-view #container{
            background-size: cover;
            background-attachment: scroll ;
            width: 304px;
  min-height: 578px;
  height: 578px;
  box-shadow: 0 0 0 3px #dedfde;
  margin: 0 auto;
  padding: -12px;
  border-radius: 50px;
  position: relative;
  overflow: hidden;
        }
        .mobile-view #logo{
            
            width: 150px;
        }
        .mobile-view #data{
            width: 100%;
            height: 100%;
        }
        .mobile-view #social-media a img{
            width: 60px;
            height: 52px;
        }
        .mobile-view #pic {
            width: 170px;
            height: 130px;
        }
        .switch-button {
            margin-left: 44%;
            margin-bottom: 20px;
            padding: 10px 20px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
        }
        @media (max-width: 600px) {
            body {
                padding: 2rem;
            }
            #logo,
            #data,
            #social-media {
                width: 90%;
            }
            #pic {
                width: 150px;
                height: 100px;
            }
        }
    </style>
</head>
<body>
<button class="switch-button" onclick="switchView()">Switch to Mobile View</button>
<div id="container">

<div id="logo">
    <img id="logo" src="{{ asset($user->logo) }}" alt="Company Logo"/>

</div>

<div id="data">
    <img id="pic" src="{{ asset($user->photo) }}" alt="{{ $user->name }}"/>
    <div id="persondata">
        <ul>
            <li style="font-size:4rem;">{{ $user->name }}</li>
            <li style="font-weight:200;">{{ $user->position }}</li>
            <li><p>{{ $user->about }}</p></li>
            <li>{{ $user->phone }}</li>
        </ul>
    </div>
</div>

<div id="social-media">
    <a href="{{ $user->facebook }}" target="_blank" class="social-icon">
        <img src="https://img.icons8.com/?size=100&id=118467&format=png&color=000000"/>
    </a>
    <a href="{{ $user->twitter }}" target="_blank" class="social-icon">
        <img src="https://img.icons8.com/?size=100&id=phOKFKYpe00C&format=png&color=000000"/>
    </a>
    <a href="{{ $user->instagram }}" target="_blank" class="social-icon">
        <img src="https://img.icons8.com/?size=100&id=32309&format=png&color=000000"/>
    </a>
    <a href="{{ $user->linkedin }}" target="_blank" class="social-icon">
        <img src="https://img.icons8.com/?size=100&id=8808&format=png&color=000000"/>
    </a>
</div>

</div>


</body>
<script>
        function switchView() {
            document.body.classList.toggle('mobile-view');
            const button = document.querySelector('.switch-button');
            if (document.body.classList.contains('mobile-view')) {
                button.textContent = 'Switch to Desktop View';
            } else {
                button.textContent = 'Switch to Mobile View';
            }
        }
    </script>
</html>