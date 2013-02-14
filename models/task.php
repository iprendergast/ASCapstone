<?php

function getTaskFromID($taskID)
{
	/* @var $db PDO */
	$query = 'SELECT * FROM TaskTable WHERE TaskID = :TaskID';
	$statement = $db->prepare($query);
	$statement->bindValue(':TaskID', $taskID);
	$statement->execute();
	$results = $statement->fetch();
	$statement->closeCursor();
	return $reuslts;
}
function addTask($task)
{
	/* @var $db PDO */
	global $db;

	$query = 'INSERT INTO TaskTable (OrderDetailID, UserID, StartTime, EndTime)
	values(:OrderDetailID, :UserID, :StartTime, :EndTime)';
	$statement = $db->prepare($query);
	$statement->bindValue(':OrderDetailID', $orderDetailID);
	$statement->bindValue(':UserID', $userID);
	$statement->bindValue(':StartTime', $startTime);
	$statement->bindValue(':endTime', $endTime);
	$statement->execute();
	$statement->closeCursor();
}

function editTask($taskID)
{
	/* @var $db PDO */
	global $db;

	$task = getTaskFromID($taskID);

	$query = 'UPDATE TaskTable SET OrderDetailID = :OrderDetailID, UserID = :UserID,
		StartTime = :StartTime, EndTime = :EndTime WHERE TaskID = :TaskID';
	$statement = $db->prepare($query);
	$statement->bindValue(':OrderDetailID', $task['OrderDetailID']);
	$statement->bindValue(':UserID', $task['UserID']);
	$statement->bindValue(':StartTime', $task['StartTime']);
	$statement->bindValue(':EndTime', $task['EndTime']);
	$statement->bindValue(':TaskID', $taskID);
	$statement->execute();
	$statement->closeCursor();
}