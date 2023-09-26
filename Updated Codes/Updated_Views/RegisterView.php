<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style>
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}
		input {
			width: 100%;
			max-width: 300px;
			padding: 10px;
			margin-bottom: 10px;
			box-sizing: border-box;
		}
		input::placeholder {
			color: #aaa;
		}
		.error {
            color: red;
            font-size: 12px;
            display: block; /* add this line to make error message appear below the textbox */
            margin-top: 3px; /* adjust the margin as needed */
		}
        h1 {
			text-align: center;
            font-size: 30px;
		}
	</style>
</head>
<body>
	<h1>Sign Up</h1>
    
	<form method="post" action=<?= base_url('public/LoginController/register') ?>>
		<input type="text" name="username" placeholder="Username">
	    <?php if(isset($validation) && $validation->getError('username')): ?>
	        <span class="error"><?= $validation->getError('username') ?></span>
	    <?php endif; ?>

		<input type="text" name="email" placeholder="Email">
	    <?php if(isset($validation) && $validation->getError('email')): ?>
	        <span class="error"><?= $validation->getError('email') ?></span>
	    <?php endif; ?>

		<input type="password" name="password" placeholder="Password">
	    <?php if(isset($validation) && $validation->getError('password')): ?>
	        <span class="error"><?= $validation->getError('password') ?></span>
	    <?php endif; ?>

		<input type="password" name="confirm_password" placeholder="Confirm Password">
	    <?php if(isset($validation) && $validation->getError('confirm_password')): ?>
	        <span class="error"><?= $validation->getError('confirm_password') ?></span>
	    <?php endif; ?>

		<input type="text" name="rfid_no" placeholder="RFID Number">
	    <?php if(isset($validation) && $validation->getError('rfid_no')): ?>
	        <span class="error"><?= $validation->getError('rfid_no') ?></span>
	    <?php endif; ?>

		<input type="text" name="name" placeholder="Name">
	    <?php if(isset($validation) && $validation->getError('name')): ?>
	        <span class="error"><?= $validation->getError('name') ?></span>
	    <?php endif; ?>

		<input type="text" name="phone" placeholder="Phone number">
	    <?php if(isset($validation) && $validation->getError('phone')): ?>
	        <span class="error"><?= $validation->getError('phone') ?></span>
	    <?php endif; ?>

		<button type="submit">Register</button>
	</form>
</body>
</html>