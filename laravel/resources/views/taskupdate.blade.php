<!DOCTYPE html>
<html>

<head>
    <title>Adding a task</title>
</head>

<body>
    <!-- Form to insert new task into database -->
    <form action="update/<?php echo $tasks[0]->TaskId; ?>" method="post">
        @csrf
        <label for="TaskDesc">Task Description:</label><br>
        <input type="text" id="TaskDesc" name="TaskDesc" value="<?php echo $tasks[0]->TaskDesc; ?>"/><br>

        <label for="PrioId">Priority</label><br>
        <select name="PrioId" value="<?php echo $tasks[0]->PrioId; ?>">
            <option value="1">Low</option>
            <option value="2">Medium</option>
            <option value="3">High</option>
            <option value="4">Critical</option>
        </select><br>

        <label for="DueDate">Due Date:</label><br>
        <input type="date" id="DueDate" name="DueDate" value="<?php echo $tasks[0]->DueDate; ?>"/><br>

        <label for="StatusId">Status</label><br>
        <select name="StatusId" value="<?php echo $tasks[0]->StatusId; ?>">
            <option value="1">Pending</option>
            <option value="2">Progress</option>
            <option value="3">Complete</option>
        </select><br>

        <input type="submit" value="Update Task"/>

    </form>
</body>

</html>
