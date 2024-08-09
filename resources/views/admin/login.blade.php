<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>