<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <style>
        body {
            background-image: url('/images/formbg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
           
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        #container {
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.85);
            padding: 90px;
            overflow: hidden;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 600px;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 16px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .input-group input,
        .input-group textarea {
            width: 100%;
            padding: 14px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .input-group input:focus,
        .input-group textarea:focus {
            border-color: #04AA6D;
            outline: none;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 14px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            width: 100%;
        }

        input[type=submit]:hover {
            background-color: #038e58;
        }
        #social{
            display: grid;
            grid-template-columns: repeat(2,1fr);
            gap: 2rem;
        }
        @media (max-width: 600px) {
            #container {
                width: 100%;
            }

            .namediv {
                flex-direction: column;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
<h1>Enter Your Information <br/>{{Auth::user()->name}}</h1>
<a href="{{route('account.logout') }}">
<button>Log Out</button>
</a>
    <div id="container">
    <form id="update-form" method="POST" action="{{ route('account.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="namediv input-group">
        <div>
            <label for="fname">First Name</label>
            <input type="text" value="{{old('firstname')}}" id="fname" name="firstname" placeholder="Your name..">
        </div>
        <div>
            <label for="lname">Last Name</label>
            <input type="text" id="lname" value="{{old('lastname')}}" name="lastname" placeholder="Your last name..">
        </div>
    </div>
    <div class="input-group">
        <label for="role">Role</label>
        <input type="text" value="{{old('role')}}" id="role" name="role" placeholder="Your role..">
    </div>
    <div class="input-group">
        <label for="about">About</label>
        <textarea id="about" value="{{old('about')}}" name="about" placeholder="Enter about your role.." rows="4"></textarea>
    </div>
    <div class="input-group">
        <label for="phone">Contact</label>
        <input type="tel" value="{{old('phone')}}" id="phone" name="phone" minlength="10" placeholder="Your phone number..">
    </div>
    <div id="social">
        <div class="input-group">
            <label for="facebook">Facebook</label>
            <input type="url" value="{{old('facebook')}}" id="facebook" name="facebook" placeholder="Your Facebook URL..">
        </div>
        <div class="input-group">
            <label for="twitter">Twitter</label>
            <input type="url" value="{{old('twitter')}}" id="twitter" name="twitter" placeholder="Your Twitter URL..">
        </div>
        <div class="input-group">
            <label for="instagram">Instagram</label>
            <input type="url" value="{{old('instagram"')}}" id="instagram" name="instagram" placeholder="Your Instagram URL..">
        </div>
        <div class="input-group">
            <label for="linkedin">LinkedIn</label>
            <input type="url" value="{{old('linkedin')}}" id="linkedin" name="linkedin" placeholder="Your LinkedIn URL..">
        </div>
    </div>
    <div class="input-group">
        <label for="phone">Profile Photo</label>
        <input type="file" value="{{old('photo')}}" id="photo" name="photo">
    </div>
    <div class="input-group">
        <label for="phone">Company Logo</label>
        <input type="file" value="{{old('logo')}}" id="logo" name="logo">
    </div>
    <input type="submit" value="Submit">
</form>

    </div>
</body>
</html>
