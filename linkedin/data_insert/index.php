<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Data into MySQL</title>
</head>
<body>
    <form action="insert.php" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br><br>
        
        <label for="content">Content:</label><br>
        <textarea name="content" id="content" rows="5" cols="40" required></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
