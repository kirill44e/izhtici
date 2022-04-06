<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Авторизация</title>
  </head>
<body>
	<div class="divimg">
		<header>
			<a href="{{ route('home')}}"><img src="/img/logo.png" style="padding-top: 15px; padding-left: 20px; float: left;"></a>
		</header>
@include('inc/messages')
    <form action="{{ route('login_process')}}" method="POST" style="width:35%; margin:auto; margin-top:10%; text-align:center;">
      @csrf

    <img class="mb-4" src="/img/img1.png" alt="" width="50" height="50">
    <h1 class="h3 mb-3 fw-normal" style="color: white;">Введите данные:</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">{{ __('Email') }}</label>
    </div>
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Пароль">
      <label for="floatingPassword">{{ __('Пароль') }}</label>
    </div>
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <br>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
    <a href="{{ route('register')}}" style="font-size:20px;">Регистрация</a>
  </body>
  </html>
