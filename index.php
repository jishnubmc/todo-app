<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo-app</title>
</head>

<body style="display: flex; align-items:center; justify-content:center; flex-direction:column;">
    <h1 style="display: flex; ">Todo app</h1>
    <div style="flex-direction:row;">
        <form action="create-todo.php" method="POST">
            <input label="enter-todo-item" type = "text" name="task"/>
            <button >Add</button>
        </form>
    </div>
</body>

</html>