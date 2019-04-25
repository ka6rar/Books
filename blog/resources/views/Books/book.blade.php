@extends('layouts.app')

@section('content')

<div class="container">
  
      
 
   
        
   
  <div class="row g">
      @foreach ($books as $book)
    
     @if ($book->name  == Auth()->user()->id)
   <div class="col-md-3">
  <div class="card ca" style="width: 18rem;">
  <img src="../../{{$book->picture}}" class="card-img-top por" alt="">
      <div class="card-body">
        <h5 class="card-title">Title: {{$book->title}}</h5>
      <p class="card-text">Text : {{$book->text}}</p>
      <p>Time:{{$book->created_at->diffForHumans()}}</p>
      <a href="{{ route('Books.edit', [ 'id' => $book->id]) }}" class="btn btn-outline-info" >Edit</a>
      <a href="{{ route('Books.destroy', [ 'id' => $book->id ]) }}" class="btn btn-outline-danger" >Delete</a>
      </div>
    </div>
    </div>

    @endempty
   
    @endforeach  
  </div>


 

      <form action="{{ route('Books.stsore')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}
                       <div class="form-group">
                           <label for="name">Title Books</label>
                            <input type="text" class="form-control" name="title"  >
                         </div>

                         <div class="form-group">
                                <label for="name">Text Book</label>
                                <input type="text" class="form-control" name="text" maxlength="100"  >
                          </div>
                          <div class="form-group">
                                <label for="avatar">picture</label>
                                <input type="file" class="form-control-file" name="picture" >
                            </div>
                    <button type="submit" class="btn btn-outline-success">Add Book</button>             
                         </form>
            </div>
        </div>
    </div>
</div>



@endsection
