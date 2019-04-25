@extends('layouts.app')

@section('content')

<div class="container">
        <h5 class="section-title h1">Edit BOOK</h5>

      <form action="{{ route('User.update', ['id' => $book->id]) }}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field()}}
                       <div class="form-group">
                           <label for="name">Title Books</label>
                       <input type="text" class="form-control" name="title" value="{{$book->title}}" >
                         </div>

                         <div class="form-group">
                                <label for="name">Text Book</label>
                                <input type="text" class="form-control" name="text" maxlength="100" value="{{$book->text}}"  >
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
