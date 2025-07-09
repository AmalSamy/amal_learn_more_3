<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>CONTACT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4 text-center">CONTACT</h2>

  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover text-center">
      <thead class="table-dark">
        <tr>
      <th >#</th>
      <th>NAME</th>
      <th>PHONE</th>
      <th>EMAIL</th>
      <th>MSG</th>
      <th>IMAGE</th>
      <th>CREATEDAT</th>
      <th>UPDATEDAT</th>
        </tr>
      </thead>
      <tbody>
        <tr>
      @foreach($contacts as $c)
      <td>{{$c->id}}</td>
      <td>{{$c->name}}</td>
      <td>{{$c->phone}}</td>
      <td>{{$c->email}}</td>
      <td>{{$c->msg}}</td>
      <td><img style="width:70px"src="{{asset('uploads/' . $c->image)}}"></td>
      <td>{{$c->created_at}}</td>
      <td>{{$c->updated_at}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
