<?php get_header(); ?>
<div id="login-box">
	<div class="center form">
		<form action="." method="post">
			<input type="hidden" name="action" value="validateLogin">
			<h1>Login</h1>
			<input type="text" name="User" placeholder="Username" value="<?php $_POST['Username']; ?>"/>
			<input type="password" name="Pass" placeholder="Password"/>
			<input class="button"type="submit" name="submit" value="Login"/>
				<div class="options">
					<a href="?action=createAccount">Create an account</a>
					<a href="?action=forgotPassword">Forgot Password?</a>
				</div>
		</form>
	</div>
</div>

<?php get_footer(); ?>