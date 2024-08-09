<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In / Sign Up</title>
    <script src="resources/js/sign.js" defer></script>
    <style>
        *,
        *:before,
        *:after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
            background: #ffffff;
            padding: 10%;
        }
      
        input,
        button {
            border: none;
            outline: none;
            background: none;
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
        }

        .cont {
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            width: 900px;
            height: 550px;
            margin: 0 auto 100px;
            background: #fff;
            box-shadow: -10px -10px 15px rgba(255, 255, 255, 0.3), 10px 10px 15px rgba(70, 70, 70, 0.15), inset -10px -10px 15px rgba(255, 255, 255, 0.3), inset 10px 10px 15px rgba(70, 70, 70, 0.15);
        }

        .form {
            position: relative;
            width: 640px;
            height: 100%;
            transition: transform 1.2s ease-in-out;
            padding: 50px 30px 0;
        }

        .sub-cont {
            overflow: hidden;
            position: absolute;
            left: 640px;
            top: 0;
            width: 900px;
            height: 100%;
            padding-left: 260px;
            background: #fff;
            transition: transform 1.2s ease-in-out;
        }

        .cont.s--signup .sub-cont {
            transform: translate3d(-640px, 0, 0);
        }

        button {
            display: block;
            margin: 0 auto;
            width: 260px;
            height: 36px;
            border-radius: 30px;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
        }

        .img {
            overflow: hidden;
            z-index: 2;
            position: absolute;
            left: 0;
            top: 0;
            width: 260px;
            height: 100%;
            padding-top: 360px;
        }

        .img:before {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            width: 900px;
            height: 100%;
            background-image: url("ext.jpg");
            opacity: .8;
            background-size: cover;
            transition: transform 1.2s ease-in-out;
        }

        .img:after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }

        .cont.s--signup .img:before {
            transform: translate3d(640px, 0, 0);
        }

        .img__text {
            z-index: 2;
            position: absolute;
            left: 0;
            top: 50px;
            width: 100%;
            padding: 0 20px;
            text-align: center;
            color: #fff;
            transition: transform 1.2s ease-in-out;
        }

        .img__text h3 {
            margin-bottom: 10px;
            font-weight: normal;
        }

        .cont.s--signup .img__text.m--up {
            transform: translateX(520px);
        }

        .img__text.m--in {
            transform: translateX(-520px);
        }

        .cont.s--signup .img__text.m--in {
            transform: translateX(0);
        }

        .img__btn {
            overflow: hidden;
            z-index: 2;
            position: relative;
            width: 100px;
            height: 36px;
            margin: 0 auto;
            background: transparent;
            color: #fff;
            text-transform: uppercase;
            font-size: 15px;
            cursor: pointer;
        }

        .img__btn:after {
            content: '';
            z-index: 2;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            border: 2px solid #fff;
            border-radius: 30px;
        }

        .img__btn span {
            position: absolute;
            left: 0;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            transition: transform 1.2s;
        }

        .img__btn span.m--in {
            transform: translateY(-72px);
        }

        .cont.s--signup .img__btn span.m--in {
            transform: translateY(0);
        }

        .cont.s--signup .img__btn span.m--up {
            transform: translateY(72px);
        }

        h2 {
            width: 100%;
            font-size: 26px;
            text-align: center;
        }

        label {
            display: block;
            width: 260px;
            margin: 25px auto 0;
            text-align: center;
        }

        label span {
            font-size: 12px;
            color: #cfcfcf;
            text-transform: uppercase;
        }

        input {
            display: block;
            width: 100%;
            margin-top: 5px;
            padding-bottom: 5px;
            font-size: 16px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.4);
            text-align: center;
        }

        .forgot-pass {
            margin-top: 15px;
            text-align: center;
            font-size: 12px;
            color: #cfcfcf;
        }

        .submit {
            margin-top: 40px;
            margin-bottom: 20px;
            background: #d4af7a;
            text-transform: uppercase;
        }

        .fb-btn {
            border: 2px solid #d3dae9;
            color: #8fa1c7;
        }

        .fb-btn span {
            font-weight: bold;
            color: #455a81;
        }

        .sign-in {
            transition-timing-function: ease-out;
        }

        .cont.s--signup .sign-in {
            transition-timing-function: ease-in-out;
            transition-duration: 1.2s;
            transform: translate3d(640px, 0, 0);
        }

        .sign-up {
            transform: translate3d(-900px, 0, 0);
        }

        .cont.s--signup .sign-up {
            transform: translate3d(0, 0, 0);
        }
    </style>
</head>
<body>
    <div class="cont">
        <div class="form sign-in">
            <h2>Welcome</h2>
            <form id="login-form" method="POST" action="{{ route('account.authenticate') }}">
            @csrf
                <label>
                    <span>Email</span>
                    <input type="email" value="{{old('email')}}" class="@error('email') is-invalid @enderror" name="email" required />
                    @error('email')
                    <p class="invalid-feedback">{{$message}}</p>
                @enderror
                </label>
                
                <label>
                    <span>Password</span>
                    <input type="password" class="@error('password') is-invalid @enderror" name="password" required />
                </label>
                @error('password')
                    <p class="invalid-feedback">{{$message}}</p>
                @enderror
                <p class="forgot-pass">Forgot password?</p>
                <button type="submit" class="submit">Sign In</button>
            </form>
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                    <h3>Don't have an account? Please Sign up!</h3>
                </div>
                <div class="img__text m--in">
                    <h3>If you already have an account, just sign in.</h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
                <h2>Create your Account</h2>
                <form id="register-form" method="POST" action="{{route('account.processRegister')}}" >
                @csrf    
                <label>
                        <span>Name</span>
                        <input type="text" name="name" required />
                    </label>
                    <label>
                        <span>Email</span>
                        <input type="email" name="email" required />
                    </label>
                    <label>
                        <span>Password</span>
                        <input type="password" name="password" required />
                    </label>
                    <label>
    <span>Confirm Password</span>
    <input type="password" name="password_confirmation" required />
</label>

                    <button type="submit" class="submit">Sign Up</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
</body>
</html>
