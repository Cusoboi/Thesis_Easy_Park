<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>


   <div>
   <h1>Sign in</h1>
   <?php if(session()->get('msg')): ?>
		<p><?= session()->get('msg') ?></p>
	<?php endif; ?>

	<?= form_open(base_url('public/LoginController/login')) ?>
		<label>Email</label>
		<input type="email" name="email" required><br>

		<label>Password</label>
		<input type="password" name="password" required><br>

		<button type="submit">Login</button>
		<a href="<?= base_url('public/LoginController/register/') ?>" class="btn btn-primary btn-sm">Sign up</a>
	<?= form_close() ?>
   </div>



</body>
</html>