 <?php
function getUserFromUsername($username)
{
	/* @var db PDO */
	global $db;

	$query = 'SELECT * FROM UserTable WHERE Username = :Username';
	$statement = $db->prepare($query);
	$statement->bindValue(':Username', $username);
	$statement->execute();
	$results = $statment->fetch();
	return $results;
}

function getUserFromUserID($userID)
{
	/* @var db PDO */
	global $db;

	$query = 'SELECT * FROM UserTable WHERE UserID = :UserID';
	$statement = $bd->prepare($query);
	$statement->bindValue(':UserID', $userID);
	$statement->execute();
	$results = $statement->fetch();
	return $results;
}

function verifyPassword($username, $password)
{
	$user = getUserFromUsername($username);

	if (isset($user))
	{
		if ($password == $user['Password'])
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