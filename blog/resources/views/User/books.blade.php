@extends('layouts.app')

@section('content')
<body class="a">
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">ALL Books</h5>
        <div class="row">
                @foreach ($books as $book)   
                  <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body text-center">
                                
                                <p><img class="img-circl" src="../../{{$book->picture}}" alt="" style="width:150px ;"></p>
                                    <h4 class="card-title">{{$book->title}}</h4>
                                    <p class="card-text">{{$book->text}}</p>
                                <a class="btn btn-outline-danger" href="{{route('User.user.destroy' , ['id' => $book->id])}}" >Delete</a>
                                    <a class="btn btn-outline-info" href="{{route('User.edit' , ['id' => $book->id])}}" >Edit</a>
                                </div>
                            </div>        
                      </div>
                 @endforeach
          </div>
       </div>
</section>
</body>
@endsection
