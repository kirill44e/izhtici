<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Autorization</title>
  <style media="screen">
    div.divimg {
      width: 100%;
      height: 100vh;
      background-size: cover;
      background-repeat: no-repeat;
      background-image: url("../img/fon.jpg");
      position: relative;
      max-height: 1300px;
    }

    header {
  		width: 100%;
  		height: 70px;
  		background: linear-gradient(90deg, #FFFFFF 0%, rgba(255, 255, 255, 0.2) 41.15%, rgba(255, 255, 255, 0.2) 100%);
  		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  	}
  </style>
</head>
<body>
  <div class="divimg">
    <header>
      <a href="/"><img src="/img/logo.png" style="padding-top: 15px; padding-left: 20px; float: left;"></a>
    </header>

    <form style="width: 35%; margin: auto; text-align: center; margin-top: 10%;" method="POST" action="{{ route('login') }}">
    @csrf

      <img class="mb-4" src="/img/img1.png" alt="" width="50" height="50">
      <h1 class="h3 mb-3 fw-normal" style="color: white;">Введите данные:</h1>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">{{ __('Email Address') }}</label>
      </div>
      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">{{ __('Password') }}</label>
      </div>
      @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      <br>
      <button class="w-100 btn btn-lg btn-primary" type="submit" style="font-size: 14px;">{{ __('Login') }}</button>

      <a href="{{ route('auth/register')}}" style="font-size: 20px;">Регистрация</a>
    </form>
  </div>
</body>
</html>
