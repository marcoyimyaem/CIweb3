<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Insert Form</title>
</head>
<body>

<h2>Insert Data</h2>

<form method="post" action="<?php echo site_url('Home/updateUser'); ?>">
    <label for="first_name">Column 1:</label>
    <input type="text" name="first_name" required>

    <br>

    <label for="last_name">Column 2:</label>
    <input type="text" name="last_name" required>

    <!-- Add more form fields as needed -->

    <br>

    <button type="submit">Insert Data</button>
</form>

</body>
</html>