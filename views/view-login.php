<?php 
	require_once("views/header.php");
?>
<div id="login-box">
	<form action="#" method="post">
		<table border="0">
			<tr>
				<td colspan="2" align="center"><h2 style="color:white;">Customer Login</h2></td>
			</tr>

			<tr>
				<td colspan="2"><input type="text" name="User" class="myText" placeholder="Username"/></td>
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
	require_once("views/footer.php")
?>