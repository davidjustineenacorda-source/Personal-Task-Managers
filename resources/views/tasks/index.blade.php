<!DOCTYPE html>
<html>
<head>
    <title>Personal Task Managers</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        .add-btn {
            display: inline-block;
            padding: 10px 15px;
            background: #2196f3;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .task {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
        }

        .task h3 {
            margin-top: 0;
        }

        .edit-btn,
        .delete-btn {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            color: white;
        }

        .edit-btn {
            background: #ff9800;
        }

        .delete-btn {
            background: #f44336;
        }

        .success {
            background: #d4edda;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Personal Task Managers</h1>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('tasks.create') }}" class="add-btn">
        + Add Task
    </a>

    @forelse($tasks as $task)

        <div class="task">

            <h3>{{ $task->title }}</h3>

            <p>{{ $task->description }}</p>

            <!-- UPDATE -->
            <a href="{{ route('tasks.edit', $task->id) }}"
               class="edit-btn">
                Update Task
            </a>

            <!-- DELETE -->
            <form action="{{ route('tasks.destroy', $task->id) }}"
                  method="POST"
                  style="display:inline;"
                  onsubmit="return confirm('Are you sure you want to delete this task?');">

                @csrf
                @method('DELETE')

                <button type="submit" class="delete-btn">
                    Delete
                </button>

            </form>

        </div>

    @empty

        <p>No tasks available.</p>

    @endforelse

</div>

</body>
</html>