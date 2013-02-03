<?php 
	include("views/header.php");
?>
<div id="login-box">
	<form action="index.php" method="post">
		<input type="hidden" name="action" value="validateLogin">
		<table border="0">
			<tr>
				<td colspan="2" align="center"><h2 style="color:white;">Customer Login</h2></td>
			</tr>

			<tr>
				<td colspan="2"><input type="text" name="User" class="myText" placeholder="Username"
					<?php 
						if (isset($user))
							{ ?> value= <?php echo '"'.$user['Username'].'"';} 
						//this is supposed to prefill username field if there is a session found for this user
						// could also have a value="<?php if (isset($user)) {echo $user['Username'};}
						//	else {echo '';} "
					?>/>

				</td>
			</tr>

			<tr>
				<td colspan="2"><input type="text" name="Pass" class="myText" placeholder="Password"/></td>
			</tr>

			<tr>
				<td align="left"><input class="myButton"type="submit" name="Submit" value="Login"/></td>
				<td align="right"><a href="#">Create an account</a></td>
			</tr>


		</table>
	</form>
</div>

<?php
	include("views/footer.php")
?>