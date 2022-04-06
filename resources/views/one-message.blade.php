<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>One Message</title>
  <style>
  * {
    background-size: border-box;
  }
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
      div.block_one {
        width: 35%;
        margin-left: 10%;
        border: 2px lightblue solid;
        border-radius: 5px;
        padding: 20px;
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
      div.block_one {
        width: 50%;
        margin-left: 10%;
        border: 2px lightblue solid;
        border-radius: 5px;
        padding: 20px;
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
      div.block_one {
        width: 80%;
        margin-left: 10%;
        border: 2px lightblue solid;
        border-radius: 5px;
        padding: 20px;
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

      <div class="block_one">
        <h3>Имя: {{ $data->name}}</h3>
        <h3>Продукт: {{ $data->category}}</h3>
        <p style="width:100%;">Комментарий к заказу: {{ $data->message}}</p>
        <p><small>Дата создания: {{ $data->created_at}}</small></p>
        <a href="{{ route('contact-update', $data->id)}}"><button class="btn btn-primary">Редактировать</button></a>
        <a href="{{ route('contact-delete', $data->id)}}"><button class="btn btn-danger">Удалить</button></a>
      </div>

</body>
</html>
