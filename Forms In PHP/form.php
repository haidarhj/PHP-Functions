<html>
<head>
    <title>Introduction</title>
</head>
<body>
    <h2>Student Union Form</h2>
    <form method="POST" action="proses.php">
        Name: <input type="text" name="name">
        <br><br>
        Email: <input type="text" name="email">
        <br><br>
        Website: <input type="text" name="website">
        <br><br>
        Comment: <textarea name="comment" cols="40" rows="5"></textarea>
        <br><br>
        Gender:
         <input type="radio" name="gender" value="famale">Famale
         <input type="radio" name="gender" value="male">Male
         <input type="radio" name="gender" value="other">Other
         <br><br>
         <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>