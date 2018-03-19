<?php
require_once 'config.php';
header('Content-Type: application/json');
$response="Error";
if(isset($_POST["taskId"]))
{
    $taskId=$_POST["taskId"];
    $result=mysqli_query($con,"update task set isDone='yes' where taskId='$taskId'");
    $response="Task edited";
    echo json_encode($response);
    return json_encode($response);
}
else if(isset($_GET["taskId"]))
{
    $taskId=$_GET["taskId"];
    $result=mysqli_query($con,"update task set isDone='yes' where taskId='$taskId'");
    $response="Task edited";
    echo json_encode($response);
    return json_encode($response);
}
else
{
    echo json_encode($response);
    return json_encode($response);
}
?>