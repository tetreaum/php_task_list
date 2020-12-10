<!DOCTYPE html>
<html>

<head>
    <title>Adding a task</title>
</head>

<body>
    <form action="submit" method="post">
        @csrf
        <label for="TaskDesc">Task Description:</label><br>
        <input type="text" id="TaskDesc" name="TaskDesc"/><br>

        <label for="PrioId">Priority</label><br>
        <select name="PrioId">
            <option value="1">Low</option>
            <option value="2">Medium</option>
            <option value="3">High</option>
            <option value="4">Critical</option>
        </select><br>

        <label for="NameAssigned">Assigned To:</label><br>
        <input type="text" id="NameAssigned" name="NameAssigned"/><br>

        <label for="DueDate">Due Date:</label><br>
        <input type="date" id="DueDate" name="DueDate"/><br>

        <label for="StatusId">Status</label><br>
        <select name="StatusId">
            <option value="1">Pending</option>
            <option value="2">Progress</option>
            <option value="3">Complete</option>
        </select><br>

        <input type="submit" value="Add Task"/>

    </form>
</body>

</html>
