<?php
function addOrder($order)
{
	/* @var $db PDO */
	global $db;

	$query = 'INSERT INTO OrderDetailTable (OrderID, Quantity, ProductID, StatusID,
		ProjectedShipDate, OrderDate, TaskAssignmentID, ActualShipDate, PONumber, SpecialAssignment1, SpecialAssignment2, SpecialAssignment3, PricePaid, CommentID,) 
                VALUES (:OrderID, :Quantity, :ProductID, :StatusID, :ProjectedShipDate, 
                :OrderDate, :TaskAssignmentID, :ActualShipDate, :PONumber, :SpecialAssignment1, :SpecialAssignment2, :SpecialAssignment3, :PricePaid, :CommentID)';
	$statement = $db->prepare($query);
	$statement->bindValue(':OrderID', $order['OrderID']);
	$statement->bindValue(':Quantity', $order['Quantity']);
	$statement->bindValue(':ProductID', $order['ProductID']);
	$statement->bindValue(':StatusID', $order['StatusID']);
	$statement->bindValue(':ProjectedShipDate', $order['ProjectedShipDate']);
	$statement->bindValue(':OrderDate', $order['OrderDate']);
	$statement->bindValue(':TaskAssignmentID', $order['TaskAssignmentID']);
	$statement->bindValue(':ActualShipDate', $order['ActualShipDate']);
	$statement->bindValue(':PONumber', $order['PONumber']);
	$statement->bindValue(':SpecialAssignment1', $order['SpecialAssignment1']);
	$statement->bindValue(':SpecialAssignment2', $order['SpecialAssignment2']);
	$statement->bindValue(':SpecialAssignment3', $order['SpecialAssignment3']);	
	$statement->bindValue(':PricePaid', $order['PricePaid']);
	$statement->bindValue(':CommentID', $order['CommentID']);

	$statement->execute();
	$statement->closeCursor();
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
        function getOrderDetail($OrderDetailID)
{
	/* @var $db PDO */
	global $db;
	$query = 'SELECT * FROM OrderDetailTable WHERE OrderDetailID = :OrderDetailID;';
	$statement = $db->prepare($query);
	$statement->bindValue(':OrderID', $OrderID);
	$statement->execute();
	$results = $statement->fetch();
	$statement->closeCursor();
	return $results;
}
        
        function updateOrder($order)
{
	/* @var $db PDO */
	global $db;

	$query = 'UPDATE OrderDetailTable Set OrderID = :OrderID, Quantity = :Quantity, ProductID = :ProductID, StatusID = :StatusID,
		ProjectedShipDate = :ProjectedShipDate, OrderDate = :OrderDate, TaskAssignmentID = :TaskAssignmentID, ActualShipDate = :ActualShipDate, 
                PONumber = :PONumber, SpecialAssignment1 = :SpecialAssignment1, SpecialAssignment2 = :SpecialAssignment2, 
                SpecialAssignment3 = :SpecialAssignment3, PricePaid = :PricePaid, CommentID = :CommentID, WHERE OrderDetailID = :OrderDetailID'; 
                
	$statement = $db->prepare($query);
	$statement->bindValue(':OrderID', $order['OrderID']);
	$statement->bindValue(':Quantity', $order['Quantity']);
	$statement->bindValue(':ProductID', $order['ProductID']);
	$statement->bindValue(':StatusID', $order['StatusID']);
	$statement->bindValue(':ProjectedShipDate', $order['ProjectedShipDate']);
	$statement->bindValue(':OrderDate', $order['OrderDate']);
	$statement->bindValue(':TaskAssignmentID', $order['TaskAssignmentID']);
	$statement->bindValue(':ActualShipDate', $order['ActualShipDate']);
	$statement->bindValue(':PONumber', $order['PONumber']);
	$statement->bindValue(':SpecialAssignment1', $order['SpecialAssignment1']);
	$statement->bindValue(':SpecialAssignment2', $order['SpecialAssignment2']);
	$statement->bindValue(':SpecialAssignment3', $order['SpecialAssignment3']);	
	$statement->bindValue(':PricePaid', $order['PricePaid']);
	$statement->bindValue(':CommentID', $order['CommentID']);

	$statement->execute();
	$statement->closeCursor();
        
}
        function getUserOrders ($userID)
        {
            /* @var $db PDO */
	global $db;
	$query = 'SELECT * FROM OrderTable WHERE UserID = :UserID;';
	$statement = $db->prepare($query);
	$statement->bindValue(':UserID', $UserID);
	$statement->execute();
	$results = $statement->fetch();
	$statement->closeCursor();
	return $results;
        }
        
        
        //add more retrieve order functions for returning sorted lists
        
        function getOrderDetailTask ($TaskAssignmentID)
        {
             /* @var $db PDO */
	global $db;
	$query = 'SELECT * FROM OrderDetailTable WHERE TaskAssignmentID = :TaskAssignmentID;';
	$statement = $db->prepare($query);
	$statement->bindValue(':TaskAssignmentID', $TaskAssignmentID);
	$statement->execute();
	$results = $statement->fetch();
	$statement->closeCursor();
	return $results;
        }
        
        
         function getOrderDetailStatus ($StatusID)
        {
             /* @var $db PDO */
	global $db;
	$query = 'SELECT * FROM OrderDetailTable WHERE StatusID = :StatusID;';
	$statement = $db->prepare($query);
	$statement->bindValue(':StatusID', StatusID);
	$statement->execute();
	$results = $statement->fetch();
	$statement->closeCursor();
	return $results;
        }
        
        function getOrderDetailPONumber ($PONumber)
        {
             /* @var $db PDO */
	global $db;
	$query = 'SELECT * FROM OrderDetailTable WHERE PONumber = :PONumber;';
	$statement = $db->prepare($query);
	$statement->bindValue(':PONumber', PONumber);
	$statement->execute();
	$results = $statement->fetch();
	$statement->closeCursor();
	return $results;
        }

