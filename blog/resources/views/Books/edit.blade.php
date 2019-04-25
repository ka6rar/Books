@extends('layouts.app')


@section('content')

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Update Book</div>
            <div class="card-body">

                      <form action="{{ route('Books.update', ['id' => $books->id]) }}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field()}}


                        <div class="form-group">
                          <label for="name">Title Book</label>
                        <input type="text" class="form-control" name="title" value="{{$books->title}}" >
                         </div>

                         <div class="form-group">
                                <label for="name">Text Book</label>
                                <input type="text" class="form-control" name="text"  value="{{$books->text}} " maxlength="100">
                               </div>
            



                              <div class="form-group">
                                <label for="avatar">picture</label>
                                <input  type="file" class="form-control-file" name="picture" role="button" >
                              </div>



                        <button type="submit" class="btn btn-outline-success">Update</button>
                      </form>

            </div>
        </div>
    </div>
</div>
</div>


@endsection
