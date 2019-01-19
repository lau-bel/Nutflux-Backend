@extends ('layout.app')

@section('content')
<div class="container">
    <div class="title m-b-md">
        <h3>Add film form</h3>
    </div>
    <div>
    
        {!! Form::open(['method' =>'POST','route' => 'film.store']) !!}
        <div class="for-group">    <br>     
            {!! Form::text('title',null,['class' => 'form-control','place-holder' => 'Enter Film Title'])!!}
        </div> <br>
        <div class="for-group">        
            {!! Form::text('genre',null,['class' => 'form-control','place-holder' => 'Enter Film Genre'])!!}
        </div>  <br>  
        <div class="for-group">        
            {!! Form::text('type',null,['class' => 'form-control','place-holder' => 'Enter Film Genre'])!!}
        </div> <br>
        <div class="for-group">        
            {!! Form::text('poster',null,['class' => 'form-control','place-holder' => 'Enter Film Poster URL'])!!}
        </div>  <br>
        <div class="for-group">        
            {!! Form::text('trailer',null,['class' => 'form-control','place-holder' => 'Enter Film Poster URL'])!!}
        
        </div>

                   
                <br>
                <div class="for-group">
                <input type="submit" class="btn btn-primary" value="Add Film">
                </div>
        {{ Form::close() }}
    </div>
</div>

@endsection