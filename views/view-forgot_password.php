<?php 
	include('views/header.php');
?>

<div id="recovery">
	<table border="0" class="clear">
		<tr>
			<td colspan="3"><h2>Password Recovery</h2></td>
		</tr>
		<tr>
			<td><label>Email:</label></td>
			<td><input type="text" name="email" class="myText"></td>
			<td align="right"><input type="submit" name="submit" class="myButton"></td>
		</tr>
	</table>
</div>	

<?php
	include('views/footer.php');
?>