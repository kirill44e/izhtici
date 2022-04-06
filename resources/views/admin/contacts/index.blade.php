<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>All Message</title>
  <style>
        ul.pagination {
          display: inline-block;
          padding: 0;
          margin: 0;
      }

      ul.pagination li {display: inline;}

      ul.pagination li a {
          color: black;
          float: left;
          padding: 8px 16px;
          text-decoration: none;
      }

    @media (min-width: 950px) and (max-width: 2000px) {
      div.block {
        width: 30%;
        margin-left:10%;
        float:left;
        border: 2px lightblue solid;
        border-radius: 5px;
        padding: 20px;
        margin-top: 30px;
        position: relative;
      }
    }
    @media (min-width: 550px) and (max-width: 950px) {
      div.block {
        width: 48%;
        margin-left:2%;
        float:left;
        border: 2px lightblue solid;
        border-radius: 5px;
        padding: 20px;
        margin-top: 30px;
        position: relative;
      }
    }
    @media (min-width: 360px) and (max-width: 550px) {
      div.block {
        width: 48%;
        height: 360px;
        margin-left:2%;
        float:left;
        border: 2px lightblue solid;
        border-radius: 5px;
        padding: 20px;
        margin-top: 30px;
        position: relative;
      }

      div.block h3 {
        font-size: 17px;
      }

      div.block p {
        font-size: 15px;
      }
    }
  </style>
</head>
<body>
  <header class="justify-content-md-between py-3 mb-4 border-bottom">

      <div class="col-md-3 text-end" style="float:right; margin-right:10%;">
        <a href="{{ route('admin.logout')}}"><button type="button" class="btn btn-primary">Выйти</button></a>
      </div>
    </header>

    @include('inc/messages')

    @foreach($contacts as $contact)
      <div class="block">
        <h3>Имя: {{ $contact->name}}</h3>
        <p><font style="color:green;">Статус:</font> {{ $contact->status}}</p>
        <p>E-mail: {{ $contact->email}}</p>
        <p><small>Дата создания: {{ $contact->created_at}}</small></p>
        <a href="{{ route('admin.contacts.show', $contact->id)}}"><button class="btn btn-warning" style="right: 10px; bottom:5px; position: absolute;">Детальнее</button></a>
      </div>
    @endforeach

      {{$contacts->links()}}

</body>
</html>
