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
    <form>
      <h2>Student Form</h2>
      <label for="student_name">Name:</label>
      <input name="student_name" type="text"/> <br />
      <label for="email">Email:</label>
      <input name="email" type="email"/> <br />
      <button>Add student</button>
    </form>
  </div>
</body>
</html>