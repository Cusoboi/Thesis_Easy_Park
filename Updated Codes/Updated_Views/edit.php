<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Edit User</h1>

    <form method="post" action="<?= base_url('public/Users/update/'.$user['id']) ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?= $user['name'] ?>"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $user['email'] ?>"><br>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone" value="<?= $user['phone'] ?>"><br>

        <button type="submit">Save Changes</button>
    </form>
</body>
</html>