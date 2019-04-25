<div class="container">
        
        
        @if (session('seuccs'))
        <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>done</strong> {{ session('seuccs')}} <a href="#" class="alert-link"></a>
        </div>
        @endif
        
        @if (count($errors) > 0)
        @foreach ($errors->all() as $error )
        <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        
        @endif
       
        @if (session('eeror'))
        <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong></strong> {{ session('eeror')}} <a href="#" class="alert-link"></a>
        </div>
        @endif
        
        
        
        
        @if (session('warning'))
        <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong></strong> {{ session('warning')}} <a href="#" class="alert-link"></a>
        </div>
        @endif


 
</div>
