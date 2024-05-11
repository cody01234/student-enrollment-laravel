<! -- Arvin Reil Tupal -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Enrollment System</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #007bff;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    nav ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
      text-align: center;
    }

    nav ul li {
      display: inline;
      margin-right: 20px;
    }

    nav ul li a {
      text-decoration: none;
      color: #333;
      padding: 5px 10px;
      border: 1px solid #007bff;
      border-radius: 5px;
    }

    nav ul li a:hover {
      background-color: #007bff;
      color: #fff;
    }

    section {
      display: none;
      padding: 20px;
    }

    footer {
      background-color: #f4f4f4;
      padding: 20px;
      text-align: center;
    }
  </style>
  <script>
    function showPage(pageId) {
      
      var sections = document.querySelectorAll('section');
      sections.forEach(function(section) {
        section.style.display = 'none';
      });
      

      var page = document.getElementById(pageId);
      page.style.display = 'block';
    }
  </script>
</head>
<body>
  <header>
    <h1>School Enrollment System</h1>
  </header>

  <nav>
    <ul>
      <li><a href="#" onclick="showPage('home')">Home</a></li>
      <li><a href="#" onclick="showPage('enrollment')">Enrollment</a></li>
      <li><a href="#" onclick="showPage('teacher')">Teachers</a></li>
      <li><a href="#" onclick="showPage('student')">Students</a></li>
      <li><a href="#" onclick="showPage('room')">Rooms</a></li>
      <li><a href="#" onclick="showPage('subject')">Subjects</a></li>
    </ul>
  </nav>

  <section id="home">
    <h2>Welcome to School Enrollment System</h2>
    <p>Please use the navigation to access different pages.</p>
  </section>

  <section id="enrollment">
    <h2>Enrollment Page</h2>
    <p>This is the enrollment page. Placeholder content for enrollment information.</p>
  </section>

  <section id="teacher">
    <h2>Teacher Page</h2>
    <p>This is the teacher page. Placeholder content for teacher information.</p>
  </section>

  <section id="student">
    <h2>Add a Student</h2>
    <form method="post" action="{{route('student.store')}}">
      @csrf
      @method('post')
    <div>
        <label>Name</label>
        <input type="text" name="Name" placeholder="Name" />

    </div>
    <div>
        <label>Age</label>
        <input type="text" name="Age" placeholder="Age" />
    </div>
    <div>
        <label>Address</label>
        <input type="text" name="Address" placeholder="Address" />
    </div>
    <div>
        <input type= "submit" value = "Add a New Student" />
    </div>
    </form>
  </section>

  <section id="room">
    <h2>Room Page</h2>
    <p>This is the room page. Placeholder content for room information.</p>
  </section>

  <section id="subject">
    <h2>Subject Page</h2>
    <p>This is the subject page. Placeholder content for subject information.</p>
  </section>


  <script>

    showPage('student');
  </script>
</body>
</html>
<! -- Arvin Reil Tupal --> 