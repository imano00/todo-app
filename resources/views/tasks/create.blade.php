<html>

    <head>

        <title>Todo App</title>
            
        <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />

    </head>

    <body>

        <h1>New Task</h1>

        <form method="POST" action="/task">

            <div class="form-group">

                <label for="description">Task Description</label>
                <input class="form-control" name="description" />

            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Create Task</button>

            <div>


        </form>

    </body>

</html>