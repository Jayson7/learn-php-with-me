<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        margin: 20px;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        padding: 10px;
        margin: 5px;
        background: #f4f4f4;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .completed {
        text-decoration: line-through;
        color: gray;
    }
    </style>
</head>

<body>

    <h1>To-Do List</h1>

    <!-- Add Task Form -->
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="New Task" required>
        <button type="submit">Add</button>
    </form>

    <!-- Task List -->
    <ul>
        @foreach ($tasks as $task)
        <li x-data="{ completed: {{ $task->completed ? 'true' : 'false' }} }">
            <span :class="{ 'completed': completed }">{{ $task->title }}</span>

            <form action="{{ route('tasks.update', $task) }}" method="POST" style="display: inline;">
                @csrf @method('PATCH')
                <button type="submit" @click="completed = !completed">✔</button>
            </form>

            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display: inline;">
                @csrf @method('DELETE')
                <button type="submit">❌</button>
            </form>
        </li>
        @endforeach
    </ul>

</body>

</html>