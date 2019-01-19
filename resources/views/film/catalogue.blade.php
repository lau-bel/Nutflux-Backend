@extends ('layout.app')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
@section('content')
<div class="container">
<p>Display film index</p>


<div class="outer-container home-page">
        <div class="container-fluid">
                
            <span class="row">
                    @foreach($films as $film)
                <div class="col-12 col-md-6 col-lg-3 no-padding">
                    <div class="portfolio-content">
                        <figure>
                            <img src="{{ $film->poster }}" style="width: 80%; height: 40%; padding: 10px;" alt="">
                            
                        </figure>
    
                        <div class="entry-content flex flex-column align-items-center justify-content-center">
                            <h3><a href="#">{{ $film->genre }}</a></h3>
    
                            <ul class="flex flex-wrap justify-content-center">
                                <li><a href="#">{{ $film->type }}</a></li>
                                <li><a href="{{ $film->trailer }}">Trailer</a></li>
                            </ul>
                        </div><!-- .entry-content -->
                    </div><!-- .portfolio-content -->
                </div><!-- .col -->
                @endforeach

    <div class="col-12 col-md-6 col-lg-3 no-padding">
        <div style='width: 80%; height: 20%; padding: 10px; border: 1px solid red;'></div>

    </div><!-- .col -->
    <div class="col-12 col-md-6 col-lg-3 no-padding">
         <div style='width: 80%; height: 20%; padding: 10px; border: 1px solid blue;'></div>
    
    </div><!-- .col -->               
    <div class="col-12 col-md-6 col-lg-3 no-padding">
        <div style='width: 80%; height: 20%; padding: 10px; border: 1px solid yellow;'></div>
        
    </div><!-- .col -->
    <div class="col-12 col-md-6 col-lg-3 no-padding">
            <div style='width: 80%; height: 20%; padding: 10px; border: 1px solid green;'></div>
            
    </div><!-- .col -->          
@endsection
