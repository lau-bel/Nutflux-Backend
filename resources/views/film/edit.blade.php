@extends ('layout.app')

@section('content')
<div class="container">
    <div class="title m-b-md">
        <h3>Update film</h3>
    </div>
    <div>
    
        {!! Form::model($film,['route' => ['film.update', $film->id]]) !!}
        {{method_field('PUT')}}
        <div class="form-group">        
            {!! Form::text('title',null,['class' => 'form-control','place-holder' => 'Enter Film Title'])!!}
        </div>
        <div class="form-group">        
            {!! Form::text('genre',null,['class' => 'form-control','place-holder' => 'Enter Film Genre'])!!}
        </div>                       
                <br>
                <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update">
                </div>
        {{ Form::close() }}
    </div>
</div>

@endsection