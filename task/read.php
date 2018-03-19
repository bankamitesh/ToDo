<?php
require_once 'config.php';
header('Content-Type: application/json');
$sth = mysqli_query($con,"SELECT * from task");
$response = array();
while($r = mysqli_fetch_assoc($sth)) {
    $response[] = $r;
}
echo json_encode($response);
return json_encode($response);
?>