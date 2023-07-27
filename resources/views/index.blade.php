<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
<!-- import jquery -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>ToDoList</title>
</head>
<body>
    <div class="container">
                         <h2 class="card-title">ToDoList  <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-bs-whatever="@mdo" class="btn btn-primary btn-circle btn-sm" style="float:right"> <i class="fa fa-plus"></i></button></h2>
                                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBodalLabel"  aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">New Task</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="{{ route('new') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                         
                                                <div class="mb-3">
                                                  
                                                  <label for="recipient-name" class="col-form-label">Task Title:</label>
                                                  @error('titre')
                                                  <p> {{$message }}</p>
                                                  @enderror  
                                                  <input type="text" class="form-control" id="titre" name="titre" required>
 
                                                </div>
                                            
                                           
                                                <div class="mb-3">
                                                  <label for="recipient-name" class="col-form-label">Duration:</label>
                                                @error('duration')
                                                <p> {{$message }}</p>
                                                @enderror
                                                  <select name="duration" id="duration-select" class="form-control" required>
                                                    <option value="" >--Please choose the duration--</option>
                                                    <option value="1 Hour">1 Hour</option>
                                                    <option value="2 Hours">2 Hours</option>
                                                    <option value="3 Hours">3 Hours</option>
                                                    <option value="4 Hours">4 Hours</option>
                                                    <option value="5 Hours">5 Hours</option>
                                                    <option value="6 Hours">6 Hours</option>
                                                </select>

                                                </div>
                                                <div class="mb-3">
                                                @error('description')
                                                  <p> {{$message }}</p>
                                                @enderror
                                                  <label for="message-text" class="col-form-label">Description:</label>
                                                  <textarea class="form-control" id="message-text" name="description" required ></textarea>

                                                </div>
                                           
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary" id="btn">Save Task</button> 
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </form>
                              
                                      <div class="row" style="margin:auto; padding:auto;">
                                      @foreach($tasks as $task) 
                                      <div class="card col-lg-4 mb-4" style="height:14rem;" id="big-card">
                                            <div class="card-body" >    
                                        <div class="card" style="width: 4rem; height:4rem;" id="state-card">
                                            <div class="card-body">
                                            </div>
                                        </div>                                  
                                                <h5 class="card-title">{{ $task['titre']}} </h5>   
                                                <h6 class="card-subtitle mb-2 text-muted">{{ $task['duration']}}</h6>
                                                <p class="card-text">{{  $task['description']}}</p>
                                                   <form action="{{route('tasks',$task->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')     
                                                  <div class="footer-card ">
                                                     <button type="submit" data-id="{{ $task->id }}" class="btn btn-danger" style="height:38px; width:38px;"> <i class="fa fa-trash"></i></button>
                                                     <button type="button" class="btn btn-info rounded-circle" style="margin-left:5px;background-color:green;" ></button>
                                                     <button type="button" class="btn btn-info rounded-circle" style="background-color:orange" ></button>
                                                    </div>                                   

                                                   </form>                                            
                                            </div>
                                               
                                      </div>
                                      @endforeach
                              </div>           
                              
                                                 
                      @if(session('status'))
                <div class="alert alert-danger"> {{session('status')}}</div>
                @endif
                    @if(session('state'))
          <div class="alert alert-success"> {{session('state')}}</div>
          @endif

  
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>  
</body>
</html>

