<?php
//forogot password prompts for email and asks a security question

function getUserfromEmail($email)
{
	/* @var db PDO */
	global $db;

	$query = 'SELECT * FROM UserTable WHERE $email = :email';
	$statement = $db->prepare($query);
	$statement->bindValue(':email', $email);
	$statement->execute();
	$results = $statment->fetch();
	return $results;
}

//function will pick a security question to ask and return the question
//and answer as an array.
//should only be called if it is verified that $user isset
function askSecurityQuestion($user)
{
	$user = getUserFromEmail($email);

	$randNum = mt_rand(1,3);
	$questionAndAnswer = array();

	switch ($randNum) 
	{
		case '1':
			$questionAndAnswer['question']= "What is your phone number?";
			$questionAndAnswer['answer'] = $user['Phone'];
			break;
		case '2':
			$questionAndAnswer['question']= "What is your date of birth?";
			$questionAndAnswer['answer']= $user['DOB'];
			break;
		case '3':
			$questionAndAnswer['question']= "What is your zip code?";
			$questionAndAnswer['answer']= $user['Zip'];
		default:
			//
			break;
	}

	return $questionAndAnswer;
}

function verifyAnswer($userAnswer, $correctAnswer)
{
	//function will check the answer provided to the security question to see if
	//it matches what is in the user's profile
	//will need hidden input of the answer from $questionAndAnswer array on submit
	if ($userAnswer === $correctAnswer)
	{
		// answer is correct for user
		return true;
	}
	else
	{
		// answer is incorrect
		return false;
	}
}