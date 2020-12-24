<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>
<body>
    <h1 style="text-align: center;padding-bottom: 35px;"><u>To Do</u> </h1>
    
  {{--   <form action="task" method="post">
        @csrf
        <input type="text" name="task" id="" placeholder="Enter Task"><br><br>
        <input type="date" name="due_date" id="" placeholder="Enter due date"><br><br>
        <button type="submit">Add Task</button>
    </form> --}}

 {{--    <form action="/update" method="POST" style="padding-left:50px; padding-right: 50px;">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id" value="{{$task['id']}}">
          <label for="exampleInputEmail1">Task Name</label>
          <input type="text"  name="task" value="{{$task['task_name']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Task">
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Due Date</label>
          <input type="date" name="due_date" value="{{$task['Due_data']}}" class="form-control" id="exampleInputPassword1" placeholder="Due Date">
        </div>
        <div style="text-align: center;">
          <button type="submit" class="btn btn-primary">Edit Task</button>
        </div>
      </form><br>
 --}}
      <div style="padding-left: 400px;">
        <div class="card" style="width: 500px;padding-left: 50px">
                <div class="card-body">
                    <h1 style="text-align: center;">Edit Task</h1>
                    <form action="/update" method="POST" style="padding-left:50px; padding-right: 50px;">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{$task['id']}}">
                        <label for="exampleInputEmail1">Task Name</label>
                        <input type="text"  name="task" value="{{$task['task_name']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Task">
                        
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Due Date</label>
                        <input type="date" name="due_date" value="{{$task['Due_data']}}" class="form-control" id="exampleInputPassword1" placeholder="Due Date">
                        </div>
                        <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary">Edit Task</button>
                        </div>
                    </form>
                </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>