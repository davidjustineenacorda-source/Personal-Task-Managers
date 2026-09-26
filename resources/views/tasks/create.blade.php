<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
</head>

<body>

<h1>Add New Task</h1>

<form action="{{ route('tasks.store') }}" method="POST">

    @csrf

    <label>Task Title</label><br>
    <input type="text" name="title" required>

    <br><br>

    <label>Description</label><br>
    <textarea name="description"></textarea>

    <br><br>

    <button type="submit">
        Add Task
    </button>

    <a href="{{ route('tasks.index') }}">
        Cancel
    </a>

</form>

</body>
</html>