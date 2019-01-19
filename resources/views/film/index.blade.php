@extends ('layout.app')

@section('content')
<div class="container">
<p>Display film index</p>

<table class="table">
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Genre</th>
        <th>Type</th>
        <th>Poster</th>
        <th>Trailer</th>
        <th>Modify</th>
        <th></th>
    </tr>
    <tbody>
        @foreach($films as $film)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $film->title }}</td>
                <td>{{ $film->genre }}</td>
                <td>{{ $film->type }}</td>
                <td><img src="{{ $film->poster }}" style="width:150px; height:200px;"/></td>
                <td><iframe width="350" height="200" src="{{ $film->trailer }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </td>
                    <td>  
                    <a href="{{route('film.edit',$film->id)}}">Edit</a>/
                    {!!Form::open(['action'=>['FilmController@destroy', $film->id], 'method' => 'DELETE'])!!}
                    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                    {!!Form::close()!!}
           
               
                    <a href="{{route('film.show',$film->id)}}">View</a>
                </td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection