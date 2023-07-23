<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>ToDoList</title>
</head>
<body>
    <div class="container">
            <div class="card">
                     <div class="card-body">
                                 <h2 class="card-title">ToDoList </h2>
                                 <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" class="btn btn-primary btn-circle btn-sm" style="float:right"> <i class="fa fa-plus"></i></button>
                           <div class="container">
                           
                         
                                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                  <input type="text" class="form-control" id="recipient-name" name="titre">
                                                </div>
                                                <div class="mb-3">
                                                  <label for="recipient-name" class="col-form-label">Duration:</label>
                                                  <select name="duration" id="duration-select" class="form-control">
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
                                   
                                                  <label for="message-text" class="col-form-label">Description:</label>
                                                  <textarea class="form-control" id="message-text" name="description"></textarea>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                              <button type="submit" class="btn btn-primary">Save Task</button> 
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </form>
                                
                                      <div class="row" >
                                      <div class="card col-sm-3" style="height:13rem; margin:10px; background-image:url({{url('/assets/')}})" id="yoro" >
                                            <div class="card-body" >
                                                <h5 class="card-title">Daily Task TRANS MFT </h5>   
                                                <h6 class="card-subtitle mb-2 text-muted">2 Hours</h6>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <button type="submit" class="btn btn-danger" style="height:38px"> <i class="fa fa-trash"></i></button>
                                                <div class="form-check form-switch" style="float:right; width:50px;">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" style="width:50px; height:25px">
                                                  </div>
                                            
                                            </div>
                                      </div>

                              </div>           
                       </div>          
                                               
             </div>  
       
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>  
</body>
</html>

