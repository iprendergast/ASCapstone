<?php
function getUserFromUsername($username)
{
	/* @var db PDO */
	global $db;

	$query = 'SELECT * FROM UserTable WHERE $Username = :Username';
	$statement = $db->prepare($query);
	$statement->bindValue(':Username', $username);
	$statement->execute();
	$results = $statment->fetch();
	return $results;
}

function verifyPassword($Username, $password)
{
	$user = getUserFromUsername($username);

	if (isset($user))
	{
		if ($password === $user['Password'])
		{
			//username was found and password is a match
			return true;
		}
		else
		{
			//password does not match record for username
			return false;
		}

	}

	else
	{
		//no record for username found
		return false;
	}
}