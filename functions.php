<?php
//  returns a salt value to add to strings
function getSalt() { return 'Zk1*<@]]$4bU;5=i9#(pqCL/&$paoKj.Q7g-(D==Z)C[?Ih(Y]%}0xF/u Dc`SlU'; }

function sanitizeString($_db, $str)
{
    $str = strip_tags($str);
    $str = htmlentities($str);
    $str = stripslashes($str);
    return mysqli_real_escape_string($_db, $str);
}


function SavePostToDB($db, $name, $title, $text, $time, $file_name, $filter)
{
	/* Prepared statement, stage 1: prepare query */
	if (!($stmt = $db->prepare("INSERT INTO POSTCARDS(USER_USERNAME, STATUS_TEXT, STATUS_TITLE, IMAGE_NAME, FILTER, TIME_STAMP) VALUES (?, ?,?,?,?,?)")))
	{
		echo "Prepare failed: (" . $_db->errno . ") " . $_db->error;
	}

	/* Prepared statement, stage 2: bind parameters*/
	if (!$stmt->bind_param('ssssss', $_SESSION['username'], $text, $title, $file_name, $filter, $time))
	{
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	/* Prepared statement, stage 3: execute*/
	if (!$stmt->execute())
	{
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}
}

function getPostcards($_db)
{
    $query = "SELECT USER_USERNAME, STATUS_TITLE, STATUS_TEXT, TIME_STAMP, IMAGE_NAME, FILTER FROM POSTCARDS ORDER BY TIME_STAMP DESC";
    
    if(!$result = $_db->query($query))
    {
        die('There was an error running the query [' . $_db->error . ']');
    }
    
    $output = '';
    while($row = $result->fetch_assoc())
    {
        $output = $output . '<div class="panel panel-default"><div class="panel-heading">"' . $row['STATUS_TITLE']
        . '" posted by ' . $row['USER_USERNAME'] 
        . '</div><div class="body"><img class="' . $row['FILTER'] . '" src="' . dirname($_SERVER['PHP_SELF']) . '/users/' . $row['IMAGE_NAME'] . '" width="300px">' . $row['STATUS_TEXT'] . '</div></div>' ;
    }
    
    return $output;
}
?>