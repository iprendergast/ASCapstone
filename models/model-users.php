<?php
function addUser($user)
{
	/* @var $db PDO */
	global $db;

	$query = 'INSERT INTO UserTable (FirstName, MiddleName, LastName, Company,
		Street, Street2, City, State, Zip, Phone, Email, DOB, Username, Password,
		Department) VALUES (:FirstName, :MiddleName, :LastName, :Company,
		:Street, :Street2, :City, :State, :Zip, :Phone, :Email, :DOB, :Username, :Password)';
	$statement = $db->prepare($query);
	$statement->bindValue(':FirstName', $user['FirstName']);
	$statement->bindValue(':MiddleName', $user['MiddleName']);
	$statement->bindValue(':LastName', $user['LastName']);
	$statement->bindValue(':Company', $user['Company']);
	$statement->bindValue(':Street', $user['Street']);
	$statement->bindValue(':Street2', $user['Street2']);
	$statement->bindValue(':City', $user['City']);
	$statement->bindValue(':State', $user['State']);
	$statement->bindValue(':Zip', $user['Zip']);
	$statement->bindValue(':Phone', $user['Phone']);
	$statement->bindValue(':Email', $user['Email']);
	$statement->bindValue(':DOB', $user['DOB']);	
	$statement->bindValue(':Username', $user['Username']);
	$statement->bindValue(':Password', $user['Password']);

	$statement->execute();
	$statement->closeCursor();
}

function getUser($userID)
{
	/* @var $db PDO */
	global $db;
	$query = 'SELECT * FROM UserTable WHERE UserID = :UserID;';
	$statement = $db->prepare($query);
	$statement->bindValue(':UserID', $userID);
	$statement->execute();
	$results = $statement->fetch();
	$statement->closeCursor();
	return $results;
}

function editUser($user)
{
	/* @var $db PDO */
	global $db;


	$query = 'UPDATE UserTable Set FirstName = :FirstName, MiddleName = :MiddleName,
	LastName = :LastName, Company = :Company, Street = :Street, Street2 = :Street2,
	City = :City, State = :State, Zip = :Zip, Phone = :Phone, Email = :Email, DOB = :DOB,
	PermissionLevel = :PermissionLevel, Username = :Username, Password = :Password, 
	Department = :Department WHERE UserID = :UserID;';
	$statement = $db->prepare($query);
	$statement->bindValue(':FirstName', $user['FirstName']);
	$statement->bindValue(':MiddleName', $user['MiddleName']);
	$statement->bindValue(':LastName', $user['LastName']);
	$statement->bindValue(':Company', $user['Company']);
	$statement->bindValue(':Street', $user['Street']);
	$statement->bindValue(':Street2', $user['Street2']);
	$statement->bindValue(':City', $user['City']);
	$statement->bindValue(':State', $user['State']);
	$statement->bindValue(':Zip', $user['Zip']);
	$statement->bindValue(':Phone', $user['Phone']);
	$statement->bindValue(':Email', $user['Email']);
	$statement->bindValue(':DOB', $user['DOB']);
	$statement->bindValue(':PermissionLevel', $user['PermissionLevel']);	
	$statement->bindValue(':Username', $user['Username']);
	$statement->bindValue(':Password', $user['Password']);
	$statement->bindValue(':Department', $user['Department']);
	$statement->bindValue(':UserID', $user['UserID']);
	$statement->execute();
	$statement->closeCursor();

}

function deleteUser($userID)
{
    /* @var $db PDO */
    global $db;

    $query = 'DELETE FROM userTable where userID = :userID';
    $statement = $db->prepare($query);
    $statement->bindValue(':userID', $userID);
    $statement->execute();
    $statement->closeCursor();	
}