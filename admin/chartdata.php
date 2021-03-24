<?php
header('Content-Type: application/json');

require_once('dbcon.php');

$sqlQuery = "SELECT votes.vote_id as id, candidate.firstname as firstname, candidate.lastname as lastname
FROM votes
INNER JOIN candidate ON votes.candidate_id=candidate.candidate_id;";
$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>