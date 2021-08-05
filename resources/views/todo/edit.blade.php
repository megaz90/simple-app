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
        @if ($errors->any())
        @foreach ($errors->all() as $message)
        <div class="alert alert-danger">{{ $message }}</div>
        @endforeach
        @endif
        <div class="card">
            <div class="card-body">
                <div class="row mt-5">
                    <form action="{{ route('todo.update', $todo->id) }}" method="POST">
                        @csrf
                    <div class="col-md-6 offset-3">
                          <div class="mb-3">
                            <label for="todo" class="form-label">Todo Description:</label>
                            <textarea class="form-control" rows="3" name="todo" placeholder="Edit Todo">{{ $todo->todo }}</textarea>
                          </div>
                          <div class="mb-3">
                            <center><button type="submit" class="btn btn-primary">Update</button></center>
                          </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>