<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Student View</title>
</head>
<body>
  <h1>This is the student's view!</h1>

  <ul>
  @foreach ($students as $student)
    <li>{{ $student->name }}</li>
  @endforeach
  </ul>

</body>
</html>