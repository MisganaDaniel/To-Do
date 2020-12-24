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
    <h1 style="text-align: center; padding-bottom: 35px; padding-top:25px;" class="display-2"><u>To Do</u> </h1>
  
  {{--   <form action="task" method="post">
        @csrf
        <input type="text" name="task" id="" placeholder="Enter Task"><br><br>
        <input type="date" name="due_date" id="" placeholder="Enter due date"><br><br>
        <button type="submit">Add Task</button>
    </form> --}}
{{-- 
    <form action="task" method="post" style="padding-left:50px; padding-right: 50px;">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Task Name</label>
          <input type="text"  name="task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Task">
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Due Date</label>
          <input type="date" name="due_date" class="form-control" id="exampleInputPassword1" placeholder="Due Date">
        </div>
        <div style="text-align: center;">
          <button type="submit" class="btn btn-primary">Add Task</button>
        </div>
      </form><br>

      <h1 style="text-align: center;">Tasks</h1>
      <form action="" style="padding-left:50px; padding-right: 50px;">
      <table cellspacing="10" cellpadding="10"  class="table table-hover">
          <tr>
              <td><b> ID</td>
              <td><b> Name</td>
              <td><b>Due Date</td>
              <td><b></td>
              <td><b></td>
          </tr>
          @foreach($tasks as $task)
          <tr>
              <td>{{$task['id']}}</td>
              <td>{{$task['task_name']}}</td>
              <td>{{$task['Due_data']}}</td>
              <td> 
                <button type="delete" class="btn btn-success"><a href={{"delete/".$task['id']}} style="color: white; ">Done</a></button>
                
              </td>
              <td>
                <button type="update" class="btn btn-success"><a href={{"edit/".$task['id']}} style="color: white; ">Edit</a></button>
              </td>
            
          </tr>
          @endforeach
      </table>
    </form>
       --}}
    <div class="row" style="padding-left:50px; padding-right:50px;">
      <div class="col-sm-4" >
        <div class="card" style="background-color: #FAFAFA;">
          <div class="card-body">
            <h1 style="text-align: center;padding-bottom: 10px;">Add a New Task</h1>
            <form action="task" method="post" style="padding-left:50px; padding-right: 50px;">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Task Name</label>
                <input type="text"  name="task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Task">
                
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Due Date</label>
                <input type="date" name="due_date" class="form-control" id="exampleInputPassword1" placeholder="Due Date">
              </div>
              <div style="text-align: center;">
                <button type="submit" class="btn btn-primary">Add Task</button>
              </div>
            </form><br>

          </div>
        </div>
      </div>
      <div class="col-sm-7">
        <div class="card" style="background-color: #FAFAFA;">
          <div class="card-body">
                     
                <h1 style="text-align: center;padding-bottom: 10px;">Tasks</h1>
                <form action="" style="padding-left:50px; padding-right: 50px;">
                <table cellspacing="10" cellpadding="10" class="table table-hover">
                    <tr>
                        <td><b> ID</td>
                        <td><b> Name</td>
                        <td><b>Due Date</td>
                          <td><b>Created@</td>
                          <td><b>Updated@</td>
                        
                        <td><b></td>
                    </tr>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{$task['id']}}</td>
                        <td>{{$task['task_name']}}</td>
                        <td>{{$task['Due_data']}}</td>
                        <td>{{$task['created_at']}}</td>
                        <td>{{$task['updated_at']}}</td>
                       
                        <td> 
                          <button type="delete" class="btn btn-success"><a href={{"delete/".$task['id']}} style="color: white; ">Delete</a></button>
                          
                        </td>
                        <td>
                          <button type="update" class="btn btn-success" style="margin-bottom: 10px;"><a href={{"edit/".$task['id']}} style="color: white; ">Edit</a></button><br>
                          
                        </td>
                        <td>
                          <button type="update" class="btn btn-success"><a href={{"done/".$task['id']}} style="color: white; ">Done</a></button>
                        </td>
                    </tr>
                    @endforeach
                </table>
              </form>

            
          </div>
        </div>
      </div>
        <div class="row" style="padding-left:400px;padding-bottom: 25px;">
          <div class="card" style="background-color: #FAFAFA;padding-top: 10px;margin-top: 20px;padding-left: ">
            <div class="card-body">
              <h1 style="text-align: center;padding-bottom: 10px;">Completed Tasks</h1>
              <form action="" style="padding-left:50px; padding-right: 50px;">
                <table cellspacing="10" cellpadding="10"  class="table table-hover"">
                    <tr>
                        <td><b> ID</td>
                        <td><b> Name</td>
                        <td><b>Due Date</td>
                        <td><b></td>
                        <td><b></td>
                    </tr>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{$task['id']}} </td>
                        <td><strike>{{$task['task_name']}}</strike></td>
                        <td>{{$task['Due_data']}}</td>
                       
                      
                    </tr>
                    @endforeach
                </table>
              </form><br>

            </div>
          </div>
      </div>
    </div>

    
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>