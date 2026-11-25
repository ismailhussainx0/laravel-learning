<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

    <h2>Student Registration</h2>

    <form action="/student/save" method="POST">

    @csrf

        <label>Student Name:</label>

        <input type="text" name="student_name">
        
        <input type="email" name="student_email">
        
        <input type="number" name="student_age">

        <button type="submit">Register</button>

    </form>

</body>
</html>