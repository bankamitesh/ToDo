<?php
require_once 'config.php';
header('Content-Type: application/json');
$response="Error";
if(isset($_POST["taskName"]))
{
    $taskName=$_POST["taskName"];
    $result=mysqli_query($con,"insert into task (taskName) values('$taskName')");
    $response="Task added";
    echo json_encode($response);
    return json_encode($response);
    
}
else if(isset($_GET["taskName"]))
{
    $taskName=$_GET["taskName"];
    $result=mysqli_query($con,"insert into task (taskName) values('$taskName')");
    $response="Task added";
    echo json_encode($response);
    return json_encode($response);
}
else
{
    echo json_encode($response);
    return json_encode($response);
}
?>