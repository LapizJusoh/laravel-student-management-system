<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
  <title>Student Management System</title>
</head>
<body>
  <div class="container">
    <h1>Welcome to the Student Management System!</h1>
    <form action="/create" method="POST">
      @csrf
      <h2>Student Form</h2>
      <div>
        <label for="name">Name:</label> <input name="name" type="text"/>
      </div>
      <div>
        <label for="email">Email:</label> <input name="email" type="email"/>
      </div>
      <button>Add Student</button>
    </form>

    <form>
      <h2>Course Form</h2>
      <label for="course_name">Name:</label> <input name="course_name" type="text"/>
      <button>Add Course</button>
    </form>
  </div>
</body>
</html>