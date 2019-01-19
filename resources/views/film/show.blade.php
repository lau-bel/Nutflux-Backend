@extends ('layout.app')

@section('content')
<div class="container">
    <h2>{{$film->title}}</h2>
    <p>{{$film->genre}}</p>
</div>

@endsection