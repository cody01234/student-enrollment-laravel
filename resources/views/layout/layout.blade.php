<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Enrollment System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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

    @include('layout.nav')
    @yield('content')

    <!--


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
        <h2>Student Page</h2>
        <p>This is the student page. Placeholder content for student information.</p>
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
        showPage('enrollment');
    </script>
 -->


</body>

</html>
