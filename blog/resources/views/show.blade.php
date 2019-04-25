<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/front.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark ">
                <a class="navbar-brand" href="">Books</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="../../uplode/book/rr.jpg" alt="First slide">
                      </div>
                    </div>
                  </div>
                  <div class="container">

                      <div class="row">
  
                            <div class="col-sm-4">
                            <div class="box">
                                  </div>
                                     <div class="card">
                                       <div class="imgBx">
                                       <img src="../{{$show->picture}}" alt="images">
                                       </div>
                                       <div class="details">
                                       <p>
                                          <h2>{{$show->title}}<br><span>
                                          </span></h2>
                                        </p>
                                        </div>
                                     </div>
                                </div>
                                <div class="col-sm-4 d">
                                  <div class="bor">
                                      <h5 class="show"> <strong> Text</strong> : {{$show->text}}<br><span>
                                          <br> 
                                          <br>
                                          @foreach ($users as $user)
                                          @if ($user->id == $show->name)
                                          <br><span> By : {{$user->name}}</span>
                                          <br><span> Email : {{$user->email}}</span>
                                          @endif
                                         @endforeach 
                                         <br> 
                                         <br>
                                         <br> 
                                         <br>


                                         <span> Time : {{$show->created_at}}</span>
                                    
                                        
                                  </div>
                                </div>
                          </div>     
                        </div>
                 
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>