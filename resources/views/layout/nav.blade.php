<nav style="margin-top: 30px">
    <ul>
        <li><a href="{{ route('home') }}" onclick="showPage('home')">Home</a></li>
        <li><a href="{{ route('program.index') }}" onclick="showPage('program')">Program</a></li>
        <li><a href="{{ route('teacher.index') }}" onclick="showPage('teacher')">Teachers</a></li>
        <li><a href="{{ route('student.index') }}" onclick="showPage('student')">Students</a></li>
        <li><a href="{{ route('subject.index') }}" onclick="showPage('subject')">Subjects</a></li>
        <li><a href="{{ route('offer.index') }}" onclick="showPage('offers')">Subject Offered</a></li>
        <li><a href="{{ route('enrollment.index') }}" onclick="showPage('enrollment')">Enrollment</a></li>

    </ul>
</nav>
