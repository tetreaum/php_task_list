<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Task List</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito';
        }

        th,
        td {
            border-style: solid;
            border-color: black;
            border-width: 1px;
            text-align: center;
        }
    </style>
</head>

<body class="antialiased">
    <div>
        Task List
        <br></br>
        <div>
            <a href="/insert">Add Task</a>
        </div>
        <br></br>

        <div>
            <table>
                <tr>
                    <th>Task ID</th>
                    <th>Update Time</th>
                    <th>Description</th>
                    <th>Priority</th>
                    <th>Person Assigned</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->TaskId }}</td>
                    <td>{{ $task->UpdateTime }}</td>
                    <td>{{ $task->TaskDesc }}</td>
                    <td>{{ $task->PrioType }}</td>
                    <td>{{ $task->NameAssigned }}</td>
                    <td>{{ $task->DueDate }}</td>
                    <td>{{ $task->StatusType }}</td>
                    <td><a href='edit/{{ $task->TaskId }}'>Edit</a></td>
                    <td><a href='delete/{{ $task->TaskId }}'>Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>
