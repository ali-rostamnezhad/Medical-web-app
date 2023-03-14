<!DOCTYPE html>
<html>
<head>
    <title>Medical Diagnosis System</title>
</head>
<body>
    <h1>Medical Diagnosis System</h1>
    <form method="POST" action="diagnosis.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br><br>

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br><br>

        <label for="symptoms">Symptoms:</label>
        <textarea name="symptoms" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
