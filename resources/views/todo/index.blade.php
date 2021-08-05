<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>My Todo</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-center mt-5">Todo App</h1>
        </div>
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <a href="{{ route('todo.create') }}" class="btn btn-primary">Create Todo</a>
                </div>
            </div>
        </div>
        <div class="row mt-5 mx-5">
            <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Todo</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($todos as $todo)
                  <tr>
                    <th scope="row">{{ $todo->id }}</th>
                    <td>{{ $todo->todo }}</td>
                    <td>
                      <a href="{{ route('todo.edit',$todo->id) }}" class="btn btn-success btn-sm">Edit</a>
                      &nbsp;
                      <a href="{{ route('todo.delete', $todo->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>