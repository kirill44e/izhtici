<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Update</title>
  <style>
  header {
    width: 100%;
    height: 70px;
    box-shadow: 2px 4px 5px silver;
    margin-bottom: 50px;
  }
    ul.navv {
      width: 70%;
      float: right;
      list-style-type: none;
    }
    ul.navv li {
      margin-right: 5%;
      font-size: 20px;
      padding: 25px;
      float: right;
    }
    a {
      text-decoration: none;
      color: black;
    }
    button.btn_logout {
      width: 70px;
      height: 35px;
      border: none;
      background: lightblue;
      color: white;
      font-size: 18px;
      text-align: center;
      border-radius: 5px;
    }

    button.btn_logout:hover {
      background: blue;
    }

    select.sel {
      width: 100%;
      height: 45px;
      margin-top: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px silver solid;
    }
    @media (min-width: 950px) and (max-width: 2000px) {
      ul.navv li {
        margin-right: 5%;
        font-size: 20px;
        padding: 0px;
        padding-top: 25px;
        float: right;
      }
      form {
        width: 35%;
        margin-left: 10%;
      }
    }
    @media (min-width: 550px) and (max-width: 950px) {
      ul.navv li {
        margin-right: 5%;
        font-size: 15px;
        padding: 0px;
        padding-top: 25px;
        float: right;
      }
      form {
        width: 50%;
        margin-left: 10%;
      }
    }
    @media (min-width: 360px) and (max-width: 550px) {
      ul.navv li {
        margin-right: 5%;
        font-size: 14px;
        padding: 0px;
        padding-top: 25px;
        float: right;
      }
      ul.navv {
        width: 100%;
        float: right;
        list-style-type: none;
      }
      form {
        width: 80%;
        margin-left: 10%;
      }
    }
  </style>
</head>
<body>
  <header>
    <ul class="navv">
      <li><a href="{{ route('logout')}}"><button type="button" class="btn_logout">Выйти</button></a></li>
      <li><a href="{{ route('contact-data')}}" style="color: lightblue;">Мои заказы</a></li>
      <li><a href="{{ route('user')}}">Новый заказ</a></li>
    </ul>
  </header>

    @include('inc/messages')

    <form action="{{route('contact-update-submit', $data->id)}}" method="post">
      @csrf

      <div class="form-group">
        <label for="name">Ваше имя:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$data->name}}">
      </div>

      <div class="form-group">
        <label for="email">Ваш email:</label>
        <input type="text" name="email" class="form-control" id="email" value="{{$data->email}}">
      </div>

      <div class="form-group">
        <select name="category" id="category" class="sel" value="{{$data->category}}">
          <option>Автоматизированное обновление измененных конфигураций 1С</option>
          <option>Автоматическое тестирование конфигураций 1С</option>
          <option>Сервисы «ЛИК» для бизнеса</option>
          <option>ИТ управление: Учет и инвентаризация ПО в 1С</option>
          <option>Обновление информационных баз 1С в пакетном режиме</option>
				</select>
      </div>

      <div class="form-group">
        <label for="message">Комментарий к заказу:</label>
        <textarea name="message" rows="8" cols="80" id="message" class="form-control"> {{$data->message}} </textarea>
      </div>

      <button type="submit" class="btn btn-success" style="margin-top:20px;">Обновить</button></a>
    </form>
</body>
</html>
