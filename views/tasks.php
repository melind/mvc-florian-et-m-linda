<form  action="http://localhost/task/index.php/tasks" method="post">
<br/>Create Task </br>  <input type="text" name="name" >
</form>

<?php

foreach ($tasks as $task) {
    echo '- '.$task["name"].'<a href="http://localhost/task/index.php/tasks&id='.$task['id'].'"><button type="button" name="button">x</button></a> <br />';

}

?>
