<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>Student Management System</title>
</head>

<body>
    <h1>Welcome to the Student Management System!</h1>
    <div class="container">
        <div class="input">
            <form action="/createStudent" method="POST">
                @csrf
                <h2>Student Form</h2>
                <div>
                    <label for="name">Name:</label> <input name="name" type="text" />
                </div>
                <div>
                    <label for="email">Email:</label> <input name="email" type="email" />
                </div>
                <button>Add Student</button>
            </form>

            <form action="/createCourse" method="POST">
                @csrf
                <h2>Course Form</h2>
                <label for="name">Name:</label> <input name="name" type="text" />
                <button>Add Course</button>
            </form>

            <form>
                <h2>Exam Marks Form</h2>
                <label for="student_name">Student</label>
                <select id="students" name="students">
                  @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                  @endforeach
                </select>

                <label for="course_name">Course</label>
                <select id="courses" name="courses">
                  @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                  @endforeach
                </select>

                <label for="exam_marks">Exam marks:</label> <input name="exam_marks" type="text" />
                <button>Add Marks</button>
            </form>

            <form>
                <button class="csv_export">Export Report data into CSV format</button>
            </form>
        </div>
        <div class="output">
          <h1>Output Data</h1>
          <h2>Students</h2>
          <ul class="student">
            @foreach ($students as $student)
              <li>{{ $student->name }} <button>Edit</button> <button>Delete</button></li>
            @endforeach
          </ul>

          <h2>Courses</h2>
          <ul class="courses">
            @foreach ($courses as $course)
              <li>{{ $course->name }} <button>Edit</button> <button>Delete</button></li>
            @endforeach
          </ul>
        </div>
    </div>
</body>

</html>
