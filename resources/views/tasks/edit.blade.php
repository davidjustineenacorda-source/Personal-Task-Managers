<!DOCTYPE html>
<html>
<head>
    <title>Update Task</title>
</head>

<body>

<h1>Update Task</h1>

<form action="{{ route('tasks.update', $task->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Task Title</label><br>

    <input
        type="text"
        name="title"
        value="{{ $task->title }}"
        required
    >

    <br><br>

    <label>Description</label><br>

    <textarea name="description">{{ $task->description }}</textarea>

    <br><br>

    <button type="submit">
        Update Task
    </button>

    <a href="{{ route('tasks.index') }}">
        Cancel
    </a>

</form>

</body>
</html>
