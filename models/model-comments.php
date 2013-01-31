<?php
function addComment($CommentID, $Comment, $CommentDetailID)
{
	/* @var $db PDO */
	global $db;

	$query = 'INSERT INTO CommentDetailTable (Comment, CommentDetailID)
                VALUES (:Comment, :CommentDetailID) WHERE CommentID = :CommentID';
	$statement = $db->prepare($query);
	$statement->bindValue(':Comment', $comment);
	$statement->bindValue(':CommentDetailID', $commentDetailID);
        $statement->bindValue(':CommentID', $CommentID);
	

	$statement->execute();
	$statement->closeCursor();
        
        //???????also add the commentID to the order detail ID somehow????????
        
        
}

 function getComment($CommentID)
{
	/* @var $db PDO */
	global $db;
	$query = 'SELECT * FROM CommentDetailTable WHERE OrderDetailID = :OrderDetailID;';
	$statement = $db->prepare($query);
	$statement->bindValue(':OrderID', $OrderID);
	$statement->execute();
	$results = $statement->fetch();
	$statement->closeCursor();
	return $results;
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
