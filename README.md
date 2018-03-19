# ToDo

PHP ToDo application.

3 APIs are there :- 

Add task - /task/add.php 

It takes taskName as GET or POST method, adds the task with the given taskName to the database, sets isDone to default No, sets createdAt to current time and returns $response as JSON format

Edit task - /task/edit.php 

It takes taskId as GET or POST method, edits the task with the given taskId and updates isDone to Yes and doneAt to current time and returns $response as JSON format

Read task - /task/read.php 

Returns $response in JSON format which has all the task present in the data base.

Contact - Mitesh Banka, banka.mitesh@gmail.com
