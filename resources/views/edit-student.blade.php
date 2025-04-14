<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Student</title>
</head>
<body>
  <h1>Edit Student Name</h1>
  <form action="/editStudent/{{$student->id}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{$student->name}}">
    <button>Save changes</button>
  </form>
</body>
</html>