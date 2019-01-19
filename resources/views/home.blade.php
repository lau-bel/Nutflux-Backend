@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    USER {{ Auth::user()->subuser[0]->user_id}}<a href="#"> SUBUSER {{ Auth::user()->subuser[0]->id}}</a> // {{ Auth::user()->subuser[1]->updated_at}}
                    <hr>
                    USER {{ Auth::user()->subuser[1]->user_id}}<a href="#"> SUBUSER {{ Auth::user()->subuser[1]->id}}</a> // {{ Auth::user()->subuser[1]->updated_at}}
                    <hr>
                    USER {{ Auth::user()->subuser[2]->user_id}}<a href="#"> SUBUSER {{ Auth::user()->subuser[2]->id}}</a> // {{ Auth::user()->subuser[2]->updated_at}}
                    <hr>
                    
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
