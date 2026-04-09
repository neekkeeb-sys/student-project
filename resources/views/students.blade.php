<!DOCTYPE html>
<html>
<head>
    <title>Student Project</title>
</head>

<body>

    <h2>Add Student</h2>

    <form action="/students" method="POST">

        @csrf

        <input type="text" name="name" placeholder="Name">
        <br><br>

        <input type="email" name="email" placeholder="Email">
        <br><br>

        <button type="submit">Save</button>

    </form>

    <hr>

    <h2>Student List</h2>

    @foreach($students as $student)

    <p>
        {{ $student->name }} - {{ $student->email }}
    </p>

    @endforeach

</body>
</html>
