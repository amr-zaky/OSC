
@extends('layouts.app')


@section('content')

    <div class="jumbotron">
        <div class="row">
            <div class="col-2">
                <img src={{$var->image}} alt="Image" width="500" height="600">
            </div>

            <div class="col-10">
                <h2 class="text-center"> Welcome to {{$var->University_name}} </h2>
                <p class="text-center">You'll find all the materials you'll need for your studies here </p>
            </div>
        </div>
    </div>

    <label class="custom-file">
        <input type="file" id="file" class="custom-file-input">
        <span class="custom-file-control"></span>
    </label>

    
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Material</h5>
                        <a href={{$var->path}} class="btn btn-primary" style="margin:auto;display:block">Download</a>
                        <br>
                        <a href="http://localhost/OSC/public/university" class="btn btn-primary" style="margin:auto;display:block">Back</a>
                    </div>
                </div>
            </div>  
        </div>
    </div>




@endsection