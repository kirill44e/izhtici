@if($errors->any())
  <div class="alert alert-danger" style="width: 35%; font-size:100%;">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error}}</li>
      @endforeach
    </ul>
  </div>
@endif

@if(session('success'))
  <div class="alert alert-success" style="width:35%; margin-left: 10%;">
    {{ session('success')}}
  </div>
@endif
