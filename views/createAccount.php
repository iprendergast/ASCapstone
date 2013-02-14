<?php get_header(); ?>
	<?php get_nav("Create New User"); ?>
	<div class="center page">
		<div class="error"><?php echo $error; ?></div>
		<form action="." method="post" id="createAccount">
			<input type="hidden" name="action" value="addAccount" />
			<input type="text" name="FirstName" placeholder="First Name*" class="FirstName" value="<?php echo $_POST['FirstName']; ?>" />
			<input type="text" name="MiddleName" placeholder="Middle Name" class="MiddleName left" value="<?php echo $_POST['MiddleName']; ?>" />
			<input type="text" name="LastName" placeholder="Last Name*" class="LastName" value="<?php echo $_POST['LastName']; ?>" />
			<input type="text" name="Company" placeholder="Company*" class="Company left" value="<?php echo $_POST['Company']; ?>" />
			<input type="text" name="Street" placeholder="Street*" class="Street" value="<?php echo $_POST['Street']; ?>" />
			<input type="text" name="Street2" placeholder="Street2" class="Street2 left" value="<?php echo $_POST['Street2']; ?>" />
			<input type="text" name="City" placeholder="City*" class="City" value="<?php echo $_POST['City']; ?>" />
			<input type="text" name="State" placeholder="State*" class="State left" value="<?php echo $_POST['State']; ?>" />
			<input type="text" name="Zip" placeholder="Zip*" class="Zip" value="<?php echo $_POST['Zip']; ?>" />
			<input type="text" name="Phone" placeholder="Phone*" class="Phone left" value="<?php echo $_POST['Phone']; ?>" />
			<input type="text" name="Email" placeholder="Email*" class="Email" value="<?php echo $_POST['Email']; ?>" />
			<input type="text" name="DOB" placeholder="DOB*" class="DOB left" value="<?php echo $_POST['DOB']; ?>" />
			<input type="text" name="Username" placeholder="Username*" class="Username" value="<?php echo $_POST['Username']; ?>" />
			<input type="password" name="Password" placeholder="Password*" class="Password left" value="<?php echo $_POST['Password']; ?>" />
			<input type="submit" name="submit" value="Create Account" class="button submit">
		</form>
	</div>
<?php get_footer(); ?>